<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $fillable = [
        
       'header_title',
        'header_description',
       'header_button_label',
       'header_button_link',
       'header_img',
       'section1_title',
       'section1_img',
       'meta_title',
        'meta_description',
        'meta_tag',
        'meta_img',
    ];
    public function categories()
    {
        return $this->hasMany(ServiceCategory::class);
    }
}
