<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HireusForm extends Model
{
    use HasFactory;
    protected $table = 'hireus_form';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'message',
        'selected_services',
        'selected_service_names',
    ];
}
