<?php

namespace DsCorp\Equipo\EquipoBundle\Entity;

/**
 * tipo_licencia
 */
class tipo_licencia
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $precio;

    /**
     * @var integer
     */
    private $meses;


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
     * Set precio
     *
     * @param integer $precio
     *
     * @return tipo_licencia
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set meses
     *
     * @param integer $meses
     *
     * @return tipo_licencia
     */
    public function setMeses($meses)
    {
        $this->meses = $meses;

        return $this;
    }

    /**
     * Get meses
     *
     * @return integer
     */
    public function getMeses()
    {
        return $this->meses;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $licencia_equipo;

    /**
     * @var \DsCorp\Equipo\EquipoBundle\Entity\producto
     */
    private $producto;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->licencia_equipo = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add licenciaEquipo
     *
     * @param \DsCorp\Equipo\EquipoBundle\Entity\licencia_equipo $licenciaEquipo
     *
     * @return tipo_licencia
     */
    public function addLicenciaEquipo(\DsCorp\Equipo\EquipoBundle\Entity\licencia_equipo $licenciaEquipo)
    {
        $this->licencia_equipo[] = $licenciaEquipo;

        return $this;
    }

    /**
     * Remove licenciaEquipo
     *
     * @param \DsCorp\Equipo\EquipoBundle\Entity\licencia_equipo $licenciaEquipo
     */
    public function removeLicenciaEquipo(\DsCorp\Equipo\EquipoBundle\Entity\licencia_equipo $licenciaEquipo)
    {
        $this->licencia_equipo->removeElement($licenciaEquipo);
    }

    /**
     * Get licenciaEquipo
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLicenciaEquipo()
    {
        return $this->licencia_equipo;
    }

    /**
     * Set producto
     *
     * @param \DsCorp\Equipo\EquipoBundle\Entity\producto $producto
     *
     * @return tipo_licencia
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
