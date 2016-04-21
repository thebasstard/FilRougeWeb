<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class villagegreen extends CI_Controller{
	
	public function index(){
		
		$this->load->view('vgpagedaccueil');
	}

	public function vgformulaire(){
		$this->load->helper('url');
		$this->load->view('vgformulaire');
	}

	public function script_vgformulaire(){
		$data =$ this->input->post(); //récupère les données envoyées par le formulaire
		$this->load->database();//connexion à la base de données
		$str = $this->db->insert_string('villagegreen',$data);//crée une chaîne de caractères qui représente une requête insert
		$this->db->simple_query($str);//exécute la requête

		$this->load->helper('url');// charge le module permettant d’utiliser la fonction redirect
		redirect(site_url("villagegreen/vgpagedaccueil"));//redirection vers la page d'accueil
	}

	public function vgmodif($id){
		$this->load->database();
		$this->load->helper('url');

		$recapitulatif = $this->db->query("select * from client where id=" .$id);
		$model["recapitulatif"] = $recapitulatif->row();//première ligne du résultat

		$this->load->view('villagegreen/vgmodif', $model);
	}

	public function script_vgmodif(){
		$data = $this->input->post();
		$this->load->database();//connexion base de données
		$id = $this->input->post("id");//récupère les données des input en post

		$str = $this->db->update_string('client', $data, "id=" .$id);

		$this->db->query($str);

		redirect(site_url("villagegreen/vgpagedaccueil"));

	}

}

?>