<?php

namespace App\Http\Controllers;

use App\siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = siswa::all();
    	return view('manageSiswa', ['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
            'kelas_id' => ['required'],
            'name' => ['required', 'string'],
            'jurusan' => ['required', 'string'],
            'foto' => ['required', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);
    
        $imageName = time().'.'.$request->image->extension();

        $request->foto->move(public_path('images'), $imageName);

        $update = new siswa();
        $update->kelas_id = $request->kelas_id;
        $update->name = $request->name;
        $update->jurusan = $request->jurusan;
        $update->foto = $imageName;
        $update->save();
        return redirect('manageSiswa')->with('success','Siswa created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(siswa $siswa)
    {
        $siswa = siswa::find($id);
        return view('', ['siswa' => $siswa]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit(siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, siswa $siswa)
    {
        $this->validate($request,[
            'kelas_id' => ['required'],
            'name' => ['required', 'string'],
            'jurusan' => ['required', 'string'],
            'foto' => ['required', 'mimes:jpeg,png,jpg,gif,svg'],
        ]);
    
        $imageName = time().'.'.$request->image->extension();

        $request->foto->move(public_path('images'), $imageName);

        $update = siswa::find($id);
        $update->kelas_id = $request->kelas_id;
        $update->name = $request->name;
        $update->jurusan = $request->jurusan;
        $update->foto = $imageName;
        $update->save();
        return redirect('/manageSiswa')->with('success','Siswa created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(siswa $siswa)
    {
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect('/manageSiswa');
    }
}
