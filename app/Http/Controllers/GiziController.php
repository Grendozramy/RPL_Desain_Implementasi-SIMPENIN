<?php

namespace App\Http\Controllers;

use App\Models\Anak;
use App\Models\Gizi;
use Illuminate\Http\Request;

class GiziController extends Controller
{
    public function index(Request $request)
    {
        $gizis = Anak::latest()->when(request()->q, function($gizis) {
            $gizis = $gizis->where('nama_anak', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.gizi.index', compact('gizis'));
    }

    public function bayar(gizi $gizi)
    {	
    	$anak= Anak::latest()->get()
            
            ->first();

        $gizi = Gizi::all();

    	return view('admin.gizi.edit', compact('gizi', 'anak'));
    }
}
