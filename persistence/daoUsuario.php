<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaAcademia/beans/usuario';
include_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaAcademia/persistence/conexao';

class daoUsuario extends PDO {

    public static function insert(usuario $usuario) {
        $query = "insert into usuario (nome,dtnascimento,endereco,login,senha,email,id_TipoUsuario)"
                . "values (:nome,:dtnascimento,:endereco,:login,:senha,:email,:id_TipoUsuario)";
        $stmt = Conexao::getInstance()->prepare(query);
        $stmt->bindValue(':nome', utf8_decode($usuario->getNome()), PDO::PARAM_STR);
        $stmt->bindValue(':dtnascimento', $usuario->getDtnascimento(), PDO::PARAM_STR);
        $stmt->bindValue('endereco', utf8_decode($usuario->getEndereco()), PDO::PARAM_STR);
        $stmt->bindValue(':login', utf8_decode($usuario->getLogin(), PDO::PARAM_STR));
        $stmt->bindValue(':senha', $usuario->getSenha(), PDO::PARAM_STR);
        $stmt->bindValue(':email', utf8_decode($usuario->getEmail()), PDO::PARAM_STR);
        $stmt->bindValue(':id_TipoUsuario', utf8_decode($usuario->getId_TipoUsuario()), PDO::PARAM_INT);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function update(usuario $usuario) {
        $query = "update from usuario set nome = :nome, dtnascimento = :dtnascimento, endereco = :endereco,"
                . "login = :login,  email = :email, id_TipoUsuario = :idTipoUsuario where id = :id";
        $stmt = Conexao::getInstance()->prepare($query);
        $stmt->bindValue(':nome', utf8_decode($usuario->getNome()), PDO::PARAM_STR);
        $stmt->bindValue(':dtnascimento', $usuario->getDtnascimento(), PDO::PARAM_STR);
        $stmt->bindValue('endereco', utf8_decode($usuario->getEndereco()), PDO::PARAM_STR);
        $stmt->bindValue(':login', utf8_decode($usuario->getLogin(), PDO::PARAM_STR));
        $stmt->bindValue(':email', utf8_decode($usuario->getEmail()), PDO::PARAM_STR);
        $stmt->bindValue(':id_TipoUsuario', utf8_decode($usuario->getId_TipoUsuario()), PDO::PARAM_INT);
        $stmt->bindValue(':id', $usuario->getId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function delete($id) {
        $query = "delete from usuario where id = :id";
        $stmt = Conexao::getInstance()->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function listar(){
        $query = "select * from usuario";
        foreach (Conexao::getInstance()->query($query) as $linha){
            $usuario = new usuario();
            $usuario->setId($linha['id']);
            $usuario->setNome($linha['nome']);
            $usuario->setDtnascimento($linha['dtnascimento']);
            $usuario->setEmail($linha['email']);
            $usuario->setLogin($linha['login']);
            $usuario->setId_TipoUsuario($linha['id_TipoUsuario']);
            $vusuario[]=$usuario;
        }
        return $vusuario;
    }
    
}

?>