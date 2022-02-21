 <?php

   print_r($_POST['email']);

   $bd = mysqli_connect('localhost', 'root', '', 'disneymax');

   $sql = "INSERT INTO `contas`(`email`) VALUES email = $email";

   $result = mysqli_query($bd, $sql);

?>