<?php
require 'Aluno.php';
require 'Curso.php';
require 'Disciplina.php';
require 'Modulo.php';

// Criar curso
$curso = new Curso("Curso de PHP", "Aprenda programação com PHP");

// Criar disciplinas e associar ao curso
$disc1 = new Disciplina("PHP Básico", 40, $curso);
$disc2 = new Disciplina("PHP Avançado", 60, $curso);

// Criar módulos e associar ao curso
$mod1 = new Modulo("Introdução", 1);
$mod2 = new Modulo("Programação Orientada a Objetos", 2);

$curso->adicionarModulo($mod1);
$curso->adicionarModulo($mod2);

// Criar aluno e inscrever no curso
$aluno = new Aluno("123.456.789-00", "anaisa@email.com", "Ana Isa");
$aluno->inscreverEmCurso($curso);

// Mostrar dados
echo "Aluno: " . $aluno->getNome() . "<br>";
echo "Cursos matriculados:<br>";

foreach ($aluno->getCursos() as $curso) {
    echo "- " . $curso->getTitulo() . "<br>";

    echo "  Disciplinas:<br>";
    foreach ($curso->getDisciplinas() as $disciplina) {
        echo "    * " . $disciplina->getTitulo() . " (" . $disciplina->getCargaHoraria() . " horas)<br>";
    }

    echo "  Módulos:<br>";
    foreach ($curso->getModulos() as $modulo) {
        echo "    * " . $modulo->getTitulo() . " (Ordem " . $modulo->getOrdem() . ")<br>";
    }
}
