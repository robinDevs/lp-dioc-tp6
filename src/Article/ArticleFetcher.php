<?php

namespace App\Article;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Registry;

class ArticleFetcher
{
    public function fetch(Registry $doctrine, $limit)
    {
        $em = $doctrine->getManager();

        $articles = $em->getRepository(Article::class)->findBy(array('name' => 'Registration'),array('name' => 'DESC'),$limit);


        // Retourne les 10 derniers articles.
        // La limit (ici 10) doit provenir d'une variable d'env.

        return $articles;
    }
}
