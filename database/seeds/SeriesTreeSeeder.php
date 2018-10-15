<?php

use Illuminate\Database\Seeder;

class SeriesTreeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();
        $path = base_path().'/database/seeds/series_trees.sql';
        DB::unprepared(file_get_contents($path));
        $this->command->info('Brand Table Seed');
    }
}
