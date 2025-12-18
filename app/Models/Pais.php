<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Pais extends Model
{
    public $table="paises";
    /** @use HasFactory<\Database\Factories\ProductoFactory> */
    use HasFactory;
}
