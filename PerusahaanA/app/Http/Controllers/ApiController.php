<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Karyawan;


class ApiController extends Controller
{
    public function getKaryawanData($id)
    {
        $karyawan = Karyawan::find($id);
        return response()->json($karyawan);
    }
}
