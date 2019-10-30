<?php
class Layout {
	public function __construct($layout, $page, $data=null) {
		include_once('view/layout/' . $layout . '.php');
	}
}
?>