<?php

namespace DsCorp\Equipo\EquipoBundle\Entity;

/**
 * producto
 */
class producto
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
     * @var string
     */
    private $termino;


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
     * @return producto
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
     * Set termino
     *
     * @param string $termino
     *
     * @return producto
     */
    public function setTermino($termino)
    {
        $this->termino = $termino;

        return $this;
    }

    /**
     * Get termino
     *
     * @return string
     */
    public function getTermino()
    {
        return $this->termino;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $venta;

    /**
     * @var \DsCorp\Equipo\EquipoBundle\Entity\modelo
     */
    private $modelo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->venta = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ventum
     *
     * @param \DsCorp\General\GeneralBundle\Entity\venta $ventum
     *
     * @return producto
     */
    public function addVentum(\DsCorp\General\GeneralBundle\Entity\venta $ventum)
    {
        $this->venta[] = $ventum;

        return $this;
    }

    /**
     * Remove ventum
     *
     * @param \DsCorp\General\GeneralBundle\Entity\venta $ventum
     */
    public function removeVentum(\DsCorp\General\GeneralBundle\Entity\venta $ventum)
    {
        $this->venta->removeElement($ventum);
    }

    /**
     * Get venta
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVenta()
    {
        return $this->venta;
    }

    /**
     * Set modelo
     *
     * @param \DsCorp\Equipo\EquipoBundle\Entity\modelo $modelo
     *
     * @return producto
     */
    public function setModelo(\DsCorp\Equipo\EquipoBundle\Entity\modelo $modelo = null)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return \DsCorp\Equipo\EquipoBundle\Entity\modelo
     */
    public function getModelo()
    {
        return $this->modelo;
    }
}
