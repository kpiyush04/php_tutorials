<?php

?>


<!DOCTYPE html>
<html>
<head>
<title>PHP: Get Values of Multiple Checked Checkboxes</title>
</head>
<body>
<div class="container">
<div class="main">
<form action="php_checkbox.php" method="post">
<label class="heading">Select Your Technical Exposure:</label>
<input type="checkbox" name="check_list[]" value="btech"><label>btech</label>
<input type="checkbox" name="check_list[]" value="mtech"><label>mtech</label>
<input type="checkbox" name="check_list[]" value="mba"><label>mba</label>
<input type="checkbox" name="check_list[]" value="bca"><label>bca</label>
<input type="checkbox" name="check_list[]" value="bba"><label>bba</label>
<input type="submit" name="submit" Value="Submit"/>

</form>
</div>
</div>
</body>
</html>