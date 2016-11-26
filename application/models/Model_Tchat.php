<?php
class Model_Tchat extends CI_Model 
{
	public function getTchat()
	{
		$sql = $this->db->query('
		select * from tchat		
		');
		foreach($sql->result() as $row)
		{
			$data[]=$row;
		}
		return ($data);
	}
}
?>