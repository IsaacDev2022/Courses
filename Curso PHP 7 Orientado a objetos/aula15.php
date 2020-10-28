<?php 
    // Relação entre objetos, associação:

    class Pedido {
        public $numero;
        public $cliente;
    }

    class Cliente {
        public $nome;
        public $endereco;
        
    }

    $cliente = new Cliente();
    $liente->nome = "Rodrigo Oliveira";
    $cliente->endereco = "Rua xxx, Numero> 177";

    $pedido = new Cliente();
    $pedido->numero = "Rodrigo Oliveira";
    $pedido->endereco = "Rua xxx, Numero> 177";
    $pedido->cliente = $cliente;

    $dados = array(
        'numero' => $pedido->numero,
        'nume_cliente' => $pedido->cliente->nome,
        'endereco_cliente' => $pedido->endereco->endereco;
    );
?>