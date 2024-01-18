<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PotonganHarga;

class ApiController extends Controller
{
    public function getPotonganHarga($karyawanId)
    {
        $potongan = PotonganHarga::where('karyawan_id', $karyawanId)->first();
        return response()->json($potongan->potongan);
    }
}
