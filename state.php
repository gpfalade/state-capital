<!DOCTYPE html>
<html lang="en">
<head>
    <meta  charset="UTF-8">
    <title>States in Nigeria</title>
</head>
    <body>
<?php
$call = file_get_contents("state.json");
$statecall = json_decode($call);

for($i = 0; $i <= 36; $i++){
    echo "<p>";
    echo  "<b>State &nbsp&nbsp&nbsp&nbsp:</b> " . $statecall[$i]->state . "<br><b>Capital :</b> " . $statecall[$i]->capital . "<br><b>Slogan &nbsp:</b> " . $statecall[$i]->slogan . "<br>";
}
?>
    </body>
</html>