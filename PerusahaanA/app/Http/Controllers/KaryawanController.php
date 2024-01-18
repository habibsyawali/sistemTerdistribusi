<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;

class KaryawanController extends Controller
{
    public function getKaryawanData($id)
    {
        $karyawan = Karyawan::find($id);
        return response()->json($karyawan);
    }
}
