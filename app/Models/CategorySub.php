<?php

namespace App\Models;

use App\Support\HasAdvancedFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategorySub extends Model
{
    use HasFactory;
    use HasAdvancedFilter;
    use SoftDeletes;

    protected $table    = 'category_sub';

    public $orderable   = [
        'id',
        'category_id',
        'name',
        'slug'
    ];

    public $filterable  = [
        'id',
        'category_id',
        'name',
        'slug'
    ];

    protected $fillable = [
        'category_id',
        'name',
        'slug',
    ];

    protected $dates    = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}
