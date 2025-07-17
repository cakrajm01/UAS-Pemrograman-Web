<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imunisasi;

class DashboardController extends Controller
{
    public function index()
    {
        $totalData = Imunisasi::count(); 

        return view('dashboard', compact('totalData'));
    }
}
