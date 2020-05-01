<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'orderlist';

    protected $fillable = [
        'member_id',
        'member_name',
        'order_id',
        'status',
        'order_item',
        'order_list',
        'order_totalqty',
        'order_total',
        'order_totalall',
        'ship_name',
        'address',
        'amphour',
        'province',
        'postcode',
        'email',
        'order_ems',
        'order_note',
        'paid_channel',
        'invoice',
        'transaction_ref',
        'payment_channel',
        'shipping_channel',
        'payment_status',
        'channel_response_code',
        'channel_response_desc',
        'paid_agent',
        'payment_banks',
        'payment_scheme',
        'browser_info',
        'hash_value',
        'status_by_admin',
        'created',
        'approved_by',
        'cancel_by',
        'reason',
        'ipaddress_user',
        'updated_adm',
        'ipaddress_adm',
    ];
    protected $dates = [
        'request_timestamp',
        'transaction_datetime',
        'confirmorder_date',
        'approved_date',
        'cancel_date',
        'deleted_at',
    ];
    protected $hidden = array();

    public function statusName(){
        return $this->belongsTo(Status::class,'status');
    }
}
