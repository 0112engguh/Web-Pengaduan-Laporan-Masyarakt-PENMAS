<?php

namespace App\Http\Controllers;


use App\Models\Pengaduan;
use App\Models\Masyarakat;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_pengaduan = Pengaduan::all();
        return view('masyarakat.pengaduan', compact('data_pengaduan'));

    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('masyarakat.index');
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
            'laporan' => 'required',
            'path_foto' => 'required|mimes:png,jpg,jpeg',
        ]);

        $data = $request->all();
        
        $lap = new Pengaduan();
        if($request->hasFile('path_foto'))
        {
            $nama_foto = 'LAMPIRAN'.rand(1,99999).'.'.$request->path_foto->getClientOriginalExtension();
            $request->file('path_foto')->move(public_path().'/foto_laporan/', $nama_foto);
            $lap->path_foto = $nama_foto;
            // $lap->save();
        }
        
        $lap->laporan = $request->laporan;
        $lap->user_id = $request->user_id;
        $lap->save();

        return redirect('/pengaduan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Pengaduan::with([
            'details', 'user'
        ])->findOrFail($id);

        return view('masyarakat.show', compact('item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengaduan = Pengaduan::find($id);
        $pengaduan->delete();

        // Alert::success('Berhasil', 'Pengaduan telah di hapus');
        return redirect('pengaduan-show');
    }
}
