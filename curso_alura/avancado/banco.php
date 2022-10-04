<?php 

require 'funcoes.php';


$contasCorrentes = [

		'12345' => [
				 'titular' => 'Nelio Dias',
				 'saldo'   => 10000 ],

		'12346' => [
				 'titular' => 'Fernanda .D',
				 'saldo'   => 6500 ],

		'12347' => [
				 'titular' => 'John Doe',
				 'saldo'   => 4000	

		],

	];

$contasCorrentes['12345'] = depositar($contasCorrentes['12345'], 1000);
$contasCorrentes['12347'] = sacar($contasCorrentes['12347'], 100);



foreach ($contasCorrentes as $cpf => $conta ) {
	
	exibirMensagem (
	"$cpf $conta[titular] $conta[saldo]"
	);
	

};

echo "<br>";

echo titularMaiuscula($contasCorrentes['12347']);