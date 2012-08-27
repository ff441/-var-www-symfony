<?php
namespace MyApp\GdaBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
     */    
    private $dateCommentaire;
    
     /**
     * @ORM\Column(type="string", length=255)
     */
    private $texte;
	
	
	/**
     * @ORM\ManyToOne(targetEntity="Anomalie")
     */    
    private $anomalie;
	
	

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateCommentaire
     *
     * @param date $dateCommentaire
     */
    public function setDateCommentaire($dateCommentaire)
    {
        $this->dateCommentaire = $dateCommentaire;
    }

    /**
     * Get dateCommentaire
     *
     * @return date 
     */
    public function getDateCommentaire()
    {
        return $this->dateCommentaire;
    }

    /**
     * Set texte
     *
     * @param string $texte
     */
    public function setTexte($texte)
    {
        $this->texte = $texte;
    }

    /**
     * Get texte
     *
     * @return string 
     */
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set anomalie
     *
     * @param MyApp\GdaBundle\Entity\Anomalie $anomalie
     */
    public function setAnomalie(\MyApp\GdaBundle\Entity\Anomalie $anomalie)
    {
        $this->anomalie = $anomalie;
    }

    /**
     * Get anomalie
     *
     * @return MyApp\GdaBundle\Entity\Anomalie 
     */
    public function getAnomalie()
    {
        return $this->anomalie;
    }
}