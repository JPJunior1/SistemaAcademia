<?php


class progArtesMarciais {
    private $id;
    private $nome_Arte;
    private $foto;
    private $id_TipoProgram;
    function getId() {
        return $this->id;
    }

    function getNome_Arte() {
        return $this->nome_Arte;
    }

    function getFoto() {
        return $this->foto;
    }

    function getId_TipoProgram() {
        return $this->id_TipoProgram;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome_Arte($nome_Arte) {
        $this->nome_Arte = $nome_Arte;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setId_TipoProgram($id_TipoProgram) {
        $this->id_TipoProgram = $id_TipoProgram;
    }


}
