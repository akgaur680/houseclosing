<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyers extends Model
{
    use HasFactory;
    protected $table = 'lawyers';

    protected $fillable = [
        'header_title',
        'header_description',
        'header_button_label',
        'header_button_link',
        'header_img',
        'section1_title',
        'meta_title',
        'meta_description',
        'meta_tag',
        'meta_img',
    ];
    public function members()
    {
        return $this->hasMany(Lawyer_Members::class);
    }
}
