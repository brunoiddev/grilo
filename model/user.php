<?php

class User {

	public $id;
	public $acesso_id;
	public $nome;
	public $email;
	public $senha;
	public $ativo;

	public function __construct() {
		//echo "construtor de user<br>";
	}
}