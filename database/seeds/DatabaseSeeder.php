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
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert(
            [
                'name' => 'Phúc Lưu Đình',
                'email' => 'dinhphuc.luu@ved.com.vn',
                'team' => '1',
            ],
            [
                'name' => 'Phuc Luu',
                'email' => 'phucluuftu@gmail.com',
                'team' => '2',
            ]);
//        DB::table('tickets')->insert([
//            'title' => 'The first ticket',
//            'user_id' => '1',
//            'owner' => '1',
//            'deadline' => '',
//            'design_deadline' => '',
//            'domain' => 'https://example.com',
//            'api_source' => 'https://api.com',
//            'logic' => 'https://logic.com',
//            'mockups' => 'https://mockups.com',
//            'fb_title' => 'This is FB title',
//            'fb_description' => 'This is FB description',
//            'fb_image' => 'https://facebook.com/image',
//            'cc' => 'phucluuftu@gmail.com',
//            'data_output' => 'openid',
//            'ga' => 'NO',
//            'ccu' => '10000',
//            'duration' => '2',
//            'status' => '1',
//            'type' => '1',
//            'priority' => '1',
//            'team' => '1',
//        ]);
    }
}
