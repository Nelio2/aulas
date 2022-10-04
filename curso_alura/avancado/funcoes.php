<?php 

function depositar( array $conta, float $valorAdepositar) 
{
	if ($valorAdepositar > 0) {
			
	$conta['saldo'] += $valorAdepositar;
	return $conta;

	} else {
		exibirMensagem("Depositos tem que ser positivos");
	}

	
}


//Sacar
function sacar(array $conta, float $valorAsacar) 
{

		if ($valorAsacar > $conta['saldo']) {

	exibirMensagem( "<h3>Voce nao pode sacar esse valor </h3>");
	
} else { 
		$conta['saldo'] -= $valorAsacar;	

}
return $conta;
};



function exibirMensagem( string $mensagem)	{
		
		echo $mensagem. "<br>";
};	

function titularMaiuscula(array &$conta)
{
	$conta['titular'] = strtoupper($conta['titular']);
	//echo $conta['titular'];
}