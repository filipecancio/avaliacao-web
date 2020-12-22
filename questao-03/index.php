<?php
    $page='page01';
    if(isset($_GET['i'])){
        $page = addslashes($_GET['i']);
    }

    include 'fragment/head.php';
    switch($page){
        case 'page01':
            include 'pages/page01.php';
        break;
        case 'page02':
            include 'pages/page02.php';
        break;
        default:
            include 'pages/page01.php';
        break;
    }
    include 'fragment/body.php';
?>