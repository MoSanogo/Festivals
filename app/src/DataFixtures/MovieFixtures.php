<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Movie;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);
        //Action
         $movie=new Movie();
         $movie->setType("Action");
         $movie->setUrl('https://www.youtube.com/embed/HyNJ3UrGk_I');
         $movie->setReleaseYear(new \DateTime('now'));
         $movie->setDescription("Equalizer");
         $manager->persist($movie);

         $movie=new Movie();
         $movie->setType("Action");
         $movie->setUrl('https://www.youtube.com/watch?v=rmC3ZhIHHi4');
         $movie->setReleaseYear(new \DateTime('now'));
         $movie->setDescription("Spectral");
         $manager->persist($movie);
         //Dramas
         $movie=new Movie();
         $movie->setType("Dramas");
         $movie->setUrl('https://www.youtube.com/watch?v=-Denciie5oA');
         $movie->setReleaseYear(new \DateTime('now'));
         $movie->setDescription("Lady Bird");
         $manager->persist($movie);

         $movie=new Movie();
         $movie->setType("Dramas");
         $movie->setUrl('https://www.youtube.com/watch?v=HdMP4sWc71M');
         $movie->setReleaseYear(new \DateTime('now'));
         $movie->setDescription("Forever My girl");
         $manager->persist($movie);

         //Classics
         $movie=new Movie();
         $movie->setType("Classics");
         $movie->setUrl('https://www.youtube.com/watch?v=HdMP4sWc71M');
         $movie->setReleaseYear(new \DateTime('now'));
         $movie->setDescription("Forever My girl");
         $manager->persist($movie);
         $movie=new Movie();
         $movie->setType("Classics");
         $movie->setUrl('https://www.youtube.com/watch?v=HdMP4sWc71M');
         $movie->setReleaseYear(new \DateTime('now'));
         $movie->setDescription("Cranford ");
         $manager->persist($movie);


        $manager->flush();
    }
}
/* 

   Dramas  
  


https://www.youtube.com/watch?v=1dYv5u6v55Y   Pride and Prejudice  classics

https://www.youtube.com/watch?v=hf1zh4j2l0Y */