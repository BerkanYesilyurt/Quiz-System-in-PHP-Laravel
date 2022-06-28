<?php
/**
 * Quiz-System-in-PHP-Laravel
 * Author: Berkan Yeşilyurt (https://github.com/BerkanYesilyurt)
 * Repository: https://github.com/BerkanYesilyurt/Quiz-System-in-PHP-Laravel
 */
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    protected $fillable = [
        'time',
        'questions',
        'name'
        ];
}
