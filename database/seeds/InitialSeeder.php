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
            'id' => 1, 'code' => 'HTL-01', 'name' => 'Aston Rasuna Jakarta','default_picture' => 'uploads/wisata/01_jakarta/jakarta_aston_rasuna.jpg', 'location' => 'Jakarta', 'desc' => 'Aston Rasuna is preparing some attractive deals to welcoming Christmas and New Year 2017 such as Express Your Thankgiving - food promotion and year-end celeberation with theme An Evening of Batavia Glamour. Express Your Thanksgiving provide whole roasted turkey (with delivery service) that can be enjoyed together with family or friend at home.'
        ]);
        DB::table('lodgements')->insert([
            'id' => 2, 'code' => 'HTL-02', 'name' => 'Aston Kuningan Suites','default_picture' => 'uploads/wisata/01_jakarta/jakarta_aston_kuningan.jpg', 'location' => 'Jakarta', 'desc' => 'Aston Kuningan Rasuna is preparing some attractive deals to welcoming Christmas and New Year 2017 such as Express Your Thankgiving - food promotion and year-end celeberation with theme An Evening of Batavia Glamour. Express Your Thanksgiving provide whole roasted turkey (with delivery service) that can be enjoyed together with family or friend at home.'
        ]);

        /* DELETE DATA TO TOURISM_SITES TABLE */
        DB::table('tourism_sites')->delete();
        /* INSERT DATA TO TOURISM_SITES TABLE */
        DB::table('tourism_sites')->insert([
            'id' => 1, 'code' => 'TS001', 'name' => 'Dunia Fantasi', 'desc' => 'Dunia Fantasi adalah salah satu tempat rekresi yang tepat untuk wahana bermain dan berkumpul bersama keluarga atau teman.', 'location' => 'jakarta', 'price' => '125000', 'default_picture' => 'uploads/wisata/01_jakarta/dufan.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 2, 'code' => 'TS002', 'name' => 'Kota Tua', 'desc' => 'Kota Tua merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Jakarta.', 'location' => 'jakarta', 'price' => '5000', 'default_picture' => 'uploads/wisata/01_jakarta/kota_tua.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 3, 'code' => 'TS003', 'name' => 'Jakarta Aquarium', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.', 'location' => 'jakarta', 'price' => '150000', 'default_picture' => 'uploads/wisata/01_jakarta/jakarta_aquarium.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 4, 'code' => 'TS004', 'name' => 'Candi Prambanan', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.', 'location' => 'jogja', 'price' => '5000', 'default_picture' => 'uploads/wisata/02_jogja/candi_prambanan.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 5, 'code' => 'TS005', 'name' => 'Candi Borobudur', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.', 'location' => 'jogja', 'price' => '5000', 'default_picture' => 'uploads/wisata/02_jogja/candi_borobudur.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 6, 'code' => 'TS006', 'name' => 'Hutan Pinus', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.', 'location' => 'jogja', 'price' => '15000', 'default_picture' => 'uploads/wisata/02_jogja/hutan_pinus.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 7, 'code' => 'TS007', 'name' => 'Bukit Kolom', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.', 'location' => 'jawa timur', 'price' => '10000', 'default_picture' => 'uploads/wisata/03_jawa_timur/bukit_kolam.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 8, 'code' => 'TS008', 'name' => 'Madakari Bromo', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.', 'location' => 'jawa timur', 'price' => '10000', 'default_picture' => 'uploads/wisata/03_jawa_timur/bukit_kolam.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 9, 'code' => 'TS009', 'name' => 'Bukit Kolom', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.', 'location' => 'jawa timur', 'price' => '10000', 'default_picture' => 'uploads/wisata/03_jawa_timur/bukit_kolam.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 10, 'code' => 'TS010', 'name' => 'Dataran Tinggi Dieng', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.', 'location' => 'jawa tengah', 'price' => '10000', 'default_picture' => 'uploads/wisata/04_jawa_tengah/dieng.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 11, 'code' => 'TS011', 'name' => 'Kutabawa Flower Garden', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.', 'location' => 'jawa tengah', 'price' => '10000', 'default_picture' => 'uploads/wisata/04_jawa_tengah/kutabawa_flower_garden.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 12, 'code' => 'TS012', 'name' => 'Taman Air Tlatar', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.', 'location' => 'jawa tengah', 'price' => '10000', 'default_picture' => 'uploads/wisata/04_jawa_tengah/taman_air_tlatar.png'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 13, 'code' => 'TS013', 'name' => 'Farm House Lembang', 'desc' => 'Farm House Lembang merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Bandung.', 'location' => 'jawa barat', 'price' => '30000', 'default_picture' => 'uploads/wisata/05_jawa_barat/farm_house.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 14, 'code' => 'TS014', 'name' => 'Dusun Bambu', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.', 'location' => 'jawa barat', 'price' => '30000', 'default_picture' => 'uploads/wisata/05_jawa_barat/farm_house.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 15, 'code' => 'TS015', 'name' => 'Depok Fantasi', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.', 'location' => 'jawa barat', 'price' => '30000', 'default_picture' => 'uploads/wisata/05_jawa_barat/depok_fantasi.jpg'
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

        /* DELETE DATA TO TOURISM_SITES TABLE */
        DB::table('packages')->delete();
        /* INSERT DATA TO PACKAGES TABLE */
        DB::table('packages')->insert([
            'id' => 1, 'code' => 'P001', 'name' => 'Paket Rekreasi Jakarta', 'desc' => 'Dunia Fantasi adalah salah satu tempat rekresi yang tepat untuk wahana bermain dan berkumpul bersama keluarga atau teman.', 'location' => 'Jakarta', 'price' => '3000000', 'default_picture' => 'uploads/wisata/01_jakarta/dufan.jpg'
        ]);
        DB::table('packages')->insert([
            'id' => 2, 'code' => 'P002', 'name' => 'Paket Wisata Lembang', 'desc' => 'Lembang merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Bandung.', 'location' => 'Bandung', 'price' => '500000', 'default_picture' => 'uploads/wisata/05_jawa_barat/dusun_bambu.jpg'
        ]);
        DB::table('packages')->insert([
            'id' => 3, 'code' => 'P003', 'name' => 'Paket Wisata Kepulauan Seribu', 'desc' => 'Kepulauan seribu merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Jakarta.', 'location' => 'Jakarta', 'price' => '400000', 'default_picture' => 'uploads/wisata/01_jakarta/kota_tua.jpg'
        ]);
    }
}
