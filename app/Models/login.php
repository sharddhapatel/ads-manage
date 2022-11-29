<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Notifications\Notifiable;
class login extends Model
{
    use HasFactory;
    use Notifiable;
    protected $table= "login";
    protected $fillable=['id','email','password','remember_token'];
}
