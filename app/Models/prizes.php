<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prizes extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'prizeID';
    protected $table = 'prizes';
    use HasFactory;
}
