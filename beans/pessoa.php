<?php


class pessoa {
    private $id;
    private $dtnascimento;
    private $endereco;
    private $foto;
    function getId() {
        return $this->id;
    }

    function getDtnascimento() {
        return $this->dtnascimento;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getFoto() {
        return $this->foto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDtnascimento($dtnascimento) {
        $this->dtnascimento = $dtnascimento;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }


}
