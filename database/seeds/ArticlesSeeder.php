<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'userId' => '1',
                'categoryId' => '1',
                'title' => 'Pantai Kuta, Bali',
                'description' => 'Kuta is a tourist area, administratively an urban village (kelurahan), and the capital of Kuta District, 
                Badung Regency, southern Bali, Indonesia. A former fishing village, it was one of the first towns on Bali to see substantial 
                tourist development, and as a beach resort remains one of Indonesias major tourist destinations. It is known internationally 
                for its long sandy beach, varied accommodation, many restaurants and bars, and many renowned surfers who visit from Australia. 
                It is located near Balis Ngurah Rai Airport.',
                'image' => 'kuta.jpg'
            ],
            [
                'userId' => '1',
                'CategoryId' => '2',
                'title' => 'Gunung Rinjani, Lombok',
                'description' => 'Mount Rinjani (Indonesian: Gunung Rinjani) is an active volcano in Indonesia on the island of Lombok. 
                Administratively the mountain is in the Regency of North Lombok, West Nusa Tenggara (Indonesian: Nusa Tenggara Barat, NTB). 
                It rises to 3,726 metres (12,224 ft), making it the second highest volcano in Indonesia.',
                'image' => 'rinjani.jpg'
            ],
            [
                'userId' => '1',
                'CategoryId' => '3',
                'title' => 'Raja Ampat, Papua Barat',
                'description' => 'Raja Ampat, or the Four Kings, is an archipelago located off the northwest tip of Birds Head Peninsula on 
                the island of New Guinea, in Indonesias West Papua province. It comprising over 1,500 small islands, cays, and shoals surrounding 
                the four main islands of Misool, Salawati, Batanta, and Waigeo, and the smaller island of Kofiau.',
                'image' => 'rajaampat.jpg'
            ],
            [
                'userId' => '1',
                'CategoryId' => '2',
                'title' => 'Gunung Bromo, Jawa Timur',
                'description' => 'Mount Bromo (Indonesian: Gunung Bromo), is an active volcano and part of the Tengger massif, in East Java, Indonesia. 
                At 2,329 meters (7,641 ft) it is not the highest peak of the massif, but is the best known. The massif area is one of the most visited 
                tourist attractions in East Java, Indonesia. The volcano belongs to the Bromo Tengger Semeru National Park. The name of Bromo derived 
                from Javanese pronunciation of Brahma, the Hindu creator god.',
                'image' => 'bromo.jpeg'
            ],
            [
                'userId' => '1',
                'CategoryId' => '3',
                'title' => 'Kepulauan Seribu, DKI Jakarta',
                'description' => 'The Thousand Islands (officially Kepulauan Seribu) are a chain of islands to the north of Jakartas coast. 
                It forms the only regency of Jakarta, the capital of Indonesia. It consists of a string of 342 islands[3] stretching 45 km (28 mi) 
                north into the Java Sea at West Jakarta Bay and in fact north of Banten Province.',
                'image' => 'pulauseribu.jpeg'
            ],
            [
                'userId' => '1',
                'CategoryId' => '1',
                'title' => 'Pink Beach, Lombok',
                'description' => 'Jerowaru District, located in the southeastern part of Lombok Island is one of those areas with relatively untapped 
                tourism potential. Currently, the main destination in Jerowaru is Tangsi Beach, also known as Pink Beach. Here are some facts about the 
                beautiful Tangsi Beach.',
                'image' => 'pinkbeach.jpg'
            ]
        ]);
    }
}
