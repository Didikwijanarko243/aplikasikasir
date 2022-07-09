<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    function index(){

        $data['aksinama']           = "Tambah Data Staff";
        $data['komponen_data']      = "komponen.staff.forms.form_tambah_data";
        return view('pages.staff.data_staff',$data);
    }
}
