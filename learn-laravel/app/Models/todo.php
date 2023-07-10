<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class todo extends Model
{
    use HasFactory;
    //-- used when the tabel name in DB is written in singular form
    // protected $table='todos';

    // Fillable is the model.php's array used for inserting data in defined columns.
    protected $fillable = ['title','description','completed'];

    // guarded is used when we dont want to insert  data in certain columns.
    // protected $guaed=[];
}
