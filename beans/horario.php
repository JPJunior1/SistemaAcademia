<?php


class horario {
    private $id;
    private $horarioInicio;
    private $horarioFim;
    
    function getId() {
        return $this->id;
    }

    function getHorarioInicio() {
        return $this->horarioInicio;
    }

    function getHorarioFim() {
        return $this->horarioFim;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setHorarioInicio($horarioInicio) {
        $this->horarioInicio = $horarioInicio;
    }

    function setHorarioFim($horarioFim) {
        $this->horarioFim = $horarioFim;
    }


}
