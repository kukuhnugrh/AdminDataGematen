<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UmatPribadiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataUmatPribadi = DB::table('umat')
                            ->orderBy('umat_kk', 'ASC')
                            ->paginate(15);
        $dataWilayah = DB::table('wilayah')->get();
        return view('umatPribadi', ['dataUmatPribadi' => $dataUmatPribadi], ['dataWilayah' => $dataWilayah]);
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
            $dataUmatPribadi = DB::table('umat')
                                ->orderBy('umat_kk', 'ASC')
                                ->get();
        }else{
            $dataUmatPribadi = DB::table('umat')
                                ->join('wilayah', 'umat.umat_wilayah_id', '=', 'wilayah.wilayah_id')
                                ->where('umat_wilayah_id', $id)
                                ->orderBy('umat_kk', 'ASC')
                                ->get();
        }
        return $dataUmatPribadi;
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

    public function liveSearch($id, $keyword){
        if($id == "0"){
            $dataUmatPribadi = DB::table('umat')
                                ->where('umat_nama', 'like', '%'.$keyword.'%')
                                ->get();
        }else{
            $dataUmatPribadi = DB::table('umat')
                                ->join('wilayah', 'umat.umat_wilayah_id', '=', 'wilayah.wilayah_id')
                                ->where('umat_wilayah_id', $id)
                                ->where('umat_nama', 'like', '%'.$keyword.'%')
                                ->get();
        }
        return $dataUmatPribadi;
    }
}
