<?php

namespace App\Http\Controllers\Admin;

use App\Models\Balita;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BalitaController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:balita.index|balita.create|balita.edit|balita.delete|balita.show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $balitas = Balita::latest()->when(request()->q, function($balitas) {
            $balitas = $balitas->where('nama_balita', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.balita.index', compact('balitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.balita.create');
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
            'nama_balita'       => 'required',
            'usia_balita'       => 'required',
            'status'            => 'required',
            'tinggi_badan'      => 'required',
            'berat_badan'       => 'required',
            'hasil_berat_badan' => 'required',
            'jenis_kelamin'     => 'required',
            'ideal'             => 'required',
        ]);

        $balita = Balita::create([
            'nama_balita'  => $request->input('nama_balita'),
            'usia_balita'  => $request->input('usia_balita'),
            'status'  => $request->input('status'),
            'tinggi_badan'  => $request->input('tinggi_badan'),
            'berat_badan'  => $request->input('berat_badan'),
            'hasil_berat_badan'  => $request->input('hasil_berat_badan'),
            'jenis_kelamin'  => $request->input('jenis_kelamin'),
            'ideal'  => $request->input('ideal'),
        ]);

        if($balita){
            //redirect dengan pesan sukses
            return redirect()->route('admin.balita.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.balita.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $balita = Balita::findOrFail($id);
        return view('admin.balita.edit', compact('balita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Balita $balita)
    {
        $this->validate($request,[
            'nama_balita'       => 'required',
            'usia_balita'       => 'required',
            'status'            => 'required',
            'tinggi_badan'      => 'required',
            'berat_badan'       => 'required',
            'hasil_berat_badan' => 'required',
            'jenis_kelamin'     => 'required',
            'ideal'             => 'required',
        ]);

            $balita = Balita::findOrFail($balita->id);
            $balita->update([
                'nama_balita'  => $request->input('nama_balita'),
                'usia_balita'  => $request->input('usia_balita'),
                'status'  => $request->input('status'),
                'tinggi_badan'  => $request->input('tinggi_badan'),
                'berat_badan'  => $request->input('berat_badan'),
                'hasil_berat_badan'  => $request->input('hasil_berat_badan'),
                'jenis_kelamin'  => $request->input('jenis_kelamin'),
                'ideal'  => $request->input('ideal'),
            ]);

        if($balita){
            //redirect dengan pesan sukses
            return redirect()->route('admin.balita.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.balita.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function show($id)
    {
        $balita = Balita::findOrFail($id);
        return view('admin.balita.show', compact('balita'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $balita = Balita::findOrFail($id);
        $balita->delete();

        if($balita){
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