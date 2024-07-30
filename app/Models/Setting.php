<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $table = 'setting';
    protected $fillable = [
        'header_logo',
        'footer_logo',
        'contact_no',
        'contact_address',
        'email',
        'facebook_link',
        'twitter_link',
        'instagram_link',
        'whatsapp_link',
        'copyright_content',
        'consultation_bar_button_link',
        'consultation_bar_button_label',
        'consultation_bar_title',
        'consultation_bar_description',
        'meta_title',
        'meta_description',
        'meta_tag',
        'meta_img',
        
    ];
}
