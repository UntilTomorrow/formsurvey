<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $table = 'survey';
    protected $fillable = ['id_leads', 'perusahaan', 'nama', 'telepon', 'url', 'kesan_pelayanan'];


}