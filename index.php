<?php 

include("./db.php");
// exit(":)");
$sql = "SELECT * FROM `catalog`";
$res = DB::query($sql)->execute();

while ($row = $res->fetch()) {
    echo "<pre>" .  print_r($row, true) . "</pre>"; 
}
echo "<hr>:)";

?>