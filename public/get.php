
<form action="get.php" method="get">
    <input type="text" name="myname" placeholder="Enter My Name" required>
    <input type="text" name="lastname" placeholder="Enter My Last Name" required>
    <input type="date" name="date" id="datepicker">
    <button type="submit" name="submitBtn" value="33">Submit</button>


</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo "We got a GET request!<br>";
    foreach ($_GET as $key => $value) {
        echo "We received name $key with value $value <br>";
    }
    if (isset($_GET['myname'])) {
        echo "Why hello there " . $_GET['myname'] . "! <hr>";
        $_SESSION['myname'] = $_GET['myname'];
    }
var_dump($_GET);
}
