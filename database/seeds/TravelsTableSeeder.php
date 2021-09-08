<?php

use Illuminate\Database\Seeder;
use App\Trip;

class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 0; $i < 100; $i++) {

            // creiamo una nuova instanza
            $newTrip = new Trip();
            
            //popoliamo le ricghe della tabella con dei valori fake
            $newTrip->title = 'Pacchetto numero' . rand(1, 200);
            $newTrip->people = 'Persone' . rand(1, 10);
            $newTrip->validity = 'Validita: ' . rand(1, 50) . ' mesi';
            $newTrip->locality = 'Abruzzo, Roma, Napoli, Bologna, ecc....';
            $newTrip->description = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestiae quibusdam sequi rerum deleniti ad. Provident cumque dolorum vel, delectus rerum ex blanditiis modi fuga sapiente quisquam eum perferendis, voluptas distinctio?';
            $newTrip->price = rand(10, 90 );

            // salviamo la nuova instanza nella tabella 
            $newTrip->save();
        }

    }

}



