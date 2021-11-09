<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
$_SESSION["id"] = "kleber";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";
?>

</body>
</html>