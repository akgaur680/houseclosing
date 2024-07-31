<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lawyer_Members extends Model
{
    use HasFactory;
    protected $table = 'lawyer_members';
    protected $primaryKey = 'id';
    protected $fillable = [
        'lawyers_id',
        'lawyer_name',
        'lawyer_designation',
        'lawyer_img',
        'lawyer_about',
        'meta_title',
        'meta_description',
        'meta_tag',
        'meta_img',
    ];
    public function lawyers()
    {
return $this->belongsTo(Lawyers::class);
    }
}
