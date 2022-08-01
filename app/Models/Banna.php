<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banna extends Model
{
    use HasFactory;
    protected $table='Bannas';
    protected $primarykey='id';
    protected $fillable=['name','roll'];
}
