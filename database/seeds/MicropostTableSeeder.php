<?php

use Illuminate\Database\Seeder;

class MicropostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 4; $i++) {
            \DB::table('microposts')->insert([
                'user_id' => 1,
                'content' => 'test' . $i,
            ]);
        }
    }
}
