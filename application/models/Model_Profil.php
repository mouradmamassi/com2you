<?php
/**
 * Created by PhpStorm.
 * User: minux
 * Date: 26/11/16
 * Time: 01:55
 */

class Model_Profil extends CI_Model{

    public function getProfil(){
        $sql = $this->db->query('
        select * from x
        ');

        foreach($sql->result() as $row){
            $data[] = $row;
        }
        return $data;
    }
}