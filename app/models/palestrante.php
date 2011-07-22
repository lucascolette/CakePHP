<?php

class Palestrante extends AppModel {
	public $name			=	"Palestrante";
	public $useTable	=	"PALESTRANTES";
	public $hasMany		=	array("Palestra");
}