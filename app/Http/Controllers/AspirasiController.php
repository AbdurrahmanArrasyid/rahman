<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\Input_aspirasi;
use App\Models\Kategori;
use App\Models\siswa;
use Illuminate\Http\Request;

class AspirasiController extends Controller
{
    public function index()
    {
        $aspirasi = Aspirasi::latest();
        $noUrut = $aspirasi->max('id_aspirasi');
        $kategori = Kategori::all();
        $id =$noUrut + 1;
        return View('aspirasi', [
            'title' => 'Pengaduan',
            'aspirasi' => $aspirasi->fillter(request(['search']))->get(),
            'no' => $id,
            'kategori' => $kategori,
            
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nis' => 'required',
            'lokasi' => 'required',
            'ket' => 'required'
        ]);
        // dd($request);
        $data = siswa::all()->where('nis',$request->nis)->count();
        if ($data > 0) {
       
            Input_aspirasi::create([
                'id_pelaporan' => $request->id,
                'nis' => $request->nis,
                'id_kategori' => $request->id_kategori,
                'lokasi' => $request->lokasi,
                'ket' => $request->ket,
            ]);
            Aspirasi::create([
                'id_aspirasi' => $request->id,
                'id_kategori' => $request->id_kategori,
            ]);
            return Redirect("/?id=$request->id");
            } else{
                return Redirect("/?nis=$request->nis");
            }
        }
    public function feedback(Request $request)
    {
        Aspirasi::where('id_aspirasi',  $request->id_aspirasi)
        ->update(['feedback' => $request->feedback]);
        return redirect('/');
    }
}