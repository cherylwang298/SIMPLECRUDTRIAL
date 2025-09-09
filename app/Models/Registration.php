<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registration extends Model
{
    //

    use HasFactory;

    protected $fillable = ['name', 'email', 'date_of_birth'];
    //$fillable itu -> kolom yg bisa di isi lewat create() atau update()
}
