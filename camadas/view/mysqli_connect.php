 <?php
   
    DEFINE('DB_USER','id10783031_admin');
    DEFINE('DB_PASSWORD','12345');
    DEFINE('DB_HOST','localhost');
    DEFINE('DB_NAME','id10783031_loja');
   
    $conexao = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die('No connect'. mysqli_connect_error());
 ?>
