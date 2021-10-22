<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends  CI_Model{

    public function getUsersList(){

        //Escolher a tabela:
        $this->db->from('usuarios');

        //Pegar os registros:
        $result = $this->db->get()-> result();

        //Colocar resultado como saída:
        return $result;

    }


}