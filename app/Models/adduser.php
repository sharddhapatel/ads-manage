<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adduser extends Model
{
    protected  $table="user";
    protected $fillable =['photo','role','name','email','password','loginpermission'];
}
