<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PotonganHarga;

class PotonganHargaController extends Controller
{
    public function getPotonganHarga($karyawanId)
    {
        $potongan = PotonganHarga::where('karyawan_id', $karyawanId)->first();
        return response()->json([
            'message' => 'Potongan harga diberikan',
            'Diskon' => $potongan->potongan . '%'
        ]);
    }
}
