<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registration extends Model
{
    //

    use HasFactory;

    protected $table = 'registrations';

    protected $fillable = ['name', 'email', 'date_of_birth'];
    //$fillable itu -> kolom yg bisa di isi lewat create() atau update()
    // jadi ini mendefinisikan tabel dan attribute yang ada di databasenya
    // in this case, Registration table, dan agtribute di dalemnya ada name, email dan date_of_birth
    //nanti bisa dipanggil pakai controller nya
}
