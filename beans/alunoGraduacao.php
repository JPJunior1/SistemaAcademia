<?php

class alunoGraduacao {
    private $id;
    private $id_Aluno;
    private $id_Graduacao;
    
    function getId() {
        return $this->id;
    }

    function getId_Aluno() {
        return $this->id_Aluno;
    }

    function getId_Graduacao() {
        return $this->id_Graduacao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_Aluno($id_Aluno) {
        $this->id_Aluno = $id_Aluno;
    }

    function setId_Graduacao($id_Graduacao) {
        $this->id_Graduacao = $id_Graduacao;
    }


}
