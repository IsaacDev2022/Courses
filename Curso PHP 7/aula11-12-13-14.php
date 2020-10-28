<?php 
    // Funções de arrays 1:
    /*
    . is_array($array): verificar se uma determinada variável é um array
    . in_array($valor, $array): verifica se um determinado valor existe em uma posição do array
    . array_keys($array): retorna um novo array com as chaves do array passadas como parametro
    . array_values($arrays): retorna um novo array com os valores do array passados como parametro
    . array_merge($array1, $array2): agrega o conteúdo de 2 arrays
    . array_pop($array): exclui a ultima posição do array
    . array_shift($array): exclui a primeira posição do array
    . array_unshift($arr, "valor"): adiciona um ou mais elementos no início de um array
    . array_push($array, "valor", "valor"): adiciona um ou mais elementos no final de um array
    . array_combinate($keys, $values): mescla os dois arrays passados
    . array_sum(): calcula a soma de dois elementos de um array
    . explode("/", "20/01/2001"): transforma string em array
    . inplode("-", $arr): transforma array em string
    */

    $data = "30/03/2001";

    $novaData = explode("/", $data);
    print_r($novaData);
?>