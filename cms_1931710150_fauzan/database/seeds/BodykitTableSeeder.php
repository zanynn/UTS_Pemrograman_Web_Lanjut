<?php

use Illuminate\Database\Seeder;

class BodykitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Bodykit::class, 2)->create();
    }
}
