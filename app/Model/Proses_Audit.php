<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Proses_Audit extends Model
{
     use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'proses_audit';
    protected $primaryKey = 'id_proses_audit';
    protected $fillable = ['id_perusahaan', 'id_subdomain', 'id_domain', 'id_auditee'];
}
