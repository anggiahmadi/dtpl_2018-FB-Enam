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

        /* INSERT DATA TO PACKAGES TABLE */
        DB::table('packages')->insert([
            'id' => 1, 'code' => 'P001', 'name' => 'Paket Rekreasi Jakarta', 'desc' => 'Dunia Fantasi adalah salah satu tempat rekresi yang tepat untuk wahana bermain dan berkumpul bersama keluarga atau teman.', 'location' => 'Jakarta', 'price' => '3000000'
        ]);
        DB::table('packages')->insert([
            'id' => 2, 'code' => 'P002', 'name' => 'Paket Wisata Lembang', 'desc' => 'Lembang merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Jakarta.', 'location' => 'Bandung', 'price' => '500000'
        ]);
        DB::table('packages')->insert([
            'id' => 3, 'code' => 'P003', 'name' => 'Paket Wisata Kepulauan Seribu', 'desc' => 'Kepulauan seribu merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Jakarta.', 'location' => 'Jakarta', 'price' => '400000'
        ]);


        /* INSERT DATA TO TOURISM_SITES TABLE */
        DB::table('tourism_sites')->insert([
            'id' => 1, 'code' => 'TS001', 'name' => 'Dunia Fantasi', 'desc' => 'Dunia Fantasi adalah salah satu tempat rekresi yang tepat untuk wahana bermain dan berkumpul bersama keluarga atau teman.', 'location' => 'Jakarta', 'price' => '125000'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 2, 'code' => 'TS002', 'name' => 'Kota Tua', 'desc' => 'Kota Tua merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Jakarta.', 'location' => 'Jakarta', 'price' => '5000'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 3, 'code' => 'TS003', 'name' => 'Farm House Lembang', 'desc' => 'Farm House Lembang merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Jakarta.', 'location' => 'Bandung', 'price' => '30000'
        ]);


        /* INSERT DATA TO TOURISM_SITES AND CATEGORIES TABLE */
        DB::table('t_s_and_c')->insert([
            'category_id' => 4, 'tourism_site_id' => '1'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 2, 'tourism_site_id' => '2'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 5, 'tourism_site_id' => '3'
        ]);

    }
}
