<?php

namespace DsCorp\Equipo\EquipoBundle\Entity;

/**
 * procesador
 */
class procesador
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
    private $modelo;

    /**
     * @var string
     */
    private $velocidad;


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
     * @return procesador
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
     * Set modelo
     *
     * @param string $modelo
     *
     * @return procesador
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set velocidad
     *
     * @param string $velocidad
     *
     * @return procesador
     */
    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;

        return $this;
    }

    /**
     * Get velocidad
     *
     * @return string
     */
    public function getVelocidad()
    {
        return $this->velocidad;
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
     * @return procesador
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
