<?php
class Model_Tchat extends CI_Model 
{
	public function getTchat()
	{
		$data[] = array(
			"nom"=> "Herve",
			"prenom"=>"toto"
		)
		return ($data);
	}
}
?>