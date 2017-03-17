<?php

session_start();

$template = true;

if (isset($_GET['page'])) {
    $getpage = $_GET['page'];
    if ($getpage == 'login') {
        $template = false;
        $page = "modules/" . $getpage . ".php";
    } else if($getpage == 'data'){
        $page = "modules/".$getpage.".php";
    }else{
        $template = false;
        $page = "modules/404.php";
    }
} else {
    $page = "modules/dashboard.php";
}

if ($template) {
    include 'views/head.php';
    include 'views/title.php';
    include 'views/navbar.php';
    if (!file_exists($page)) {
        header("location: ".$_SERVER['REQUEST_URI']."404");
    } else {
        include $page;
    }
    include 'views/footer.php';
}else{
    if(!file_exists($page)){
          header("location: ".$_SERVER['REQUEST_URI']."404");
    }else{
        include $page;
    }
}
?>