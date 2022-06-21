<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Anak;
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
    public function index()
    {
        $gizis = Anak::latest()->when(request()->q, function($gizis) {
            $gizis = $gizis->where('nama_anak', 'like', '%'. request()->q . '%');
        })->paginate(10);

        return view('admin.gizi.index', compact('gizis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(gizi $gizi)
    {   
        $anak = Anak::latest()->get();
        return view('admin.gizi.create1', compact('anak','gizi'));
    }

    // public function autocomplete($id)
    // {
    //     $anak = Anak::latest()->get();
    //     $gizi = Gizi::findOrFail($id);
    //     return response()->json($anak, $gizi);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'dataanak_id'       => 'required',
            'BBU'       => 'required',
            'TBU'            => 'required',
            'BBTB'            => 'required',
            'Z_BBU'            => 'required',
            'Z_TBU'            => 'required',
            'Z_BBTB'            => 'required',
        ]);

        $gizi = gizi::create([
            'dataanak_id'       => $request->input('dataanak_id'),
            'BBU'       => $request->input('BBU'),
            'TBU'            => $request->input('TBU'),
            'BBTB'            => $request->input('BBTB'),
            'Z_BBU'            => $request->input('Z_BBU'),
            'Z_TBU'            => $request->input('Z_TBU'),
            'Z_BBTB'            => $request->input('Z_BBTB'),
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
        $anak = Anak::latest()->get();
        $gizi = Gizi::findOrFail($id);
        return view('admin.gizi.show', compact('gizi', 'anak'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(gizi $gizi)
    {   
        $anak = Anak::latest()->get();
        return view('admin.gizi.edit', compact('gizi', 'anak'));
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
            'BBU'       => 'required',
            'TBU'            => 'required',
            'BBTB'            => 'required',
            'Z_BBU'            => 'required',
            'Z_TBU'            => 'required',
            'Z_BBTB'            => 'required',
        ]);

            $gizi = gizi::findOrFail($gizi->id);
            $gizi->update([
                'BBU'       => $request->input('BBU'),
                'TBU'            => $request->input('TBU'),
                'BBTB'            => $request->input('BBTB'),
                'Z_BBU'            => $request->input('Z_BBU'),
                'Z_TBU'            => $request->input('Z_TBU'),
                'Z_BBTB'            => $request->input('Z_BBTB'),
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