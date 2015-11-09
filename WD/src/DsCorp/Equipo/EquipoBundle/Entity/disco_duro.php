<?php

namespace DsCorp\Equipo\EquipoBundle\Entity;

/**
 * disco_duro
 */
class disco_duro
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $marca;

    /**
     * @var string
     */
    private $capacidad;

    /**
     * @var string
     */
    private $tipo;


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
     * Set marca
     *
     * @param string $marca
     *
     * @return disco_duro
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set capacidad
     *
     * @param string $capacidad
     *
     * @return disco_duro
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return disco_duro
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
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
     * @return disco_duro
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
