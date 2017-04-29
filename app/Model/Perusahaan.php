<?php

namespace App\Model;
use App\Model\Dokumen_Auditee;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Perusahaan extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'perusahaan';
    protected $primaryKey = 'id_perusahaan';
    protected $fillable = ['id_perusahaan', 'nama_perusahaan', 'deskripsi', 'tujuan', 'visi', 'misi', 'jabatan', 'keterangan', 'status', 'nama_pegawai', 'no_hp', 'logo'];

    public function dokumen_auditee() {
          return $this->hasMany('App\Model\Dokumen_Auditee', 'id_auditee');
          //dokumen auditee memiliki banyak data audit
     }

}
