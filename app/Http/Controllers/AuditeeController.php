<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

use App\Model\Dokumen_Auditee;
use App\Model\Perusahaan;

class AuditeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_perusahaan)
    {
        $auditees = Dokumen_Auditee::join('perusahaan', 'perusahaan.id_perusahaan', '=', 'dokumen_auditee.id_perusahaan')->where('perusahaan.id_perusahaan', $id_perusahaan)->select('perusahaan.nama_perusahaan as nama_perusahaan', 'dokumen_auditee.*')->withTrashed()->latest()->paginate(12);
        // select perusahaan.nama_perusahaan as nama perusahaan, dokumen_autee.* FROM auditee INNER JOIN perusahaan ON perusahaan.id_perusahaan = dokumen_auditee.id_perusahaan WHERE perusahaan.id_perusahaan = '$idperusahaan'
        $perusahaan = Perusahaan::where('id_perusahaan', $id_perusahaan)->first();
        // dd($perusahaan->id_perusahaan);
        $total_auditee = $auditees->total();
        return view('auditee.index', compact('auditees', 'total_auditee', 'id_perusahaan', 'perusahaan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id_perusahaan)
    {
        $perusahaan = Perusahaan::where('id_perusahaan', $id_perusahaan)->first();
        return view('auditee.create', compact('perusahaan', 'id_perusahaan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_perusahaan)
    {
         $this->validate($request, [
            'nama_sistem'=>'required',
            'unit_kerja'=>'',
            'risiko'=>'',
            'level_risiko'=>'',
            'risk_cause'=>'',
            'control'=>'',
            'jenis_control'=>'',
            'keterangan'=>'',
            'status' => '',
        ]);
        $input = $request->all();
        $attribut_control1 = $request->attribut_control1;
        $attribut_control2 = $request->attribut_control2;
        $attribut_control3 = $request->attribut_control3;
        $attribut_control4 = $request->attribut_control4;

        // dd($request->id_perusahaan);
        $attribut_control = "";
        $perusahaan = Perusahaan::where('id_perusahaan', $id_perusahaan)->first();
        $input['id_perusahaan'] = $id_perusahaan;
        if ($attribut_control1 != "") {
            $attribut_control = $attribut_control1;
        }

        if (($attribut_control2 != "") && ($attribut_control != "")) {
            $attribut_control = $attribut_control.", ".$attribut_control2;
        } else {
            $attribut_control=$attribut_control.$attribut_control2;
        }

        if (($attribut_control3 != "") && ($attribut_control != "")) {
            $attribut_control = $attribut_control.", ".$attribut_control3;
        } else {
            $attribut_control=$attribut_control.$attribut_control3;
        }

        if (($attribut_control4 != "") && ($attribut_control != "")) {
            $attribut_control = $attribut_control.", ".$attribut_control4;
        } else {
            $attribut_control=$attribut_control.$attribut_control4;
        }

        $input['attribut_control'] = $attribut_control;

        Dokumen_Auditee::create($input);
        return redirect()->action('AuditeeController@index', compact(' perusahaan','id_perusahaan'))->with('success', 'Dokumen Auditee Perusahaan berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_perusahaan, $id)
    {
        $perusahaans = Perusahaan::findOrFail($id_perusahaan);
        $auditees = Dokumen_Auditee::findOrFail($id);
        return view('auditee.show', compact('perusahaans', 'auditees'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_perusahaan, $id)
    {
        $perusahaans = Perusahaan::findOrFail($id_perusahaan);
        $auditees = Dokumen_Auditee::findOrFail($id);
        return view('auditee.edit', compact('perusahaans', 'auditees'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_perusahaan, $id)
    {
         $this->validate($request, [
            'nama_sistem'=>'required',
            'unit_kerja'=>'',
            'risiko'=>'',
            'level_risiko'=>'',
            'risk_cause'=>'',
            'control'=>'',
            'jenis_control'=>'',
            'keterangan'=>'',
            'status' => '',
        ]);
        $input = $request->all();
        $perusahaan = Perusahaan::findOrFail($id);
        $input['id_perusahaan'] = $perusahaan->id_perusahaan;
        $perusahaan = Perusahaan::findOrFail($id);
        $auditee = Dokumen_Auditee::findOrFail($id);
        $perusahaan->update($input);
        $auditee->update($input);
        return redirect()->action('AuditeeController@index', $id_perusahaan)->with('info', 'Perusahaan telah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, $id_perusahaan)
    {
        $perusahaan = Perusahaan::where('id_perusahaan', $id_perusahaan)->first();
        $auditees = Dokumen_Auditee::destroy($id);
        return redirect()->action('AuditeeController@index', compact(' auditees','perusahaan'))->with('danger','Auditee telah dihapus');
    }

        public function restore($id, $id_perusahaan)
    {
        $perusahaan = Perusahaan::where('id_perusahaan', $id_perusahaan)->first();
        $auditees = Dokumen_Auditee::withTrashed()->findOrFail($id)->restore();
        return redirect()->action('AuditeeController@index', compact(' auditees','perusahaan'))->with('info','Auditee telah dikembalikan');
    }
}
