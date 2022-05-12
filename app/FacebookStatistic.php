<?php

namespace App; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FacebookStatistic extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'link'
    ];

    protected $table = "facebook_statistic"; 
}
