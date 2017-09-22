<link rel="stylesheet" type="text/css" href="../css/menu.css">

<div class=" affix-row">
	<div class="affix-sidebar">
		<div class="sidebar-nav">
			<div class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<span class="visible-xs navbar-brand"><b>Andres Cano</b></span>
				</div>
				
				<div class="navbar-collapse collapse sidebar-navbar-collapse">
					<!--solo table, laptop-->
					<ul class="nav navbar-nav hidden-xs">
						<li><img src="../img/m1.png" width="20%"> <a href="?op=home">Home</a></li>
						<li ><img src="../img/m2.png" width="20%"> <a href="?op=informacion">Información</a></li>	
							<ul class="dropdown">
								<li><a href="?op=perfil">Perfil</a></li>
							</ul>
						</li>
						<li><img src="../img/m3.png" width="20%"> <a href="">Evento</a>
							<ul class="dropdown">
								<li><a href="?op=eventos_publicados">Eventos publicados</a></li>
								<li><a href="?op=eventos_nopublicados">Eventos no publicados</a></li>
							</ul>
						</li>
						<li><img src="../img/m4.png" width="20%"><a href="?op=servicio_cliente">Servicio al Cliente</a></li>
						<li><img src="../img/m5.png" width="20%"><a href="?op=reportes">Reportes</a></li>
						<li><img src="../img/m6.png" width="20%"><a href="?op=configuracion">Configuración</a></li>
					</ul>

					<!-- solo movil-->
					<ul class="nav navbar-nav visible-xs">
						<li><a href="?op=home">Home</a></li>
						<li class="hidden-md hidden-lg">
							<a href="#" data-toggle="collapse" data-target="#toggleDemo" data-parent="#sidenav01" class="collapsed">
								<span class="glyphicon glyphicon-cloud"></span> Información <span class="caret pull-right"></span>
							</a>
							<div class="collapse" id="toggleDemo" style="height: 0px;">
								<ul class="nav nav-list">
									<li><a href="?op=perfil">Perfil</a></li>
								</ul>
							</div>
						</li>
						<li class="hidden-md hidden-lg">
							<a href="#" data-toggle="collapse" data-target="#toggleDemo1" data-parent="#sidenav02" class="collapsed">
								<span class="glyphicon glyphicon-cloud"></span> Evento <span class="caret pull-right"></span>
							</a>
							<div class="collapse" id="toggleDemo1" style="height: 0px;">
								<ul class="nav nav-list">
									<li><a href="?op=eventos_publicados">Eventos publicados</a></li>
									<li><a href="?op=eventos_nopublicados">Eventos no publicados</a></li>
								</ul>
							</div>
						</li>
						<li><a href="?op=servicio_cliente">Servicio al Cliente</a></li>
						<li><a href="?op=reportes">Reportes</a></li>
						<li><a href="?op=configuracion">Configuración</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>