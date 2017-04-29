<?php

namespace App\Model;
use App\Model\Perusahaan;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Dokumen_Auditee extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'dokumen_auditee';
    protected $primaryKey = 'id_auditee';
    protected $fillable = ['id_auditee', 'id_perusahaan', 'nama_sistem', 'unit_kerja', 'risiko', 'level_risiko', 'risk_cause', 'control', 'jenis_control', 'frekuensi_control', 'attribut_control', 'keterangan', 'status' ];

     public function Perusahaan() {
          return $this->belongsTo('App\Model\Perusahaan', 'id_perusahaan');
          //dokumen auditee memiliki banyak data audit
     }

     public function Data_Audit() {
          return $this->hasMany('App\Model\Data_Audit', 'id_data_auditee');
          //dokumen auditee memiliki banyak data audit
     }

     
}
