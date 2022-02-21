<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function karir() {
        return "Daftar Program Karir";
    }

    public function magang() {
        return "Daftar Program Magang";
    }

    public function kunjunganindustri() {
        return "Daftar Program Kunjungan Industri";
    }
}
