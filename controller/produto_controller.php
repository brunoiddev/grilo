<?php 
require_once('model/produto_dao.php');
class ProdutoController {
	public function produtos() {
		$dao = new ProdutoDao;
		$produtos = $dao->getAll();

		return $produtos;
	}
}
?>