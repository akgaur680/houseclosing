<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;
    protected $table = 'about';
    protected $primaryKey = 'id';
    protected $fillable = [
        'header_title',
        'header_description',
        'header_button_label',
        'header_button_link',
        'header_img',
        'section1_description',
        'section1_business_referrals',
        'section1_verbal_commitment',
        'section1_img1',
        'section1_img2',
        'section2_title',
        'section2_description',
        'section2_successful_txn',
        'section2_clients_served',
        'section2_years_in_business',
        'section2_industry_awards',
        'section2_img',
        'section2_card1_title',
        'section2_card1_description',
        'section2_card1_icon',
        'section2_card2_title',
        'section2_card2_description',
        'section2_card2_icon',
        'section2_card3_title',
        'section2_card3_description',
        'section2_card3_icon',
        'section2_card4_title',
        'section2_card4_description',
        'section2_card4_icon',
        'meta_title',
        'meta_description',
        'meta_tag',
        'meta_img',

    ];
}
