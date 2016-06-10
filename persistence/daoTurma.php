<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaAcademia/beans/turma';
include_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaAcademia/persistence/conexao';

class daoTurma extends PDO{
    public static function insert(turma $turma){
        $query = "insert into turma (id_LocalTreino, id_ProgramaArteMarcial, id_Professor, id_Horario) values"
                . "(:id_LocalTreino, :id_ProgramaArteMarcial, :id_Professor, :id_Horario) ";
    
        $stmt = Conexao::getInstance()->prepare($query);
        $stmt->bindValue('id_LocalTreino', $turma->getId_LocalTreino(), PDO::PARAM_INT );
        $stmt->bindValue(':id_ProgramaArteMarcial', $turma->getId_ProgramaArteMarcial(),  PDO::PARAM_INT);
        $stmt->bindValue(':id_Professor', $turma->getId_Professor(), PDO::PARAM_INT);
        $stmt->bindValue(':id_Horario', $turma->getId_horario(),  PDO::PARAM_INT);
        if ($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }  
    public static function update(turma $turma){
        $query = "update from turma set id_LocalTreino = :id_LocalTreino, id_ProgramaArteMarcial = :id_ProgramaArteMarcial,"
                . "id_Prfessor = :id_Professor, id_Horario = :id_Horario";
        $stmt = Conexao::getInstance()->prepare($query);
        $stmt->bindValue(':id_LocalTreino', $turma->getId_LocalTreino(), PDO::PARAM_INT);
        $stmt->bindValue('id_ProgramaArteMarcial', $turma->getId_ProgramaArteMarcial(), PDO::PARAM_INT);
        $stmt->bindValue('id_Professor', $turma->getId_Professor(), PDO::PARAM_INT);
        $stmt->bindValue('id_Horario', $turma->getId_horario(), PDO::PARAM_INT);
        if ($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
    public static function delete($id){
        $query = "delete from turma where id = :id";
        $stmt = Conexao::getInstance()->prepare($query);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
    public static function listar(){
        $query = "select * from turma";
        foreach (Conexao::getInstance()->query($query) as $linha){
            $turma = new turma();
            $turma->setId($linha['id']);
            $turma->setId_LocalTreino($linha['$id_LocalTreino']);
            $turma->setId_ProgramaArteMarcial($linha['$id_ProgramaArteMarcial']);
            $turma->setId_Professor($linha['$id_Professor']);
            $turma->setId_horario($linha['$id_horario']);
            $vturma[] = $turma;
        }    
        return $vturma;
    }
}

