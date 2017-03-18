<?php

namespace projecto\KikoloBundle\Entity;

/**
 * TipoAnuncio
 */
class TipoAnuncio
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $tipo;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return TipoAnuncio
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
}
