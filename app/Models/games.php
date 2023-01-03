<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class games extends Model
{
    use HasFactory;
    protected $table = 'games';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
