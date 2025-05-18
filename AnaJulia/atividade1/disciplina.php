<?php
class Disciplina {
    private $titulo;
    private $cargaHoraria;
    private $curso;

    public function __construct($titulo, $cargaHoraria, $curso) {
        $this->titulo = $titulo;
        $this->cargaHoraria = $cargaHoraria;
        $this->curso = $curso;

        $curso->adicionarDisciplina($this);
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getCargaHoraria() {
        return $this->cargaHoraria;
    }
}
