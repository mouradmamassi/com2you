<?php

class Model_Tchat extends CI_Model{

    public function getMessages( $receiverId, $senderId) {
    	$sql = $this->db->query('SELECT  `ID`,`ID_SENDER`,`ID_RECEIVER`,`CONTENT`,`DATETIME` FROM `message` WHERE  ID_RECEIVER = '. $receiverId.' OR ID_SENDER ='. $senderId );
    
      foreach($sql->result() as $row){
            $data[] = $row;
        }
        if(!isset($data)){
				$data[] = array();
		}
        return $data;
  	    }
  	    
   public function getNextMessages( $receiverId, $messageId){
    	$sql = $this->db->query('SELECT  `ID`,`ID_SENDER`,`ID_RECEIVER`,`CONTENT`,`DATETIME` FROM `message` WHERE  ID_RECEIVER = '. $receiverId .' and id > '.$messageId);
    	    	$data[] = array();
		foreach($sql->result() as $row){
            $data[] = $row;
        }
        return $data;
    }	    
     public function saveMessage( $receiverId, $senderId, $message ){
    	
   	 $query = " INSERT INTO `message`( `ID_SENDER`, `ID_RECEIVER`, `CONTENT`, `DATETIME`)  ";
  	 $query .= " VALUES ( " .$senderId." , " . $receiverId ." ,' " .$message. "', '" .date('Y-m-d H:i:s')."')";
    	 
        $sql = $this->db->query($query);
      
    	
      //   return $this->getMessages( $receiverId);
      
      $sql = $this->db->query('SELECT  `ID`,`ID_SENDER`,`ID_RECEIVER`,`CONTENT`,`DATETIME` FROM `message` WHERE  ID_RECEIVER = '. $receiverId.' OR ID_SENDER ='. $receiverId );
    
      foreach($sql->result() as $row){
            $data[] = $row;
        }
        if(!isset($data)){
				$data[] = array();
		}
        return $data;

    }
}
?>