<div id="topo1">
        	<div id="logo">
				<a href="./home.php" style="text-decoration:none">
					<img src="image/logo.png" height="60"/>
				</a>
           	</div>
            <div id="menu">
            	<ul>
            		<div class="dropdown">
						<li>
							<span class="dropbtn">Advogados</span>
							<div class="dropdown-content">
								<a href="home.php">Buscar Advogados</a>
								<a href="chatadvogado.php">Chat com os Advogados</a>
								<a href="relatorioadvogado.php">Relatorio dos Advogados</a>
								<a href="capturardocumento.php">Captura Documento</a>
							</div>
						</li>
					</div>
            	</ul>
			</div>
            <div id="persona">
				<div class="dropdown">
				<img src="image/persona.png" height="50" class="dropbtn"/>
					<div class="dropdown-content">
						<a href="./configuracao.php">Configuracao</a>
						<a href="./perfil.php">Perfil de <b><?php echo htmlspecialchars($_SESSION["ds_nome"]); ?></b></a>
						<a href="logout.php" >Sair</a>
				  </div>
				</div>
			</div>
		</div>