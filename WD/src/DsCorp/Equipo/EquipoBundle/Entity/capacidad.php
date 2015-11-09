<?php

namespace DsCorp\Equipo\EquipoBundle\Entity;

/**
 * capacidad
 */
class capacidad
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $capacidad;


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
     * Set capacidad
     *
     * @param string $capacidad
     *
     * @return capacidad
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;

        return $this;
    }

    /**
     * Get capacidad
     *
     * @return string
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $caracteristicas_equipo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->caracteristicas_equipo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add caracteristicasEquipo
     *
     * @param \DsCorp\Equipo\EquipoBundle\Entity\caracteristicas_equipo $caracteristicasEquipo
     *
     * @return capacidad
     */
    public function addCaracteristicasEquipo(\DsCorp\Equipo\EquipoBundle\Entity\caracteristicas_equipo $caracteristicasEquipo)
    {
        $this->caracteristicas_equipo[] = $caracteristicasEquipo;

        return $this;
    }

    /**
     * Remove caracteristicasEquipo
     *
     * @param \DsCorp\Equipo\EquipoBundle\Entity\caracteristicas_equipo $caracteristicasEquipo
     */
    public function removeCaracteristicasEquipo(\DsCorp\Equipo\EquipoBundle\Entity\caracteristicas_equipo $caracteristicasEquipo)
    {
        $this->caracteristicas_equipo->removeElement($caracteristicasEquipo);
    }

    /**
     * Get caracteristicasEquipo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCaracteristicasEquipo()
    {
        return $this->caracteristicas_equipo;
    }
}
