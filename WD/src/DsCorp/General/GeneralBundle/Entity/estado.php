<?php

namespace DsCorp\General\GeneralBundle\Entity;

/**
 * estado
 */
class estado
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreEstado;


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
     * Set nombreEstado
     *
     * @param string $nombreEstado
     *
     * @return estado
     */
    public function setNombreEstado($nombreEstado)
    {
        $this->nombreEstado = $nombreEstado;

        return $this;
    }

    /**
     * Get nombreEstado
     *
     * @return string
     */
    public function getNombreEstado()
    {
        return $this->nombreEstado;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direccion_fabricante;

    /**
     * @var \DsCorp\General\GeneralBundle\Entity\pais
     */
    private $pais;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->direccion_fabricante = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add direccionFabricante
     *
     * @param \DsCorp\Fabricante\FabricanteBundle\Entity\direccion_fabricante $direccionFabricante
     *
     * @return estado
     */
    public function addDireccionFabricante(\DsCorp\Fabricante\FabricanteBundle\Entity\direccion_fabricante $direccionFabricante)
    {
        $this->direccion_fabricante[] = $direccionFabricante;

        return $this;
    }

    /**
     * Remove direccionFabricante
     *
     * @param \DsCorp\Fabricante\FabricanteBundle\Entity\direccion_fabricante $direccionFabricante
     */
    public function removeDireccionFabricante(\DsCorp\Fabricante\FabricanteBundle\Entity\direccion_fabricante $direccionFabricante)
    {
        $this->direccion_fabricante->removeElement($direccionFabricante);
    }

    /**
     * Get direccionFabricante
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDireccionFabricante()
    {
        return $this->direccion_fabricante;
    }

    /**
     * Set pais
     *
     * @param \DsCorp\General\GeneralBundle\Entity\pais $pais
     *
     * @return estado
     */
    public function setPais(\DsCorp\General\GeneralBundle\Entity\pais $pais = null)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return \DsCorp\General\GeneralBundle\Entity\pais
     */
    public function getPais()
    {
        return $this->pais;
    }
}
