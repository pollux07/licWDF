<?php

namespace DsCorp\Equipo\EquipoBundle\Entity;

/**
 * modelo
 */
class modelo
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return modelo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $producto;

    /**
     * @var \DsCorp\Equipo\EquipoBundle\Entity\caracteristicas_equipo
     */
    private $caracteristicas_equipo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->producto = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add producto
     *
     * @param \DsCorp\Equipo\EquipoBundle\Entity\producto $producto
     *
     * @return modelo
     */
    public function addProducto(\DsCorp\Equipo\EquipoBundle\Entity\producto $producto)
    {
        $this->producto[] = $producto;

        return $this;
    }

    /**
     * Remove producto
     *
     * @param \DsCorp\Equipo\EquipoBundle\Entity\producto $producto
     */
    public function removeProducto(\DsCorp\Equipo\EquipoBundle\Entity\producto $producto)
    {
        $this->producto->removeElement($producto);
    }

    /**
     * Get producto
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set caracteristicasEquipo
     *
     * @param \DsCorp\Equipo\EquipoBundle\Entity\caracteristicas_equipo $caracteristicasEquipo
     *
     * @return modelo
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
