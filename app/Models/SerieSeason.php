<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SerieSeason extends Model
{
    use HasFactory;

    protected $table = 'series_seasons';

    protected $primaryKey = 'id';

    public function serie() {
        return $this->belongsTo(Serie::class);
    }
}
