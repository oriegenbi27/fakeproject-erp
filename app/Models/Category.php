<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    protected $table    = 'category';

    public $orderable   = [
        'id',
        'name',
        'slug',
    ];

    public $filterable  = [
        'id',
        'name',
        'slug',
    ];

    protected $fillable  = [
        'name',
        'slug',
    ];

    protected $dates     = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
