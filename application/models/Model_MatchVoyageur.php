<?php
class Model_MatchVoyageur extends CI_Model 
{
	public function Model_MatchVoyageur()
	{
		$sql = $this->db->query('
		--select de mes mtach	
		');
		foreach($sql->result() as $row)
		{
			$data[]=$row;
		}
		return ($data);
	}
}

?>
