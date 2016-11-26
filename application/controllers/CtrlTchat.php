<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlTchat extends CI_Controller {
	public function Tchat($receiverId )
	{
		//$receiverId = $_SESSION['com2youuserid'];
		
		$_SESSION['receiverId'] = $receiverId;
		
		$this->load->model('Model_Tchat');
		$data["Titre"] = "Mes messages";
		$data["MesMessages"] = $this->Model_Tchat->getMessages($receiverId);
		$this->load->view('Tchat',$data);
	}
	
	public function GetNextMessages( )
	{
		$receiverId = 4;
		//$_SESSION['com2youuserid'];
		$lastMessageId = $_GET['messageid'];
		$this->load->model('Model_Tchat');
		$data["NewMessages"] = $this->Model_Tchat->getNextMessages($receiverId, $lastMessageId);
		return json_encode($data);
	
		
	}
	
	public function SendMessage($message )
	{
		$receiverId = 4;
		$senderId=4;
		
		$this->load->model('Model_Tchat');
		$data["NewMessages"] = $this->Model_Tchat->saveMessage($receiverId, $senderId, $message );
		return json_encode($data);
		
		
		
	}
}

?>

