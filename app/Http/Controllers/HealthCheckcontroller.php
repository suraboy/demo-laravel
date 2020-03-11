<?php

namespace App\Http\Controllers;

/**
 * Class HealthCheckcontroller
 * @package App\Http\Controllers
 */
class HealthCheckcontroller extends Controller
{
    /**
     * @var array
     */
    protected $response = [];

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $renderStatus = true;
        foreach (config('config') as $key => $value) {
            $start_time = self::slog_time();
            $data = [];
            $needResult = isset($value['needResult']) ? $value['needResult'] : false;
            switch ($value['type']) {
                case 'api_curl_get':
                    $data = self::curlGetBasic($value['config'], $needResult);
                    $result = !empty($data['data']) ? 'success' : 'fail';
                break;
            }
            $time = number_format(self::elog_time($start_time), 4);
            $response[$key] = $value;
            $response[$key]['time'] = $time;
            $response[$key]['status'] = $result == 'success';
            $response[$key]['data'] = !empty($data['data']) ? $data['data'] : $data['error'];
            if ($response[$key]['status'] != 'success') {
                \Log::debug('healthcheck_response', $response[$key]);
                if (env('APP_ENV') != 'local') {
                    $this->push($response[$key]);
                }

                $renderStatus = false;
            }
        }
        return view('list')->with('config', $response)
            ->with('status', $renderStatus);
    }

    /**
     * @return mixed
     */
    private function slog_time()
    {
        $mtime = microtime();
        $mtime = explode(" ", $mtime);
        $mtime = $mtime[1] + $mtime[0];
        $starttime = $mtime;

        return $starttime;
    }

    /**
     * @param $config
     * @param $needResult
     * @param array $response
     * @return array
     */
    private function curlGetBasic($config, $needResult, $response = array())
    {
        $curl = curl_init($config['url']);

        if (is_resource($curl) === true) {
            curl_setopt($curl, CURLOPT_TIMEOUT, 15);
            curl_setopt($curl, CURLOPT_FAILONERROR, true);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_VERBOSE, true);
            if (isset($config['authorize'])) {
                curl_setopt($curl, CURLOPT_HTTPHEADER, [
                    "authorization: Basic " . base64_encode($config['authorize']),
                ]);
            }
            $result = curl_exec($curl);
            $error = curl_error($curl);
            $info = curl_getinfo($curl);
            $data = explode("\n", $result);
            $data = str_replace("=", " : ", $data);

            $response = [
                'data' => empty($result) ? [] : $data,
                'error' => $error
            ];

        }

        curl_close($curl);
        return $response;
    }

    /**
     * @param $starttime
     * @return mixed
     */
    private function elog_time($starttime)
    {
        $mtime = microtime();
        $mtime = explode(" ", $mtime);
        $mtime = $mtime[1] + $mtime[0];
        $endtime = $mtime;
        $totaltime = ($endtime - $starttime);

        return $totaltime;
    }
}
