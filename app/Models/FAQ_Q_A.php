<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ_Q_A extends Model
{
    use HasFactory;
    protected $table = 'faq_q_a';
    protected $primaryKey = 'id';

    protected $fillable = [
        'faq_id',
        'question',
        'answer',
    ];
    public function faq(){
        return $this->belongsTo(FAQArea::class);
    }
    
}
