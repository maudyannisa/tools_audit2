<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Perusahaan;
use App\Model\Dokumen_Auditee;
use App\Model\Domain;
use App\Model\Subdomain;
use Input;

class EvidanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perusahaans = Perusahaan::all();
        $domains = Domain::all();
        $subdomains = Subdomain::join('domain', 'domain.id_domain', '=', 'subdomain.id_domain')->select( 'subdomain.kode_subdomain as kode_subdomain', 'subdomain.id_subdomain as id_subdomain', 'subdomain.nama_subdomain as nama_subdomain')->get();
        return view('evidance.index', compact('perusahaans', 'domains', 'subdomains'));
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
