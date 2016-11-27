<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CtrlTrajet extends CI_Controller {
    public function trajet()
    {
        //$this->load->model('Model_trajet');
        //$data['montrajet'] = $this->Model_trajet->getProfil();
        return($this->load->view('trajet'));
    }


    public function creattrajet()
    {

        $villedepart = $this->input->post('villedepart');
        $garedepart = $this->input->post('garedepart');
        $villearrive = $this->input->post('villearrive');
        $garearrive = $this->input->post('garearrive');
        $hour = $this->input->post('hour');
        $nbtrain = $this->input->post('nbtrain');
        $date = $this->input->post('date');
        $lundi = $this->input->post('lundi');
        $mardi = $this->input->post('mardi');
        $mecredi = $this->input->post('mercredi');
        $jeudi = $this->input->post('jeudi');
        $vendredi = $this->input->post('vendredi');
        $samedi = $this->input->post('samedi');
        $dimanche = $this->input->post('dimanche');
        $jours = array(
            'lundi' => $lundi,
            'mardi' => $mardi,
            'mercredi' => $mecredi,
            'jeudi' => $jeudi,
            'vendredi' => $vendredi,
            'samedi' => $samedi,
            'dimanche' => $dimanche,
        );
        var_dump($jours);
        die('ok');
        $this->load->model('Model_Trajet');
        $data['montrajet'] = $this->Model_trajet->getProfil();

        return($this->load->view('Tchat'));
    }


}
