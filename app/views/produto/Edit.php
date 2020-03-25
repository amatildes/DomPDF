		

<div class="base-home">
    <h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
    <div class="base-formulario">	

        <form action="<?php echo URL_BASE . "produto/salvar" ?>" method="POST">

            <label>Patrimonio</label>
            <input name="txt_patrimonio" value="<?php echo $produto->nome ?>" type="text" placeholder="Insira o nome">
            <div class="col">


                <label>nome</label>
                <input name="txt_nome" value="<?php echo $produto->nome ?>" type="text" placeholder="Insira o nome">
                <div class="col">
                    <label>Descrição</label>
                    <input name="txt_descricao" value="<?php echo $produto->descricao ?>" type="text" placeholder="Insira a descrição">	
                </div>

                <div class="col">
                    <label>Marca</label>
                    <input name="txt_marca" value="<?php echo $produto->marca ?>" type="text" placeholder="Insira a narca">
                </div>

                <th>
                    <div class="col">
                        <label>Modelo</label>
                        <input name="txt_modelo" value="<?php echo $produto->modelo ?>" type="text" placeholder="Insira o modelo">
                    </div>

                </th>



                <th>
                    <div class="col">
                        <label>QTDE</label>
                        <input name="txt_qtde" value="<?php echo $produto->quantidade ?>" type="text" placeholder="Insira a quantidade">
                    </div>
                </th>	


                <th>

                    <label>SITUAÇÃO</label>
                    <input name="txt_estoque" value="<?php echo $produto->estoque ?>" type="text" placeholder="Insira a quantidade">

                </th>	



                <input type="hidden" name="id" value="<?php echo $produto->idproduto ?>">
                <input type="submit" value="Editar" class="btn">




                </form>
            </div>	
    </div>
