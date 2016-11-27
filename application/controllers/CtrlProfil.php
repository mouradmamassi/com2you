<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlProfil extends CI_Controller {

    public function Profil($id)
    {
        //$this->load->model('Model_Profil');
//       // $data['monprofil'] = $this->Model_profil->getProfil();
       //$data['monprofil'] = $this->Model_Profil->getProfil();
//        $data['monprofil']= array(
//            'nom' => 'Hervé P',
//            'communication' => 'Communication Digitale',
//            'nbcroise' => '12',
//            'description' => 'Ceci est ma description/biographie'
//        );
        $_SESSION['id'] = $id;
        $this->load->model('Model_profil');
        $data['user'] = $this->Model_profil->getUser($id);

//        var_dump($data['user']);
//        die('ok');

        $idcomtwous = $this->Model_profil->getComtwous($id);
        $data['favouri'] = $this->Model_profil->getFavouri($idcomtwous->COMTWOUSERID);

        $data['visited'] = $this->Model_profil->getvisited();
        $data['visit'] = $this->Model_profil->getvisit();
        $data['skill'] = $this->Model_profil->getDontHave();
        $data['skillhave'] = $this->Model_profil->getHave();
        $data['id'] = $_SESSION['id'];


        $this->load->view('profil',$data);
    }
    public function AjouterFavouri(){
        die("okk");
        $description = $this->input->post('description');
        $this->load->model('Model_profil');
        return $this->Model_profil->saveFavouri($description);




    }
}
