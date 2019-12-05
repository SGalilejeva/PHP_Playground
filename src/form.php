<form action="form.php" method="get">
<input type="text" name="myname">
<button type="submit">Submit</button>
</form>

<?php
echo "Processing Form"; 
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "We got a GET request!<br>";
    foreach ($_GET as $key => $value) {
        echo "We received some name $key with value $value <br>";
    }
    if (isset($_GET['myname'])) {
        echo "Why hello there" . $_GET['myname'] . "! <hr>";
    }
}
