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
            ['email' => 'krisna@gmail.com', 'password' => Hash::make('Tes12345'),
            'name' => 'I Putu Krisna'],
            ['email' => 'andi@gmail.com', 'password' => Hash::make('Tes12345'),
            'name' => 'Andi Rafly'],
            ['email' => 'rijal@gmail.com', 'password' => Hash::make('Tes12345'),
            'name' => 'Tsany Rijalu'],
            ['email' => 'rahmah@gmail.com', 'password' => Hash::make('Tes12345'),
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
            ['name' => 'Machine Learning'],
            ['name' => 'Java'],
            ['name' => 'PHP']
        ]);

        DB::table('mentor')->insert([
            ['name' => 'Dani Funko', 'price' => 50000, 'ig' => 'Dfunko', 'twitter' => 'Dfunko', 'linkedin' => 'Dfunko', 'categoryId' => 1, 
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."],
            ['name' => 'Ryan Eastland', 'price' => 30000, 'ig' => 'Restland', 'twitter' => 'Restland', 'linkedin' => 'Restland', 'categoryId' => 2,
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."],
            ['name' => 'Bred Kitten', 'price' => 70000, 'ig' => 'Bredten', 'twitter' => 'Bredten', 'linkedin' => 'Bredten', 'categoryId' => 3,
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."],
	        ['name' => 'Agatha Steele', 'price' => 65000, 'ig' => 'Agstha', 'twitter' => 'Agstha', 'linkedin' => 'Agstha', 'categoryId' => 4, 
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."],
            ['name' => 'Aaron Smith', 'price' => 80000, 'ig' => 'Aaronth', 'twitter' => 'Aaronth', 'linkedin' => 'Aaronth', 'categoryId' => 4,
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."],
	        ['name' => 'James Dean', 'price' => 60000, 'ig' => 'Jdean', 'twitter' => 'Jdean', 'linkedin' => 'Jdean', 'categoryId' => 2, 
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."],
            ['name' => 'Garrett McMartin', 'price' => 90000, 'ig' => 'GaMart', 'twitter' => 'GaMart', 'linkedin' => 'GaMart', 'categoryId' => 5,
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."],
            ['name' => 'Lily Denver', 'price' => 75000, 'ig' => 'Liden', 'twitter' => 'Liden', 'linkedin' => 'Liden', 'categoryId' => 3,
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."],
	        ['name' => 'Theresa Hill', 'price' => 85000, 'ig' => 'TheHill', 'twitter' => 'TheHill', 'linkedin' => 'TheHill', 'categoryId' => 5, 
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."],
            ['name' => 'Tyler Brooks', 'price' => 60000, 'ig' => 'Tybok', 'twitter' => 'Tybok', 'linkedin' => 'Tybok', 'categoryId' => 1,
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."],
            ['name' => 'Taylor Brown', 'price' => 40000, 'ig' => 'Tabro', 'twitter' => 'Tabro', 'linkedin' => 'Tabro', 'categoryId' => 5, 
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."],
            ['name' => 'Elizabeth Huntington', 'price' => 60000, 'ig' => 'Elihunt', 'twitter' => 'Elihunt', 'linkedin' => 'Elihunt', 'categoryId' => 2,
            'description' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."]
        ]);

        DB::table('mentorskill')->insert([
            ['mentorId' => 1, 'skillId' => 1],
            ['mentorId' => 2, 'skillId' => 2],
            ['mentorId' => 3, 'skillId' => 3],
            ['mentorId' => 1, 'skillId' => 2],
	        ['mentorId' => 4, 'skillId' => 3],
            ['mentorId' => 5, 'skillId' => 6],
            ['mentorId' => 6, 'skillId' => 7],
            ['mentorId' => 7, 'skillId' => 7],
            ['mentorId' => 8, 'skillId' => 4],
	        ['mentorId' => 8, 'skillId' => 1],
            ['mentorId' => 9, 'skillId' => 8],
            ['mentorId' => 10, 'skillId' => 8],
            ['mentorId' => 11, 'skillId' => 7],
            ['mentorId' => 12, 'skillId' => 5],
            ['mentorId' => 12, 'skillId' => 6],
	        ['mentorId' => 5, 'skillId' => 2]
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
            ['kode' =>'ABCDEFG50', 'balance'=>50000],
            ['kode' =>'MENTORA75', 'balance'=>75000],
            ['kode' =>'MENTORA115','balance'=>15000],
            ['kode' =>'MENTORA40', 'balance'=>40000],
            ['kode' =>'ABCDEFG20', 'balance'=>20000]
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
