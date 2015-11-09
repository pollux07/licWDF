<?php

namespace DsCorp\Personal\PersonalBundle\Entity;

/**
 * usuarios
 */
class usuarios
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombreUsuario;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $rol;

    /**
     * @var string
     */
    private $salt;


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
     * Set nombreUsuario
     *
     * @param string $nombreUsuario
     *
     * @return usuarios
     */
    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    /**
     * Get nombreUsuario
     *
     * @return string
     */
    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return usuarios
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set rol
     *
     * @param string $rol
     *
     * @return usuarios
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return usuarios
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $venta;

    /**
     * @var \DsCorp\Personal\PersonalBundle\Entity\personal
     */
    private $personal;

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
     * @return usuarios
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
     * Set personal
     *
     * @param \DsCorp\Personal\PersonalBundle\Entity\personal $personal
     *
     * @return usuarios
     */
    public function setPersonal(\DsCorp\Personal\PersonalBundle\Entity\personal $personal = null)
    {
        $this->personal = $personal;

        return $this;
    }

    /**
     * Get personal
     *
     * @return \DsCorp\Personal\PersonalBundle\Entity\personal
     */
    public function getPersonal()
    {
        return $this->personal;
    }
}
