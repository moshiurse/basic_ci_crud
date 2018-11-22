<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Students data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<h2> Show Data </h2>
<?php

foreach ($result as $key) {
    echo $key->name . " " . $key->email . " " . $key->phone . " <br>";
}

?>

<h2>Insert Data : </h2>

<form action="">
  Name: <input type="text" name="name"><br>
  Email: <input type="text" name="email"><br>
  Phone: <input type="text" name="phone"><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>