<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PotonganHarga extends Model
{
    use HasFactory;
    protected $fillable = ['karyawan_id', 'potongan'];
}
