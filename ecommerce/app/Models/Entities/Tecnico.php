<?php

namespace App\Models\Entities;

class Tecnico
{
    public $id;
    public $nombre;
    public $apellido;
    public $legajo;
    public $ocupado;

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre): void
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido): void
    {
        $this->apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getLegajo()
    {
        return $this->legajo;
    }

    /**
     * @param mixed $legajo
     */
    public function setLegajo($legajo): void
    {
        $this->legajo = $legajo;
    }

    /**
     * @param mixed $ocupado
     */
    public function setOcupado($ocupado): void
    {
        $this->ocupado = $ocupado;
    }

    /**
     * @return mixed
     */
    public function getOcupado()
    {
        return $this->ocupado;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
