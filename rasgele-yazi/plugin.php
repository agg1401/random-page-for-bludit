<?php

class RasgeleYazi extends Plugin {

	public function random_post (){
		global $pages;
		$list = array();
		foreach ($pages->db as $key=>$fields) {
			if ($fields['type']=='published') {
				array_push($list, $key);
			}
		}
		return $list[array_rand($list,1)];
	}
}

?>