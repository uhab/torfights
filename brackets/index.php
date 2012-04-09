<?php

$page = "brackets";
$title = "Brackets - TorFights";
$desc = "Dueling Brackets for each tournament.";
include("../inc/header.php");

?>

<h1>Brackets</h1>
<p>Tournament information.</p>

<div id="livebracket">
        
    <iframe name="iBracket" width='805' height='725' frameborder='1' src='https://docs.google.com/spreadsheet/pub?key=0Anc7cr6pHAmWdDNuX3hMU09fcTJ3N2JwbnMtWTNuS2c&single=true&gid=0&output=html&widget=true'></iframe>

    <script type = "text/javascript">

        function refreshIframe() {
        document.getElementById('iBracket').src = document.getElementById('iBracket').src;
        }

        setInterval("refreshIframe()",300000);  // every 5 minutes

    </script>

</div>


<?php include("../inc/footer.php"); ?>
