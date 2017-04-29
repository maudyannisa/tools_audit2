<?php

use Illuminate\Database\Seeder;
use App\Model\Perusahaan;
use Carbon\Carbon;

class PerusahaanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $perusahaan = new Perusahaan();
        $perusahaan->nama_perusahaan = 'PT. Dirahasiakan ';
        $perusahaan->deskripsi = '<p>PT Dirahasiakan adalah salah satu Perseroan pembiayaan otomotif independen terkemuka. Usaha utama Perseroan adalah di bidang pembiayaan konsumen, antara lain pembiayaan kepemilikan mobil baik baru maupun bekas. Perseroan juga menyediakan pembiayaan sewa guna usaha berdasarkan permintaan pelanggan.</p>';
        $perusahaan->tujuan = 'Target utama Perseroan adalah pelanggan perorangan, selain itu juga memberikan pembiayaan kepada badan usaha. ';
        $perusahaan->visi = 'Menjadi perusahaan pembiayaan yang terkemuka di Indonesia dengan menciptakan nilai-nilai yang terbaik bagi seluruh stakeholder';
        $perusahaan->misi = 'Memberikan kemudahan fasilitas kredit kendaraan bermotor yang terjangkau dan diandalkan melalui kerjasama yang saling menguntungkan serta berkesinambungan dengan mitra bisnis dan melalui pengelolaan bisnis yang prima';
        $perusahaan->jabatan = 'Sales & Marketing';
        $perusahaan->keterangan = 'On Progress';
        $perusahaan->nama_pegawai = 'Luki Permana';
        $perusahaan->no_hp = '081301902019';
        $perusahaan->email = 'lukiper@oto.or.id';
        $perusahaan->logo = 'PT. OTO.png';
        $perusahaan->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $perusahaan->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $perusahaan->save();
    }
}
