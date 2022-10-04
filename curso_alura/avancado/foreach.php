<?php 


$contasCorrentes = [

		12345 => [
				 'titular' => 'Nelio Dias',
				 'saldo'   => 10000 ],

		12346 => [
				 'titular' => 'John Doe',
				 'saldo'   => 7000 ],

		12347 => [
				 'titular' => 'John Doe',
				 'saldo'   => 7000	

		],

	];

$contasCorrentes[] = [
					'titular' => 'Nome',
					'saldo'   => 6500

];	


foreach ($contasCorrentes as $cpf => $conta ) {
	
	echo $cpf." = ".$conta['titular']. "<br>";
}