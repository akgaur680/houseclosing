<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;

    protected $table = 'homepage';
    protected $primaryKey = 'id';

    protected $fillable = [
        'header_title',
        'header_description',
        'header_img',
        'header_img2',
        'header_button_label1',
        'header_button_link1',
        'header_button_label2',
        'header_button_link2',
        'section1_img',
        'section1_card1_title',
        'section1_card1_description',
        'section1_card2_title',
        'section1_card2_description',
        'section1_card3_title',
        'section1_card3_description',
        'section2_title',
        'section2_description',
        'section2_img1',
        'section2_img2',
        'section2_successrate',
        'section2_casesdone',
        'section2_years_in_business',
        'section2_button_label',
        'section2_button_link',            
    ];

}
