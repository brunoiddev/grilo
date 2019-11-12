<?php 
require_once('model/db.php');
require_once('model/produto.php');
class ProdutoDao {

	public function getAll($categoria=null, $modelo=null) {

		$db = new Db;
		$sql = 'SELECT id, codigo, categoria_id, modelo_id, tensao, potencia, cor, bocal, lumens, 
		qtd_caixa, preco_unitario, preco_caixa, preco_master, parent_id, descricao FROM produto';
		$stmt = $db->query($sql);
		$produtos = array();
		while ($row = $stmt->fetch())
		{
			$p = new Produto;
			$p->id = $row['id'];
			$p->categoria_id   = $row['categoria_id'];
			$p->modelo_id      = $row['modelo_id'];
			$p->codigo         = $row['codigo'];
			$p->descricao      = $row['descricao'];
			$p->tensao         = $row['tensao'];
			$p->potencia       = $row['potencia'];
			$p->cor            = $row['cor'];
			$p->bocal          = $row['bocal'];
			$p->lumens         = $row['lumens'];
			$p->qtd_caixa      = $row['qtd_caixa'];
			$p->preco_unitario = $row['preco_unitario'];
			$p->preco_caixa    = $row['preco_caixa'];
			$p->preco_master   = $row['preco_master'];
			$p->parent_id      = $row['parent_id'];
			$p->descricao      = $row['descricao'];

		    $produtos[] = $p;
		}
		return $produtos;
	}
	
}
?>