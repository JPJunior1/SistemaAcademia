<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaAcademia/beans/horario';
include_once $_SERVER['DOCUMENT_ROOT'] . '/SistemaAcademia/persistence/conexao';

class daoHorario {

    public static function insert(horario $horario) {
        $query = "insert into horario (horarioInicio, horarioFim)values (:horarioInicio,:horarioFim";
        $stmt = Conexao::getInstance()->prepare($query);
        $stmt->bindValue(':horarioInicio', $horario->getHorarioInicio(), PDO::PARAM_STR);
        $stmt->bindValue(':horarioFim', $horario->getHorarioFim(), PDO::PARAM_STR);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public static function update(horario $horario){
        $query = "update from horario set horarioInicio=:horarioInicio, horarioFim=:horarioFim where id=:id";
        $stmt = Conexao::getInstance()->prepare($query);
        $stmt->bindValue(':horarioInicio',$horario->getHorarioInicio(), PDO::PARAM_STR);
        $stmt->bindValue(':horarioFim',$horario->getHorarioFim(), PDO::PARAM_STR);
        $stmt->bindValue(':id',$horario->getId(),  PDO::PARAM_STR);
        if($stmt->execute()){
            return true ;
        }else{
            return false;
        }
    }

}
