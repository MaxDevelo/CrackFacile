<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class softwares extends Model
{
    use HasFactory;
    protected $table = 'softwares';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
