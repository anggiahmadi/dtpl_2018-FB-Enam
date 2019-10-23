<?php

use Illuminate\Database\Seeder;

class InitialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DELETE DATA TO USERS TABLE */
        DB::table('users')->delete();

        /* INSERT DATA TO USERS TABLE */
        DB::table('users')->insert([
            'id' => 1,
            'name' => 'kelompok 6',
            'address' => 'Jakarta',
            'email' => 'piknik@rakitek.com',
            'password' => bcrypt('piknikyuk2019')
        ]);

        /* DELETE DATA TO CATEGORIES TABLE */
        DB::table('categories')->delete();

        /* INSERT DATA TO CATEGORIES TABLE */
        DB::table('categories')->insert([
            'id' => 1, 'code' => '01', 'name' => 'Wisata Bahari'
        ]);
        DB::table('categories')->insert([
            'id' => 2, 'code' => '02', 'name' => 'Wisata Budaya'
        ]);
        DB::table('categories')->insert([
            'id' => 3, 'code' => '03', 'name' => 'Wisata Kuliner'
        ]);
        DB::table('categories')->insert([
            'id' => 4, 'code' => '04', 'name' => 'Wisata Rekreasi'
        ]);
        DB::table('categories')->insert([
            'id' => 5, 'code' => '05', 'name' => 'Wisata Alam'
        ]);

        /* DELETE DATA TO SERVICE PROVIDER TYPES TABLE */
        DB::table('service_provider_types')->delete();

        /* INSERT DATA TO SERVICE PROVIDER TYPES TABLE */
        DB::table('service_provider_types')->insert([
            'id' => 1, 'code' => '01', 'name' => 'Tour Guide'
        ]);
        DB::table('service_provider_types')->insert([
            'id' => 2, 'code' => '02', 'name' => 'Fotografer'
        ]);

        /* DELETE DATA TO LODGEMENTS AND LODGMENT TYPES TABLE */
        DB::table('lodgements')->delete();
        DB::table('lodgement_types')->delete();
        /* INSERT DATA TO LODGEMENTS AND LODGMENT TYPES TABLE */
        DB::table('lodgements')->insert([
            'id' => 1, 'code' => 'HTL-01', 'name' => 'Hotel Jakarta', 'location' => 'Jakarta', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.'
        ]);
    }
}
