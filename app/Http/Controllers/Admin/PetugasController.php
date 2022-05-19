<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Petugas;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

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
            'username' => 'required|unique:users',
            'name' => 'required|unique:users',
            'nama_petugas' => 'required',
        ]);

        DB::transaction(function() use($request){
            $user = User::create([
                'username' => Str::lower($request->username),
                'name' => $request->nama_petugas,
                'password' => Hash::make('password'),
            ]);

            $user->assignRole('Petugas');

            Petugas::create([
                'user_id' => $user->id,
                'kode_petugas' => 'PTGR'.Str::upper(Str::random(5)),
                'nama_petugas' => $request->nama_petugas,
                'jenis_kelamin' => $request->jenis_kelamin,
            ]);
        });
        if($user){
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
        $user = User::latest()->get();
        return view('admin.petugas.edit', compact('petugas', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'nama_petugas' => 'required',
        ]);

        if ($validator->passes()) {
            Petugas::findOrFail($id)->update($request->all());

            //redirect dengan pesan sukses
            return redirect()->route('admin.petugas.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.petugas.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $petugas = Petugas::findOrFail($id);
        User::findOrFail($petugas->user_id)->delete();
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