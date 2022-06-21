<?php

namespace App\Http\Controllers\Admin;

use App\Models\Anak;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Gizi;

class AnakController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:anak.index|anak.create|anak.edit|anak.delete|anak.show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anaks = Anak::latest()->when(request()->q, function($anaks) {
            $anaks = $anaks->where('nama_anak', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.anak.index', compact('anaks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anak = Anak::latest()->get();
        return view('admin.anak.create',compact('anak'));
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
            'nama_anak'       => 'required',
            'nik_anak'       => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir'       => 'required',
            'status'            => 'required',
            'tinggi_badan'      => 'required',
            'berat_badan'       => 'required',
            'jenis_kelamin'     => 'required',
        ]);

        $anak = Anak::create([
            'nama_anak'  => $request->input('nama_anak'),
            'nik_anak'  => $request->input('nik_anak'),
            'tempat_lahir'  => $request->input('tempat_lahir'),
            'tgl_lahir'  => $request->input('tgl_lahir'),
            'status'  => $request->input('status'),
            'tinggi_badan'  => $request->input('tinggi_badan'),
            'berat_badan'  => $request->input('berat_badan'),
            'jenis_kelamin'  => $request->input('jenis_kelamin'),
        ]);



        if($anak){
            //redirect dengan pesan sukses
            return redirect()->route('admin.anak.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.anak.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $anak = Anak::findOrFail($id);
        return view('admin.anak.edit', compact('anak'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Anak $anak)
    {
        $this->validate($request,[
            'nama_anak'       => 'required',
            'nik_anak'       => 'required',
            'tempat_lahir' => 'required',
            'tgl_lahir'       => 'required',
            'status'            => 'required',
            'tinggi_badan'      => 'required',
            'berat_badan'       => 'required',
            'jenis_kelamin'     => 'required',
        ]);

            $anak = Anak::findOrFail($anak->id);
            $anak->update([
            'nama_anak'  => $request->input('nama_anak'),
            'nik_anak'  => $request->input('nik_anak'),
            'tempat_lahir'  => $request->input('tempat_lahir'),
            'tgl_lahir'  => $request->input('tgl_lahir'),
            'status'  => $request->input('status'),
            'tinggi_badan'  => $request->input('tinggi_badan'),
            'berat_badan'  => $request->input('berat_badan'),
            'jenis_kelamin'  => $request->input('jenis_kelamin'),
            ]);

        if($anak){
            //redirect dengan pesan sukses
            return redirect()->route('admin.anak.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.anak.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function show($id)
    {
        $anak = Anak::findOrFail($id);
        return view('admin.anak.show', compact('anak'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $anak = Anak::findOrFail($id);
        $anak->delete();

        if($anak){
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