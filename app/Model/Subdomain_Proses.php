<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subdomain_Proses extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'Subdomain_Proses';
    protected $primaryKey = 'id_subdomain_proses';
    protected $fillable = ['id_domain', 'id_subdomain', 'nama_subdomain_proses', 'level_temuan', 'level_target'];
}
