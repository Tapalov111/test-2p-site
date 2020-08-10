<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageStatus extends Model
{
    protected $fillable = ['user_one','user_two','status'];
}
