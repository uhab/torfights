<?php

$page = "brackets";
$title = "Brackets - TorFights";
$desc = "Dueling Brackets for each tournament.";
include("../inc/header.php");

?>

<h1>Brackets</h1>
<p>Tournament information.</p>

<div id="livebracket">
    <iframe width='750' height='850' frameborder='0' src='https://docs.google.com/spreadsheet/pub?key=0Anc7cr6pHAmWdDNuX3hMU09fcTJ3N2JwbnMtWTNuS2c&single=true&gid=0&output=html&widget=true'></iframe>
</div>


<?php include("../inc/footer.php"); ?>
