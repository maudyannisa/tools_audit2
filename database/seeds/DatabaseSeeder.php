<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PerusahaanTableSeeder::class);
        $this->call(Dokumen_AuditeeTableSeeder::class);
        $this->call(DomainTableSeeder::class);
        $this->call(SubdomainTableSeeder::class);
        $this->call(SubdomainProsesTableSeeder::class);
        
    }
}
