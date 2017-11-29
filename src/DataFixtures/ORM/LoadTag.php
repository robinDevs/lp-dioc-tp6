<?php
/**
 * Created by PhpStorm.
 * User: robin.deruyck
 * Date: 29/11/17
 * Time: 10:22
 */

namespace App\DataFixtures\ORM;


class LoadTag
{
    const USER_PASSWORD = 'user';

    public function load(ObjectManager $manager)
    {
        $tag = new Tag("micro", "");
        $this->addReference('tag', $tag);

        $manager->persist($tag);
        $manager->flush();

    }
}