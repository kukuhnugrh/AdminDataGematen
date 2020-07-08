<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class DataUmatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataUmat = DB::table('umat')
                        ->join('hubungan_keluarga', 'umat.umat_hubungan_keluarga', '=', 'hubungan_keluarga.hubungan_keluarga_id')
                        ->join('agama', 'umat.umat_agama', '=', 'agama.agama_id')
                        ->orderBy('umat_kk', 'ASC')->orderBy('hubungan_keluarga_id', 'DESC')->paginate(15);
        $dataLingkungan = DB::table('lingkungan')->get();
        return view('index', ['dataUmat' => $dataUmat], ['dataLingkungan' => $dataLingkungan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id == "0"){
            $dataUmat = DB::table('umat')
                        ->join('hubungan_keluarga', 'umat.umat_hubungan_keluarga', '=', 'hubungan_keluarga.hubungan_keluarga_id')
                        ->join('agama', 'umat.umat_agama', '=', 'agama.agama_id')
                        ->orderBy('umat_kk', 'ASC')->orderBy('hubungan_keluarga_id', 'DESC')->get();
        }else{
            $dataUmat = DB::table('umat')
                        ->join('hubungan_keluarga', 'umat.umat_hubungan_keluarga', '=', 'hubungan_keluarga.hubungan_keluarga_id')
                        ->join('agama', 'umat.umat_agama', '=', 'agama.agama_id')
                        ->where('umat_lingkungan_id', $id)
                        ->orderBy('umat_kk', 'ASC')->orderBy('hubungan_keluarga_id', 'DESC')->get();

        }
        return $dataUmat;
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

    public function cetak_pdf($id)
    {   
        if($id == 0 || $id == "0"){
            $dataUmat = DB::table('umat')
                        ->join('hubungan_keluarga', 'umat.umat_hubungan_keluarga', '=', 'hubungan_keluarga.hubungan_keluarga_id')
                        ->join('agama', 'umat.umat_agama', '=', 'agama.agama_id')
                        ->orderBy('umat_lingkungan_id', 'ASC')
                        ->orderBy('umat_kk', 'ASC')
                        ->orderBy('hubungan_keluarga_id', 'DESC')->get();
            $dataLingkungan = "SEMUA LINGKUNGAN";
            $pdf = PDF::loadview('dataUmatPDF', ['dataUmat' => $dataUmat], ['dataLingkungan' => $dataLingkungan])->setPaper('a4', 'landscape');
        }else{
            $dataUmat = DB::table('umat')
                        ->join('hubungan_keluarga', 'umat.umat_hubungan_keluarga', '=', 'hubungan_keluarga.hubungan_keluarga_id')
                        ->join('agama', 'umat.umat_agama', '=', 'agama.agama_id')
                        ->where('umat_lingkungan_id', $id)
                        ->orderBy('umat_lingkungan_id', 'ASC')
                        ->orderBy('umat_kk', 'ASC')
                        ->orderBy('hubungan_keluarga_id', 'DESC')->get();
            $dataLingkungan = DB::table('lingkungan')
                                ->where('lingkungan_id', $id)
                                ->get();
            $pdf = PDF::loadview('dataUmatPDF', ['dataUmat' => $dataUmat], ['dataLingkungan' => $dataLingkungan])->setPaper('a4', 'landscape');
        }
    	return $pdf->download('DATAUMAT');
    }
}
