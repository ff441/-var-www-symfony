<?php

namespace MyApp\GdaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Anomalie {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     * @Assert\NotBlank()
     */
    private $dateCreation;

    /**
     * @ORM\Column(type="datetime")
     *      
     */
    private $dateCloture;

    /**
     * @ORM\ManyToOne(targetEntity="Etat")
     */
    private $etat;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @Assert\NotBlank()
     */
    private $createur;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     */
    private $proprietaire;

    /**
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     */
    private $solveur;

    /**
     * @ORM\ManyToOne(targetEntity="Projet")
     * @Assert\NotBlank()
     */
    private $projet;
    
    
    
    /**
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @Assert\NotBlank()
     */
    private $categorie;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set dateCreation
     *
     * @param date $dateCreation
     */
    public function setDateCreation($dateCreation) {
        $this->dateCreation = $dateCreation;
    }

    /**
     * Get dateCreation
     *
     * @return date 
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Set dateCloture
     *
     * @param date $dateCloture
     */
    public function setDateCloture($dateCloture) {
        $this->dateCloture = $dateCloture;
    }

    /**
     * Get dateCloture
     *
     * @return date 
     */
    public function getDateCloture() {
        return $this->dateCloture;
    }

    /**
     * Set etat
     *
     * @param MyApp\GdaBundle\Entity\Etat $etat
     */
    public function setEtat(\MyApp\GdaBundle\Entity\Etat $etat) {
        $this->etat = $etat;
    }

    /**
     * Get etat
     *
     * @return MyApp\GdaBundle\Entity\Etat 
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Set createur
     *
     * @param MyApp\GdaBundle\Entity\Utilisateur $createur
     */
    public function setCreateur(\MyApp\GdaBundle\Entity\Utilisateur $createur) {
        $this->createur = $createur;
    }

    /**
     * Get createur
     *
     * @return MyApp\GdaBundle\Entity\Utilisateur 
     */
    public function getCreateur() {
        return $this->createur;
    }

    /**
     * Set proprietaire
     *
     * @param MyApp\GdaBundle\Entity\Utilisateur $proprietaire
     */
    public function setProprietaire(\MyApp\GdaBundle\Entity\Utilisateur $proprietaire) {
        $this->proprietaire = $proprietaire;
    }

    /**
     * Get proprietaire
     *
     * @return MyApp\GdaBundle\Entity\Utilisateur 
     */
    public function getProprietaire() {
        return $this->proprietaire;
    }

    /**
     * Set solveur
     *
     * @param MyApp\GdaBundle\Entity\Utilisateur $solveur
     */
    public function setSolveur(\MyApp\GdaBundle\Entity\Utilisateur $solveur) {
        $this->solveur = $solveur;
    }

    /**
     * Get solveur
     *
     * @return MyApp\GdaBundle\Entity\Utilisateur 
     */
    public function getSolveur() {
        return $this->solveur;
    }

    /**
     * Set projet
     *
     * @param MyApp\GdaBundle\Entity\Projet $projet
     */
    public function setProjet(\MyApp\GdaBundle\Entity\Projet $projet) {
        $this->projet = $projet;
    }

    /**
     * Get projet
     *
     * @return MyApp\GdaBundle\Entity\Projet 
     */
    public function getProjet() {
        return $this->projet;
    }
    
    /**
     * Set categorie
     *
     * @param MyApp\GdaBundle\Entity\Categorie $categorie
     */
    public function setCategorie(\MyApp\GdaBundle\Entity\Categorie $categorie)
    {
        $this->categorie = $categorie;
    }
    
    /**
     * Get projet
     *
     * @return MyApp\GdaBundle\Entity\Categorie
     */
    public function getCategorie() {
        return $this->categorie;
    }
    
}    

