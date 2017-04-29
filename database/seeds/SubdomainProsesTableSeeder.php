<?php

use Illuminate\Database\Seeder;
use App\Model\Subdomain_Proses;
use Carbon\Carbon;


class SubdomainProsesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subdomain_proses = new Subdomain_Proses();


        $subdomain_proses->id_domain = '1';
        $subdomain_proses->id_subdomain = '1';
        $subdomain_proses->kode_subdomain_proses = 'EDM01.01';
        $subdomain_proses->nama_subdomain_proses = 'Evaluate the governance system.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '1';
        $subdomain_proses->id_subdomain = '1';
        $subdomain_proses->kode_subdomain_proses = 'EDM01.02';
        $subdomain_proses->nama_subdomain_proses = 'Direct the governance system..';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '1';
        $subdomain_proses->id_subdomain = '1';
        $subdomain_proses->kode_subdomain_proses = 'EDM01.03';
        $subdomain_proses->nama_subdomain_proses = 'Monitor the governance system..';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== EDM02 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '1';
        $subdomain_proses->id_subdomain = '2';
        $subdomain_proses->kode_subdomain_proses = 'EDM02.01';
        $subdomain_proses->nama_subdomain_proses = 'Evaluate value optimisation.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '1';
        $subdomain_proses->id_subdomain = '2';
        $subdomain_proses->kode_subdomain_proses = 'EDM02.02';
        $subdomain_proses->nama_subdomain_proses = 'Direct value optimisation.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '1';
        $subdomain_proses->id_subdomain = '2';
        $subdomain_proses->kode_subdomain_proses = 'EDM02.03';
        $subdomain_proses->nama_subdomain_proses = 'Monitor value optimisation.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== EDM03 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '1';
        $subdomain_proses->id_subdomain = '3';
        $subdomain_proses->kode_subdomain_proses = 'EDM03.01';
        $subdomain_proses->nama_subdomain_proses = 'Evaluate risk management.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '1';
        $subdomain_proses->id_subdomain = '3';
        $subdomain_proses->kode_subdomain_proses = 'EDM03.02';
        $subdomain_proses->nama_subdomain_proses = 'Direct risk management.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '1';
        $subdomain_proses->id_subdomain = '3';
        $subdomain_proses->kode_subdomain_proses = 'EDM03.03';
        $subdomain_proses->nama_subdomain_proses = 'Monitor risk management.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== EDM04 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '1';
        $subdomain_proses->id_subdomain = '4';
        $subdomain_proses->kode_subdomain_proses = 'EDM04.01';
        $subdomain_proses->nama_subdomain_proses = 'Evaluate resource management.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '1';
        $subdomain_proses->id_subdomain = '4';
        $subdomain_proses->kode_subdomain_proses = 'EDM04.02';
        $subdomain_proses->nama_subdomain_proses = 'Direct resource management.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '1';
        $subdomain_proses->id_subdomain = '4';
        $subdomain_proses->kode_subdomain_proses = 'EDM04.03';
        $subdomain_proses->nama_subdomain_proses = 'Monitor resource management.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== EDM05 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '1';
        $subdomain_proses->id_subdomain = '5';
        $subdomain_proses->kode_subdomain_proses = 'EDM05.01';
        $subdomain_proses->nama_subdomain_proses = 'Evaluate resource management.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '1';
        $subdomain_proses->id_subdomain = '5';
        $subdomain_proses->kode_subdomain_proses = 'EDM05.02';
        $subdomain_proses->nama_subdomain_proses = 'Direct resource management.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '1';
        $subdomain_proses->id_subdomain = '5';
        $subdomain_proses->kode_subdomain_proses = 'EDM05.03';
        $subdomain_proses->nama_subdomain_proses = 'Monitor resource management.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== APO01 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '6';
        $subdomain_proses->kode_subdomain_proses = 'APO01.01';
        $subdomain_proses->nama_subdomain_proses = 'Define the organisational structure.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '6';
        $subdomain_proses->kode_subdomain_proses = 'APO01.02';
        $subdomain_proses->nama_subdomain_proses = 'Establish roles and responsibilities.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '6';
        $subdomain_proses->kode_subdomain_proses = 'APO01.03';
        $subdomain_proses->nama_subdomain_proses = 'Maintain the enablers of the management system.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '6';
        $subdomain_proses->kode_subdomain_proses = 'APO01.04';
        $subdomain_proses->nama_subdomain_proses = 'Communicate Management Objectives and Direction';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '6';
        $subdomain_proses->kode_subdomain_proses = 'APO01.05';
        $subdomain_proses->nama_subdomain_proses = 'Optimisation the Placement of the IT Function.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '6';
        $subdomain_proses->kode_subdomain_proses = 'APO01.06';
        $subdomain_proses->nama_subdomain_proses = 'Define Information (data) and System Ownership.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '6';
        $subdomain_proses->kode_subdomain_proses = 'APO01.07';
        $subdomain_proses->nama_subdomain_proses = 'Manage Continual Improvement of Processes.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '6';
        $subdomain_proses->kode_subdomain_proses = 'APO01.08';
        $subdomain_proses->nama_subdomain_proses = 'Monitor resource management.Ensure Compliance with Policies and Procedures.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== APO02 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '7';
        $subdomain_proses->kode_subdomain_proses = 'APO02.01';
        $subdomain_proses->nama_subdomain_proses = 'Understand enterprise direction.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '7';
        $subdomain_proses->kode_subdomain_proses = 'APO02.02';
        $subdomain_proses->nama_subdomain_proses = 'Assess the current environment, capabilities and performance.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '7';
        $subdomain_proses->kode_subdomain_proses = 'APO02.03';
        $subdomain_proses->nama_subdomain_proses = 'Define the target IT capabilities.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '7';
        $subdomain_proses->kode_subdomain_proses = 'APO02.04';
        $subdomain_proses->nama_subdomain_proses = 'Conduct a gap analysis.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '7';
        $subdomain_proses->kode_subdomain_proses = 'APO02.05';
        $subdomain_proses->nama_subdomain_proses = 'Define the strategic plan and road map.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '7';
        $subdomain_proses->kode_subdomain_proses = 'APO02.06';
        $subdomain_proses->nama_subdomain_proses = 'Communicate the IT strategy and direction.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== APO03 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '8';
        $subdomain_proses->kode_subdomain_proses = 'APO03.01';
        $subdomain_proses->nama_subdomain_proses = 'Develop the enterprise architechture vision';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '8';
        $subdomain_proses->kode_subdomain_proses = 'APO03.02';
        $subdomain_proses->nama_subdomain_proses = 'Define reference architechture';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '8';
        $subdomain_proses->kode_subdomain_proses = 'APO03.03';
        $subdomain_proses->nama_subdomain_proses = 'Select opportunities and solutions';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '8';
        $subdomain_proses->kode_subdomain_proses = 'APO03.04';
        $subdomain_proses->nama_subdomain_proses = 'Define architechture implementation';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '8';
        $subdomain_proses->kode_subdomain_proses = 'APO03.05';
        $subdomain_proses->nama_subdomain_proses = 'Provide enterprise architechture services';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== APO04 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '9';
        $subdomain_proses->kode_subdomain_proses = 'APO04.01';
        $subdomain_proses->nama_subdomain_proses = 'Create an environment conducive to innovation';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '9';
        $subdomain_proses->kode_subdomain_proses = 'APO04.02';
        $subdomain_proses->nama_subdomain_proses = 'Maintain an understanding of the enterprise environment';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '9';
        $subdomain_proses->kode_subdomain_proses = 'APO04.03';
        $subdomain_proses->nama_subdomain_proses = 'Monitor and scan the technology environment';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '9';
        $subdomain_proses->kode_subdomain_proses = 'APO04.04';
        $subdomain_proses->nama_subdomain_proses = 'Assess the potential of emerging technologies and innovation ideas';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '9';
        $subdomain_proses->kode_subdomain_proses = 'APO04.05';
        $subdomain_proses->nama_subdomain_proses = 'Recommend appropriate further initiatives';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '9';
        $subdomain_proses->kode_subdomain_proses = 'APO04.06';
        $subdomain_proses->nama_subdomain_proses = 'Monitor the implementation and use of innovation';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== APO05 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '10';
        $subdomain_proses->kode_subdomain_proses = 'APO05.01';
        $subdomain_proses->nama_subdomain_proses = 'Establish Target Investment Mix';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '10';
        $subdomain_proses->kode_subdomain_proses = 'APO05.02';
        $subdomain_proses->nama_subdomain_proses = 'Determine The Availability and Sources of Funds';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '10';
        $subdomain_proses->kode_subdomain_proses = 'APO05.03';
        $subdomain_proses->nama_subdomain_proses = 'Evaluate and Select Programmes to Fund';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '10';
        $subdomain_proses->kode_subdomain_proses = 'APO05.04';
        $subdomain_proses->nama_subdomain_proses = 'Monitor, Optimise and Report on Investment Portfolio Investment';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '10';
        $subdomain_proses->kode_subdomain_proses = 'APO05.05';
        $subdomain_proses->nama_subdomain_proses = 'Maintain Portfolios';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '10';
        $subdomain_proses->kode_subdomain_proses = 'APO05.06';
        $subdomain_proses->nama_subdomain_proses = 'Manage Benefits Achievement';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== APO06 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '11';
        $subdomain_proses->kode_subdomain_proses = 'APO06.01';
        $subdomain_proses->nama_subdomain_proses = 'Manage finance and accounting';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '11';
        $subdomain_proses->kode_subdomain_proses = 'APO06.02';
        $subdomain_proses->nama_subdomain_proses = 'Prioritise resource allocations';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '11';
        $subdomain_proses->kode_subdomain_proses = 'APO06.03';
        $subdomain_proses->nama_subdomain_proses = 'Create and maintain budgets';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '11';
        $subdomain_proses->kode_subdomain_proses = 'APO06.04';
        $subdomain_proses->nama_subdomain_proses = 'Model and allocate costs';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '11';
        $subdomain_proses->kode_subdomain_proses = 'APO06.05';
        $subdomain_proses->nama_subdomain_proses = 'Manage costs';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== APO07 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '12';
        $subdomain_proses->kode_subdomain_proses = 'APO07.01';
        $subdomain_proses->nama_subdomain_proses = 'Maintain adequate and appropriate staffing';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '12';
        $subdomain_proses->kode_subdomain_proses = 'APO07.02';
        $subdomain_proses->nama_subdomain_proses = 'Identify key IT personnel';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '12';
        $subdomain_proses->kode_subdomain_proses = 'APO07.03';
        $subdomain_proses->nama_subdomain_proses = 'Maintain the skills and competencies of personnel';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '12';
        $subdomain_proses->kode_subdomain_proses = 'APO07.04';
        $subdomain_proses->nama_subdomain_proses = 'Evaluate employee job performance';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '12';
        $subdomain_proses->kode_subdomain_proses = 'APO07.05';
        $subdomain_proses->nama_subdomain_proses = 'Plan and track the usage of IT and business human resources';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '12';
        $subdomain_proses->kode_subdomain_proses = 'APO07.06';
        $subdomain_proses->nama_subdomain_proses = 'Manage contract staff';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== APO08 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '13';
        $subdomain_proses->kode_subdomain_proses = 'APO08.01';
        $subdomain_proses->nama_subdomain_proses = 'Understand business expectations';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '13';
        $subdomain_proses->kode_subdomain_proses = 'APO08.02';
        $subdomain_proses->nama_subdomain_proses = 'Identify opportunities, risks and constraints for IT to enchance the business';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '13';
        $subdomain_proses->kode_subdomain_proses = 'APO08.03';
        $subdomain_proses->nama_subdomain_proses = 'Manage business relationship';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '13';
        $subdomain_proses->kode_subdomain_proses = 'APO08.04';
        $subdomain_proses->nama_subdomain_proses = 'Co-ordinate and communicate';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '13';
        $subdomain_proses->kode_subdomain_proses = 'APO08.05';
        $subdomain_proses->nama_subdomain_proses = 'Provide input to the continual improvement of services';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== APO09 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '14';
        $subdomain_proses->kode_subdomain_proses = 'APO09.01';
        $subdomain_proses->nama_subdomain_proses = 'Identify IT services';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '14';
        $subdomain_proses->kode_subdomain_proses = 'APO09.02';
        $subdomain_proses->nama_subdomain_proses = 'Catalogue IT-enabled services';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '14';
        $subdomain_proses->kode_subdomain_proses = 'APO09.03';
        $subdomain_proses->nama_subdomain_proses = 'Define and prepare service agreements';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '14';
        $subdomain_proses->kode_subdomain_proses = 'APO09.04';
        $subdomain_proses->nama_subdomain_proses = 'Monitor and report service levels';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '14';
        $subdomain_proses->kode_subdomain_proses = 'APO09.05';
        $subdomain_proses->nama_subdomain_proses = 'Review service agreements and contracts';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== APO09 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '14';
        $subdomain_proses->kode_subdomain_proses = 'APO09.01';
        $subdomain_proses->nama_subdomain_proses = 'Identify IT services';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '14';
        $subdomain_proses->kode_subdomain_proses = 'APO09.02';
        $subdomain_proses->nama_subdomain_proses = 'Catalogue IT-enabled services';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '14';
        $subdomain_proses->kode_subdomain_proses = 'APO09.03';
        $subdomain_proses->nama_subdomain_proses = 'Define and prepare service agreements';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '14';
        $subdomain_proses->kode_subdomain_proses = 'APO09.04';
        $subdomain_proses->nama_subdomain_proses = 'Monitor and report service levels';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '14';
        $subdomain_proses->kode_subdomain_proses = 'APO09.05';
        $subdomain_proses->nama_subdomain_proses = 'Review service agreements and contracts';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== APO10 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '15';
        $subdomain_proses->kode_subdomain_proses = 'APO10.01';
        $subdomain_proses->nama_subdomain_proses = 'Identify and evaluate supplier relationships and contracts';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '15';
        $subdomain_proses->kode_subdomain_proses = 'APO10.02';
        $subdomain_proses->nama_subdomain_proses = 'Select suppliers';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '15';
        $subdomain_proses->kode_subdomain_proses = 'APO10.03';
        $subdomain_proses->nama_subdomain_proses = 'Manage supplier relationships and contracts';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '15';
        $subdomain_proses->kode_subdomain_proses = 'APO10.04';
        $subdomain_proses->nama_subdomain_proses = 'Manage supplier risk';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '15';
        $subdomain_proses->kode_subdomain_proses = 'APO10.05';
        $subdomain_proses->nama_subdomain_proses = 'Monitor supplier performance and compliance';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== APO11 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '16';
        $subdomain_proses->kode_subdomain_proses = 'APO11.01';
        $subdomain_proses->nama_subdomain_proses = 'Establish a quality management system (QMS)';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '16';
        $subdomain_proses->kode_subdomain_proses = 'APO11.02';
        $subdomain_proses->nama_subdomain_proses = 'Define and manage quality standards, practices and procedures';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '16';
        $subdomain_proses->kode_subdomain_proses = 'APO11.03';
        $subdomain_proses->nama_subdomain_proses = 'Focus quality management on customers';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '16';
        $subdomain_proses->kode_subdomain_proses = 'APO11.04';
        $subdomain_proses->nama_subdomain_proses = 'Perform quality monitoring, control and reviews';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '16';
        $subdomain_proses->kode_subdomain_proses = 'APO11.05';
        $subdomain_proses->nama_subdomain_proses = 'Integrate quality management into solutions for development and service delivery';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '16';
        $subdomain_proses->kode_subdomain_proses = 'APO11.06';
        $subdomain_proses->nama_subdomain_proses = 'Ensure Continuous Improvement';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== APO12 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '17';
        $subdomain_proses->kode_subdomain_proses = 'APO12.01';
        $subdomain_proses->nama_subdomain_proses = 'Collect data';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '17';
        $subdomain_proses->kode_subdomain_proses = 'APO12.02';
        $subdomain_proses->nama_subdomain_proses = 'Analyse risk';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '17';
        $subdomain_proses->kode_subdomain_proses = 'APO12.03';
        $subdomain_proses->nama_subdomain_proses = 'Maintain a risk profile';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '17';
        $subdomain_proses->kode_subdomain_proses = 'APO12.04';
        $subdomain_proses->nama_subdomain_proses = 'Articulate risk';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '17';
        $subdomain_proses->kode_subdomain_proses = 'APO12.05';
        $subdomain_proses->nama_subdomain_proses = 'Define a risk management action portfolio';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '17';
        $subdomain_proses->kode_subdomain_proses = 'APO12.06';
        $subdomain_proses->nama_subdomain_proses = 'Respond to risk';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== APO13 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '18';
        $subdomain_proses->kode_subdomain_proses = 'APO13.01';
        $subdomain_proses->nama_subdomain_proses = 'Establish and maintain an information security management system (ISMS)';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '18';
        $subdomain_proses->kode_subdomain_proses = 'APO13.02';
        $subdomain_proses->nama_subdomain_proses = 'Define and manage an information security risk treatment plan';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '2';
        $subdomain_proses->id_subdomain = '18';
        $subdomain_proses->kode_subdomain_proses = 'APO13.03';
        $subdomain_proses->nama_subdomain_proses = 'Monitor and review the ISMS';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== BAI01 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '19';
        $subdomain_proses->kode_subdomain_proses = 'BAI01.01';
        $subdomain_proses->nama_subdomain_proses = 'Maintain a standard approach for programme and project management';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '19';
        $subdomain_proses->kode_subdomain_proses = 'BAI01.02';
        $subdomain_proses->nama_subdomain_proses = 'Initiate a programme';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '19';
        $subdomain_proses->kode_subdomain_proses = 'BAI01.03';
        $subdomain_proses->nama_subdomain_proses = 'Manage stakeholder engagement';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '19';
        $subdomain_proses->kode_subdomain_proses = 'BAI01.04';
        $subdomain_proses->nama_subdomain_proses = 'Develop and mantain the programme plan';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '19';
        $subdomain_proses->kode_subdomain_proses = 'BAI01.05';
        $subdomain_proses->nama_subdomain_proses = 'Launch and execute the programme';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '19';
        $subdomain_proses->kode_subdomain_proses = 'BAI01.06';
        $subdomain_proses->nama_subdomain_proses = 'Monitor, control and report on the programme outcomes';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

                $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '19';
        $subdomain_proses->kode_subdomain_proses = 'BAI01.07';
        $subdomain_proses->nama_subdomain_proses = 'Start up and initiate projects within a programme';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '19';
        $subdomain_proses->kode_subdomain_proses = 'BAI01.08';
        $subdomain_proses->nama_subdomain_proses = 'Plan projects';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '19';
        $subdomain_proses->kode_subdomain_proses = 'BAI01.09';
        $subdomain_proses->nama_subdomain_proses = 'Manage programme and project quality';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '19';
        $subdomain_proses->kode_subdomain_proses = 'BAI01.10';
        $subdomain_proses->nama_subdomain_proses = 'Manage programme and project risk';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '19';
        $subdomain_proses->kode_subdomain_proses = 'BAI01.11';
        $subdomain_proses->nama_subdomain_proses = 'Monitor and control a project';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '19';
        $subdomain_proses->kode_subdomain_proses = 'BAI01.12';
        $subdomain_proses->nama_subdomain_proses = 'Execute a project';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '19';
        $subdomain_proses->kode_subdomain_proses = 'BAI01.13';
        $subdomain_proses->nama_subdomain_proses = 'Close a project';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '19';
        $subdomain_proses->kode_subdomain_proses = 'BAI01.14';
        $subdomain_proses->nama_subdomain_proses = 'Close a programme';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== BAI02 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '20';
        $subdomain_proses->kode_subdomain_proses = 'BAI02.01';
        $subdomain_proses->nama_subdomain_proses = 'Define and maintain business functional and technical requirements';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '20';
        $subdomain_proses->kode_subdomain_proses = 'BAI02.02';
        $subdomain_proses->nama_subdomain_proses = 'Perform a feasibility study and formulate alternative solutions';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '20';
        $subdomain_proses->kode_subdomain_proses = 'BAI02.03';
        $subdomain_proses->nama_subdomain_proses = 'Manage requirements risk';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '20';
        $subdomain_proses->kode_subdomain_proses = 'BAI02.04';
        $subdomain_proses->nama_subdomain_proses = 'Obtain approval of requirements and solutions';

        //========================== BAI03 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '21';
        $subdomain_proses->kode_subdomain_proses = 'BAI03.01';
        $subdomain_proses->nama_subdomain_proses = 'Design high-level solutions';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '21';
        $subdomain_proses->kode_subdomain_proses = 'BAI03.02';
        $subdomain_proses->nama_subdomain_proses = 'Design detailed solution component';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '21';
        $subdomain_proses->kode_subdomain_proses = 'BAI03.03';
        $subdomain_proses->nama_subdomain_proses = 'Develop solution components';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '21';
        $subdomain_proses->kode_subdomain_proses = 'BAI03.04';
        $subdomain_proses->nama_subdomain_proses = 'Procure solution components';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '21';
        $subdomain_proses->kode_subdomain_proses = 'BAI03.05';
        $subdomain_proses->nama_subdomain_proses = 'Build solutions';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '21';
        $subdomain_proses->kode_subdomain_proses = 'BAI03.06';
        $subdomain_proses->nama_subdomain_proses = 'Perform quality assurance';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '21';
        $subdomain_proses->kode_subdomain_proses = 'BAI03.07';
        $subdomain_proses->nama_subdomain_proses = 'Prepare for solution testing';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '21';
        $subdomain_proses->kode_subdomain_proses = 'BAI03.08';
        $subdomain_proses->nama_subdomain_proses = 'Execute solution testing';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '21';
        $subdomain_proses->kode_subdomain_proses = 'BAI03.09';
        $subdomain_proses->nama_subdomain_proses = 'Manage changes to requirement';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '21';
        $subdomain_proses->kode_subdomain_proses = 'BAI03.10';
        $subdomain_proses->nama_subdomain_proses = 'Maintain Solutions';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '21';
        $subdomain_proses->kode_subdomain_proses = 'BAI03.11';
        $subdomain_proses->nama_subdomain_proses = 'Define IT services and maintain the service portfolio';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== BAI04 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '22';
        $subdomain_proses->kode_subdomain_proses = 'BAI04.01';
        $subdomain_proses->nama_subdomain_proses = 'Assess current availability, performance and capacity and create a baseline';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '22';
        $subdomain_proses->kode_subdomain_proses = 'BAI04.02';
        $subdomain_proses->nama_subdomain_proses = 'Assess business impact';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '22';
        $subdomain_proses->kode_subdomain_proses = 'BAI04.03';
        $subdomain_proses->nama_subdomain_proses = 'Plan for new or changed service requirements';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '22';
        $subdomain_proses->kode_subdomain_proses = 'BAI04.04';
        $subdomain_proses->nama_subdomain_proses = 'Monitor and review availability and capacity';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '22';
        $subdomain_proses->kode_subdomain_proses = 'BAI04.05';
        $subdomain_proses->nama_subdomain_proses = 'Investigate and address availability, performance and capacity issues';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== BAI05 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '23';
        $subdomain_proses->kode_subdomain_proses = 'BAI05.01';
        $subdomain_proses->nama_subdomain_proses = 'Establish the Desire to Change';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '23';
        $subdomain_proses->kode_subdomain_proses = 'BAI05.02';
        $subdomain_proses->nama_subdomain_proses = 'Form an Effective Implementation Team';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '23';
        $subdomain_proses->kode_subdomain_proses = 'BAI05.03';
        $subdomain_proses->nama_subdomain_proses = 'Communicate Desired Vision';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '23';
        $subdomain_proses->kode_subdomain_proses = 'BAI05.04';
        $subdomain_proses->nama_subdomain_proses = 'Empower Role Players and Identify Short-term Wins';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '23';
        $subdomain_proses->kode_subdomain_proses = 'BAI05.05';
        $subdomain_proses->nama_subdomain_proses = 'Enable Operation and Use';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '23';
        $subdomain_proses->kode_subdomain_proses = 'BAI05.06';
        $subdomain_proses->nama_subdomain_proses = 'Embed New Approaches';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '23';
        $subdomain_proses->kode_subdomain_proses = 'BAI05.06';
        $subdomain_proses->nama_subdomain_proses = 'Sustain Changes.';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== BAI06 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '24';
        $subdomain_proses->kode_subdomain_proses = 'BAI06.01';
        $subdomain_proses->nama_subdomain_proses = 'Perform impact assessment; prioritise and authorize changes';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '24';
        $subdomain_proses->kode_subdomain_proses = 'BAI06.02';
        $subdomain_proses->nama_subdomain_proses = 'Manage emergency changes';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '24';
        $subdomain_proses->kode_subdomain_proses = 'BAI06.03';
        $subdomain_proses->nama_subdomain_proses = 'Track and report change status';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '24';
        $subdomain_proses->kode_subdomain_proses = 'BAI06.04';
        $subdomain_proses->nama_subdomain_proses = 'Close and document the changes';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== BAI07 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '25';
        $subdomain_proses->kode_subdomain_proses = 'BAI07.01';
        $subdomain_proses->nama_subdomain_proses = 'Establish an implementation plan';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '25';
        $subdomain_proses->kode_subdomain_proses = 'BAI07.02';
        $subdomain_proses->nama_subdomain_proses = 'Plan Business Process, System and Data Conversion';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '25';
        $subdomain_proses->kode_subdomain_proses = 'BAI07.03';
        $subdomain_proses->nama_subdomain_proses = 'Plan acceptance tests';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '25';
        $subdomain_proses->kode_subdomain_proses = 'BAI07.04';
        $subdomain_proses->nama_subdomain_proses = 'Establish a test environment';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '25';
        $subdomain_proses->kode_subdomain_proses = 'BAI07.05';
        $subdomain_proses->nama_subdomain_proses = 'Perform acceptance tests';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '25';
        $subdomain_proses->kode_subdomain_proses = 'BAI07.06';
        $subdomain_proses->nama_subdomain_proses = 'Promote to production and manage releases';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '25';
        $subdomain_proses->kode_subdomain_proses = 'BAI07.07';
        $subdomain_proses->nama_subdomain_proses = 'Provide early production support';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '25';
        $subdomain_proses->kode_subdomain_proses = 'BAI07.08';
        $subdomain_proses->nama_subdomain_proses = 'Perform a post - implementation review';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== BAI08 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '26';
        $subdomain_proses->kode_subdomain_proses = 'BAI08.01';
        $subdomain_proses->nama_subdomain_proses = 'Nurture and facilitate a knowledge-sharing culture';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '26';
        $subdomain_proses->kode_subdomain_proses = 'BAI08.02';
        $subdomain_proses->nama_subdomain_proses = 'Identify and classify sources of information';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '26';
        $subdomain_proses->kode_subdomain_proses = 'BAI08.03';
        $subdomain_proses->nama_subdomain_proses = 'Organise and contextualise information into knowledge';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '26';
        $subdomain_proses->kode_subdomain_proses = 'BAI08.04';
        $subdomain_proses->nama_subdomain_proses = 'Use and share knowledge';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '26';
        $subdomain_proses->kode_subdomain_proses = 'BAI08.05';
        $subdomain_proses->nama_subdomain_proses = 'Evaluate and retire information';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== BAI09 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '27';
        $subdomain_proses->kode_subdomain_proses = 'BAI09.01';
        $subdomain_proses->nama_subdomain_proses = 'Identify and record current assets';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '27';
        $subdomain_proses->kode_subdomain_proses = 'BAI09.02';
        $subdomain_proses->nama_subdomain_proses = 'Manage critical assets';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '27';
        $subdomain_proses->kode_subdomain_proses = 'BAI09.03';
        $subdomain_proses->nama_subdomain_proses = 'Manage the asset life cycle';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '27';
        $subdomain_proses->kode_subdomain_proses = 'BAI09.04';
        $subdomain_proses->nama_subdomain_proses = 'Optimise asset costs';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '27';
        $subdomain_proses->kode_subdomain_proses = 'BAI09.05';
        $subdomain_proses->nama_subdomain_proses = 'Manage licences';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== BAI10 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '28';
        $subdomain_proses->kode_subdomain_proses = 'BAI10.01';
        $subdomain_proses->nama_subdomain_proses = 'Establish and mantain a configuration model';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '28';
        $subdomain_proses->kode_subdomain_proses = 'BAI10.02';
        $subdomain_proses->nama_subdomain_proses = 'Establish and maintain a configuration respository and a baseline';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '28';
        $subdomain_proses->kode_subdomain_proses = 'BAI10.03';
        $subdomain_proses->nama_subdomain_proses = 'Maintain and control configuration items';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '28';
        $subdomain_proses->kode_subdomain_proses = 'BAI10.04';
        $subdomain_proses->nama_subdomain_proses = 'Produce status and configuration reports';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '3';
        $subdomain_proses->id_subdomain = '28';
        $subdomain_proses->kode_subdomain_proses = 'BAI10.05';
        $subdomain_proses->nama_subdomain_proses = 'Verify and review integrity of the configuration repository';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== DSS01 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '29';
        $subdomain_proses->kode_subdomain_proses = 'DSS01.01';
        $subdomain_proses->nama_subdomain_proses = 'Perform operational procedures';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '29';
        $subdomain_proses->kode_subdomain_proses = 'DSS01.02';
        $subdomain_proses->nama_subdomain_proses = 'Manage outsourced IT services';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '29';
        $subdomain_proses->kode_subdomain_proses = 'DSS01.03';
        $subdomain_proses->nama_subdomain_proses = 'Monitor IT infrastructure';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '29';
        $subdomain_proses->kode_subdomain_proses = 'DSS01.04';
        $subdomain_proses->nama_subdomain_proses = 'Manage the environment';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '29';
        $subdomain_proses->kode_subdomain_proses = 'DSS01.05';
        $subdomain_proses->nama_subdomain_proses = 'Manage facilities';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== DSS02 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '30';
        $subdomain_proses->kode_subdomain_proses = 'DSS02.01';
        $subdomain_proses->nama_subdomain_proses = 'Define incident and service request classification schemes';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '30';
        $subdomain_proses->kode_subdomain_proses = 'DSS02.02';
        $subdomain_proses->nama_subdomain_proses = 'Record, classify and prioritise requests and incidents';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '30';
        $subdomain_proses->kode_subdomain_proses = 'DSS02.03';
        $subdomain_proses->nama_subdomain_proses = 'Verify, approve and fulfill service request';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '30';
        $subdomain_proses->kode_subdomain_proses = 'DSS02.04';
        $subdomain_proses->nama_subdomain_proses = 'Investigate, diagnose and allocate incid';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '30';
        $subdomain_proses->kode_subdomain_proses = 'DSS02.05';
        $subdomain_proses->nama_subdomain_proses = 'Resolve and recover from incidents';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '30';
        $subdomain_proses->kode_subdomain_proses = 'DSS02.056';
        $subdomain_proses->nama_subdomain_proses = 'Close service requests and incidents';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '30';
        $subdomain_proses->kode_subdomain_proses = 'DSS02.07';
        $subdomain_proses->nama_subdomain_proses = 'Track status and produce reports';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== DSS03 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '31';
        $subdomain_proses->kode_subdomain_proses = 'DSS03.01';
        $subdomain_proses->nama_subdomain_proses = 'Define incident and service request classification schemes';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '31';
        $subdomain_proses->kode_subdomain_proses = 'DSS03.02';
        $subdomain_proses->nama_subdomain_proses = 'Record, classify and prioritise requests and incidents';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '31';
        $subdomain_proses->kode_subdomain_proses = 'DSS03.03';
        $subdomain_proses->nama_subdomain_proses = 'Verify, approve and fulfill service request';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '31';
        $subdomain_proses->kode_subdomain_proses = 'DSS03.04';
        $subdomain_proses->nama_subdomain_proses = 'Investigate, diagnose and allocate incid';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '31';
        $subdomain_proses->kode_subdomain_proses = 'DSS03.05';
        $subdomain_proses->nama_subdomain_proses = 'Resolve and recover from incidents';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== DSS04 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '32';
        $subdomain_proses->kode_subdomain_proses = 'DSS04.01';
        $subdomain_proses->nama_subdomain_proses = 'Define the business continuity policy, objectives, and scope';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '32';
        $subdomain_proses->kode_subdomain_proses = 'DSS04.02';
        $subdomain_proses->nama_subdomain_proses = 'Maintain a continuity strategy';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '32';
        $subdomain_proses->kode_subdomain_proses = 'DSS04.03';
        $subdomain_proses->nama_subdomain_proses = 'Maintain a continuity strategy';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '32';
        $subdomain_proses->kode_subdomain_proses = 'DSS04.04';
        $subdomain_proses->nama_subdomain_proses = 'Exercise, test, and review the BCP';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '32';
        $subdomain_proses->kode_subdomain_proses = 'DSS04.05';
        $subdomain_proses->nama_subdomain_proses = 'Review, maintain and improve the continuity plan';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '32';
        $subdomain_proses->kode_subdomain_proses = 'DSS04.06';
        $subdomain_proses->nama_subdomain_proses = 'Conduct continuity plan training';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '32';
        $subdomain_proses->kode_subdomain_proses = 'DSS04.07';
        $subdomain_proses->nama_subdomain_proses = 'Manage backup arrangements';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '32';
        $subdomain_proses->kode_subdomain_proses = 'DSS04.08';
        $subdomain_proses->nama_subdomain_proses = 'Conduct a post – resumption review';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== DSS05 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '35';
        $subdomain_proses->kode_subdomain_proses = 'DSS05.01';
        $subdomain_proses->nama_subdomain_proses = 'Protect against malware';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '35';
        $subdomain_proses->kode_subdomain_proses = 'DSS05.02';
        $subdomain_proses->nama_subdomain_proses = 'Manage network and connectivity security';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '35';
        $subdomain_proses->kode_subdomain_proses = 'DSS05.03';
        $subdomain_proses->nama_subdomain_proses = 'Manage endpoint security';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '35';
        $subdomain_proses->kode_subdomain_proses = 'DSS05.04';
        $subdomain_proses->nama_subdomain_proses = 'Manage user identity and logical access';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '35';
        $subdomain_proses->kode_subdomain_proses = 'DSS05.05';
        $subdomain_proses->nama_subdomain_proses = 'Manage physical access to IT assets';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '35';
        $subdomain_proses->kode_subdomain_proses = 'DSS05.06';
        $subdomain_proses->nama_subdomain_proses = 'Manage sensitive documents and output devices';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '35';
        $subdomain_proses->kode_subdomain_proses = 'DSS05.07';
        $subdomain_proses->nama_subdomain_proses = 'Monitor the infrastructure for security-related events';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();   

        //========================== DSS06 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '35';
        $subdomain_proses->kode_subdomain_proses = 'DSS06.01';
        $subdomain_proses->nama_subdomain_proses = 'Align control activities embedded in business processes with enterprise objectives';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '35';
        $subdomain_proses->kode_subdomain_proses = 'DSS06.02';
        $subdomain_proses->nama_subdomain_proses = 'Control the processing of information';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '35';
        $subdomain_proses->kode_subdomain_proses = 'DSS06.03';
        $subdomain_proses->nama_subdomain_proses = 'Manage roles, responsibilities, access privileges and levels of authority';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '35';
        $subdomain_proses->kode_subdomain_proses = 'DSS06.04';
        $subdomain_proses->nama_subdomain_proses = 'Manage errors and exceptions';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '35';
        $subdomain_proses->kode_subdomain_proses = 'DSS06.05';
        $subdomain_proses->nama_subdomain_proses = 'Ensure traceability of information events and accountabilities';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '4';
        $subdomain_proses->id_subdomain = '35';
        $subdomain_proses->kode_subdomain_proses = 'DSS06.06';
        $subdomain_proses->nama_subdomain_proses = 'Secure information assets';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save(); 

        //========================== MEA01 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '36';
        $subdomain_proses->kode_subdomain_proses = 'MEA01.01';
        $subdomain_proses->nama_subdomain_proses = 'Establish a monitoring approach';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '36';
        $subdomain_proses->kode_subdomain_proses = 'MEA01.02';
        $subdomain_proses->nama_subdomain_proses = 'Set performance and conformance targets';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '36';
        $subdomain_proses->kode_subdomain_proses = 'MEA01.03';
        $subdomain_proses->nama_subdomain_proses = 'Collect and process performance and conformance data';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '36';
        $subdomain_proses->kode_subdomain_proses = 'MEA01.04';
        $subdomain_proses->nama_subdomain_proses = 'Analyse and report performance';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '36';
        $subdomain_proses->kode_subdomain_proses = 'MEA01.05';
        $subdomain_proses->nama_subdomain_proses = 'Ensure the implementation of corrective actions';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== MEA02 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '37';
        $subdomain_proses->kode_subdomain_proses = 'MEA02.01';
        $subdomain_proses->nama_subdomain_proses = 'Establish a monitoring approach';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '37';
        $subdomain_proses->kode_subdomain_proses = 'MEA02.02';
        $subdomain_proses->nama_subdomain_proses = 'Set performance and conformance targets';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '37';
        $subdomain_proses->kode_subdomain_proses = 'MEA02.03';
        $subdomain_proses->nama_subdomain_proses = 'Collect and process performance and conformance data';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '37';
        $subdomain_proses->kode_subdomain_proses = 'MEA02.04';
        $subdomain_proses->nama_subdomain_proses = 'Analyse and report performance';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '37';
        $subdomain_proses->kode_subdomain_proses = 'MEA02.05';
        $subdomain_proses->nama_subdomain_proses = 'Ensure the implementation of corrective actions';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '37';
        $subdomain_proses->kode_subdomain_proses = 'MEA02.06';
        $subdomain_proses->nama_subdomain_proses = 'Plan assurance initiatives';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '37';
        $subdomain_proses->kode_subdomain_proses = 'MEA02.07';
        $subdomain_proses->nama_subdomain_proses = 'Scope assurance initiatives';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '37';
        $subdomain_proses->kode_subdomain_proses = 'MEA02.08';
        $subdomain_proses->nama_subdomain_proses = 'Execute assurance initiatives';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        //========================== MEA03 ====================================
        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '38';
        $subdomain_proses->kode_subdomain_proses = 'MEA03.01';
        $subdomain_proses->nama_subdomain_proses = 'Identify external compliance requirements';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '38';
        $subdomain_proses->kode_subdomain_proses = 'MEA03.02';
        $subdomain_proses->nama_subdomain_proses = 'Optimise response to external requirements';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '38';
        $subdomain_proses->kode_subdomain_proses = 'MEA03.03';
        $subdomain_proses->nama_subdomain_proses = 'Confirm external compliance';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

        $subdomain_proses = new Subdomain_Proses();
        $subdomain_proses->id_domain = '5';
        $subdomain_proses->id_subdomain = '38';
        $subdomain_proses->kode_subdomain_proses = 'MEA03.04';
        $subdomain_proses->nama_subdomain_proses = 'Obtain assuramce of external compliance';
        $subdomain_proses->level_temuan = '';
        $subdomain_proses->level_target = '';
        $subdomain_proses->created_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->updated_at = Carbon::now()->format('Y-m-d H:i:s');
        $subdomain_proses->save();

    }
}
