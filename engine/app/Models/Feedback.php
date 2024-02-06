<?php

namespace App\Models;
use App\Models\Survey;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = 'feedback';

    protected $fillable = [
        'survey_id',
        'sikap_keramahan',
        'pemahaman_kebutuhan',
        'kecepatan_pelayanan',
        'saran_kritik',
        'sumber_info',
        'penjelasan',
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
