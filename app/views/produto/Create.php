		

<div class="base-home">
    <h1 class="titulo"><span class="cor">Novo</span> cadastro</h1>
    <div class="base-formulario">
        


        <form action="<?php echo URL_BASE . "produto/salvar" ?>" method="POST">
            

            <label>Patrimonio</label>
            <input name="txt_patrimonio" value="" type="text" placeholder="Insira o patrimonio">

            <label>nome</label>
            <input name="txt_nome" value="" type="tex
                   t" placeholder="Insira o nome" onkeyup="maiuscula(this);"/>

            <div class="col">
                <label>Descrição</label>
                <input name="txt_descricao" value="" type="text" placeholder="Insira a descrição">	
            </div>

            <div class="col">
                <label>Marca</label>
                <input name="txt_marca" value="" type="text" placeholder="Insira a narca">
            </div>	

            <div class="col">
                <label>Modelo</label>
                <input name="txt_modelo" value="" type="text" placeholder="Insira o modelo">
            </div>


            <th>
                <div class="col">
                    <label>QTDE</label>
                    <input name="txt_qtde" value="" type="text" placeholder="Insira a quantidade">
                </div>
            </th>	




            <input type="submit" value="Cadastrar" class="btn">

        </form>
    </div>	
</div>

