<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCovid extends Model
{
    use HasFactory;
    protected $fillable =['sehat', 'sakit', 'meninggal', 'status', 'kabupaten', 'kecamatan', 'desa'];
}
