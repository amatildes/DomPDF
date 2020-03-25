<div class="base-home">
    <h1 class="titulo"><span class="cor">Lista de</span> produtos</h1>
    <div class="base-lista">
        <span class="qtde"><b><?php echo count($produtos); ?></b> produtos cadastrados</span>
        <div class="tabela">	
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th width="25%" align="left">Patrimonio</th>
                        <th width="25%" align="left">Nome</th>
                        <th width="10%" align="left">Descrição</th>
                        <th width="10%" align="left">Marca</th>
                        <th width="10%" align="left">Modelo</th>
                        <th width="10%" align="left">Qtde</th>
                        <th width="10%" align="left">Situação</th>
                        <th width="20%" colspan="2" align="center">Alterar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produtos as $produto) { ?>

                        <tr class="cor1">
                            <td><?php echo $produto->patrimonio; ?></td>
                            <td><?php echo $produto->nome; ?></td>
                            <td><?php echo $produto->descricao; ?></td>
                            <td><?php echo $produto->marca; ?></td>
                            <td><?php echo $produto->modelo; ?></td>
                            <td><?php echo $produto->quantidade; ?></td>
                            <td><?php echo $produto->estoque; ?></td>
                            
                            <td align="center">
                                <a href="<?php echo URL_BASE ."produto/editar/".$produto->idproduto?>" class="btn">Editar</a>
                            </td>
                            <td align="center">
                                <a href="<?php echo URL_BASE ."produto/excluir/" .$produto->idproduto ?>" class="btn excluir">excluir</a>
                            </td>
                        </tr>
                    <?php } ?>




                </tbody>
            </table>
        </div>					

    </div>