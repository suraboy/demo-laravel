<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ReportAgent
 * @package App\Models
 */
class ReportAgent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'status';

    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var array
     */
    protected $fillable = [
        'id',
        'name_th',
        'name_en',
        'value',
        'type'
    ];

    /**
     * @var array
     */
    protected $hidden = [];
}
