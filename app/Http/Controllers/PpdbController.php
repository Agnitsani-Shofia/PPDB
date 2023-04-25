<?php

namespace App\Http\Controllers;

use App\Models\ppdb;
use Illuminate\Http\Request;

class ppdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppdbs = Ppdb::latest()->paginate(5);
return view('ppdbs.index',compact('ppdbs'))
->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppdbs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'No_Tes' => 'required',
            'Nama_Lengkap' => 'required',
            'JK' => 'required',
            'TTL' => 'required',
            'Agama' => 'required',
            'Cita_Cita' => 'required',
            'Hobi' => 'required',
            'Anak_ke' => 'required',
            'Jumlah_Saudara' => 'required',
            'Tinggi_Badan' => 'required',
            'Berat_Badan' => 'required',
            'Golongan_Darah' => 'required',
            ]);
            Ppdb::create($request->all());
            return redirect()->route('ppdbs.index')
            ->with('success','Ppdb created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function show(ppdb $ppdb)
    {
        return view('ppdbs.show',compact('ppdb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function edit(ppdb $ppdb)
    {
        return view('ppdbs.edit',compact('ppdb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ppdb $ppdb)
    {
        $request->validate([
            'No_Tes' =>'required',
            'Nama_Lengkap' => 'required',
            'JK' => 'required',
            'TTL' => 'required',
            'Agama' => 'required',
            'Cita_Cita' => 'required',
            'Hobi' => 'required',
            'Anak_ke' => 'required',
            'Jumlah_Saudara' => 'required',
            'Tinggi_Badan' => 'required',
            'Berat_Badan' => 'required',
            'Golongan_Darah' => 'required',
        ]);
            Ppdb::create($request->all());
            return redirect()->route('ppdbs.index')
            ->with('success','Ppdb edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(ppdb $ppdb)
    {
        $ppdb->delete();
return redirect()->route('ppdbs.index')
->with('success','Ppdb deleted successfully');
}    
}
