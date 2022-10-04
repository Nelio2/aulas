<?php 

$conta1 = [
			'titular' => 'Nelio Dias',
			'saldo'   => 10000,
];

$conta2 = [
			'titular' => 'Fernanda',
			'saldo'   => 5000,
];

$conta3 = [
			'titular' => 'John Doe',
			'saldo'   => 7000,
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i=0; $i < count($contasCorrentes) ; $i++) { 
	
	echo $contasCorrentes[$i]['titular']."<br>";
}

// echo "<pre>";
// var_dump($contasCorrentes);