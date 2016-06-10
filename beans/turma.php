<?php


class turma {
    private $id;
    private $id_LocalTreino;
    private $id_ProgramaArteMarcial;
    private $id_Professor;
    private $id_horario;
    function getId() {
        return $this->id;
    }

    function getId_LocalTreino() {
        return $this->id_LocalTreino;
    }

    function getId_ProgramaArteMarcial() {
        return $this->id_ProgramaArteMarcial;
    }

    function getId_Professor() {
        return $this->id_Professor;
    }

    function getId_horario() {
        return $this->id_horario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_LocalTreino($id_LocalTreino) {
        $this->id_LocalTreino = $id_LocalTreino;
    }

    function setId_ProgramaArteMarcial($id_ProgramaArteMarcial) {
        $this->id_ProgramaArteMarcial = $id_ProgramaArteMarcial;
    }

    function setId_Professor($id_Professor) {
        $this->id_Professor = $id_Professor;
    }

    function setId_horario($id_horario) {
        $this->id_horario = $id_horario;
    }


}
