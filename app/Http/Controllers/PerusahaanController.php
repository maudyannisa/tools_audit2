<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Model\Perusahaan;

class PerusahaanController extends Controller
{
    public function index()
    {
        $perusahaans = Perusahaan::withTrashed()->latest()->paginate(12);
        $total_perusahaan = $perusahaans->total();
        return view('perusahaan.index', compact('perusahaans', 'total_perusahaan'));
    }

    public function create()
    {
        return view('perusahaan.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama_perusahaan' => 'required|unique:perusahaan',
            'deskripsi' => '',
            'tujuan' => '',
            'visi' => '',
            'misi' => '',
            'nama_pegawai' => '',
            'no_hp' => '',
            'email' => '',
            'jabatan' => '',
            'keterangan' => '',
            'status' => '',
            'logo' => 'sometimes|image|max:2000|mimes:jpeg,jpg,bmp,png',
        ]);
        $input = $request->all();
        // dd($request->logo);
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $ext = $logo->getClientOriginalExtension();
            if ($request->file('logo')->isValid()) {
                $logo_name = date('YmdHis').".$ext";
                $upload_path = 'images/logo_perusahaan/';
                $request->file('logo')->move($upload_path, $logo_name);
                $input['logo'] = $logo_name;
            }
        }
        Perusahaan::create($input);
        return redirect()->action('PerusahaanController@index')->with('success', 'Dokumen Perusahaan berhasil dibuat');
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $query = Perusahaan::where('nama_perusahaan', 'LIKE', '%'.$keyword.'%');
        $perusahaans = $query->withTrashed()->latest()->paginate(5);
        $pagination = $perusahaans->appends($request->except('page'));
        $total_perusahaan = $perusahaans->total();
        return view('perusahaan.index', compact('perusahaans', 'keyword', 'pagination', 'total_perusahaan'));
    }

    public function show($id)
    {
        $perusahaans = Perusahaan::findOrFail($id);
        return view('perusahaan.show', compact('perusahaans'));
    }

    public function edit($id)
    {
        $perusahaans = Perusahaan::findOrFail($id);
        return view('perusahaan.edit', compact('perusahaans'));
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
        $this->validate($request, [
            'nama_perusahaan' => 'required',
            'deskripsi' => '',
            'tujuan' => '',
            'visi' => '',
            'misi' => '',
            'nama_pegawai' => '',
            'no_hp' => '',
            'email' => '',
            'jabatan' => '',
            'keterangan' => '',
            'status' => '',
            'logo' => 'sometimes|image|max:2000|mimes:jpeg,jpg,bmp,png',
        ]);
        $input = $request->all();
        $perusahaan = Perusahaan::findOrFail($id);
        $input['id_perusahaan'] = $perusahaan->id_perusahaan;
        if ($request->hasFile('logo')) {
            $exist = Storage::disk('logo')->exists($request->logo);
            if (isset($request->logo) && $exist) {
                $delete = Storage::disk('logo')->delete($request->logo);
            }
            $logo = $request->file('logo');
            $ext = $logo->getClientOriginalExtension();
            if ($request->file('logo')->isValid()) {
                $logo_name = date('YmdHis').".$ext";
                $upload_path = 'images/logo_perusahaan';
                $request->file('logo')->move($upload_path, $logo_name);
                $input['logo'] = $logo_name;
            }
        }
        $perusahaan->update($input);
        return redirect()->action('PerusahaanController@index')->with('info', 'Perusahaan telah Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $perusahaans = Perusahaan::destroy($id);
        return redirect()->action('PerusahaanController@index')->with('danger','Perusahaan telah dihapus');
    }

    public function restore($id)
    {
        $perusahaans = Perusahaan::withTrashed()->findOrFail($id)->restore();
        return redirect()->action('PerusahaanController@index')->with('info','Perusahaan telah dikembalikan');
    }

}
