<?php 

function getProfit($sales, $charges) {
	if ($sales < $charges) {
		throw new Exception('Attention : le résultat est négatif');
}
if ($sales<0 || $charges<0) {
	throw new Exception('Attention : les ventes ou les charges ne peuvent pas être négatives');
}
return $sales - $charges; 
}