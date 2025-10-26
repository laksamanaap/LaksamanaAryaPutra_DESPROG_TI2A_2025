<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="frame">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $name = $_REQUEST['frame'];
  if (empty($name)) {
    echo "Name is empty";
  } else {
    echo $name;
  }
}
?>