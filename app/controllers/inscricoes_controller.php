<?php

class InscricoesController extends AppController {
	public $name	=	"Inscricoes";
	public $uses	=	array("Inscricao");	
	
	public function index () {
		$this->redirect(array('action' => 'inscrever'));
	}
	
	public function inscrever () {
		/* Carrega a view /views/inscricoes/inscrever.ctp */
		
		if ( !empty($this->data) ) {
			$this->Inscricao->save($this->data);
			$this->redirect("obrigado");
		}
		
	}
	
}