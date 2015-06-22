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

        $this->call('RolesTableSeeder');
        $this->call('CompaniesTableSeeder');
        $this->call('UsersTableSeeder');
        $this->call('CountriesTableSeeder');



        Model::reguard();
    }
}
