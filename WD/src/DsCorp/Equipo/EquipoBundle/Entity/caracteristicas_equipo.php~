<?php

namespace DsCorp\Equipo\EquipoBundle\Entity;

/**
 * caracteristicas_equipo
 */
class caracteristicas_equipo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $versionSoftware;

    /**
     * @var integer
     */
    private $numeroInterfaz;

    /**
     * @var string
     */
    private $dimenciones;


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
     * Set versionSoftware
     *
     * @param string $versionSoftware
     *
     * @return caracteristicas_equipo
     */
    public function setVersionSoftware($versionSoftware)
    {
        $this->versionSoftware = $versionSoftware;

        return $this;
    }

    /**
     * Get versionSoftware
     *
     * @return string
     */
    public function getVersionSoftware()
    {
        return $this->versionSoftware;
    }

    /**
     * Set numeroInterfaz
     *
     * @param integer $numeroInterfaz
     *
     * @return caracteristicas_equipo
     */
    public function setNumeroInterfaz($numeroInterfaz)
    {
        $this->numeroInterfaz = $numeroInterfaz;

        return $this;
    }

    /**
     * Get numeroInterfaz
     *
     * @return integer
     */
    public function getNumeroInterfaz()
    {
        return $this->numeroInterfaz;
    }

    /**
     * Set dimenciones
     *
     * @param string $dimenciones
     *
     * @return caracteristicas_equipo
     */
    public function setDimenciones($dimenciones)
    {
        $this->dimenciones = $dimenciones;

        return $this;
    }

    /**
     * Get dimenciones
     *
     * @return string
     */
    public function getDimenciones()
    {
        return $this->dimenciones;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $modelo;

    /**
     * @var \DsCorp\Equipo\EquipoBundle\Entity\capacidad
     */
    private $capacidad;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->modelo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add modelo
     *
     * @param \DsCorp\Equipo\EquipoBundle\Entity\modelo $modelo
     *
     * @return caracteristicas_equipo
     */
    public function addModelo(\DsCorp\Equipo\EquipoBundle\Entity\modelo $modelo)
    {
        $this->modelo[] = $modelo;

        return $this;
    }

    /**
     * Remove modelo
     *
     * @param \DsCorp\Equipo\EquipoBundle\Entity\modelo $modelo
     */
    public function removeModelo(\DsCorp\Equipo\EquipoBundle\Entity\modelo $modelo)
    {
        $this->modelo->removeElement($modelo);
    }

    /**
     * Get modelo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set capacidad
     *
     * @param \DsCorp\Equipo\EquipoBundle\Entity\capacidad $capacidad
     *
     * @return caracteristicas_equipo
     */
    public function setCapacidad(\DsCorp\Equipo\EquipoBundle\Entity\capacidad $capacidad = null)
    {
        $this->capacidad = $capacidad;

        return $this;
    }

    /**
     * Get capacidad
     *
     * @return \DsCorp\Equipo\EquipoBundle\Entity\capacidad
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }
}
