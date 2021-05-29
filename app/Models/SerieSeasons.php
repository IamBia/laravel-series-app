<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SerieSeasons extends Model
{
    use HasFactory;

    protected $table = 'serie_seasons';

    protected $primaryKey = 'id';

    public function serie() {
        return $this->belongsTo(Serie::class);
    }
}
