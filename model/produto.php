<?php
class Produto {
	public $id;
	public $codigo;
	public $categoria_id;
	public $modelo_id;
	public $tensao;
	public $potencia;
	public $cor;
	public $bocal;
	public $lumens;
	public $qtd_caixa;
	public $preco_unitario;
	public $preco_caixa;
	public $preco_master;
	public $parent_id;
	public $descricao;

	public function __construct() {
		//echo "construtor de produto";
	}
}
?>