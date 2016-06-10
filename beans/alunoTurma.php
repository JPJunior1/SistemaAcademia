<?php


class alunoTurma {
    private $id;
    private $id_Aluno;
    private $id_Turma;
    
    function getId() {
        return $this->id;
    }

    function getId_Aluno() {
        return $this->id_Aluno;
    }

    function getId_Turma() {
        return $this->id_Turma;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_Aluno($id_Aluno) {
        $this->id_Aluno = $id_Aluno;
    }

    function setId_Turma($id_Turma) {
        $this->id_Turma = $id_Turma;
    }


}
