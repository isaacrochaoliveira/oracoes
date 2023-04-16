<?php

if (!$_SESSION) {
    session_start();
}

if (!$_SESSION['id']) {
    echo "<script>location.href = '../'";
}

?>