<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Objet;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
      
        $objet = new Objet();

            $objet->setNom('Parapluie pour boire');
            $objet->setImage('https://cdn.discordapp.com/attachments/836145572699177010/907986224805978112/chindogu_008.png');
            $objet->setPays('Japon');
            $objet->setDescription("Il permet de récupérer l'eau de pluie dans un réservoir, plus aucun soucis de soif !");
            $manager->persist($objet);

        
        $objet = new Objet();

            $objet->setNom('La fleur');
            $objet->setImage('https://cdn.discordapp.com/attachments/836145572699177010/907986277838762064/stupides15.png');
            $objet->setPays('Japon');
            $objet->setDescription("Il permet de ne pas tremper ses jolies cheveux dans son bol de nouilles !");
            $manager->persist($objet);


        $objet = new Objet();

            $objet->setNom('Le MouchMouch');
            $objet->setImage('https://cdn.discordapp.com/attachments/836145572699177010/907986345547432016/e50b959867af45cc129c0bdc4434461b.png');
            $objet->setPays('Japon');
            $objet->setDescription("Il permet de te moucher sans avoir à chercher son paquet dans son sac !");
            $manager->persist($objet);

        $objet = new Objet();

            $objet->setNom('La maChine');
            $objet->setImage('https://cdn.discordapp.com/attachments/836145572699177010/907986588657668136/f8314f9fd3287815037178667b84f493.png');
            $objet->setPays('Chine');
            $objet->setDescription("Il permet de te faire la machine tout en entrainant son fessier ! Parfait pour...");
            $manager->persist($objet);

        $objet = new Objet();

            $objet->setNom('La décapsuleuse');
            $objet->setImage('https://cdn.discordapp.com/attachments/836145572699177010/907988986390278154/tong_reef_decap-c168c.png');
            $objet->setPays('France');
            $objet->setDescription("Il permet de décapsuler avec sa tong ! Pratique pour les soirées d'été.");
            $manager->persist($objet);

        $objet = new Objet();

            $objet->setNom('La t-shirt gratte dos');
            $objet->setImage('https://cdn.discordapp.com/attachments/836145572699177010/907988660622860308/meilleurs-des-objets-inutiles-009-grille-numerote-pour-gratter-au-bon-endroit.png');
            $objet->setPays('Amérique');
            $objet->setDescription("Il permet de décrire la position exact de où un grattage est nécéssaire !");
            $manager->persist($objet);

        $objet = new Objet();

            $objet->setNom('La double dose');
            $objet->setImage('https://cdn.discordapp.com/attachments/836145572699177010/907988492926206003/w_doublepinte.png');
            $objet->setPays("Le pays de l'acoolisme");
            $objet->setDescription("Il permet de boire 2 fois plus, et 2 fois plus vite");
            $manager->persist($objet);
        
        $objet = new Objet();

            $objet->setNom('Drapeau');
            $objet->setImage('https://drapeau-lgbt.fr/wp-content/uploads/2020/06/drapeau-lgbt-6-couleurs-504x378.jpg');
            $objet->setPays("Le pays des lettres");
            $objet->setDescription("Mieux vaut ne pas en parler");
            $manager->persist($objet);

            $manager->flush();
    }
}
