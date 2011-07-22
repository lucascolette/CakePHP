<?php

class Inscricao extends AppModel {
	public $name					=	"Inscricao";
	public $useTable			=	"INSCRICOES";
	public $cacheQueries	=	true;
	public $order					=	array("created" => "DESC");
	public $validate			=	array(
													'nome' => array(
														'rule' => 'notEmpty',
														'message' => 'O campo nome é obrigatório'
													)
												);
	
}
