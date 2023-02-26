<?php
if (!isset($_SESSION)) {
    session_start();
}

require_once('./controlAccess.php');
require_once('../crud/contactCrud.php');

$contactCrud = new contactCRUD();

$contactCrud->setMessageID($_GET['messageID']);
$contactCrud->konfirmoMesazhin();
?>