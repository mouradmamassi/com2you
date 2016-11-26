<?php
/**
 * Created by PhpStorm.
 * User: minux
 * Date: 26/11/16
 * Time: 01:55
 */

class Model_Profil extends CI_Model{

    public function getProfil(){
<<<<<<< HEAD
//        $sql = $this->db->query('
//        select * from x
//        ');
//
//        foreach($sql->result() as $row){
//            $data[] = $row;
//        }
//        return $data;

        $data[]= array(
            'nom' => 'Hervé P',
            'communication' => 'Communication Digitale',
            'nbcroise' => '12',
            'description' => 'Ceci est ma description/biographie'
        );

=======
        $data = 1;
>>>>>>> 077d2b3b67055e78e0fdcf5843e49c966e21548c
        return $data;

    }
}