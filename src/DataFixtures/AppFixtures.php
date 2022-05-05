<?php

namespace App\DataFixtures;

use App\Entity\UserOne;
use App\Entity\UserTwo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\PasswordHasher\PasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }
    public function load(ObjectManager $manager): void
    {
        // création de l'utilisateur 1 avec le role ROLE_ONE
        $user = new UserOne();
        $password = $this->hasher->hashPassword($user, '12345');
        $user->setEmail("one@one.one")
        ->setRoles(['ROLE_ONE'])
        ->setPassword($password);
        $manager->persist($user);

        // création de l'utilisateur 2 avec le role ROLE_TWO
        $user2 = new UserTwo();
        $password = $this->hasher->hashPassword($user2, '12345');
        $user2->setEmail("two@two.two")
        ->setRoles(['ROLE_TWO'])
        ->setPassword($password);
        $manager->persist($user2);

        $manager->flush();
    }
}
