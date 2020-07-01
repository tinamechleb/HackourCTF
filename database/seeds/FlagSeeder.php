<?php
use App\Flag;
use Illuminate\Database\Seeder;

class FlagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Flag::create([
            'flag' => Str::random(10),
            'points' => 1,
            'game_id' => 2,
        ]);
    }
}
