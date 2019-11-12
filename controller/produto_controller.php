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
}
?>