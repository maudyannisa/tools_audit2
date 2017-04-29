<?php

use Illuminate\Database\Seeder;
use App\Model\Dokumen_Auditee;
use Carbon\Carbon;

class Dokumen_AuditeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dokumen_auditee = new Dokumen_Auditee();
        $dokumen_auditee->nama_sistem = 'RNO app';
        $dokumen_auditee->id_perusahaan = '1';
        $dokumen_auditee->unit_kerja = 'Network Operation';
        $dokumen_auditee->kode_risiko ='ITC-09';
        $dokumen_auditee->risiko = 'Terganggunya kualitas dan waktu pemrosesan data sebagai akibat insiden dan masalah yang terjadi tidak diidentifikasi dan diperbaiki.';
        $dokumen_auditee->level_risiko = 'Moderate Risk';
        $dokumen_auditee->risk_cause = 'Tidak terdapat mekanisme pencatatan dan penyelesaian insiden.';
        $dokumen_auditee->control = 'Insiden dicatat, dianalisa, dan diselesaikan tepat pada waktunya.';
        $dokumen_auditee->jenis_control = 'Manual';
        $dokumen_auditee->frekuensi_control = 'Daily';
        $dokumen_auditee->attribut_control = 'Terdapat dokumentasi pencatatan terjadinya insiden, Terdapat dokumentasi analisa insiden, Terdapat dokumentasi proses eskalasi insiden (jika diperlukan), Terdapat penutupan insiden. ';
        $dokumen_auditee->keterangan = '';
        $dokumen_auditee->status = '1';
        $dokumen_auditee->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $dokumen_auditee->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $dokumen_auditee->save();
    }
}
