<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    use HasFactory;

    protected $table = 'series';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['name', 'seasons', 'description'];

    public function serieSeasons() {
        return $this->hasMany(SerieSeasons::class);

    }
    public function country() {
        return $this->hasOne(Country::class);

    }
    public function states() {
        return $this->hasManyThrough(
            State::class, 
            Country::class, 
            'serie_id', //foreign key on serie seasons table
            'country_id'); //foreign key on states table
    }

    public function filming() {
        return $this->hasOneThrough(
            Filming::class,
            Country::class,
            'serie_id',
            'country_id',
            
        );
    }
}
