<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeAreaCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'practice_area_id',
        'metatitle',
        'metadescription',
        'metatags',
        'metaimage',
        'headertitle',
        'headerdescription',
        'slug',
        'headerbgimage',
        'section1title',
        'section1description',
        'section1image',
        'section1buttonlabel',
        'section1buttonlink',
        'section2title',
        'section2description'
    ];

    public function practiceArea()
    {
        return $this->belongsTo(PracticeArea::class);
    }
}
