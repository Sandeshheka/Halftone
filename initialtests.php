
<?php require_once 'init.php';?>
<h2> Test: Initialization and configuration</h2>
<?php
print "Base URL = ".$config['base_url'];
print "</br>";
print "Database Details";
print "<pre>";
print r($db);
print "</pre>";
?>