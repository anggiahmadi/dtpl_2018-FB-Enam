<?php

use App\Models\TourismSite;
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
        DB::table('service_providers')->delete();

        /* INSERT DATA TO SERVICE PROVIDER TYPES TABLE */
        DB::table('service_provider_types')->insert([
            'id' => 1, 'code' => '01', 'name' => 'Tour Guide'
        ]);
        DB::table('service_provider_types')->insert([
            'id' => 2, 'code' => '02', 'name' => 'Fotografer'
        ]);

        DB::table('service_providers')->insert([
            'id' => 1, 'code' => 'SP-01', 'name' => 'Mr. Ahmadi', 'price' => 200000, 'location' => 'Jakarta', 'default_picture' => 'uploads/wisata/01_jakarta/fotografer_jkt_01.jpg', 'desc' => 'Ahmadi adalah seorang fotografer pernikahan yang populer di Pulau Jawa, khususnya di Jakarta. Berawal dari sebuah hobby, Ahmadi mulai menekuni hobbynya sejak tahun 2011 dan merintis karirnya dalam dunia fotografi sejak 2014. Ahmadi fokus pada fotografi pernikahan dan telah memiliki karya hasi foto pernikahan di beberapa acara.'
        ]);
        DB::table('service_providers')->insert([
            'id' => 2, 'code' => 'SP-02', 'name' => 'Mr. Deddy', 'price' => 150000, 'location' => 'Jogjakarta', 'default_picture' => 'uploads/wisata/01_jakarta/fotografer_jkt_02.jpg', 'desc' => 'Deddy adalah seorang fotografer di Pulau Jawa, khususnya di Jogjakarta. Berawal dari sebuah hobby, Deddy mulai menekuni hobbynya sejak tahun 2015 dan aktif mengikuti aktivitas photography di kampus.'
        ]);
        DB::table('service_providers')->insert([
            'id' => 3, 'code' => 'SP-03', 'name' => 'Mr. Sacana', 'price' => 180000, 'location' => 'Bandung', 'default_picture' => 'uploads/wisata/01_jakarta/fotografer_jkt_04.jpg', 'desc' => 'Sacana adalah seorang fotografer terkenal di Bandung. Sacana memiliki beberapa keahlian, yaitu memotret pre-wedding, pernikahan, foto kelahiran, kehamilan, keluarga dan banyak lagi. Sacana menjadi fotografer pilihan utama para selebgram di Bandung.'
        ]);
        DB::table('service_providers')->insert([
            'id' => 4, 'code' => 'SP-04', 'name' => 'Ms. Mulyani', 'price' => 175000, 'location' => 'Bandung', 'default_picture' => 'uploads/wisata/01_jakarta/fotografer_jkt_05.jpg', 'desc' => 'Mulyani adalah pendatang baru dalam dunia fotografi di Indonesia. Fotografer wanita ini terkenal untuk pemotretan pre-wedding. Menunjukkan kesan romantis menjadi ciri dalam tiap fotonya. Hasil fotonya selalu disukai oleh para kliennya. Kini wanita yang sedak kuliah di MTI UI Salemba itu sudah memotret puluhan selebgram di Indonesia.'
        ]);
        DB::table('service_providers')->insert([
            'id' => 5, 'code' => 'SP-05', 'name' => 'Ms. Nove', 'price' => 175000, 'location' => 'Jakarta', 'default_picture' => 'uploads/wisata/01_jakarta/tour_guide_jkt_03.jpg', 'desc' => 'Nove mempunyai pengalaman menjadi pemandu wisata. Sedang menjalani perkuliahan di sebuah Universitas Negeri di Jakarta. Fasih dalam berbahasa Inggris dan Indonesia.'
        ]);
        DB::table('service_providers')->insert([
            'id' => 6, 'code' => 'SP-06', 'name' => 'Ms. Andina', 'price' => 175000, 'location' => 'Jakarta', 'default_picture' => 'uploads/wisata/01_jakarta/tour_guide_jkt_05.jpg', 'desc' => 'Andina mempunyai pengalaman menjadi pemandu wisata. Sedang menjalani perkuliahan di sebuah Universitas Negeri di Jakarta. Fasih dalam berbahasa Inggris dan Indonesia.'
        ]);


        DB::table('s_p_and_s_p_t')->insert([
            'service_provider_id' => 1, 'service_provider_type_id' => 2
        ]);
        DB::table('s_p_and_s_p_t')->insert([
            'service_provider_id' => 1, 'service_provider_type_id' => 1
        ]);
        DB::table('s_p_and_s_p_t')->insert([
            'service_provider_id' => 2, 'service_provider_type_id' => 2
        ]);
        DB::table('s_p_and_s_p_t')->insert([
            'service_provider_id' => 3, 'service_provider_type_id' => 2
        ]);
        DB::table('s_p_and_s_p_t')->insert([
            'service_provider_id' => 4, 'service_provider_type_id' => 1
        ]);

        /* DELETE DATA TO LODGEMENTS AND LODGMENT TYPES TABLE */
       
        DB::table('lodgement_types')->delete();
        DB::table('lodgements')->delete();

 
        /* INSERT DATA TO LODGEMENTS AND LODGMENT TYPES TABLE */
        DB::table('lodgements')->insert([
            'id' => 1, 'code' => 'HTL-01', 'name' => 'Aston Rasuna Jakarta','default_picture' => 'uploads/wisata/01_jakarta/jakarta_aston_rasuna.jpg', 'location' => 'Jakarta', 'desc' => 'Aston Rasuna is preparing some attractive deals to welcoming Christmas and New Year 2017 such as Express Your Thankgiving - food promotion and year-end celeberation with theme An Evening of Batavia Glamour. Express Your Thanksgiving provide whole roasted turkey (with delivery service) that can be enjoyed together with family or friend at home.','price' =>'1150710'
        ]);
        DB::table('lodgement_types')->insert([
            'lodgement_id' => 1, 'code' => 'HTL-01-DBL', 'name' => 'Double Room', 'price' => 500000, 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.'
        ]);
        DB::table('lodgement_types')->insert([
            'lodgement_id' => 1, 'code' => 'HTL-01-TWN', 'name' => 'Twin Room', 'price' => 600000, 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.'
        ]);
        DB::table('lodgement_types')->insert([
            'lodgement_id' => 1, 'code' => 'HTL-01-HRT', 'name' => 'Heritage Room', 'price' => 1000000, 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.'
        ]);
        DB::table('lodgement_types')->insert([
            'lodgement_id' => 1, 'code' => 'HTL-01-PRM', 'name' => 'Premier Room', 'price' => 1100000, 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.'
        ]);
        DB::table('lodgement_types')->insert([
            'lodgement_id' => 1, 'code' => 'HTL-01-RHRT', 'name' => 'Royal Heritage Room', 'price' => 1200000, 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.'
        ]);

        DB::table('lodgements')->insert([
            'id' => 2, 'code' => 'HTL-02', 'name' => 'Aston Kuningan Suites','default_picture' => 'uploads/wisata/01_jakarta/jakarta_aston_kuningan.jpg', 'location' => 'Jakarta', 'desc' => 'Aston Kuningan Suites is preparing some attractive deals to welcoming Christmas and New Year 2017 such as Express Your Thankgiving - food promotion and year-end celeberation with theme An Evening of Batavia Glamour. Express Your Thanksgiving provide whole roasted turkey (with delivery service) that can be enjoyed together with family or friend at home.','price' =>'1116830'
        ]);
        DB::table('lodgement_types')->insert([
            'lodgement_id' => 2, 'code' => 'HTL-02-DBL', 'name' => 'Double Room', 'price' => 600000, 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.'
        ]);
        DB::table('lodgement_types')->insert([
            'lodgement_id' => 2, 'code' => 'HTL-02-TWN', 'name' => 'Twin Room', 'price' => 700000, 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.'
        ]);
        DB::table('lodgement_types')->insert([
            'lodgement_id' => 2, 'code' => 'HTL-02-HRT', 'name' => 'Heritage Room', 'price' => 1100000, 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.'
        ]);
        DB::table('lodgement_types')->insert([
            'lodgement_id' => 2, 'code' => 'HTL-02-PRM', 'name' => 'Premier Room', 'price' => 1200000, 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.'
        ]);
        DB::table('lodgement_types')->insert([
            'lodgement_id' => 2, 'code' => 'HTL-02-RHRT', 'name' => 'Royal Heritage Room', 'price' => 1300000, 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.'
        ]);

        DB::table('lodgements')->insert([
            'id' => 3, 'code' => 'HTL-03', 'name' => 'Aston Priority Simatupang Hotel & Conference Center','default_picture' => 'uploads/wisata/01_jakarta/jakarta_aston_simatupang.jpg', 'location' => 'Jakarta', 'desc' => 'Aston Priority Simatupang Hotel & Conference Center is preparing some attractive deals to welcoming Christmas and New Year 2017 such as Express Your Thankgiving - food promotion and year-end celeberation with theme An Evening of Batavia Glamour. Express Your Thanksgiving provide whole roasted turkey (with delivery service) that can be enjoyed together with family or friend at home.','price' =>'1116830'
        ]);

        DB::table('lodgement_types')->insert([
            'lodgement_id' => 3, 'code' => '1BedAstKun', 'name' => '1 Bedroom Apartment', 'desc'=>'Fully furnished One Bedroom Apartment features living & dining room, TV cable with 60 local & international channels, private balcony, air conditioned, en suite bathroom with complimentary amenities, high speed wireless internet, minibar and tea coffee maker at dining table.','price' =>'762851'
        ]);
        DB::table('lodgement_types')->insert([
            'lodgement_id' => 3, 'code' => '2BedAstKun', 'name' => '2 Bedroom Apartment', 'desc'=>'These 100 sqm two-bedroom apartment are ideal for guest with small families who desire greater space and privacy. But not limited to that, these room category is also suitable for business traveller that travelling together with collages, or for long stay term.','price' =>'933851'
        ]);
        DB::table('lodgement_types')->insert([
            'lodgement_id' => 3, 'code' => '3BedAstKun', 'name' => '3 Bedroom Apartment', 'desc'=>'The three bedroom apartments are perfect for guest with lager family size, spacious 173 sqm with three separate bedrooms whereby each family member gets to enjoy his/her own space and privacy.','price' =>'1693851'
        ]);
        DB::table('lodgement_types')->insert([
            'lodgement_id' => 3, 'code' => '1BedAstRas', 'name' => '1 Bedroom Apartment', 'desc'=>'Fully furnished One Bedroom Apartment features living & dining room, TV cable with 60 local & international channels, private balcony, air conditioned, en suite bathroom with complimentary amenities, high speed wireless internet, minibar and tea coffee maker at dining table.','price' =>'762851'
        ]);
        DB::table('lodgement_types')->insert([
            'lodgement_id' => 3, 'code' => '2BedAstRas', 'name' => '2 Bedroom Apartment', 'desc'=>'These 100 sqm two-bedroom apartment are ideal for guest with small families who desire greater space and privacy. But not limited to that, these room category is also suitable for business traveller that travelling together with collages, or for long stay term.','price' =>'933851'
        ]);
        DB::table('lodgement_types')->insert([
            'lodgement_id' => 3, 'code' => '3BedAstRas', 'name' => '3 Bedroom Apartment', 'desc'=>'The three bedroom apartments are perfect for guest with lager family size, spacious 173 sqm with three separate bedrooms whereby each family member gets to enjoy his/her own space and privacy.','price' =>'1693851'
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
            'id' => 3, 'code' => 'TS003', 'name' => 'Jakarta Aquarium', 'desc' => 'Jakarta Aquarium menghadirkan konsep berlibur di alam yang menampilkan kekayaan alam bawah laut Indonesia yang penuh
            dengan warna, keindahan dan sekaligus misteri yang akan membuat anda serasa sedang berpetualang.', 'location' => 'jakarta', 'price' => '150000', 'default_picture' => 'uploads/wisata/01_jakarta/jakarta_aquarium.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 4, 'code' => 'TS004', 'name' => 'Candi Prambanan', 'desc' => 'Candi Prambanan adalah kompleks candi Hindu terbesar di Indonesia yang dibangun pada abad ke-9 masehi. Candi ini dipersembahkan untuk Trimurti, tiga dewa utama Hindu yaitu Brahma sebagai dewa pencipta, Wishnu sebagai dewa pemelihara, dan Siwa sebagai dewa pemusnah.', 'location' => 'jogja', 'price' => '5000', 'default_picture' => 'uploads/wisata/02_jogja/candi_prambanan.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 5, 'code' => 'TS005', 'name' => 'Candi Borobudur', 'desc' => 'Candi Borobudur merupakan sebuah candi Buddha terbesan di dunia yang terletak di Borobudur, Magelang, Jawa Tengah, Indonesia.', 'location' => 'jogja', 'price' => '5000', 'default_picture' => 'uploads/wisata/02_jogja/candi_borobudur.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 6, 'code' => 'TS006', 'name' => 'Hutan Pinus', 'desc' => 'Hutan Pinus merupakan salah satu wisata yang dapat membuat wisatawan menyaksikan deretan pohon pinus yang dapat memanjakan mata.', 'location' => 'jogja', 'price' => '15000', 'default_picture' => 'uploads/wisata/02_jogja/hutan_pinus.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 7, 'code' => 'TS007', 'name' => 'Bukit Kolom', 'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget elit in est faucibus semper sit amet mattis nulla. Praesent eget congue enim. Pellentesque volutpat.', 'location' => 'jawa timur', 'price' => '10000', 'default_picture' => 'uploads/wisata/03_jawa_timur/bukit_kolam.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 8, 'code' => 'TS008', 'name' => 'Air Terjun Madakari', 'desc' => 'Air Terjun Madakari adalah sebuah air terjun yang terletak di Kabupaten Probolinggo, Provinsi Jawa Timur. Air terjun setinggi 200 meter ini merupakan air terjun tertinggi di Pulau Jawa dan tertinggi kedua di Indonesia..', 'location' => 'jawa timur', 'price' => '10000', 'default_picture' => 'uploads/wisata/03_jawa_timur/bukit_kolam.jpg'
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
        DB::table('tourism_sites')->insert([
            'id' => 16, 'code' => 'TS016', 'name' => 'Taman Mini Indonesia Indah', 'desc' => 'Taman Mini Indonesia Indah adalah taman hiburan ikonik bertemakan Indonesia yang populer sejak tahun 90-an. Pengunjung bisa menikmati berbagai wahana dan fasilitas seperti misalnya Anjungan Daerah, kereta gantung, Teater 4D, museum, Teater IMAX Keong Mas, dan masih banyak lagi.', 'location' => 'jakarta', 'price' => '15000', 'default_picture' => 'uploads/wisata/05_jawa_barat/depok_fantasi.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 17, 'code' => 'TS017', 'name' => 'Pantai Ancol', 'desc' => 'Pantai Ancol adalah jalur pantai wisata yang terdiri dari lima pantai, yaitu Pantai Indah, Elok, Ria, Festival Ancol, dan Karnaval Ancol. Pengunjung bisa berfoto, bermain pasir, jogging, atau makan di salah satu restoran yang ada di kawasan wisata terpadu ini.', 'location' => 'jakarta', 'price' => '15000', 'default_picture' => 'uploads/wisata/05_jawa_barat/depok_fantasi.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 18, 'code' => 'TS018', 'name' => 'Waterbom', 'desc' => 'Waterbom adalah taman wisata air populer yang berlokasi di Pantai Indah Kapuk. Waterbom menawarkan berbagai wahana kolam renang untuk semua umur, dengan tingkat ketegangan yang beragam.', 'location' => 'jakarta', 'price' => '280000', 'default_picture' => 'uploads/wisata/05_jawa_barat/depok_fantasi.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 19, 'code' => 'TS019', 'name' => 'Kebun Binatang Ragunan', 'desc' => 'Kebun Binatang Ragunan adalah tujuan wisata keluarga dan edukasi yang cocok untuk semua umur. Ragunan tidak hanya menyimpan koleksi lebih dari 290 spesies hewan, tetapi juga berbagai fasilitas hiburan serta pendidikan.', 'location' => 'jakarta', 'price' => '8000', 'default_picture' => 'uploads/wisata/05_jawa_barat/depok_fantasi.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 20, 'code' => 'TS020', 'name' => 'Museum Nasional Indonesia', 'desc' => 'Museum Nasional Indonesia adalah museum di Jakarta Pusat yang menyimpan koleksi prasasti, arca, senjata tradisional, tekstil, gerabah, manuskrip, hasil penggalian arkeologis, serta benda kuno lainnya dari berbagai wilayah Nusantara.', 'location' => 'jakarta', 'price' => '5000', 'default_picture' => 'uploads/wisata/05_jawa_barat/depok_fantasi.jpg'
        ]);
        DB::table('tourism_sites')->insert([
            'id' => 21, 'code' => 'TS021', 'name' => 'Pulau Tidung', 'desc' => 'Pulau Tidung adalah salah satu pulau paling terkenal di gugusan Kepulauan Seribu, yang berada di lepas pantai Jakarta. Pulau Tidung terdiri dari dua pulau, Tidung Besar dan Tidung Kecil, dengan sebuah jembatan bernama Jembatan Cinta menghubungkan mereka. Jembatan tersebut sering menjadi tempat berfoto serta melihat matahari terbenam.', 'location' => 'jakarta', 'price' => '20000', 'default_picture' => 'uploads/wisata/05_jawa_barat/depok_fantasi.jpg'
        ]);


        /* INSERT DATA TO TOURISM_SITES AND CATEGORIES TABLE */
        DB::table('t_s_and_c')->insert([
            'category_id' => 1, 'tourism_site_id' => '1'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 2, 'tourism_site_id' => '1'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 3, 'tourism_site_id' => '1'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 4, 'tourism_site_id' => '1'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 5, 'tourism_site_id' => '1'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 1, 'tourism_site_id' => '2'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 2, 'tourism_site_id' => '2'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 3, 'tourism_site_id' => '2'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 4, 'tourism_site_id' => '2'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 5, 'tourism_site_id' => '2'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 1, 'tourism_site_id' => '3'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 2, 'tourism_site_id' => '3'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 3, 'tourism_site_id' => '3'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 4, 'tourism_site_id' => '3'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 5, 'tourism_site_id' => '3'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 1, 'tourism_site_id' => '4'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 2, 'tourism_site_id' => '4'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 3, 'tourism_site_id' => '4'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 4, 'tourism_site_id' => '4'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 5, 'tourism_site_id' => '4'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 1, 'tourism_site_id' => '5'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 2, 'tourism_site_id' => '5'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 3, 'tourism_site_id' => '5'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 4, 'tourism_site_id' => '5'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 5, 'tourism_site_id' => '5'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 1, 'tourism_site_id' => '6'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 2, 'tourism_site_id' => '6'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 3, 'tourism_site_id' => '6'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 4, 'tourism_site_id' => '6'
        ]);
        DB::table('t_s_and_c')->insert([
            'category_id' => 5, 'tourism_site_id' => '6'
        ]);

        /* DELETE DATA TO TOURISM_SITES TABLE */
        DB::table('packages')->delete();
        /* INSERT DATA TO PACKAGES TABLE */
        DB::table('packages')->insert([
            'id' => 1, 'code' => 'P001', 'name' => 'Paket Tour Jakarta', 'desc' => 'Berkeliling di area Jakarta dengan mengunjungi beberapa tempat bersejarah mulai dari Monumen Nasional (Monas), Istana Kepresidenan, Kota Tua, Museum Fatahillah, dan Pelabuhan Sunda Kelapa. Dipandu oleh kami, Anda akan menjelajahi lokasi-lokasi bersejarah, menarik, dan unik di Jakarta.', 'location' => 'Jakarta', 'price' => '3000000', 'default_picture' => 'uploads/wisata/01_jakarta/paket_tour_jkt_1.jpg'
        ]);
        DB::table('packages')->insert([
            'id' => 2, 'code' => 'P002', 'name' => 'Paket Wisata Surabaya', 'desc' => 'Nah, ternyata banyak lho, alternatif objek wisata Surabaya selain pusat perbelanjaan. Kamu bisa mencoba  wisata alam, berfoto ria dengan pemandangan pelabuhan yang menakjubkan, hingga menikmati malam dengan pemandangan lampu berwarna-warni.', 'location' => 'Surabaya', 'price' => '500000', 'default_picture' => 'uploads/wisata/03_jawa_timur/surabaya.jpg'
        ]);
        DB::table('packages')->insert([
            'id' => 3, 'code' => 'P003', 'name' => 'Paket Wisata Bandung', 'desc' => 'Bandung dikenal sebagai lautan api, mengunjungi tempat-tempat di area bandung gak bakal nyesel looh, daerah yang sejuk dan gak kalah sama kota Jakarta.', 'location' => 'Bandung', 'price' => '400000', 'default_picture' => 'uploads/wisata/05_jawa_barat/bandung.jpg'
        ]);
        DB::table('packages')->insert([
            'id' => 4, 'code' => 'P004', 'name' => 'Paket Wisata Lembang', 'desc' => 'Lembang merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Bandung.', 'location' => 'Bandung', 'price' => '500000', 'default_picture' => 'uploads/wisata/05_jawa_barat/dusun_bambu.jpg'
        ]);
        DB::table('packages')->insert([
            'id' => 5, 'code' => 'P005', 'name' => 'Paket Kepulauan Seribu', 'desc' => 'Kepulauan seribu merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Jakarta.', 'location' => 'Jakarta', 'price' => '400000', 'default_picture' => 'uploads/wisata/01_jakarta/kota_tua.jpg'
        ]);

        /* DELETE DATA TO VEHICLES TABLE */
        DB::table('vehicles')->delete();

        /* INSERT DATA TO VEHICLES TABLE */
        DB::table('vehicles')->insert([
            'id' => 1, 'code' => 'V001', 'type' => 'Mobil', 'name' => 'Toyota Avanza', 'default_picture' => 'uploads/wisata/07_vehicles/avanza.jpg', 'desc' => 'Dunia Fantasi adalah salah satu tempat rekresi yang tepat untuk wahana bermain dan berkumpul bersama keluarga atau teman.', 'location' => 'Jakarta', 'price' => '3000000'
        ]);
        DB::table('vehicles')->insert([
            'id' => 2, 'code' => 'V002', 'type' => 'Mobil', 'name' => 'Agya', 'default_picture' => 'uploads/wisata/07_vehicles/agya.jpg', 'desc' => 'Agya merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Bandung.', 'location' => 'Jakarta', 'price' => '500000'
        ]);
        DB::table('vehicles')->insert([
            'id' => 3, 'code' => 'V003', 'type' => 'Mobil', 'name' => 'Suzuki Ertiga', 'default_picture' => 'uploads/wisata/07_vehicles/ertiga.jpg', 'desc' => 'Suzuki Ertiga merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Jakarta.', 'location' => 'Jakarta', 'price' => '400000'
        ]);
        DB::table('vehicles')->insert([
            'id' => 4, 'code' => 'V004', 'type' => 'Mobil', 'name' => 'Toyota Avanza', 'default_picture' => 'uploads/wisata/07_vehicles/avanza.jpg', 'desc' => 'Dunia Fantasi adalah salah satu tempat rekresi yang tepat untuk wahana bermain dan berkumpul bersama keluarga atau teman.', 'location' => 'Bandung', 'price' => '3000000'
        ]);
        DB::table('vehicles')->insert([
            'id' => 5, 'code' => 'V005', 'type' => 'Mobil', 'name' => 'Agya', 'default_picture' => 'uploads/wisata/07_vehicles/agya.jpg', 'desc' => 'Agya merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Bandung.', 'location' => 'Bandung', 'price' => '500000'
        ]);
        DB::table('vehicles')->insert([
            'id' => 6, 'code' => 'V006', 'type' => 'Mobil', 'name' => 'Suzuki Ertiga', 'default_picture' => 'uploads/wisata/07_vehicles/ertiga.jpg', 'desc' => 'Suzuki Ertiga merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Jakarta.', 'location' => 'Bandung', 'price' => '400000'
        ]);
        DB::table('vehicles')->insert([
            'id' => 7, 'code' => 'V007', 'type' => 'Mobil', 'name' => 'Toyota Avanza', 'default_picture' => 'uploads/wisata/07_vehicles/avanza.jpg', 'desc' => 'Dunia Fantasi adalah salah satu tempat rekresi yang tepat untuk wahana bermain dan berkumpul bersama keluarga atau teman.', 'location' => 'Jogjakarta', 'price' => '3000000'
        ]);
        DB::table('vehicles')->insert([
            'id' => 8, 'code' => 'V008', 'type' => 'Mobil', 'name' => 'Agya', 'default_picture' => 'uploads/wisata/07_vehicles/agya.jpg', 'desc' => 'Agya merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Bandung.', 'location' => 'Jogjakarta', 'price' => '500000'
        ]);
        DB::table('vehicles')->insert([
            'id' => 9, 'code' => 'V009', 'type' => 'Mobil', 'name' => 'Suzuki Ertiga', 'default_picture' => 'uploads/wisata/07_vehicles/ertiga.jpg', 'desc' => 'Suzuki Ertiga merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Jakarta.', 'location' => 'Jogjakarta', 'price' => '400000'
        ]);
        DB::table('vehicles')->insert([
            'id' => 10, 'code' => 'V010', 'type' => 'Motor', 'name' => 'Honda Vario', 'default_picture' => 'uploads/wisata/07_vehicles/honda.jpg', 'desc' => 'Dunia Fantasi adalah salah satu tempat rekresi yang tepat untuk wahana bermain dan berkumpul bersama keluarga atau teman.', 'location' => 'Jakarta', 'price' => '3000000'
        ]);
        DB::table('vehicles')->insert([
            'id' => 11, 'code' => 'V011', 'type' => 'Motor', 'name' => 'Honda Supra X', 'default_picture' => 'uploads/wisata/07_vehicles/honda_suprax.jpg', 'desc' => 'Agya merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Bandung.', 'location' => 'Jakarta', 'price' => '500000'
        ]);
        DB::table('vehicles')->insert([
            'id' => 12, 'code' => 'V012', 'type' => 'Motor', 'name' => 'Scoopy', 'default_picture' => 'uploads/wisata/07_vehicles/scoopy.jpg', 'desc' => 'Suzuki Ertiga merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Jakarta.', 'location' => 'Jakarta', 'price' => '400000'
        ]);
        // DB::table('vehicles')->insert([
        //     'id' => 13, 'code' => 'V013', 'type' => 'Motor', 'name' => 'Toyota Avanza', 'default_picture' => 'uploads/wisata/07_vehicles/avanza.jpg', 'desc' => 'Dunia Fantasi adalah salah satu tempat rekresi yang tepat untuk wahana bermain dan berkumpul bersama keluarga atau teman.', 'location' => 'Bandung', 'price' => '3000000'
        // ]);
        // DB::table('vehicles')->insert([
        //     'id' => 14, 'code' => 'V014', 'type' => 'Motor', 'name' => 'Agya', 'default_picture' => 'uploads/wisata/07_vehicles/agya.jpg', 'desc' => 'Agya merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Bandung.', 'location' => 'Bandung', 'price' => '500000'
        // ]);
        // DB::table('vehicles')->insert([
        //     'id' => 15, 'code' => 'V015', 'type' => 'Motor', 'name' => 'Suzuki Ertiga', 'default_picture' => 'uploads/wisata/07_vehicles/ertiga.jpg', 'desc' => 'Suzuki Ertiga merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Jakarta.', 'location' => 'Bandung', 'price' => '400000'
        // ]);
        // DB::table('vehicles')->insert([
        //     'id' => 16, 'code' => 'V016', 'type' => 'Motor', 'name' => 'Toyota Avanza', 'default_picture' => 'uploads/wisata/07_vehicles/avanza.jpg', 'desc' => 'Dunia Fantasi adalah salah satu tempat rekresi yang tepat untuk wahana bermain dan berkumpul bersama keluarga atau teman.', 'location' => 'Jogjakarta', 'price' => '3000000'
        // ]);
        // DB::table('vehicles')->insert([
        //     'id' => 17, 'code' => 'V017', 'type' => 'Motor', 'name' => 'Agya', 'default_picture' => 'uploads/wisata/07_vehicles/agya.jpg', 'desc' => 'Agya merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Bandung.', 'location' => 'Jogjakarta', 'price' => '500000'
        // ]);
        // DB::table('vehicles')->insert([
        //     'id' => 18, 'code' => 'V018', 'type' => 'Motor', 'name' => 'Suzuki Ertiga', 'default_picture' => 'uploads/wisata/07_vehicles/ertiga.jpg', 'desc' => 'Suzuki Ertiga merupakan objek wisata dimana kamu bisa belajar sejarah di tengah-tengah modernisasi Kota Jakarta.', 'location' => 'Jogjakarta', 'price' => '400000'
        // ]);

        /* DELETE DATA TO PHOTOS TABLE */
        DB::table('photos')->delete();
        
        /* INSERT DATA TO photos TABLE */
        DB::table('photos')->insert([
            'lodgement_id' => 1, 'picture' => 'uploads/wisata/01_jakarta/jakarta_aston_rasuna.jpg'
        ]);
        DB::table('photos')->insert([
            'lodgement_id' => 2, 'picture' => 'uploads/wisata/01_jakarta/jakarta_aston_kuningan.jpg'
        ]);
    }
}
