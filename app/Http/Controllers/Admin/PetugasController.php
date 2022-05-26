<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Petugas;
use Illuminate\Http\Request;
use App\Models\User;


class PetugasController extends Controller
{
    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:petugas.index|petugas.create|petugas.edit|petugas.delete']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = Petugas::latest()->when(request()->q, function($petugas) {
            $petugas = $petugas->where('nama_petugas', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.petugas.index', compact('petugas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::latest()->get();
        return view('admin.petugas.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'user_id'       => 'required',
            'nama_petugas' => 'required',
            'jabatan_petugas' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'status' => 'required',
        ]);

        $petugas = Petugas::create([
            // 'user_id'       => $request->input('dataanak_id'),
            'nama_petugas'       => $request->input('nama_petugas'),
            'jabatan_petugas'            => $request->input('jabatan_petugas'),
            'jenis_kelamin'            => $request->input('jenis_kelamin'),
            'tempat_lahir'            => $request->input('tempat_lahir'),
            'tanggal_lahir'            => $request->input('tanggal_lahir'),
            'alamat'            => $request->input('alamat'),
            'no_telp'            => $request->input('no_telp'),
            'status'            => $request->input('status'),
        ]);
        if($petugas){
            //redirect dengan pesan sukses
            return redirect()->route('admin.petugas.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.petugas.index')->with(['error' => 'Data Gagal Disimpan!']);
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
        $petugas = Petugas::findOrFail($id);
        return view('admin.petugas.edit', compact('petugas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petugas $petugas)
    {
        $this->validate($request,[
            // 'user_id'       => 'required',
            'nama_petugas' => 'required',
            'jabatan_petugas' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'status' => 'required',
        ]);

            $petugas = Petugas::findOrFail($petugas->id);
            $petugas->update([
                // 'user_id'       => $request->input('dataanak_id'),
                'nama_petugas'       => $request->input('nama_petugas'),
                'jabatan_petugas'            => $request->input('jabatan_petugas'),
                'jenis_kelamin'            => $request->input('jenis_kelamin'),
                'tempat_lahir'            => $request->input('tempat_lahir'),
                'tanggal_lahir'            => $request->input('tanggal_lahir'),
                'alamat'            => $request->input('alamat'),
                'no_telp'            => $request->input('no_telp'),
                'status'            => $request->input('status'),
            ]);
        if ($petugas) {
            //redirect dengan pesan sukses
            return redirect()->route('admin.petugas.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.petugas.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function show($id)
    {
        $petugas = Petugas::findOrFail($id);
        return view('admin.petugas.show', compact('petugas'));
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $petugas = Petugas::findOrFail($id);
        $petugas->delete();

        if($petugas){
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