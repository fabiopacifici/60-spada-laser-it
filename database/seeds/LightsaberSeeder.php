<?php

use Illuminate\Database\Seeder;
use App\Models\Lightsaber;
class LightsaberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sabers = [
            [
                'name' => 'Spada laser anakin',
                'slug' => 'spada-laser-anakin',
                'thumb' => 'saber_images/replica-spada-laser-anakin_600x.webp',
                'qty' => '10',
                'price' => 499.00
            ],
            [
                'name' => 'Spada laser legendary luke-s',
                'slug' => 'spada-laser-legendary-luke-s',
                'thumb' => 'saber_images/replica-spada-laser-luke_600x.webp',
                'qty' => '10',
                'price' => 499.00
            ],
            [
                'name' => 'Spada Laser Legendary Darth-R V1',
                'slug' => 'spada-laser-legendary-darth-r-v1',
                'thumb' => 'saber_images/replica-spada-laser-darth-revan-sith_600x.webp',
                'qty' => '10',
                'price' => 499.00
            ],
            [
                'name' => 'Spada Laser Legendary Darth-R V2',
                'slug' => 'spada-laser-legendary-darth-r-v2',
                'thumb' => 'saber_images/replica-spada-laser-darth-revan-jedi_600x.webp',
                'qty' => '10',
                'price' => 499.00
            ],
            [
                'name' => 'Spada laser legendary OBI-K',
                'slug' => 'spada-laser-legendary-obi-k',
                'thumb' => 'saber_images/replica-spada-laser-obi-wan_600x.webp',
                'qty' => '10',
                'price' => 499.00
            ],
            [
                'name' => 'Spada Laser Legendary Darth-M',
                'slug' => 'spada-laser-anakin',
                'thumb' => 'saber_imagesreplica-spada-laser-darth-maul_600x.webp',
                'qty' => '10',
                'price' => 499.00
            ],
            [
                'name' => 'Spada laser legendary leila-0',
                'slug' => 'spada-laser-legendary-leila-0',
                'thumb' => 'saber_images/replica-spada-laser-leia_600x.webp',
                'qty' => '10',
                'price' => 499.00
            ]

        ];

        foreach ($sabers as $saber) {
            Lightsaber::create($saber);
        }
    }
}
