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
                  if( isset($errors) ){
                  ?>
                    <div class="alert alert-warning" role="alert">
                      <ul>
                      <?php
                        foreach($errors as $error){
                          echo '<li>'.$error.'</li>';
                        }
                      ?>
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