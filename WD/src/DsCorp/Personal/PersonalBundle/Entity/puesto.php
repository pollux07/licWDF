<?php

namespace DsCorp\Personal\PersonalBundle\Entity;

/**
 * puesto
 */
class puesto
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $puesto;


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
     * Set puesto
     *
     * @param string $puesto
     *
     * @return puesto
     */
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;

        return $this;
    }

    /**
     * Get puesto
     *
     * @return string
     */
    public function getPuesto()
    {
        return $this->puesto;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $personal;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->personal = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add personal
     *
     * @param \DsCorp\Personal\PersonalBundle\Entity\personal $personal
     *
     * @return puesto
     */
    public function addPersonal(\DsCorp\Personal\PersonalBundle\Entity\personal $personal)
    {
        $this->personal[] = $personal;

        return $this;
    }

    /**
     * Remove personal
     *
     * @param \DsCorp\Personal\PersonalBundle\Entity\personal $personal
     */
    public function removePersonal(\DsCorp\Personal\PersonalBundle\Entity\personal $personal)
    {
        $this->personal->removeElement($personal);
    }

    /**
     * Get personal
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonal()
    {
        return $this->personal;
    }
}
