<?php


class usuario {
    private $id;
    private $nome;
    private $dtnascimento;
    private $endereco;
    private $login;
    private $senha;
    private $email;
    private $id_TipoUsuario;
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getDtnascimento() {
        return $this->dtnascimento;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getLogin() {
        return $this->login;
    }

    function getSenha() {
        return $this->senha;
    }

    function getEmail() {
        return $this->email;
    }

    function getId_TipoUsuario() {
        return $this->id_TipoUsuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setDtnascimento($dtnascimento) {
        $this->dtnascimento = $dtnascimento;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setId_TipoUsuario($id_TipoUsuario) {
        $this->id_TipoUsuario = $id_TipoUsuario;
    }


}
