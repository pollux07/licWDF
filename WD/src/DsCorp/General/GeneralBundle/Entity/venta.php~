<?php

namespace DsCorp\General\GeneralBundle\Entity;

/**
 * venta
 */
class venta
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaVenta;


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
     * Set fechaVenta
     *
     * @param \DateTime $fechaVenta
     *
     * @return venta
     */
    public function setFechaVenta($fechaVenta)
    {
        $this->fechaVenta = $fechaVenta;

        return $this;
    }

    /**
     * Get fechaVenta
     *
     * @return \DateTime
     */
    public function getFechaVenta()
    {
        return $this->fechaVenta;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $equipo;

    /**
     * @var \DsCorp\Equipo\EquipoBundle\Entity\producto
     */
    private $producto;

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
     * @return venta
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
     * Set producto
     *
     * @param \DsCorp\Equipo\EquipoBundle\Entity\producto $producto
     *
     * @return venta
     */
    public function setProducto(\DsCorp\Equipo\EquipoBundle\Entity\producto $producto = null)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return \DsCorp\Equipo\EquipoBundle\Entity\producto
     */
    public function getProducto()
    {
        return $this->producto;
    }
}
