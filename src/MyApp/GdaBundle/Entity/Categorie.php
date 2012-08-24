<?php

namespace MyApp\GdaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Categorie {

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
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
     * @param categorie $categorie
     */
    public function setCategorie($categorie) {
        $this->categorie = $categorie;
    }

    /**
     * Get dateCreation
     *
     * @return categorie 
     */
    public function getCategorie() {
        return $this->categorie;
    }
    
    
    public function __toString() {
        return $this->categorie;
    }

    
}

?>
