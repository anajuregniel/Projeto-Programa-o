<?php
class Modulo {
    private $titulo;
    private $ordem;

    public function __construct($titulo, $ordem) {
        $this->titulo = $titulo;
        $this->ordem = $ordem;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getOrdem() {
        return $this->ordem;
    }
}
