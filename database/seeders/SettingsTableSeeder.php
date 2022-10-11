<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->delete();

        $data = [
            ['type' => 'current_session', 'description' => '2021-2022'],
            ['type' => 'system_title', 'description' => 'SMS'],
            ['type' => 'system_name', 'description' => 'STUDENT MANAGEMENT SYSTEM'],
            ['type' => 'term_ends', 'description' => '31/12/2022'],
            ['type' => 'term_begins', 'description' => '31/12/2022'],
            ['type' => 'phone', 'description' => '0624524149'],
            ['type' => 'address', 'description' => '20521 Dar es Salaam, Tanzania'],
            ['type' => 'system_email', 'description' => 'feisalmombo29@gmail.com'],
            ['type' => 'alt_email', 'description' => ''],
            ['type' => 'email_host', 'description' => ''],
            ['type' => 'email_pass', 'description' => ''],
            ['type' => 'lock_exam', 'description' => 0],
            ['type' => 'logo', 'description' => ''],
            ['type' => 'next_term_fees_j', 'description' => '20000'],
            ['type' => 'next_term_fees_pn', 'description' => '25000'],
            ['type' => 'next_term_fees_p', 'description' => '25000'],
            ['type' => 'next_term_fees_n', 'description' => '25600'],
            ['type' => 'next_term_fees_s', 'description' => '15600'],
            ['type' => 'next_term_fees_c', 'description' => '1600'],
        ];

        DB::table('settings')->insert($data);

    }
}
