<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\Carrency;
use App\Models\Icons;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //importent

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => '123456789',
            'avatar'=>'img/sid_bar/avatar/avatar1.png',
            'sid_img'=> 'img/sid_bar/wallpapers/img_1.jpg',
            'filter'=>'#ffc502',
            'darkMode'=>true,
            'admin'=>true,
        ]);

        DB::table('abouts')->insert([
            'name' => 'Kais',
            'description' => 'Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.',
            'ExpYears' => '20',
            'image'=>'/img/about/user.png',
            'projects'=>'25',
            'happy_client'=>'25',
            'cups_of_coffee'=>'200',
        ]);

        // data
        $skils = [
            [
                'skil'=>'HTML',
                'value'=>'95',
            ],
            [
                'skil'=>'CSS',
                'value'=>'65',
            ],
            [
                'skil'=>'JavaScript',
                'value'=>'91',
            ],
            [
                'skil'=>'PHP',
                'value'=>'53',
            ],
            [
                'skil'=>'Adob Photoshop',
                'value'=>'65',
            ],
            [
                'skil'=>'Vue js',
                'value'=>'77',
            ],
        ];
        foreach ($skils as $skil) {
            DB::table('skils')->insert([
                'skil' => $skil['skil'],
                'value' => $skil['value'],
            ]);
        };

        $educations = [
            [
                'title' => 'hhh',
                'start_year' => '2020',
                'end_year' => '2021',
                'univercety'=>'qsdqsdqsd',
            ],
            [
                'title' => 'rrrr',
                'start_year' => '2021',
                'end_year' => '2022',
                'univercety'=>'zerzz',
            ],
            [
                'title' => 'sdfsdf',
                'start_year' => '2023',
                'end_year' => '2024',
                'univercety'=>'ttttt',
            ],
        ];
        foreach ($educations as $education) {
            DB::table('education')->insert([
                'title' => $education['title'],
                'start_year' => $education['start_year'],
                'end_year' => $education['end_year'],
                'univercety'=> $education['univercety'],
            ]);
        };

        DB::table('contacts')->insert([
            'location' => '123 Street, New York, USA',
            'phone' => '012 345 6789',
            'email' => 'info@example.com',
        ]);
    }
}
