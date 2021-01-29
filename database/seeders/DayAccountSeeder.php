<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;
class DayAccountSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //fake data
        DB::table('day_account')->delete();

        for($i = 0 ; $i < 1000; $i ++){
            DB::table('day_account')->insert([
                'amount' => rand(10,1000),
                'expense_type_id' => rand(1,2),
                'description' => Str::random(10),

            ]);
        }

    }
}
