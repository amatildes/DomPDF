


<div class="base-home">
<div class="base-lista">
    <span class="qtde" align="righit"><b><?php echo count($produtos); ?></b> registros encontrados</span>
    <div class="tabela">
        <?php
        require "vendor/autoload.php";
        
        use Dompdf\Dompdf;
        
        ob_start();

        $html = '<table width=100% border=1 cellspacing=0 cellpadding=0 >';
        $html .= '<thead>';
        $html .= '<tr>';

        $html .= '<td align="center">COD</td>';
        $html .= '<td align="center">Nome</td>';
        $html .= '<td align="center">Descrição</td>';
        $html .= '<td align="center">Marca</td>';
        $html .= '<td align="center">Modelo</td>';
        $html .= '<td align="center">Qtde</td>';
        $html .= '<td align="center">Situação</td>';

        $html .= '</tr';
        $html .= '</thead>';

        foreach ($produtos as $produto) {

            $html .= '<tbody>';

            $html .= '<tr>';

            $html .= '<td align="center">' . $produto->patrimonio . '</td>';
            $html .= '<td align="center">' . $produto->nome . '</td>';
            $html .= '<td align="center">' . $produto->descricao . '</td>';
            $html .= '<td align="center">' . $produto->marca . '</td>';
            $html .= '<td align="center">' . $produto->modelo . '</td>';
            $html .= '<td align="center">' . $produto->quantidade . '</td>';
            $html .= '<td align="center">' . $produto->estoque . '</td>';

            $html .= '</tr>';

            $html .= '</tbody>';
        }
        
        $html .= '</table>';
        
        // INSTANCIA O DOMPDF
        $dompdf = new Dompdf();
        
        //CARREGAR O HTML
        $dompdf->loadHtml($html);
        
        //ESPECIFICAR O TAMANHO E O TIPO DE DIMENSSÃO DA FOLHA
        $dompdf->setPaper("A4", "portrait");
        
        //RENDERIZAR O PDF
        $dompdf->render();
        
//        var_dump($dompdf->output());
//        exit();
        //ENVIAR PARA O BROWSER
        $dompdf->stream('relatorio.pdf', ['Attachment' => false]);
        
//        echo $html;
        ?>
    </div>
</div>



