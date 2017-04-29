<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subdomain extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'subdomain';
    protected $primaryKey = 'id_subdomain';
    protected $fillable = ['id_subdomain', 'id_domain', 'kode_subdomain', 'nama_subdomain', 'level_temuan', 'level_target'];
}
