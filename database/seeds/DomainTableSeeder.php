<?php

use Illuminate\Database\Seeder;
use App\Model\Domain;
use Carbon\Carbon;


class DomainTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domain = new Domain();
        $domain->kode_domain = 'EDM';
        $domain->nama_domain = 'Evaluate Direct Monitor';
        $domain->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $domain->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $domain->save();

        $domain = new Domain();
        $domain->kode_domain = 'APO';
        $domain->nama_domain = 'Align Plan Organize';
        $domain->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $domain->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $domain->save();

        $domain = new Domain();
        $domain->kode_domain = 'BAI';
        $domain->nama_domain = 'Build Acquiere Implement';
        $domain->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $domain->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $domain->save();

        $domain = new Domain();
        $domain->kode_domain = 'DSS';
        $domain->nama_domain = 'Deliver Service Support';
        $domain->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $domain->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $domain->save();

        $domain = new Domain();
        $domain->kode_domain = 'MEA';
        $domain->nama_domain = 'Monitor Evaluate Assess';
        $domain->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $domain->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $domain->save();
    }
}
