<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Permohonan;

use App\Http\Requests\PermohonanRequest;

use Illuminate\Support\Facades\DB;


class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $dataGambar = Permohonan::latest()->get();
        return view('Pages.BuatPermohonan.index');
    }

    public function index_staf()
    {
        $dtPermohonan = Permohonan::all();
        return view('DashboardStaf.data-permohonan',compact('dtPermohonan'));
    }

    public function create()
    {
        $dtPermohonan = Permohonan::paginate(20);
        return view('Pages.BuatPermohonan.list', compact('dtPermohonan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'npwp'                          => 'required|min:7|max:20',
            'nama_hukum'                    => 'required|min:7|max:20',
            'badan_hukum'                   => 'required|min:7|max:20',
            'no_telp'                       => 'required|min:7|max:20',
            'no_ktp'                        => 'required|min:7|max:20',
            'nama_penyerah'                 => 'required|min:7|max:20',
            'no_telp_penyerah'              => 'required|min:7|max:20',
            'no_pl'                         => 'required|min:7|max:20',
            'tanggal'                       => 'required|min:7|max:20',
            'subwilayah'                    => 'required|min:7|max:20',
            'alamat'                        => 'required|min:7|max:20',
            'luas_lokasi'                   => 'required|min:7|max:20',
            'peruntukan'                    => 'required|min:7|max:20',
            'kondisi'                       => 'required|min:7|max:20',
            'surat_perubahan_peruntukan'    => 'required|min:7|max:20',
            'file_scan_uwt'                 => 'required|min:7|max:20',
            'file_endorsement_pl'
        ]);

        $spp = $request->surat_perubahan_peruntukan;
        $fsu = $request->file_scan_uwt;
        $fep = $request->file_endorsement_pl;
        $fileSPP = time().rand(100,999).".".$spp->getClientOriginalExtension();
        $fileFSU = time().rand(100,999).".".$fsu->getClientOriginalExtension();
        $fileFEP = time().rand(100,999).".".$fep->getClientOriginalExtension();

        Permohonan::create([
            'npwp'                          => $request->npwp,
            'nama_hukum'                    => $request->nama_hukum,
            'badan_hukum'                   => $request->badan_hukum,
            'no_telp'                       => $request->no_telp,
            'no_ktp'                        => $request->no_ktp,
            'nama_penyerah'                 => $request->nama_penyerah,
            'no_telp_penyerah'              => $request->no_telp_penyerah,
            'no_pl'                         => $request->no_pl,
            'tanggal'                       => $request->tanggal,
            'subwilayah'                    => $request->subwilayah,
            'alamat'                        => $request->alamat,
            'luas_lokasi'                   => $request->luas_lokasi,
            'peruntukan'                    => $request->peruntukan,
            'kondisi'                       => $request->kondisi,
            'surat_perubahan_peruntukan'    => $fileSPP,
            'file_scan_uwt'                 => $fileFSU,
            'file_endorsement_pl'           => $fileFEP,

        ]);

        $spp->move(public_path().'/img', $fileSPP);
        $fsu->move(public_path().'/img', $fileFSU);
        $fep->move(public_path().'/img', $fileFEP);


        return redirect('listpermohonan')->with('toast_success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function search()
    {
        $search_text = $_GET['query'];
        $dtPermohonan = Permohonan::where('subwilayah','LIKE','%'.$search_text.'%')->get();

        return view('Pages.BuatPermohonan.list',compact('dtPermohonan'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function download($id)
    {
        $dtPermohonan = DB::table('permohonan')->where('id',$id)->first();
        $filepath = storage_path("/img/{$dtPermohonan->gambar}");
        return \Response::download($filepath);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dtPermohonan = Permohonan::findorfail($id);
        $dtPermohonan->delete();

        return back()->with('info', 'Data Berhasil didelete');
    }
}
