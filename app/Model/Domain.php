<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Domain extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $table = 'domain';
    protected $primaryKey = 'id_domain';
    protected $fillable = ['id_domain', 'kode_domain', 'nama_domain', 'keterangan'];
}
