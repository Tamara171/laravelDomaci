<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Izvodjac;
use App\Models\Pesma;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Izvodjac::truncate();
        Album::truncate();
        Pesma::truncate();
        User::factory(10)->create();
        $izv1 = Izvodjac::create(['name' => "Aleksandar Sekulic", 'sex' => "Muski", 'age'=>"29"]);
        $izv2 = Izvodjac::create(['name' => "Andjela Radovic", 'sex' => "Zenski", 'age'=>"22"]);
        $izv3 = Izvodjac::create(['name' => "Vuk Radovic", 'sex' => "Muski", 'age'=>"2"]);

        $alb1 = Album::create(['name'=> "Vukov", 'songs_number'=>"10",'duration'=>"30",'year'=>"2022" ]);
        $alb2 = Album::create(['name'=> "Andjin", 'songs_number'=>"12",'duration'=>"36", 'year'=>"2020" ]);
        $alb3 = Album::create(['name'=> "Akijev", 'songs_number'=>"8",'duration'=>"30",'year'=>"2018" ]);

        $pesma1 = Pesma::create(['name'=> "Tom's diner",'duration'=>"3", 'award'=>"No",'izvodjac_id'=>"3",'user_id'=>"1", 'album_id'=>"1" ]);
        $pesma2 = Pesma::create(['name'=> "Womanizer",'duration'=>"3", 'award'=>"Yes",'izvodjac_id'=>"2", 'user_id'=>"2", 'album_id'=>"2" ]);
        $pesma3 = Pesma::create(['name'=> "Wish you were here",'duration'=>"3", 'award'=>"Yes" ,'izvodjac_id'=>"1",'user_id'=>"3",  'album_id'=>"3"]);

        //$user1 = User::factory()->create();
        //$user2 = User::factory()->create();
    }
}
