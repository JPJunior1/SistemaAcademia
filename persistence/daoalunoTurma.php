<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaAcademia/beans/alunoTurma';
include_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaAcademia/persistence/conexao';
class daoalunoTurma extends PDO {
    public static function insert(alunoTurma $alunot){
        $query = "insert into alunoturma (id_Aluno,id_Turma) values"
                . ":(id_Aluno, :id_Turma";
        $stmt = Conexao::getInstance()->prepare($query);
        $stmt->bindValue(':id_Aluno', $alunot->getId_Aluno(),  PDO::PARAM_INT);
        $stmt->bindValue(':id_Turma', $alunot->getId_Turma(), PDO::PARAM_INT);
        if($stmt->execute()){
            return true;
        }else{
            return true;
        }
    }
    public static function update(alunoTurma $alunot){
        $query = "update from alunoTurma set id_Aluno = :id_Aluno, id_Turma = :id_Turma where id = :id";   
        $stmt = Conexao::getInstance()->prepare($query);
        $stmt->bindValue(':id_Auno', $alunot->getId_Aluno(), PDO::PARAM_INT);
        $stmt->bindValue('id_Turma', $alunot->getId_Turma(), PDO::PARAM_INT);
        $stmt->bindValue(':id', $alunot->getId());
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
    public static function delete($id){
        $query = "delete from alunoTurma where id = :id";
        $stmt = Conexao::getInstance()->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
    public static function listar(){
        $query = "select * from alunoTurma";
        foreach (Conexao::getInstance()->query($query) as $ $linha){
            $alunut = new alunoTurma();
            $alunut->setId($linha['id']);
            $alunut->setId_Aluno($linha['id_Aluno']);
            $alunut->setId_Turma($linha['id_Turma']);
            $valunt[]= $alunut;
        }
        return $valunt;
    }
}
