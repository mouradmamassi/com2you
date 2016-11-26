<?php
class Model_User extends CI_Model 
{
	public function getAuthen($login,$mdp)
	{
		
		$sql = $this->db->query('
		SELECT COMTWOUSERID 
		FROM user 
		WHERE LOGIN = '+$login+' 
		and PASSWORD = '+$mdp);
		$data = $sql->result();
		return ($data);

	}
}

?>
