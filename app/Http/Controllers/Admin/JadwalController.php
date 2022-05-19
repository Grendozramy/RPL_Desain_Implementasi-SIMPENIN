<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:jadwal.index|jadwal.create|jadwal.edit|jadwal.delete|jadwal.show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwals = Jadwal::latest()->when(request()->q, function($jadwals) {
            $jadwals = $jadwals->where('imunisasi', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.jadwal.index', compact('jadwals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'imunisasi'       => 'required',
            'bulan'       => 'required',
            
        ]);

        $jadwal = Jadwal::create([
            'imunisasi'  => $request->input('imunisasi'),
            'bulan'  => $request->input('bulan'),
            
        ]);

        if($jadwal){
            //redirect dengan pesan sukses
            return redirect()->route('admin.jadwal.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.jadwal.index')->with(['error' => 'Data Gagal Disimpan!']);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $jadwal = Jadwal::findOrFail($id);
        return view('admin.jadwal.edit', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $this->validate($request,[
            'imunisasi'       => 'required',
            'bulan'       => 'required',
            
        ]);

            $jadwal = Jadwal::findOrFail($jadwal->id);
            $jadwal->update([
                'imunisasi'  => $request->input('imunisasi'),
                'bulan'  => $request->input('bulan'),
                
            ]);

        if($jadwal){
            //redirect dengan pesan sukses
            return redirect()->route('admin.jadwal.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.jadwal.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function show($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('admin.jadwal.show', compact('jadwal'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();

        if($jadwal){
            return response()->json([
                'status' => 'success'
            ]);
        }else{
            return response()->json([
                'status' => 'error'
            ]);
        }
    }
}