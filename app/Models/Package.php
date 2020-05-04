<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Package
 * @package App\Models
 */
class Package extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'package';

    /**
     * @var string
     */
    protected $primaryKey = 'id';
    /**
     * @var array
     */
    protected $fillable = [

    ];

    /**
     * @var array
     */
    protected $hidden = [];
}
