<?php

use Illuminate\Database\Seeder;

class MeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Me::class, 1)->create();
    }
}
