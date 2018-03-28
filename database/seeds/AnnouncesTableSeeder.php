<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('announces')->insert([
            [
                'title' => str_random('10'),
                'body' => str_random('25'),
            ],
            [
                'title' => str_random('10'),
                'body' => str_random('25'),
            ],
            [
                'title' => str_random('10'),
                'body' => str_random('25'),
            ],
            [
                'title' => str_random('10'),
                'body' => str_random('25'),
            ],
        ]);
    }
}
