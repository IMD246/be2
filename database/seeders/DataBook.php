<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataBook extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            DB::table('Book')->insert([
                'image' => "don.jpg",
                'idCategory'=> 1,
                'nameBook' => "Don Quixote",
                'idAuthor'=> 5,
                'rate' => 5,
                'price' => 250,
                'salePrice' => 220,
                'SoldBooks' => 0,
                'Description' => "Alonso Quixano, a retired country gentleman in his fifties, lives in an unnamed section of La Mancha with his niece and a housekeeper. He has become obsessed with books of chivalry, and believes th...",
                'Quantity' => 20,
            ]);
            DB::table('Book')->insert([
                'image' => "the.jpg",
                'idCategory'=> 1,
                'nameBook' => "The Travels",
                'idAuthor'=> 5,
                'rate' => 4,
                'price' => 50,
                'salePrice' => 10,
                'SoldBooks' => 0,
                'Description' => "The Travails of Persiles and Sigismunda is a romance or Byzantine novel by Miguel de Cervantes Saavedra, his last work and one that stands in opposition to the more famous novel Don Quixote by its ...",
                'Quantity' => 10,
            ]);
            DB::table('Book')->insert([
                'image' => "img-05.jpg",
                'idCategory'=> 2,
                'nameBook' => "Mill flat design",
                'idAuthor'=> 2,
                'rate' => 3,
                'price' => 100,
                'salePrice' =>88,
                'SoldBooks' => 10,
                'Description' => "this book contain all flat design mill had",
                'Quantity' => 30,
            ]);
            DB::table('Book')->insert([
                'image' =>"img-02.jpg",
                'idCategory'=> 2,
                'nameBook' => "Screen flat design",
                'idAuthor'=> 3,
                'rate' => 4,
                'price' => 50,
                'salePrice' => 45,
                'SoldBooks' => 5,
                'Description' => "1000 screen design in 1 book",
                'Quantity' => 50,
            ]);
            DB::table('Book')->insert([
                'image' => "img-03.jpg",
                'idCategory'=> 3,
                'nameBook' => "Electric flat design",
                'idAuthor'=> 1,
                'rate' => 5,
                'price' => 120,
                'salePrice' => 100,
                'SoldBooks' => 3,
                'Description' => "1000 electric design and bouns design in this book",
                'Quantity' => 5,
            ]);
            DB::table('Book')->insert([
                'image' => "img-04.jpg",
                'idCategory'=> 1,
                'nameBook' => "Eco Flat design",
                'idAuthor'=> 1,
                'rate' => 3,
                'price' => 140,
                'salePrice' => 120,
                'SoldBooks' => 4,
                'Description' => "this design was rock at 2000",
                'Quantity' => 10,
                'Feature'=>1,
            ]);
            //new data
            DB::table('Book')->insert([
                'image' => "eve.jpg",
                'idCategory'=> 1,
                'nameBook' => "Everything",
                'idAuthor'=> 10,
                'rate' => 5,
                'price' => 150,
                'salePrice' => 10,
                'SoldBooks' => 4,
                'Description' => "This description may be from another edition of this product. The instant #1 New York Times bestseller--now a major motion picture starring Amandla Stenberg as Maddy and Nick Robinson as Olly. Risk everything . . . for love. What if you couldn't touch anything in the outside world? Never breathe in the fresh air, feel the sun warm your face . . . or kiss the boy next door? ",
                'Quantity' => 10,
                'Feature'=>1,
            ]);
            DB::table('Book')->insert([
                'image' => "meet.jpg",
                'idCategory'=> 1,
                'nameBook' => "Meet Cute",
                'idAuthor'=> 10,
                'rate' => 4,
                'price' => 150,
                'salePrice' => 10,
                'SoldBooks' => 4,
                'Description' => "A celebration of meet-cute moments, this short-story collection features when-they-first-met-stories from such beloved YA authors as Armentrout, Nicola Yoon, Sara Shepard, and Katie Cotugno.",
                'Quantity' => 10,
                'Feature'=>1,
            ]);
            DB::table('Book')->insert([
                'image' => "ni.jpg",
                'idCategory'=> 1,
                'nameBook' => "Nicola Yoon ",
                'idAuthor'=> 10,
                'rate' => 5,
                'price' => 150,
                'salePrice' => 10,
                'SoldBooks' => 4,
                'Description' => "The perfect gift for the holidays, this stunning boxed set includes Nicola Yoon's #1 New York Times bestsellers, EVERYTHING, EVERYTHING and THE SUN IS ALSO A STAR. Everything, Everything is now a motion picture starring Amandla Stenberg and Nick Robinson, and the film of The Sun Is Also a Star is coming to theaters in May 2019 Maddy and Olly. Natasha and Daniel. ",
                'Quantity' => 10,
                'Feature'=>1,
            ]);
            DB::table('Book')->insert([
                'image' => "ins.jpg",
                'idCategory'=> 1,
                'nameBook' => "Instructions for Dancing",
                'idAuthor'=> 10,
                'rate' => 5,
                'price' => 150,
                'salePrice' => 10,
                'SoldBooks' => 4,
                'Description' => "The perfect gift for the holidays, this stunning boxed set includes Nicola Yoon's #1 New York Times bestsellers, EVERYTHING, EVERYTHING and THE SUN IS ALSO A STAR. Everything, Everything is now a motion picture starring Amandla Stenberg and Nick Robinson, and the film of The Sun Is Also a Star is coming to theaters in May 2019 Maddy and Olly. Natasha and Daniel. ",
                'Quantity' => 10,
                'Feature'=>1,
            ]);
           // Jack London, id 11
           DB::table('Book')->insert([
            'image' => "thecall.jpg",
            'idCategory'=> 3,
            'nameBook' => "The Call of the Wild",
            'idAuthor'=> 11,
            'rate' => 5,
            'price' => 150,
            'salePrice' => 10,
            'SoldBooks' => 4,
            'Description' => "The Call of the Wild , by Jack London, is one of America's best-known novels. Currently published in more than twenty separate editions in English alone, this novel about the Klondike Gold Rush of 1896 to 1899 has been continuously in print since it first appeared in 1903. Many editions of The Call of the Wild have distorted the original text: the violence is modified, the language is sanitized, and the punctuation and spelling are modernized",
            'Quantity' => 10,
            'Feature'=>1,
        ]);
        DB::table('Book')->insert([
            'image' => "sea.jpg",
            'idCategory'=> 3,
            'nameBook' => "The Sea-Wolf",
            'idAuthor'=> 11,
            'rate' => 4,
            'price' => 150,
            'salePrice' => 10,
            'SoldBooks' => 4,
            'Description' => "A thrilling epic of a sea voyage and a complex novel of ideas, The Sea-Wolf is a standard-bearer of its genre. It is the vivid story of a gentleman scholar, Humphrey Van Weyden, who is rescued by a seal-hunting schooner after a ferryboat accident in San Francisco Bay. London uses Van Weyden's ordeal at the hands of a schooner's devious crew to explore powerful themes of ambition, courage, and the innate will to survive.",
            'Quantity' => 10,
            'Feature'=>1,
        ]);

        DB::table('Book')->insert([
            'image' => "white.jpg",
            'idCategory'=> 3,
            'nameBook' => "White Fang",
            'idAuthor'=> 11,
            'rate' => 4,
            'price' => 100,
            'salePrice' => 20,
            'SoldBooks' => 4,
            'Description' => "This description may be from another edition of this product. The adventures in the northern wilderness of a dog who is part wolf and who eventually makes his peace with man.",
            'Quantity' => 10,
            'Feature'=>1,
        ]);

        DB::table('Book')->insert([
            'image' => "ta.jpg",
            'idCategory'=> 2,
            'nameBook' => "Tales of the North",
            'idAuthor'=> 11,
            'rate' => 4,
            'price' => 150,
            'salePrice' => 10,
            'SoldBooks' => 4,
            'Description' => "This description may be from another edition of this product. Jack London has captivated millions of readers around the world with his classic tales of the high seas and untamed wilderness. His characters are men of courage and valor who struggle to survive the unforgiving elements. If you have never collected books before, you will want to start now. If you are a collector, Jack London Tales of the North is a must have for your personal library with its nonstop adventure and heroic exploits. It is American literature presented in its most dramatic form--a high adventure in reading.",
            'Quantity' => 10,
            'Feature'=>1,
        ]);
         // Ken Kesey
         DB::table('Book')->insert([
            'image' => "one.jpg",
            'idCategory'=> 1,
            'nameBook' => "One Flew Over ",
            'idAuthor'=> 12,
            'rate' => 4,
            'price' => 90,
            'salePrice' => 5,
            'SoldBooks' => 14,
            'Description' => "This description may be from another edition of this product. A Penguin Classics Deluxe Edition of a counterculture classic with a foreword by Chuck Palahniuk Boisterous, ribald, and ultimately shattering, Ken Kesey's 1962 novel has left an indelible mark on the literature of our time. Now in a new deluxe edition with a foreword by Chuck Palahniuk and cover by Joe Sacco, here is the unforgettable story of a mental ward and its inhabitants, especially the tyrannical Big Nurse Ratched and Randle Patrick McMurphy, the brawling, fun-loving new inmate who resolves to oppose her. ",
            'Quantity' => 10,
            'Feature'=>1,
        ]);
        DB::table('Book')->insert([
            'image' => "some.jpg",
            'idCategory'=> 1,
            'nameBook' => "Sometimes a Great Notion",
            'idAuthor'=> 12,
            'rate' => 5,
            'price' => 290,
            'salePrice' => 35,
            'SoldBooks' => 14,
            'Description' => "The magnificent second novel from the legendary author of One Flew Over the Cuckoo's Nest Following the astonishing success of his first novel, One Flew Over the Cuckoo's Nest , Ken Kesey wrote what Charles Bowden calls one of the few essential books written by an American in the last half century. This wild-spirited tale tells of a bitter strike that rages through a small lumber town along the Oregon coast. Bucking that strike out of sheer cussedness are the Stampers.",
            'Quantity' => 10,
            'Feature'=>1,
        ]);

        DB::table('Book')->insert([
            'image' => "demon.jpg",
            'idCategory'=> 1,
            'nameBook' => "Demon Box",
            'idAuthor'=> 12,
            'rate' => 4,
            'price' => 90,
            'salePrice' => 5,
            'SoldBooks' => 14,
            'Description' => "In this collection of short stories, Ken Kesey challenges public and private demons with a wrestler's brave and deceptive embrace, making it clear that the energy of madness must live on.",
            'Quantity' => 10,
            'Feature'=>1,
        ]);

        DB::table('Book')->insert([
            'image' => "sai.jpg",
            'idCategory'=> 4,
            'nameBook' => "Sailor Song",
            'idAuthor'=> 12,
            'rate' => 4,
            'price' => 90,
            'salePrice' => 5,
            'SoldBooks' => 14,
            'Description' => "This epic tale of the north is a vibrant moral fable for our time. Set in the near future in the fishing village of Kuinak, Alaska, a remnant outpost of the American frontier not yet completely overcome by environmental havoc and mad-dog development, Sailor Song is a wild, rollicking novel, a dark and cosmic romp. The town and its denizens--colorful refugees from the Lower Forty-Eight and DEAPs (Descendants of Early Aboriginal Peoples)--are seduced...",
            'Quantity' => 10,
            'Feature'=>1,
        ]);


        }

}
