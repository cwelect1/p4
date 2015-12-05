<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(ApplicationsTableSeeder::class);
        $this->call(EnvironmentsTableSeeder::class);
        $this->call(PartnersTableSeeder::class);
        $this->call(StatusTableSeeder::class);
        $this->call(TestRunsTableSeeder::class);
        $this->call(TestSuitesTableSeeder::class);
        $this->call(TestCasesTableSeeder::class);

        Model::reguard();
    }
}
