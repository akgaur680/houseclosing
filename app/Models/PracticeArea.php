<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeArea extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'metatitle',
        'metadescription',
        'metatags',
        'metaimage'
    ];

    public function categories()
    {
        return $this->hasMany(PracticeAreaCategory::class);
    }
}
