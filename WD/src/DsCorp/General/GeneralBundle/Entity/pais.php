<?php

namespace DsCorp\General\GeneralBundle\Entity;

/**
 * pais
 */
class pais
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombrePais;


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
     * Set nombrePais
     *
     * @param string $nombrePais
     *
     * @return pais
     */
    public function setNombrePais($nombrePais)
    {
        $this->nombrePais = $nombrePais;

        return $this;
    }

    /**
     * Get nombrePais
     *
     * @return string
     */
    public function getNombrePais()
    {
        return $this->nombrePais;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $direccion_empresa;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->direccion_empresa = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add direccionEmpresa
     *
     * @param \DsCorp\Empresa\EmpresaBundle\Entity\direccion_empresa $direccionEmpresa
     *
     * @return pais
     */
    public function addDireccionEmpresa(\DsCorp\Empresa\EmpresaBundle\Entity\direccion_empresa $direccionEmpresa)
    {
        $this->direccion_empresa[] = $direccionEmpresa;

        return $this;
    }

    /**
     * Remove direccionEmpresa
     *
     * @param \DsCorp\Empresa\EmpresaBundle\Entity\direccion_empresa $direccionEmpresa
     */
    public function removeDireccionEmpresa(\DsCorp\Empresa\EmpresaBundle\Entity\direccion_empresa $direccionEmpresa)
    {
        $this->direccion_empresa->removeElement($direccionEmpresa);
    }

    /**
     * Get direccionEmpresa
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDireccionEmpresa()
    {
        return $this->direccion_empresa;
    }
}
