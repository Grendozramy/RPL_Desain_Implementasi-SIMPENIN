<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Balita;
use App\Models\Gizi;
use Illuminate\Http\Request;

class GiziController extends Controller
{
   /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['permission:gizi.index|gizi.create|gizi.edit|gizi.delete|gizi.show']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Balita $balita)
    {
        $gizis = Gizi::latest()->when(request()->q, function($gizis) {
            $gizis = $gizis->where('nama_balita', 'like', '%'. request()->q . '%');
        })->paginate(10);
        

        return view('admin.gizi.index', compact('gizis', 'balita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $balita = Balita::latest()->get();
        return view('admin.gizi.create', compact('balita'));
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
            'databalita_id'       => 'required',
            'BBU'       => 'required',
            'TBU'            => 'required',
            'BBTB'            => 'required',
            'Z_BBU'            => 'required',
            'Z_TBU'            => 'required',
            'Z_BBTB'            => 'required',
            'status_gizi'            => 'required',
            'z_score'            => 'required',
            'validasi'            => 'required',
        ]);

        $gizi = gizi::create([
            'databalita_id'       => $request->input('databalita_id'),
            'BBU'       => $request->input('BBU'),
            'TBU'            => $request->input('TBU'),
            'BBTB'            => $request->input('BBTB'),
            'Z_BBU'            => $request->input('Z_BBU'),
            'Z_TBU'            => $request->input('Z_TBU'),
            'Z_BBTB'            => $request->input('Z_BBTB'),
            'status_gizi'            => $request->input('status_gizi'),
            'z_score'            => $request->input('z_score'),
            'validasi'            => $request->input('validasi'),
        ]);

        if($gizi){
            //redirect dengan pesan sukses
            return redirect()->route('admin.gizi.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.gizi.index')->with(['error' => 'Data Gagal Disimpan!']);
        }

    }

    public function show($id)
    {
        $balita = Balita::latest()->get();
        $gizi = Gizi::findOrFail($id);
        return view('admin.gizi.show', compact('gizi', 'balita'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(gizi $gizi)
    {   
        $balita = Balita::latest()->get();
        return view('admin.gizi.edit', compact('gizi', 'balita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gizi $gizi)
    {
        $this->validate($request,[
            'databalita_id'       => 'required',
            'BBU'       => 'required',
            'TBU'            => 'required',
            'BBTB'            => 'required',
            'Z_BBU'            => 'required',
            'Z_TBU'            => 'required',
            'Z_BBTB'            => 'required',
            'status_gizi'            => 'required',
            'z_score'            => 'required',
            'validasi'            => 'required',
        ]);

            $gizi = gizi::findOrFail($gizi->id);
            $gizi->update([
                'databalita_id'       => $request->input('databalita_id'),
                'BBU'       => $request->input('BBU'),
                'TBU'            => $request->input('TBU'),
                'BBTB'            => $request->input('BBTB'),
                'Z_BBU'            => $request->input('Z_BBU'),
                'Z_TBU'            => $request->input('Z_TBU'),
                'Z_BBTB'            => $request->input('Z_BBTB'),
                'status_gizi'            => $request->input('status_gizi'),
                'z_score'            => $request->input('z_score'),
                'validasi'            => $request->input('validasi'),
            ]);

        if($gizi){
            //redirect dengan pesan sukses
            return redirect()->route('admin.gizi.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('admin.gizi.index')->with(['error' => 'Data Gagal Diupdate!']);
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
        $gizi = gizi::findOrFail($id);
        $gizi->delete();

        if($gizi){
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