<?php
/**
 * Function fixture to create fakes users with orm fixture
 */

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    private UserPasswordEncoderInterface $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $faker = Factory::Create('fr_FR');
        $hash = $this->encoder;
        for($c = 0; $c < 5; $c++) {
            $email = 'toto' . $c .'@toto.com';
            $user = new User();
            $user->setEmail($email)
                //you can change the password or use faker
                ->setPassword($hash)
                ->setFirstname($faker->firstName)
                ->setLastname($faker->lastName);
            $manager->persist($user);
        }

        $manager->flush();
    }
}
