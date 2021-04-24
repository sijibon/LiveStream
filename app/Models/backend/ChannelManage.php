<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChannelManage extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','logo','link','desc'
    ];
}
