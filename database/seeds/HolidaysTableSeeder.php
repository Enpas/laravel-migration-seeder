<?php

use App\Holiday;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 50; $i++) { 
            $new_holiday = new Holiday();
            $new_holiday->reference = $faker->bothify('??-########');
            $new_holiday->type = $this->holidayType();
            $new_holiday->name = $faker->words(5, true);
            $new_holiday->departure = $faker->date();
            $new_holiday->days = $faker->numberBetween(2, 21);
            $new_holiday->description = $faker->paragraph();
            $new_holiday->price = $faker->numberBetween(200, 50000);
            $new_holiday->booking_fee = $faker->numberBetween(1, 100);
            $new_holiday->included = $faker->paragraph();
            $new_holiday->not_included = $faker->paragraph();
            $new_holiday->save();
        }
    }

    private function holidayType()
    {
        $arr = ['A basso prezzo', 'Lussuose', 'Famiglia', 'Riposo', 'Convenienti'];
        shuffle($arr);
        return $arr[0];
    }
}
