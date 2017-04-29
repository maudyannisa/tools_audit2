<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Data_Audit extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'data_audit';
    protected $primaryKey = 'id_data_audit';
    protected $fillable = ['id_data_audit', 'id_auditee', 'id_proses_audit', 'id_user', 'nama_evidence', 'deskripsi', 'keterangan', 'status'];

    public function dokumen_auditee() {
         return $this->belongsTo('App\Model\Dokumen_Auditee', 'id_auditee');
         //relasi dari hasmany nya dokumen_auditee
    }


}
