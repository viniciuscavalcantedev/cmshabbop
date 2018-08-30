
<?php require_once('Config/pages_link_name.php') ?>
<nav class="navbar navbar-expand-lg navbar_habbop">
			 <!-- <a class="navbar-brand" href="#">Navbar</a> -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Menu de Navegação">
			  		<i class="fas fa-bars" style="color: #fff;"></i>
			  </button>
			  <div class="container-fluid">
			  	<div class="container">
				  	<div class="row">
				  		<div class="col-lg-12 col-12 col-md-12">
							 <div class="collapse navbar-collapse" id="navbarSupportedContent">
						    <ul class="navbar-nav mr-auto nav-habbop">
						      <li class="nav-item active">
						        <a class="nav-link" href="<?php echo $principal; ?>"><i class="fas fa-home"></i></a>
						      </li>
						      <li class="nav-item active">
						        <a class="nav-link" href="#"><i class="far fa-user-circle"></i> NomeUser</a>
						      </li>
						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          <i class="fas fa-users"></i> Comunidade
						        </a>
						        <div class="dropdown-menu  drop-habbop" aria-labelledby="navbarDropdown" style="background-color: #0d2a59; border: 1px solid #f50cff;">
						          <a class="dropdown-item drop-habbop_link" href="<?php echo $hall; ?>"><i class="fas fa-star-half-alt"></i> Hall da Fama</a>
						          <a class="dropdown-item drop-habbop_link" href="<?php echo $news; ?>"> <i class="fas fa-newspaper"></i> Notícias</a>
						          <a class="dropdown-item drop-habbop_link" href="<?php echo $forum ?>"> <i class="fas fa-comment-al"></i> Fórum [BREVE]</a>
						        </div>
						      </li>						      
						      <li class="nav-item dropdown">
						        <a class="nav-link dropdown-toggle" href="#" id="navbarDrops" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						          <i class="fas fa-star-half-alt"></i> Equipe
						        </a>
						        <div class="dropdown-menu  drop-habbop" aria-labelledby="navbarDrops" style="background-color: #0d2a59; border: 1px solid #f50cff;">
						          <a class="dropdown-item drop-habbop_link" href="<?php echo $equipe_colaboradores; ?>"><i class="fas fa-star"></i> Colaboradores</a>
						          <a class="dropdown-item drop-habbop_link" href="<?php echo $funcionarios; ?>"> <i class="fas fa-star"></i> Funcionários</a>
						        </div>
						      </li>
						       <li class="nav-item">
						        <a class="nav-link" href="<?php echo $discord_habbop ?>"><i class="fab fa-discord"></i> Discord</a>
						      </li>
						       <li class="nav-item">
						        <a class="nav-link" href="<?php echo $about; ?>"><i class="far fa-bookmark"></i> Sobre</a>
						      </li>
						    </ul>
						   	    <ul class="navbar-nav mr-auto nav-habbop">
						      <li class="nav-item active">
						        <a class="nav-link" href="<?php echo $configuracao; ?>"><i title="Configurações" class="fas fa-cogs"></i></i> </a>
						      </li>
						       <li class="nav-item">
						        <a class="nav-link" href="<?php echo $notificacoes; ?>"><i title="Notificações" class="far fa-bell"></i></a>
						      </li>
						       <li class="nav-item">
						        <a class="nav-link" href="#"><i title="Pesquisar" class="fas fa-search"></i></a>
						      </li>
						    </ul>
						  </div>
				  	</div>
				  	</div>
			  	</div>
			  </div>
			</nav>