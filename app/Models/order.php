<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;


    protected $fillable = ['name', 'address', 'zip', 'city', 'country', 'card_number', 'Expiry', 'cvc', 'productsId'];
}
