<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permohonan;

class PermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataGambar = Permohonan::latest()->get();
        return view('DashboardUser.buatpermohonan');
    }

    public function index_staf()
    {
        $dtPermohonan = Permohonan::all();
        return view('DashboardStaf.data-permohonan',compact('dtPermohonan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Dashboard.dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

        return redirect('dashboard');
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
        //
    }
}
