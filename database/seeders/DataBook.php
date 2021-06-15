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
            'idCategory' => 1,
            'nameBook' => "Don Quixote",
            'idAuthor' => 5,
            'rate' => 5,
            'price' => 250,
            'salePrice' => 220,
            'SoldBooks' => 0,
            'Description' => "Alonso Quixano, a retired country gentleman in his fifties, lives in an unnamed section of La Mancha with his niece and a housekeeper. He has become obsessed with books of chivalry, and believes th...",
            'Quantity' => 20,
        ]);
        DB::table('Book')->insert([
            'image' => "the.jpg",
            'idCategory' => 1,
            'nameBook' => "The Travels",
            'idAuthor' => 5,
            'rate' => 4,
            'price' => 50,
            'salePrice' => 10,
            'SoldBooks' => 0,
            'Description' => "The Travails of Persiles and Sigismunda is a romance or Byzantine novel by Miguel de Cervantes Saavedra, his last work and one that stands in opposition to the more famous novel Don Quixote by its ...",
            'Quantity' => 10,
        ]);
        DB::table('Book')->insert([
            'image' => "img-05.jpg",
            'idCategory' => 2,
            'nameBook' => "Mill flat design",
            'idAuthor' => 2,
            'rate' => 3,
            'price' => 100,
            'salePrice' => 88,
            'SoldBooks' => 10,
            'Description' => "this book contain all flat design mill had",
            'Quantity' => 30,
        ]);
        DB::table('Book')->insert([
            'image' => "img-02.jpg",
            'idCategory' => 2,
            'nameBook' => "Screen flat design",
            'idAuthor' => 1,
            'rate' => 4,
            'price' => 50,
            'salePrice' => 45,
            'SoldBooks' => 5,
            'Description' => "1000 screen design in 1 book",
            'Quantity' => 50,
        ]);
        DB::table('Book')->insert([
            'image' => "img-03.jpg",
            'idCategory' => 4,
            'nameBook' => "Electric flat design",
            'idAuthor' => 1,
            'rate' => 5,
            'price' => 120,
            'salePrice' => 100,
            'SoldBooks' => 3,
            'Description' => "1000 electric design and bouns design in this book",
            'Quantity' => 5,
        ]);
        DB::table('Book')->insert([
            'image' => "img-04.jpg",
            'idCategory' => 1,
            'nameBook' => "Eco Flat design",
            'idAuthor' => 1,
            'rate' => 3,
            'price' => 140,
            'salePrice' => 120,
            'SoldBooks' => 4,
            'Description' => "this design was rock at 2000",
            'Quantity' => 10,
            'Feature' => 1,
        ]);
        //new data
        DB::table('Book')->insert([
            'image' => "eve.jpg",
            'idCategory' => 1,
            'nameBook' => "Everything",
            'idAuthor' => 10,
            'rate' => 5,
            'price' => 150,
            'salePrice' => 10,
            'SoldBooks' => 4,
            'Description' => "This description may be from another edition of this product. The instant #1 New York Times bestseller--now a major motion picture starring Amandla Stenberg as Maddy and Nick Robinson as Olly. Risk everything . . . for love. What if you couldn't touch anything in the outside world? Never breathe in the fresh air, feel the sun warm your face . . . or kiss the boy next door? ",
            'Quantity' => 10,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "meet.jpg",
            'idCategory' => 1,
            'nameBook' => "Meet Cute",
            'idAuthor' => 10,
            'rate' => 4,
            'price' => 150,
            'salePrice' => 10,
            'SoldBooks' => 4,
            'Description' => "A celebration of meet-cute moments, this short-story collection features when-they-first-met-stories from such beloved YA authors as Armentrout, Nicola Yoon, Sara Shepard, and Katie Cotugno.",
            'Quantity' => 10,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "ni.jpg",
            'idCategory' => 1,
            'nameBook' => "Nicola Yoon ",
            'idAuthor' => 10,
            'rate' => 5,
            'price' => 150,
            'salePrice' => 10,
            'SoldBooks' => 4,
            'Description' => "The perfect gift for the holidays, this stunning boxed set includes Nicola Yoon's #1 New York Times bestsellers, EVERYTHING, EVERYTHING and THE SUN IS ALSO A STAR. Everything, Everything is now a motion picture starring Amandla Stenberg and Nick Robinson, and the film of The Sun Is Also a Star is coming to theaters in May 2019 Maddy and Olly. Natasha and Daniel. ",
            'Quantity' => 10,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "ins.jpg",
            'idCategory' => 1,
            'nameBook' => "Instructions for Dancing",
            'idAuthor' => 10,
            'rate' => 5,
            'price' => 150,
            'salePrice' => 10,
            'SoldBooks' => 4,
            'Description' => "The perfect gift for the holidays, this stunning boxed set includes Nicola Yoon's #1 New York Times bestsellers, EVERYTHING, EVERYTHING and THE SUN IS ALSO A STAR. Everything, Everything is now a motion picture starring Amandla Stenberg and Nick Robinson, and the film of The Sun Is Also a Star is coming to theaters in May 2019 Maddy and Olly. Natasha and Daniel. ",
            'Quantity' => 10,
            'Feature' => 1,
        ]);
        // Jack London, id 11
        DB::table('Book')->insert([
            'image' => "thecall.jpg",
            'idCategory' => 5,
            'nameBook' => "The Call of the Wild",
            'idAuthor' => 11,
            'rate' => 5,
            'price' => 150,
            'salePrice' => 10,
            'SoldBooks' => 4,
            'Description' => "The Call of the Wild , by Jack London, is one of America's best-known novels. Currently published in more than twenty separate editions in English alone, this novel about the Klondike Gold Rush of 1896 to 1899 has been continuously in print since it first appeared in 1903. Many editions of The Call of the Wild have distorted the original text: the violence is modified, the language is sanitized, and the punctuation and spelling are modernized",
            'Quantity' => 10,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "sea.jpg",
            'idCategory' => 1,
            'nameBook' => "The Sea-Wolf",
            'idAuthor' => 11,
            'rate' => 4,
            'price' => 150,
            'salePrice' => 10,
            'SoldBooks' => 4,
            'Description' => "A thrilling epic of a sea voyage and a complex novel of ideas, The Sea-Wolf is a standard-bearer of its genre. It is the vivid story of a gentleman scholar, Humphrey Van Weyden, who is rescued by a seal-hunting schooner after a ferryboat accident in San Francisco Bay. London uses Van Weyden's ordeal at the hands of a schooner's devious crew to explore powerful themes of ambition, courage, and the innate will to survive.",
            'Quantity' => 10,
            'Feature' => 1,
        ]);

        DB::table('Book')->insert([
            'image' => "white.jpg",
            'idCategory' => 2,
            'nameBook' => "White Fang",
            'idAuthor' => 11,
            'rate' => 4,
            'price' => 100,
            'salePrice' => 20,
            'SoldBooks' => 4,
            'Description' => "This description may be from another edition of this product. The adventures in the northern wilderness of a dog who is part wolf and who eventually makes his peace with man.",
            'Quantity' => 10,
            'Feature' => 1,
        ]);

        DB::table('Book')->insert([
            'image' => "ta.jpg",
            'idCategory' => 4,
            'nameBook' => "Tales of the North",
            'idAuthor' => 11,
            'rate' => 4,
            'price' => 150,
            'salePrice' => 10,
            'SoldBooks' => 4,
            'Description' => "This description may be from another edition of this product. Jack London has captivated millions of readers around the world with his classic tales of the high seas and untamed wilderness. His characters are men of courage and valor who struggle to survive the unforgiving elements. If you have never collected books before, you will want to start now. If you are a collector, Jack London Tales of the North is a must have for your personal library with its nonstop adventure and heroic exploits. It is American literature presented in its most dramatic form--a high adventure in reading.",
            'Quantity' => 10,
            'Feature' => 1,
        ]);
        // Ken Kesey
        DB::table('Book')->insert([
            'image' => "one.jpg",
            'idCategory' => 1,
            'nameBook' => "One Flew Over ",
            'idAuthor' => 12,
            'rate' => 4,
            'price' => 90,
            'salePrice' => 5,
            'SoldBooks' => 14,
            'Description' => "This description may be from another edition of this product. A Penguin Classics Deluxe Edition of a counterculture classic with a foreword by Chuck Palahniuk Boisterous, ribald, and ultimately shattering, Ken Kesey's 1962 novel has left an indelible mark on the literature of our time. Now in a new deluxe edition with a foreword by Chuck Palahniuk and cover by Joe Sacco, here is the unforgettable story of a mental ward and its inhabitants, especially the tyrannical Big Nurse Ratched and Randle Patrick McMurphy, the brawling, fun-loving new inmate who resolves to oppose her. ",
            'Quantity' => 10,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "some.jpg",
            'idCategory' => 1,
            'nameBook' => "Sometimes a Great Notion",
            'idAuthor' => 12,
            'rate' => 5,
            'price' => 290,
            'salePrice' => 35,
            'SoldBooks' => 14,
            'Description' => "The magnificent second novel from the legendary author of One Flew Over the Cuckoo's Nest Following the astonishing success of his first novel, One Flew Over the Cuckoo's Nest , Ken Kesey wrote what Charles Bowden calls one of the few essential books written by an American in the last half century. This wild-spirited tale tells of a bitter strike that rages through a small lumber town along the Oregon coast. Bucking that strike out of sheer cussedness are the Stampers.",
            'Quantity' => 10,
            'Feature' => 1,
        ]);

        DB::table('Book')->insert([
            'image' => "demon.jpg",
            'idCategory' => 1,
            'nameBook' => "Demon Box",
            'idAuthor' => 12,
            'rate' => 4,
            'price' => 90,
            'salePrice' => 5,
            'SoldBooks' => 14,
            'Description' => "In this collection of short stories, Ken Kesey challenges public and private demons with a wrestler's brave and deceptive embrace, making it clear that the energy of madness must live on.",
            'Quantity' => 10,
            'Feature' => 1,
        ]);

        DB::table('Book')->insert([
            'image' => "sai.jpg",
            'idCategory' => 4,
            'nameBook' => "Sailor Song",
            'idAuthor' => 12,
            'rate' => 4,
            'price' => 90,
            'salePrice' => 5,
            'SoldBooks' => 14,
            'Description' => "This epic tale of the north is a vibrant moral fable for our time. Set in the near future in the fishing village of Kuinak, Alaska, a remnant outpost of the American frontier not yet completely overcome by environmental havoc and mad-dog development, Sailor Song is a wild, rollicking novel, a dark and cosmic romp. The town and its denizens--colorful refugees from the Lower Forty-Eight and DEAPs (Descendants of Early Aboriginal Peoples)--are seduced...",
            'Quantity' => 10,
            'Feature' => 1,
        ]);
        //seeder book again
        // Thomas Mann
        DB::table('Book')->insert([
            'image' => "magic.jpg",
            'idCategory' => 3,
            'nameBook' => "The Magic Mountain",
            'idAuthor' => 20,
            'rate' => 4,
            'price' => 90,
            'salePrice' => 2,
            'SoldBooks' => 33,
            'Description' => "In this dizzyingly rich novel of ideas, Mann uses a
             sanatorium in the Swiss Alps--a community devoted exclusively to sickness--as 
             a microcosm for Europe, which in the years before 1914 was already exhibiting the 
             first symptoms of its own terminal irrationality. The Magic Mountain is a monumental 
             work of erudition and irony, sexual tension and intellectual ferment, a book that pulses
              with life in the midst of death.",
            'Quantity' => 20,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "magic2.jpg",
            'idCategory' => 4,
            'nameBook' => "The magic 2",
            'idAuthor' => 20,
            'rate' => 4,
            'price' => 100,
            'salePrice' => 7,
            'SoldBooks' => 24,
            'Description' => "A vast intellectual drama of the forces that play upon modern man, The Magic Mountain is set in a sanitorium in the Swiss Alps--a community organized with exclusive reference to ill health, and a symbol of the diseased society of Europe before 1914",
            'Quantity' => 62,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "magic3.jpg",
            'idCategory' => 4,
            'nameBook' => "The magic 3",
            'idAuthor' => 20,
            'rate' => 4,
            'price' => 90,
            'salePrice' => 25,
            'SoldBooks' => 24,
            'Description' => "A vast intellectual drama of the forces that play upon modern man, The Magic Mountain is set in a sanitorium in the Swiss Alps--a community organized with exclusive reference to ill health, and a symbol of the diseased society of Europe before 1914",
            'Quantity' => 10,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "magic4.jpg",
            'idCategory' => 4,
            'nameBook' => "The magic 4",
            'idAuthor' => 20,
            'rate' => 4,
            'price' => 90,
            'salePrice' => 30,
            'SoldBooks' => 14,
            'Description' => "In this dizzyingly rich novel of ideas, Mann uses a
             sanatorium in the Swiss Alps--a community devoted exclusively to sickness--as 
             a microcosm for Europe, which in the years before 1914 was already exhibiting the 
             first symptoms of its own terminal irrationality. The Magic Mountain is a monumental 
             work of erudition and irony, sexual tension and intellectual ferment, a book that pulses
              with life in the midst of death.",
            'Quantity' => 10,
            'Feature' => 1,
        ]);
        // Robe
        DB::table('Book')->insert([
            'image' => "robe1.jpg",
            'idCategory' => 3,
            'nameBook' => "Clean Code",
            'idAuthor' => 21,
            'rate' => 5,
            'price' => 60,
            'salePrice' => 15,
            'SoldBooks' => 34,
            'Description' => "Programming is about polishing the craft with years of trial and error. I wish there was a way to save yourself from all the hard work by learning from the mistakes of other programmers? Fortunately, there is, and it is known to the world as the Clean Code: A Handbook of Agile Software Craftsmanship book from the legendary Uncle Bob.",
            'Quantity' => 26,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "robe2.jpg",
            'idCategory' => 3,
            'nameBook' => "Algorithms",
            'idAuthor' => 21,
            'rate' => 5,
            'price' => 70,
            'salePrice' => 35,
            'SoldBooks' => 14,
            'Description' => "The name of the book is self-explanatory. It is what the title suggests, i.e., Introduction to Algorithms. Also known as CLRS, a reference to the last name of the authors of the book, it goes in-depth into a range of algorithms divided across several self-contained chapters.",
            'Quantity' => 26,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "robe3.jpg",
            'idCategory' => 3,
            'nameBook' => "Structure",
            'idAuthor' => 21,
            'rate' => 5,
            'price' => 80,
            'salePrice' => 5,
            'SoldBooks' => 24,
            'Description' => "The Structure and Interpretation of Computer Programs, a.k.a. SICP is among the best books to learn the fundamentals of programming. Employed as a foundational course to programming at MIT, SICP is a generic programming book that uses Scheme to illustrate the various programming concepts.",
            'Quantity' => 26,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "robe4.jpg",
            'idCategory' => 3,
            'nameBook' => "Clean Code",
            'idAuthor' => 21,
            'rate' => 5,
            'price' => 100,
            'salePrice' => 25,
            'SoldBooks' => 32,
            'Description' => "The Clean Coder has helped hundreds of thousands of developers become much more passionate and proficient in their craft. Don’t buy it? Start reading the programming book today and know the difference for yourself.",
            'Quantity' => 26,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "robe5.jpg",
            'idCategory' => 3,
            'nameBook' => "  Code Complete",
            'idAuthor' => 21,
            'rate' => 5,
            'price' => 50,
            'salePrice' => 4,
            'SoldBooks' => 45,
            'Description' => "The Code Complete book is held dearly among the best practical guides on programming. The programming book has no shortage of code examples that thoroughly illustrate the art of and science behind software development.",
            'Quantity' => 26,
            'Feature' => 1,
        ]);
        //Dusty Phillips
        DB::table('Book')->insert([
            'image' => "dus1.jpg",
            'idCategory' => 3,
            'nameBook' => "Python 3",
            'idAuthor' => 22,
            'rate' => 4,
            'price' => 60,
            'salePrice' => 20,
            'SoldBooks' => 15,
            'Description' => "Object-oriented programming (OOP) is a popular design paradigm in which data and behaviors are encapsulated in such a way that they can be manipulated together. This third edition of Python 3 Object-Oriented Programming fully explains classes, data encapsulation, and exceptions with an emphasis on when you can use each principle to develop well-designed software.",
            'Quantity' => 36,
            'Feature' => 0,
        ]);
        DB::table('Book')->insert([
            'image' => "dus2.jpg",
            'idCategory' => 3,
            'nameBook' => "Object Oriented",
            'idAuthor' => 22,
            'rate' => 4,
            'price' => 60,
            'salePrice' => 15,
            'SoldBooks' => 64,
            'Description' => "The book begins with the very foundations of OOP and then uses practical examples to show how to correctly implement Object Oriented Programming in Python. Many examples are taken from real-world projects.",
            'Quantity' => 26,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "dus3.jpg",
            'idCategory' => 3,
            'nameBook' => "Building robust",
            'idAuthor' => 22,
            'rate' => 4,
            'price' => 60,
            'salePrice' => 15,
            'SoldBooks' => 64,
            'Description' => "Python 3 is more versatile and easier to use than ever. It runs on all major platforms in a huge array of use cases. Coding in Python minimizes development time and increases productivity in comparison to other languages. Clean, maintainable code is easy to both read and write using Python's clear, concise syntax",
            'Quantity' => 126,
            'Feature' => 0,
        ]);
        //Charles Petzold
        DB::table('Book')->insert([
            'image' => "cha1.jpg",
            'idCategory' => 3,
            'nameBook' => "The Hidden Language",
            'idAuthor' => 23,
            'rate' => 3,
            'price' => 120,
            'salePrice' => 20,
            'SoldBooks' => 34,
            'Description' => "What do flashlights, the British invasion, black cats, and seesaws have to do with computers? In CODE, they show us the ingenious ways we manipulate language and invent new means of communicating with each other. And through CODE, we see how this ingenuity and our very human compulsion to communicate have driven the technological innovations of the past two centuries",
            'Quantity' => 34,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "cha2.jpg",
            'idCategory' => 3,
            'nameBook' => "Programming Windows",
            'idAuthor' => 23,
            'rate' => 3,
            'price' => 140,
            'salePrice' => 40,
            'SoldBooks' => 34,
            'Description' => "“Look it up in Petzold” remains the decisive last word in answering questions about Windows development. And in PROGRAMMING WINDOWS, FIFTH EDITION, the esteemed Windows Pioneer Award winner revises his classic text with authoritative coverage of the latest versions of the Windows operating system—once again drilling down to the essential API heart of Win32 programming.",
            'Quantity' => 54,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "cha3.jpg",
            'idCategory' => 3,
            'nameBook' => "Creating Mobile Apps",
            'idAuthor' => 23,
            'rate' => 3,
            'price' => 130,
            'salePrice' => 40,
            'SoldBooks' => 44,
            'Description' => "This second Preview Edition ebook, now with 16 chapters, is about writing applications for Xamarin.Forms, the new mobile development platform for iOS, Android, and Windows phones unveiled by Xamarin in May 2014. Xamarin.",
            'Quantity' => 33,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "cha4.jpg",
            'idCategory' => 3,
            'nameBook' => "Developer Reference",
            'idAuthor' => 23,
            'rate' => 4,
            'price' => 110,
            'salePrice' => 21,
            'SoldBooks' => 34,
            'Description' => "Reimagined for full-screen and touch-optimized apps, Windows 8 provides a platform for reaching new users in new ways. In response, programming legend Charles Petzold is rewriting his classic Programming Windows—one of the most popular programming books of all time—to show developers how to use existing skills and tools to build Windows 8 apps.",
            'Quantity' => 34,
            'Feature' => 1,
        ]);
        //Kevin Horsley
        DB::table('Book')->insert([
            'image' => "kevin1.jpg",
            'idCategory' => 2,
            'nameBook' => "Unlimited Memory",
            'idAuthor' => 24,
            'rate' => 5,
            'price' => 120,
            'salePrice' => 21,
            'SoldBooks' => 74,
            'Description' => "In Unlimited Memory, you'll learn how the world's best memory masters get themselves to concentrate at will, anytime they want. When you can easily focus and concentrate on the task at hand, and store and recall useful information, you can easily double your productivity and eliminate wasted time, stress and mistakes at work.",
            'Quantity' => 34,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "kevin2.jpg",
            'idCategory' => 2,
            'nameBook' => "The Happy Mind",
            'idAuthor' => 24,
            'rate' => 5,
            'price' => 120,
            'salePrice' => 21,
            'SoldBooks' => 75,
            'Description' => "The aim of this book is not to push a specific method of achieving of happiness. Instead, you'll discover valuable insights that will allow you to create lasting happiness for yourself instead of being driven by short-term pleasure-seeking.",
            'Quantity' => 34,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "kevin3.jpg",
            'idCategory' => 2,
            'nameBook' => "Remembering",
            'idAuthor' => 24,
            'rate' => 5,
            'price' => 180,
            'salePrice' => 24,
            'SoldBooks' => 75,
            'Description' => "You will also instantly learn some extra fun facts and trivia about each president. This book is not about rote learning or memorizing the presidents with some silly acronym, poem, or rhyme. It is about showing you a way to store information quickly and more effectively so that you can instantly recall information.",
            'Quantity' => 44,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "kevin4.jpg",
            'idCategory' => 2,
            'nameBook' => "Chinese Edition",
            'idAuthor' => 24,
            'rate' => 5,
            'price' => 178,
            'salePrice' => 16,
            'SoldBooks' => 14,
            'Description' => "How the World's Top Memory Experts Concentrate and Remember Any Information at Will, and How You Can Too Do you ever feel like you're too busy, too stressed or just too distracted to concentrate and get work done? In Unlimited Memory, you'll learn how the world's best memory masters get themselves to concentrate at will, anytime they want. ",
            'Quantity' => 34,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "kevin5.jpg",
            'idCategory' => 2,
            'nameBook' => "Mémoire illimitée",
            'idAuthor' => 24,
            'rate' => 5,
            'price' => 120,
            'salePrice' => 21,
            'SoldBooks' => 14,
            'Description' => "Savez-vous que la plupart des gens n'utilisent jamais 10% de leur potentiel de la mémoire ? Tandis que la bonne mémoire est la garantie la plus sûre de votre succès non seulement professionnel (retenir beaucoup d'information de votre domaine d'activité), mais aussi dans votre vie privée (ne pas oublier des dates importantes, des noms).",
            'Quantity' => 34,
            'Feature' => 1,
        ]);
        //Sönke Ahrens
        DB::table('Book')->insert([
            'image' => "so1.jpg",
            'idCategory' => 2,
            'nameBook' => "Experiment",
            'idAuthor' => 25,
            'rate' => 3,
            'price' => 150,
            'salePrice' => 24,
            'SoldBooks' => 100,
            'Description' => "This book deals with contemporary epistemological questions, connecting Educational Philosophy with the field of Science- and Technology Studies. It can be understood as a draft of a general theory of world-disclosure, ",
            'Quantity' => 78,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "so2.jpg",
            'idCategory' => 2,
            'nameBook' => "Geistiges Eigentum",
            'idAuthor' => 25,
            'rate' => 3,
            'price' => 142,
            'salePrice' => 34,
            'SoldBooks' => 30,
            'Description' => "Dieses Lehrbuch bietet dem Leser eine Übersicht über die wichtigsten Schutzrechte und stellt die einzelnen Themen wie Entstehung, Übertragbarkeit, Durchsetzung etc. jeweils für alle Schutzrechte gemeinsam dar. Hierdurch werden das Verständnis für die übergreifenden Grundlagen und der Blick für das Gesamtsystem gefördert. ",
            'Quantity' => 28,
            'Feature' => 1,
        ]);
        DB::table('Book')->insert([
            'image' => "so3.jpg",
            'idCategory' => 2,
            'nameBook' => "Das Zettelkasten",
            'idAuthor' => 25,
            'rate' => 3,
            'price' => 123,
            'salePrice' => 18,
            'SoldBooks' => 3,
            'Description' => "Das Zettelkasten-Prinzip beschreibt die Methode, die es Niklas Luhmann ermöglichte, zu einem der produktivsten und interessantesten Sozialwissenschaftler des 20. Jahrhunderts zu werden und erläutert die lernpsychologischen Hintergründe seiner Funktionsweise.",
            'Quantity' => 38,
            'Feature' => 1,
        ]);
    }
}
