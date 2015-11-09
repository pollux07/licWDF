<?php

namespace DsCorp\Personal\PersonalBundle\Entity;

/**
 * avisos
 */
class avisos
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $aviso;


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
     * Set aviso
     *
     * @param string $aviso
     *
     * @return avisos
     */
    public function setAviso($aviso)
    {
        $this->aviso = $aviso;

        return $this;
    }

    /**
     * Get aviso
     *
     * @return string
     */
    public function getAviso()
    {
        return $this->aviso;
    }
    /**
     * @var \DsCorp\Personal\PersonalBundle\Entity\usuarios
     */
    private $usuarios;


    /**
     * Set usuarios
     *
     * @param \DsCorp\Personal\PersonalBundle\Entity\usuarios $usuarios
     *
     * @return avisos
     */
    public function setUsuarios(\DsCorp\Personal\PersonalBundle\Entity\usuarios $usuarios = null)
    {
        $this->usuarios = $usuarios;

        return $this;
    }

    /**
     * Get usuarios
     *
     * @return \DsCorp\Personal\PersonalBundle\Entity\usuarios
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }
}
