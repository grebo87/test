
<div class="inner-spacer">
        <h3>Perfil del Usuario <?php echo $user->login;?></h3><br>
        <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
            <li class="active"><a href="#datos" data-toggle="tab">Datos</a></li>
            <li><a href="#password" data-toggle="tab">Cambiar Password</a></li>
        </ul>
        <div id="my-tab-content" class="tab-content">
            <div class="tab-pane active" id="datos">
                <?php include 'shared/table-datos-profile.php'; ?>
            </div>
            <div class="tab-pane" id="password">
                <?php include 'shared/cambiar-password.php'; ?>
            </div>
        </div>


    	
</div><br><br>