<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;
    protected $fillable =['Desa', 'Kecamatan','Kabupaten','Provinsi','Sehat','Sakit','Dirawat','Sembuh','Zona'];
}
