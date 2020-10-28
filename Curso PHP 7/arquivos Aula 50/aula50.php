<?php 
    // Manipulação de arquivos
    /*
    fopen();
    fclose();
    ffwrite();
    !feof();
    fgets();
    filesize();
    */
    
    $arquivo = "arquivo.txt";
    $conteudo = "Conteúdo de teste\r\n";
    $arquivoAberto = fopen($arquivo, 'r');
    $tamanhoArquivo = filesize($arquivo);

    // fwrite($arquivoAberto, $conteudo);

    while (!feof($arquivoAberto)) {
        $linha = fgets($arquivoAberto, $tamanhoArquivo);
        echo $linha."<br>";
    }

    fclose($arquivoAberto);
?>