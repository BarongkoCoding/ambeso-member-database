<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    // use HasFactory;
    protected $table = 'member';
    protected $fillable = ['nama', 'nohp', 'gender', 'pin', 'rfid', 'Foto', 'Uang'];
}
