<!DOCTYPE html>
<html lang="en">
  <head>
   <?php include_once __DIR__.'/includes/head.php'; ?>
  </head>
  <body>
      <div class="container">

        <header class="row">
           
            <?php include_once __DIR__.'/includes/header.php'; ?>
        </header>

        <div id="main" class="row">
            <div class="pad5 col8">
                  <?php
                  // printing Errors
                  if( $this->session->flashdata() ){
                  ?>
                    <div class="alert alert-<?php echo $this->session->flashdata('alert');?> alert-dismissable" role="alert">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      <span>
                         <?php
                            echo $this->session->flashdata('errors');
                          ?>
                      </span>
                      <ul>
                      
                      </ul>
                    </div>
                  <?php
                  }
                  // end errors
                  ?>
            </div>
            <?php echo $view;?>
        </div>
        <br><br>
        <footer class="row">            
            <?php include_once __DIR__.'/includes/footer.php'; ?>
        </footer>

      </div>
    
    <?php include_once __DIR__.'/includes/assets.php'; ?>
  </body>
</html>