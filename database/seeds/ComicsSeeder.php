<?php

use Illuminate\Database\Seeder;

use App\Models\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Comic::class, 10) -> create();
    }
}
