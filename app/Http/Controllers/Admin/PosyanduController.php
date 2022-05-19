<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Petugas;
use App\Models\Posyandu;
use Illuminate\Http\Request;

class PosyanduController extends Controller
{
  /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:posyandu.index|posyandu.create|posyandu.edit|posyandu.delete|posyandu.show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posyandus = Posyandu::latest()->when(request()->q, function($posyandus) {
            $posyandus = $posyandus->where('nama_posyandu', 'like', '%'. request()->q . '%');
        })->paginate(10);
        

        return view('admin.posyandu.index', compact('posyandus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $petugas = Petugas::latest()->get();
        return view('admin.posyandu.create', compact('petugas'));
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
            'jadwal'       => 'required',
            'nama_posyandu'       => 'required',
            'tempat'            => 'required',
            'petugas_id'            => 'required',
        ]);

        $posyandu = Posyandu::create([
            'jadwal'  => $request->input('jadwal'),
            'nama_posyandu'  => $request->input('nama_posyandu'),
            'tempat'  => $request->input('tempat'),
            'petugas_id'  => $request->input('petugas_id'),

        ]);

        if($posyandu){
            //redirect dengan pesan sukses
            return redirect()->route('admin.posyandu.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.posyandu.index')->with(['error' => 'Data Gagal Disimpan!']);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Posyandu $posyandu)
    {   
        $petugas = Petugas::latest()->get();
        return view('admin.posyandu.edit', compact('posyandu', 'petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posyandu $posyandu)
    {
        $this->validate($request,[
            'jadwal'       => 'required',
            'nama_posyandu'       => 'required',
            'tempat'            => 'required',
            'petugas_id'            => 'required',
        ]);

            $posyandu = Posyandu::findOrFail($posyandu->id);
            $posyandu->update([
                'jadwal'  => $request->input('jadwal'),
                'nama_posyandu'  => $request->input('nama_posyandu'),
                'tempat'  => $request->input('tempat'),
                'petugas_id'  => $request->input('petugas_id'),
            ]);

        if($posyandu){
            //redirect dengan pesan sukses
            return redirect()->route('admin.posyandu.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.posyandu.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posyandu = Posyandu::findOrFail($id);
        $posyandu->delete();

        if($posyandu){
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