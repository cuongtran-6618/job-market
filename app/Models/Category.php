<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public const TABLE_NAME="categories";
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;
}
