<?php
/**
 * Created by PhpStorm.
 * User: minux
 * Date: 26/11/16
 * Time: 01:55
 */

class Model_Profil extends CI_Model{


    public function getUser($id){

//        $sql = $this->db->query('
//        select * from x
//        ');
//


		$sql = $this->db->query('select * from user u INNER JOIN comtwouser c where u.COMTWOUSERID = c.id and u.id ='.$id);
		foreach($sql->result() as $row){
            $data[] = $row;
        }

//        var_dump($data);
//        die();
        return $data;


    }

    public function getComtwous($id){
        $sql = $this->db->query('select COMTWOUSERID from user WHERE id ='.$id);
        foreach($sql->result() as $row){
            return $row;
        }

//        var_dump($data);
//        die();


    }
    public function getFavouri($id){

//

        $sql = $this->db->query('select DISTINCT f.* from favorite f INNER JOIN love l where l.COMTWOUSERID ='.$id.' and l.FAVORITEID = f.id ');
        foreach($sql->result() as $row){
            $data[] = $row;
        }

//        var_dump($data);
//        die();
        return $data;


    }

    public function getDontHave(){

//

        $sql = $this->db->query('select DISTINCT s.* from skill s INNER JOIN donthave d where d.COMTWOUSERID = 4 and d.SKILLID = s.id');
        foreach($sql->result() as $row){
            $data[] = $row;
        }

//        var_dump($data);
//        die();

//        foreach($sql->result() as $row){
//            $data[] = $row;
//        }
//        return $data;

//        $data[]= array(
//            'nom' => 'Hervé P',
//            'communication' => 'Communication Digitale',
//            'nbcroise' => '12',
//            'description' => 'Ceci est ma description/biographie'
//        );

//		$sql = $this->db->query('select * from user');
//		foreach($sql->result() as $row){
//            $data[] = $row;
//        }

        return $data;


    }


    public function getHave(){
        $sql = $this->db->query('select DISTINCT s.* from skill s INNER JOIN have d where d.COMTWOUSERID = 4 and d.SKILLID = s.id');
        foreach($sql->result() as $row){
            $data[] = $row;
        }

//        var_dump($data);
//        die();
        return $data;
    }

    public function getvisited(){
        $sql = $this->db->query('select DISTINCT v.* from visited v  where v.COMTWOUSERID = 4 ');
        foreach($sql->result() as $row){
            $data[] = $row;
        }

//        var_dump($data);
//        die();
        return $data;
    }

    public function getvisit(){
        $sql = $this->db->query('select DISTINCT v.* from visit v  where v.COMTWOUSERID = 4 ');
        foreach($sql->result() as $row){
            $data[] = $row;
        }

//        var_dump($data);
//        die();
        return $data;
    }

    public function saveFavouri($description){
        die('okkk');

        $data = array('description' => $description);

        $str = $this->db->insert_string('favouri', $data);

//        $sql = $this->db->query('insert into favouri(description) VALUES($description) ');
        if ($str)
        {
            echo "Success!";
            $sql2 = $this->db->query('insert into love(comtwouserid, favoriteid) VALUES (4, SELECT Max(id) from favouri )');
            return true;
        }
        else
        {
            echo "Query failed!";
            return false;
        }


    }

    public function getActivityDomain(){
        return null;
    }

}