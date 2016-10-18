<?php

namespace dataBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * chien
 */
class chien
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $sexe;

    /**
     * @var string
     */
    private $age;

    /**
     * @var string
     */
    private $taille;
    
    /**
     * @var race
     */
    private $race;


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
     * Set nom
     *
     * @param string $nom
     * @return chien
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return chien
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set age
     *
     * @param string $age
     * @return chien
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set taille
     *
     * @param string $taille
     * @return chien
     */
    public function setTaille($taille)
    {
        $this->taille = $taille;

        return $this;
    }

    /**
     * Get taille
     *
     * @return string 
     */
    public function getTaille()
    {
        return $this->taille;
    }


    /**
     * Set race
     *
     * @param race $race
     * @return chien
     */
    public function setRace(race $race = null)
    {
        $this->race = $race;

        return $this;
    }

    /**
     * Get race
     *
     * @return race
     */
    public function getRace()
    {
        return $this->race;
    }
    /**
     * @var \userBundle\ENtity\User
     */
    private $maitre;


    /**
     * Set maitre
     *
     * @param \userBundle\ENtity\User $maitre
     * @return chien
     */
    public function setMaitre(\userBundle\ENtity\User $maitre = null)
    {
        $this->maitre = $maitre;

        return $this;
    }

    /**
     * Get maitre
     *
     * @return \userBundle\ENtity\User 
     */
    public function getMaitre()
    {
        return $this->maitre;
    }
    /**
     * @var \dataBundle\Entity\etat
     */
    private $etat;


    /**
     * Set etat
     *
     * @param \dataBundle\Entity\etat $etat
     * @return chien
     */
    public function setEtat(\dataBundle\Entity\etat $etat = null)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return \dataBundle\Entity\etat 
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
