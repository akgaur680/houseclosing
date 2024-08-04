<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactArea extends Model
{
    use HasFactory;
    protected $table = 'contact_area';
    protected $primaryKey = 'id';
    protected $fillable = [
        'header_title',
        'header_description',
        'header_img',
        'header_button_label',
        'header_button_link',
        'meta_title',
        'meta_description',
        'meta_tag',
        'meta_img',
    ];
}
