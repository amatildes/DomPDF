<div class="base-topo">
				<a href="index.php?link=1" class="logo"></a>
				<div class="base-busca">
                                    <form action="<?php echo URL_BASE ."produto/pesquisar"?>" method="POST">
						<input  name="buscar" type="text" placeholder="Pesquisa">
                                                <input type="submit" value="" class="but">
					</form>				
				</div>
			</div>
			
			<nav class="menu">
				<ul>
					<li><a href="<?php echo URL_BASE ."produto/home"?>">Home</a></li>
					<li><a href="<?php echo URL_BASE."produto/novo"?>">Cadastrar novo</a></li>
					<li><a href="<?php echo URL_BASE."produto"?>">Lista de produtos</a></li>
					
				</ul>
			</nav>	