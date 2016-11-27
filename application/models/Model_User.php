<?php
class Model_User extends CI_Model 
{
	public function getAuthen($login,$mdp)
	{
		
		$this->db->select('*');
		$this->db->from('User');
		$this->db->where('LOGIN', $login);
		$this->db->where('PASSWORD', $mdp);
		$query = $this->db->get();
		$res = $query->result();
		return ($res);

	}
}

?>
