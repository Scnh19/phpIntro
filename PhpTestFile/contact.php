<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<body>

<ul>
    <li><a href="index.php"><h1>Home</h1></a></li>
    <li><a href="contact.php"><h1>Contact</h1></a></li>
</ul>

<?php

echo $_SESSION['username'];

?>

</body>
</html>	