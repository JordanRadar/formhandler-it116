<?php

if(isset($_GET['FirstName'])){//show data
  echo $_GET['FirstName'];
}else{//show form
  echo '
  <form action="">
  First Name: <input type="text" name="FirstName" /><br />
  <input type="submit" />
  </form>
  ';
}

