<nav class="navbar navbar-default">
    <div class="container">
        <ul class="nav navbar-nav">
            <li role="presentation" class="<?php  if($title == 'Home' ){ echo 'active'; }?>"><a href="<?php  echo base_url();?>home">Home</a></li>
            <li class="dropdown <?php  if($title == 'Usuarios' ){ echo 'active'; }?> ">
		        <a class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Usuarios <span class="caret"></span></a>
		        <ul class="dropdown-menu" role="menu">
		           	<li><a href="<?php  echo base_url();?>users"><i class="fa fa-table"></i> Lisdato</a></li>
		            <li class="divider"></li>
		            <li><a href="<?php  echo base_url();?>users/create"><i class="fa fa-plus-square"></i> Nuevo</a></li>		            
		        </ul>
		    </li>
            <li class="dropdown <?php  if($title == 'Personal' ){ echo 'active'; }?>">
		        <a class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> Personal <span class="caret"></span></a>
		        <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php  echo base_url();?>personal"><i class="fa fa-table"></i> Lisdato</a></li>
		            <li class="divider"></li>
		            <li><a href="<?php  echo base_url();?>personal/create"><i class="fa fa-plus-square"></i> Nuevo</a></li>		            
		        </ul>
		    </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
		    <li class="dropdown">
		       	<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span> <?php echo $this->session->userdata('login'); ?> <span class="caret"></span></a>
		        <ul class="dropdown-menu" role="menu">
		            <li><a href="<?php  echo base_url();?>users/perfil"><i class="fa fa-user"></i> Perfil</a></li>		           
		            <li class="divider"></li>
		            <li><a href="<?php  echo base_url();?>seguridad/logout"><i class="fa fa-power-off"></i> Salir</a></li>
		        </ul>
		    </li>
      	</ul>
    </div>
</nav>