<?php
//connect to the user account class
require_once __DIR__ ."./../classes/general_class.php";

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}



//--INSERT--//

//--SELECT--//

//--UPDATE--//

//--DELETE--//

?>