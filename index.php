<?php

if(isset($_GET['FirstName'])){//show data
  //
  
  echo '<pre>';
  var_dump($_GET);
  echo '</pre>';
  
  echo $_GET['FirstName'] . ' ' . $_GET['LastName'];
}else{//show form
  echo '
  <form action="">
  First Name: <input type="text" name="FirstName" /><br />
  Last Name: <input type="text" name="LastName" /><br />
  <input type="submit" />
  </form>
  ';
}

