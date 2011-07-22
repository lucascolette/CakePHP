<?php

class Palestra extends AppModel {
	public $name			=	"Palestra";
	public $useTable	=	"PALESTRAS";
	public $belongsTo	=	array("Palestrante");
}