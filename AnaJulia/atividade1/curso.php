<?php
class Curso {
    private $titulo;
    private $descricao;
    private $modulos = [];
    private $disciplinas = [];

    public function __construct($titulo, $descricao) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
    }

    public function adicionarModulo($modulo) {
        $this->modulos[] = $modulo;
    }

    public function adicionarDisciplina($disciplina) {
        $this->disciplinas[] = $disciplina;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function getModulos() {
        return $this->modulos;
    }

    public function getDisciplinas() {
        return $this->disciplinas;
    }
}
