<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\FAQ_Q_A;

class FAQArea extends Model
{
    use HasFactory;
    protected $table = 'faq_area';
    protected $primaryKey = 'id';
    protected $fillable = [
        'header_title',
        'header_description',
        'header_img',
        'header_button_label',
        'header_button_link',
        'section1_img',
        'section1_button_label',
        'section1_button_link',
        'meta_title',
        'meta_description',
        'meta_tag',
        'meta_img',
    ];
    public function faqs()
    {
        return $this->hasMany(FAQ_Q_A::class, 'faq_id');
    }
}
