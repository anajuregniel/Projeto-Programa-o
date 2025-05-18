<?php
class Aluno {
    private $cpf;
    private $email;
    private $nome;
    private $cursos = [];

    public function __construct($cpf, $email, $nome) {
        $this->cpf = $cpf;
        $this->email = $email;
        $this->nome = $nome;
    }

    public function inscreverEmCurso($curso) {
        $this->cursos[] = $curso;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getCursos() {
        return $this->cursos;
    }
}
