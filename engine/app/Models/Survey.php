<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $table = 'survey';
    protected $fillable = ['id_leads', 'nama', 'telepon', 'perusahaan', 'url', 'kebutuhan','email','contactby'];

    public function feedback()
    {
        return $this->hasOne(Feedback::class);
    }

}