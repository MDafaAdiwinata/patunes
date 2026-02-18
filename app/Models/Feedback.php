<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "feedback";
    protected $primaryKey = 'id_feedback';
    protected $fillable = [
        'nama_lengkap',
        'email',
        'subjek',
        'pesan',
    ];
}
