<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Mavinoo\LaravelBatch\LaravelBatchFacade as Batch;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/seeds/User/Users.json');
        $data = json_decode($json);
        $values = [];

        foreach ($data as $index => $user) {
            $values[$index] = [
                0   => $user->id,
                1   => $user->username,
                2   => $user->password,
                3   => $user->name,
                4   => $user->last_name,
                5   => $user->email,
                6   => $user->mobile,
                7   => $user->status,
                8   => $user->type,
                9   => $user->user_group_id,
                10   => now(),
                11  => now(),
            ];
        }

        $model = new User();

        $columns = [
            "id",
            "username",
            "password",
            "name",
            "last_name",
            "email",
            "mobile",
            "status",
            "type",
            "user_group_id",
            "created_at",
            "updated_at",
        ];

        $batchSize = 500; // insert 500 (default), 100 minimum rows in one query

        $result = Batch::insert($model, $columns, $values, $batchSize);
    }
}
