
<form action="post.php" method="post">
<input type="text" name="myname" placeholder="Enter My Name" required>
<input type="text" name="lastname" placeholder="Enter My Last Name" required>
<input type="date" name="date" id="datepicker">
<button type="submit" name="submitBtn" value="33">Submit</button>


</form>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
echo "We got a GET request!<br>";
foreach ($_POST as $key => $value) {
    echo "We received name $key with value $value <br>";
}
if (isset($_POST['myname'])) {
    echo "Why hello there " . $_POST['myname'] . "! <hr>";
    $_SESSION['myname'] = $_POST['myname'];
}
var_dump($_POST);
}
