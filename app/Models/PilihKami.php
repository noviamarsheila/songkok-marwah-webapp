<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihKami extends Model
{
    use HasFactory;
    protected $table = 'pilih_kami';

    protected $fillable = ['deskripsi'];
}
