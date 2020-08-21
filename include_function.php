<?php
/*------------------include()------------------------------------
include(filename) - it is used to call an existing file in another file.
require(filename) - it is used to call an existing file in another file.

>>> there is difference between both function.
include produce warning message if calling file not available but require produce fattol error.*/

include('forms_input.php');
echo "hello";

?>