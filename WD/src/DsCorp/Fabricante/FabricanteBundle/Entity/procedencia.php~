<?php

namespace DsCorp\Fabricante\FabricanteBundle\Entity;

/**
 * procedencia
 */
class procedencia
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaLlegada;

    /**
     * @var string
     */
    private $numeroSerieFabricante;

    /**
     * @var string
     */
    private $numeroSerieWarriors;

    /**
     * @var \DateTime
     */
    private $fechaSalida;


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
     * Set fechaLlegada
     *
     * @param \DateTime $fechaLlegada
     *
     * @return procedencia
     */
    public function setFechaLlegada($fechaLlegada)
    {
        $this->fechaLlegada = $fechaLlegada;

        return $this;
    }

    /**
     * Get fechaLlegada
     *
     * @return \DateTime
     */
    public function getFechaLlegada()
    {
        return $this->fechaLlegada;
    }

    /**
     * Set numeroSerieFabricante
     *
     * @param string $numeroSerieFabricante
     *
     * @return procedencia
     */
    public function setNumeroSerieFabricante($numeroSerieFabricante)
    {
        $this->numeroSerieFabricante = $numeroSerieFabricante;

        return $this;
    }

    /**
     * Get numeroSerieFabricante
     *
     * @return string
     */
    public function getNumeroSerieFabricante()
    {
        return $this->numeroSerieFabricante;
    }

    /**
     * Set numeroSerieWarriors
     *
     * @param string $numeroSerieWarriors
     *
     * @return procedencia
     */
    public function setNumeroSerieWarriors($numeroSerieWarriors)
    {
        $this->numeroSerieWarriors = $numeroSerieWarriors;

        return $this;
    }

    /**
     * Get numeroSerieWarriors
     *
     * @return string
     */
    public function getNumeroSerieWarriors()
    {
        return $this->numeroSerieWarriors;
    }

    /**
     * Set fechaSalida
     *
     * @param \DateTime $fechaSalida
     *
     * @return procedencia
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fechaSalida = $fechaSalida;

        return $this;
    }

    /**
     * Get fechaSalida
     *
     * @return \DateTime
     */
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $equipo;

    /**
     * @var \DsCorp\Fabricante\FabricanteBundle\Entity\fabricante
     */
    private $fabricante;

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
     * @return procedencia
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

    /**
     * Set fabricante
     *
     * @param \DsCorp\Fabricante\FabricanteBundle\Entity\fabricante $fabricante
     *
     * @return procedencia
     */
    public function setFabricante(\DsCorp\Fabricante\FabricanteBundle\Entity\fabricante $fabricante = null)
    {
        $this->fabricante = $fabricante;

        return $this;
    }

    /**
     * Get fabricante
     *
     * @return \DsCorp\Fabricante\FabricanteBundle\Entity\fabricante
     */
    public function getFabricante()
    {
        return $this->fabricante;
    }
}
