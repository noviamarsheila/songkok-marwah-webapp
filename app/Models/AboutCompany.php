<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutCompany extends Model
{
    use HasFactory;
    protected $table = 'about_company';

    protected $fillable = ['name', 'deskripsi', 'akta_pendiri', 'alamat', 'workshop', 'no_hp', 'web', 'email', 'link_map'];
}
