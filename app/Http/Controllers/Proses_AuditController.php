<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Perusahaan;
use App\Model\Dokumen_Auditee;
use App\Model\Domain;
use App\Model\Subdomain;
use App\Model\Proses_Audit;
use Input;
use Response;

class Proses_AuditController extends Controller
{
    public function index()
    {
        $perusahaans = Perusahaan::all();
        $domains = Domain::all();
        $subdomains = Subdomain::join('domain', 'domain.id_domain', '=', 'subdomain.id_domain')->select( 'subdomain.kode_subdomain as kode_subdomain', 'subdomain.id_subdomain as id_subdomain', 'subdomain.nama_subdomain as nama_subdomain')->get();
        return view('proses_audit.index', compact('perusahaans', 'domains', 'subdomains'));
    }

    public function submit()
    {
        return view('proses_audit.create');
    }

    public function create()
    {
        return view('proses_audit.create');
    }

    public function ajax_auditee($id)
    {
        //================ nama_sistem
    	if ($id==0) {
    		$auditee = Dokumen_Auditee::all();
    	}else{
    		$auditee = Dokumen_Auditee::where('id_perusahaan', $id)->pluck('nama_sistem', 'id_auditee');
    	}
    	return json_encode($auditee);
    }

    public function ajax_subdomain($id)
    {
        //================ subdomain
        if ($id==0) {
            $subdomain = Subdomain::all();
        }else{
            $subdomain = Subdomain::where('id_domain', $id)->pluck('kode_subdomain', 'id_subdomain', 'nama_subdomain');
        }

        return json_encode($subdomain);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'perusahaan' => '',
            'auditee' => '',
            'id_domain' => '',
            'id_subdomain' => '',
        ]);
        $input = $request->all();
        // $perusahaans = Perusahaan::all();
        // $auditees = Dokumen_Auditee::all();
        // $domains = Domain::all();
        // $subdomains = Subdomain::all();
        // $proses_audits = Proses_Audit::join('domain', 'domain.id_domain', '=', 'proses_audit.id_domain')->join('subdomain', 'subdomain.id_subdomain', '=', 'proses_audit.id_subdomain')->join('perusahaan', 'perusahaan.id_perusahaan', '=', 'proses_audit.id_perusahaan')->join('dokumen_auditee', 'dokumen_auditee.id_auditee', '=', 'proses_audit.id_auditee')->get();
        $proses_audit = new Proses_Audit;
        $proses_audit->id_perusahaan = $request->perusahaan;
        $proses_audit->id_auditee = $request->auditee;
        $proses_audit->save();

        return view('proses_audit.index', compact('perusahaans','auditees', 'domains', 'subdomains', 'proses_audits'));
    }

    public function restore($id)
    {
        $perusahaans = Perusahaan::withTrashed()->findOrFail($id)->restore();
        return redirect()->action('PerusahaanController@index')->with('info','Perusahaan telah dikembalikan');
    }



}
