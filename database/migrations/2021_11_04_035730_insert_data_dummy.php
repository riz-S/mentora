<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertDataDummy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('mentee')->insert([
            ['email' => 'riza@gmail.com', 'password' => Hash::make('Tes12345'),
            'name' => 'Riza Setiawan'],
            ['email' => 'krisna@gmail.com', 'password' => Hash::make('12345678'),
            'name' => 'I Putu Krisna'],
            ['email' => 'andi@gmail.com', 'password' => Hash::make('12345678'),
            'name' => 'Andi Rafly'],
            ['email' => 'rijal@gmail.com', 'password' => Hash::make('12345678'),
            'name' => 'Tsany Rijalu'],
            ['email' => 'rahmah@gmail.com', 'password' => Hash::make('12345678'),
            'name' => 'Rahmah Nur']
        ]);

        DB::table('category')->insert([
            ['name' => 'UI/UX'],
            ['name' => 'Project Manager'],
            ['name' => 'Business & Management'],
            ['name' => 'Front-end'],
            ['name' => 'Back-end']
        ]);

        DB::table('skill')->insert([
            ['name' => 'Prototyping'],
            ['name' => 'Design'],
            ['name' => 'Portofolio'],
            ['name' => 'Python'],
            ['name' => 'Product Management'],
            ['name' => 'Machine Learning']
        ]);

        DB::table('mentor')->insert([
            ['name' => 'Dani Funko', 'price' => 50000, 'ig' => 'Dfunko', 'twitter' => 'Dfunko', 'linkedin' => 'Dfunko', 'categoryId' => 1, 
            'description' => "I'm a freelance Front End developer from Serbia. My specialties are React.js, JavaScript, HTML5 and CSS3."],
            ['name' => 'Ryan Eastland', 'price' => 30000, 'ig' => 'Restland', 'twitter' => 'Restland', 'linkedin' => 'Restland', 'categoryId' => 2,
            'description' => "I'm a mostly self-taught programmer (never studied it in school!) who's been working for the last 3.5 years as a developer for a web application serving the awning industry."],
            ['name' => 'Bred Kitten', 'price' => 70000, 'ig' => 'Bredten', 'twitter' => 'Bredten', 'linkedin' => 'Bredten', 'categoryId' => 3,
            'description' => "I'm an extremely motivated and introspective English Software engineer, moving internationally to pursue career success. I'm currently running my own software business as an independent software consultant."]
        ]);

        DB::table('mentorskill')->insert([
            ['mentorId' => 1, 'skillId' => 1],
            ['mentorId' => 2, 'skillId' => 2],
            ['mentorId' => 3, 'skillId' => 3],
            ['mentorId' => 1, 'skillId' => 2]
        ]);

        DB::table('transaksi')->insert([
            ['jumlahSesi' => 1, 'statusPemesanan' => 'Ditolak', 'description' => "I hope I can learn more", 'menteeId' => 4, 'mentorId' => 2],
            ['jumlahSesi' => 2, 'statusPemesanan' => 'Pending', 'description' => "I hope I can learn about Prototyping", 'menteeId' => 1, 'mentorId' => 1],
            ['jumlahSesi' => 4, 'statusPemesanan' => 'Diterima', 'description' => "I hope I can fix my design", 'menteeId' => 1, 'mentorId' => 3],
            ['jumlahSesi' => 7, 'statusPemesanan' => 'Diterima', 'description' => "I hope I can fix my web", 'menteeId' => 2, 'mentorId' => 3],
            ['jumlahSesi' => 9, 'statusPemesanan' => 'Ditolak', 'description' => "I hope I can fix my mobile", 'menteeId' => 3, 'mentorId' => 3],
            ['jumlahSesi' => 10, 'statusPemesanan' => 'Diterima', 'description' => "I hope I can fix my laptop", 'menteeId' => 4, 'mentorId' => 2]
        ]);

        DB::table('voucher')->insert([
            ['kode' =>'MENTORA50', 'balance'=>50000],
            ['kode' =>'MENTORA100', 'balance'=>100000],
            ['kode' =>'MENTORA30', 'balance'=>30000],
            ['kode' =>'ABCDEFG50', 'balance'=>50000]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
