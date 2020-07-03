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
        Flag::create(
            ['flag' => "\$FLAG\$Bw1Kwj0iEwVEPfc8oF0MwdVFebIE3hte\$FLAG\$",
            'points' => 1,
            'game_id' => 1,
            ],
            ['flag' => "\$FLAG\$LhnZEwfKeEThFZlXNw2sku5cNLB0lySg\$FLAG\$",
            'points' => 1,
            'game_id' => 1,
            ],
            ['flag' => "\$FLAG\$sFyAP1w233ZH3ae05WDW7KD4Zu0ZSpvy\$FLAG\$",
            'points' => 2,
            'game_id' => 2,
            ],
            ['flag' => "\$FLAG\$k5tzfVbvVzeFzu3ahktc7tJIHg93ddBc\$FLAG\$",
            'points' => 2,
            'game_id' => 2,
            ],
        );
    }
}
