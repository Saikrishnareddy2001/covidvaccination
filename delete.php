<?php
include "connections.php";
$vaccinationcentre=$_GET["id"];
mysqli_query($link,"delete from table1 where id=$vaccinationcentre");
?>
<script type="text/javascript">
window.location="index.php";
</script>

