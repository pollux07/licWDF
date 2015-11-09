<?php

namespace DsCorp\General\GeneralBundle\Entity;

/**
 * estatus
 */
class estatus
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $estatus;


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
     * Set estatus
     *
     * @param string $estatus
     *
     * @return estatus
     */
    public function setEstatus($estatus)
    {
        $this->estatus = $estatus;

        return $this;
    }

    /**
     * Get estatus
     *
     * @return string
     */
    public function getEstatus()
    {
        return $this->estatus;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $equipo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->equipo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add equipo
     *
     * @param \DsCorp\Equipo\EquipoBundle\Entity\equipo $equipo
     *
     * @return estatus
     */
    public function addEquipo(\DsCorp\Equipo\EquipoBundle\Entity\equipo $equipo)
    {
        $this->equipo[] = $equipo;

        return $this;
    }

    /**
     * Remove equipo
     *
     * @param \DsCorp\Equipo\EquipoBundle\Entity\equipo $equipo
     */
    public function removeEquipo(\DsCorp\Equipo\EquipoBundle\Entity\equipo $equipo)
    {
        $this->equipo->removeElement($equipo);
    }

    /**
     * Get equipo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEquipo()
    {
        return $this->equipo;
    }
}
