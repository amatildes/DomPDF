<?php

require "config/Config.php";
require "app/core/Core.php";
require "vendor/autoload.php";

ob_start();
//Instancia do dompdf
$dompdf = new Dompdf();

//Carrega o html
$dompdf->loadHtml(ob_get_clean());

// tamanho e estilo da folha
$dompdf->setPaper('A4', 'portrait');

//Renderiza o html
$dompdf->render();

//Envia pra o navegador
$dompdf->stream("relatorio.php", array('Attachament' => FALSE));

