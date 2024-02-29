<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartamentos extends Model
{
    use HasFactory;

    protected $table = 'Apartamentos_info';
    protected $fillable = ['address','construction_year','square_meters','bedrooms','bathrooms','has_furniture','owner_name','phone_contact','email','price'];

    public $timestamps = false;
}
