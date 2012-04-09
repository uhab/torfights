<?php

$page = "brackets";
$title = "Brackets - TorFights";
$desc = "Dueling Brackets for each tournament.";
include("../inc/header.php");

?>

<head>

<script type="text/javascript"><!--

    var reloadInterval = 30000;

    function init() {
        setTimeout('reload()',reloadInterval);
    }

    function reload() {
        var iframe = document.getElementById('iBracket');
         if (!iframe) return false;
        iframe.src = iframe.src;
        setTimeout('reload()',reloadInterval);
    }

    window.onload = init;
--></script>    

</head>

<body>

<h1>Brackets</h1>
<p>Tournament information.</p>

<div id="livebracket">
        
    <iframe id="iBracket" width='805' height='725' frameborder='1' src='https://docs.google.com/spreadsheet/pub?key=0Anc7cr6pHAmWdDNuX3hMU09fcTJ3N2JwbnMtWTNuS2c&single=true&gid=0&output=html&widget=true'></iframe>

</div>

</body>

<?php include("../inc/footer.php"); ?>
