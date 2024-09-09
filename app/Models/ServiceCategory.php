<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;

protected $table  = 'servicecategory';
    protected $fillable = [
        'services_id',
        'header_title',
        'header_description',
        'header_img',
        'header_button_label',
        'header_button_link',
        'icon',
        'slug',
        'section1_img',
        'section1_description',
        'section1_button_label',
        'section1_button_link',
        'section2_img',
        'section2_description',
        'section2_button_label',
        'section2_button_link',
        'meta_title',
        'meta_description',
        'meta_tag',
        'meta_img',
    ];

    public function services()
    {
        return $this->belongsTo(Services::class);
    }
}
