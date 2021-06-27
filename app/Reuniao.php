<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reuniao extends Model
{
    public $email;
    public $convidados;
    public $data_agendamento;
    public $horario;
    public $duracao;
    public $pauta;
    public $status;
    
    public static function getEmail(){
        return $email = 'email';
    }

    public static function getConvidados(){
        return $convidados = 'convidados';
    }

    public static function getDataAgendamento(){
        return $data_agendamento = 'data_agendamento';
    }

    public static function getHorario(){
        return $horario = 'horario';
    }

    public static function getDuracao(){
        return $duracao = 'duracao';
    }

    public static function getComputador(){
        return $pauta = 'pauta';
    }

    public static function getStatus(){
        return $status = 'status';
    }
    
}
