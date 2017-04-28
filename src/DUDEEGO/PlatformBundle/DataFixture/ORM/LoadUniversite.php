<?php
// src/DUDEEGO/PlatformBundle/DataFixtures/ORM/LoadUniversite.php

namespace DUDEEGO\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use DUDEEGO\PlatformBundle\Entity\Universite;

class LoadUniversite implements FixtureInterface
{
  // Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
  public function load(ObjectManager $manager)
  {/*
    // Liste des noms de catégorie à ajouter
    $noms = array(
      'Universite de Barcelone',
      'Universite de Madrid',
      'Universite de New Yord',
      'Universite de Pologne',
      'Universite de Rouen'
      );
    $descriptions = array(
      'Universite de Barcelone',
      'Universite de Madrid',
      'Universite de New Yord',
      'Universite de Pologne',
      'Universite de Rouen'
      );
    $langues = array(
      'Catalan',
      'Espagnol',
      'Americain',
      'Polonais',
      'Français'
      );
    $prix = array(
      '123',
      '147',
      '159',
      '963',
      '753'
      );
    $bourses = array(
      '1',
      '1',
      '1',
      '0',
      '0'
      );
    $campus = array(
      '0',
      '1',
      '1',
      '0',
      '1'
      );
    $classements = array(
      '1',
      '2',
      '3',
      '4',
      '5'
      );
    $tauxReussites = array(
      '50',
      '60',
      '70',
      '30',
      '99'
      );
    $tauxEmplois = array(
      '20',
      '30',
      '50',
      '70',
      '80'
      );
    $remunerations = array(
      '1100',
      '1100',
      '2000',
      '500',
      '1800'
      );
    $partenaires = array(
      '1',
      '1',
      '1',
      '0',
      '0'
      );
    $adresses = array(
      'rue de Barcelone',
      'rue de Madrid',
      'rue de New Yord',
      'rue de Pologne',
      'rue de Rouen'
      );
    $codePostals = array(
      '10000',
      '15000',
      '555-888',
      '123E147N',
      '76000'
      );
    $villes = array(
      'Barcelone',
      'Madrid',
      'New York',
      'Pologne',
      'Rouen'
      );
    $pays = array(
      'Espagne',
      'Espagne',
      'Amerique',
      'Pologne',
      'France'
      );
    $images = array(
      '1',
      '1',
      '1',
      '1',
      '1'
      );
    foreach ($noms as $nom) {
      // On crée l'université
      $universite = new Universite();
      $universite->setNom($nom);
      foreach ($descriptions as $description) {
        $universite->setDescription($nom);
        foreach ($langues as $langue) {
          $universite->setLangue($langue);
          foreach ($prix as $pri) {
            $universite->setPrix($pri);
            foreach ($bourses as $bourse) {
              $universite->setBourse($bourse);
              foreach ($campus as $campu) {
                $universite->setCampus($campu);
                foreach ($classements as $classement) {
                  $universite->setClassement($classement);
                  foreach ($tauxReussites as $tauxReussite) {
                    $universite->setTauxReussite($tauxReussite);
                    foreach ($tauxEmplois as $tauxEmploi) {
                      $universite->setTauxEmploi($tauxEmploi);
                      foreach ($remunerations as $remuneration) {
                        $universite->setRemuneration($remuneration);
                        foreach ($partenaires as $partenaire) {
                          $universite->setPartenaire($partenaire);
                          foreach ($adresses as $adresse) {
                            $universite->setAdresse($adresse);
                            foreach ($codePostals as $codePostal) {
                              $universite->setCodePostal($codePostal);
                              foreach ($villes as $ville) {
                                $universite->setVille($ville);
                                foreach ($pays as $pay) {
                                  $universite->setPays($pay);
                                  foreach ($images as $image) {
                                    $universite->setImage($image);
                                  }
                                }
                              }
                            }
                          }
                        }
                      }
                    }
                  }
      // On la persiste
                  $manager->persist($universite);
                }
    // On déclenche l'enregistrement de toutes les universités
                $manager->flush();

                */
              }
            }