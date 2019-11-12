<?php 
require_once('model/produto_dao.php');
class ProdutoController {
	public function produtos() {
		$dao = new ProdutoDao;
		$produtos = $dao->all();

		return $produtos;
	}

	public function produto($id) {
		$dao = new ProdutoDao;
		$produto = $dao->find($id);
		return $produto;
	}

	public function new() {
		$p = new Produto;
		$p->codigo = $_POST['codigo'];
		$p->descricao = $_POST['descricao'];
		$p->categoria_id = $_POST['categoria_id'];
		$p->modelo_id = $_POST['modelo_id'];
		$p->tensao = $_POST['tensao'];
		$p->potencia = $_POST['potencia'];
		$p->cor = $_POST['cor'];
		$p->bocal = $_POST['bocal'];
		$p->lumens = $_POST['lumens'];
		$p->qtd_caixa = $_POST['qtd_caixa'];
		$p->preco_unitario = $_POST['preco_unitario'];
		$p->preco_caixa = $_POST['preco_caixa'];
		$p->preco_master = $_POST['preco_master'];
		$p->parent_id = $_POST['parent_id'];

		$dao = new ProdutoDao;
		$dao->save($p);

	}

	// métodos auxiliares
	public function categorias() {
		$dao = new ProdutoDao;
		$categorias = $dao->categorias();

		return $categorias;
	}
	public function modelos() {
		$dao = new ProdutoDao;
		$modelos = $dao->modelos();

		return $modelos;
	}
}
?>