<?php

namespace DsCorp\Equipo\EquipoBundle\Entity;

/**
 * equipo
 */
class equipo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $numeroSerie;

    /**
     * @var \DateTime
     */
    private $fechaInstalacion;


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
     * Set numeroSerie
     *
     * @param string $numeroSerie
     *
     * @return equipo
     */
    public function setNumeroSerie($numeroSerie)
    {
        $this->numeroSerie = $numeroSerie;

        return $this;
    }

    /**
     * Get numeroSerie
     *
     * @return string
     */
    public function getNumeroSerie()
    {
        return $this->numeroSerie;
    }

    /**
     * Set fechaInstalacion
     *
     * @param \DateTime $fechaInstalacion
     *
     * @return equipo
     */
    public function setFechaInstalacion($fechaInstalacion)
    {
        $this->fechaInstalacion = $fechaInstalacion;

        return $this;
    }

    /**
     * Get fechaInstalacion
     *
     * @return \DateTime
     */
    public function getFechaInstalacion()
    {
        return $this->fechaInstalacion;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ubicacion;

    /**
     * @var \DsCorp\Equipo\EquipoBundle\Entity\caracteristicas_equipo
     */
    private $caracteristicas_equipo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ubicacion = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ubicacion
     *
     * @param \DsCorp\General\GeneralBundle\Entity\ubicacion $ubicacion
     *
     * @return equipo
     */
    public function addUbicacion(\DsCorp\General\GeneralBundle\Entity\ubicacion $ubicacion)
    {
        $this->ubicacion[] = $ubicacion;

        return $this;
    }

    /**
     * Remove ubicacion
     *
     * @param \DsCorp\General\GeneralBundle\Entity\ubicacion $ubicacion
     */
    public function removeUbicacion(\DsCorp\General\GeneralBundle\Entity\ubicacion $ubicacion)
    {
        $this->ubicacion->removeElement($ubicacion);
    }

    /**
     * Get ubicacion
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set caracteristicasEquipo
     *
     * @param \DsCorp\Equipo\EquipoBundle\Entity\caracteristicas_equipo $caracteristicasEquipo
     *
     * @return equipo
     */
    public function setCaracteristicasEquipo(\DsCorp\Equipo\EquipoBundle\Entity\caracteristicas_equipo $caracteristicasEquipo = null)
    {
        $this->caracteristicas_equipo = $caracteristicasEquipo;

        return $this;
    }

    /**
     * Get caracteristicasEquipo
     *
     * @return \DsCorp\Equipo\EquipoBundle\Entity\caracteristicas_equipo
     */
    public function getCaracteristicasEquipo()
    {
        return $this->caracteristicas_equipo;
    }
}
