<?php


class graduacao {
    private $id;
    private $id_ProgramaArte;
    private $id_TipoGraduacao;
    private $descricao;
    
    function getId() {
        return $this->id;
    }

    function getId_ProgramaArte() {
        return $this->id_ProgramaArte;
    }

    function getId_TipoGraduacao() {
        return $this->id_TipoGraduacao;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_ProgramaArte($id_ProgramaArte) {
        $this->id_ProgramaArte = $id_ProgramaArte;
    }

    function setId_TipoGraduacao($id_TipoGraduacao) {
        $this->id_TipoGraduacao = $id_TipoGraduacao;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }


}
