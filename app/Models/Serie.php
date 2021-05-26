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

    public $dateFormat = 'h:m:s';

    protected $fillable = ['name', 'seasons', 'description'];
}
