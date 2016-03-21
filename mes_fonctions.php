<?php

function stringtoarray($expr) {
	if (strlen($expr)) {
		return explode('|', $expr);
	}
	else {
		return array();
	}
}

function extraire_id_paiement($expr) {
	list($objet,$id_objet,$id_paiement) = explode("-",$expr);
	return $id_paiement;
}
function extraire_id_objet($expr) {
	list($objet,$id_objet,$id) = explode("-",$expr);
	return $id_objet;
}
function extraire_objet($expr) {
	list($objet,$id_objet,$id) = explode("-",$expr);
	return $objet;
}

?>
