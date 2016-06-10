<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaAcademia/beans/graduacao';
include_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaAcademia/persistence/conexao';

class daograduacao {

    public static function insert(graduacao $graduacao) {
        $query = "insert into graduacao (id_PrgramaArte, id_TipoGraduaca, descricao)"
                . "values (:id_PrgamaArte, :id_TipoGraduaca,:descricao)";
        $stmt = Conexao::getInstance()->prepare($graduacao);
        $stmt->bindValue(':id_PrgramaArte', $graduacao->getId_ProgramaArte(), PDO::PARAM_INT);
        $stmt->bindValue(':id_TipoGraduaca', $graduacao->getId_TipoGraduacao(), PDO::PARAM_INT);
        $stmt->bindValue(':descricao', $graduacao->getDescricao(), PDO::PARAM_STR);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function update(graduacao $graduacao) {
        $query = "update from daograduacao set id_PrgramaArte = :id_PrgramaArte,id_TipoGRaduaca=:id_TipoGRaduaca,descricao=:descricao"
                . "where id=:id";
        $stmt = Conexao::getInstance()->prepare($query);
        $stmt->bindValue(':id_PrgramaArte', $graduacao->getId_ProgramaArte(), PDO::PARAM_INT);
        $stmt->bindValue('id_TipoGraduaca', $graduacao->getId_TipoGraduacao(), PDO::PARAM_INT);
        $stmt->bindValue(':descricao', $graduacao->getDescricao(), PDO::PARAM_STR);
        $stmt->bindValue(':id', $graduacao->getId(), PDO::PARAM_INT);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function delete($id) {
        $query = "delete from graduacao where id=:id";
        $stmt = Conexao::getInstance()->prepare($id);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function listar() {
        $query = "select * from graduacao";
        foreach (Conexao::getInstance()->query($query) as $linha) {
            $graduacao = new graduacao();
            $graduacao->setId($linha['id']);
            $graduacao->setId_ProgramaArte($linha['id_PrgramaArte']);
            $graduacao->setId_TipoGraduacao($linha['id_TipoGraduaca']);
            $graduacao->setDescricao($linha['descricao']);
            $vgraduacao[] = $graduacao;
        }
        return $graduacao;
    }
    

}
