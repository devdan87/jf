<?php

require('controller/controller.php');



if (isset($_GET['action'])){
    session_start();
    if ($_GET['action'] == "introduction") {
        $page = new Controller;
        $page->welcomePage();
    }  elseif ($_GET['action'] == "connect") {
        $page = new Controller;
        $page->connexionPage();
    }elseif ($_GET['action'] == "disconnect") {
        $page = new Controller;
        $page->deconnexionPage();
    }elseif ($_GET['action'] == "member") {
        $page = new Controller;
        $page->memberList();
    }elseif ($_GET['action'] == "comment") {
        $page = new Controller;
        $page->commentList();
    }elseif ($_GET['action'] == "inscription") {
        $page = new Controller;
        $page->inscriptionPage();
    }elseif ($_GET['action'] == "validSub") {

        if (!empty($_POST["nom"]) && !empty($_POST["mdp"]) && !empty($_POST["mail"]) && strlen($_POST["nom"])>1 && strlen($_POST["mdp"])>3) {

            $_POST["nom"] = strip_tags($_POST["nom"]);
            $_POST["mdp"] = strip_tags($_POST["mdp"]);
            $_POST["mail"] = strip_tags($_POST["mail"]);


        $page= new Controller;
        $page->checkInscription();

        }else{
            require("view/error.php");
            ?><script>$("#enough").css("display","block")</script><?php
        }

    }elseif ($_GET['action'] == "validConnexion"){

        if (!empty($_POST["psdCo"]) && !empty($_POST["pswCo"])) {

            $_POST["psdCo"] = strip_tags($_POST["psdCo"]);
            $_POST["pswCo"] = strip_tags($_POST["pswCo"]);
    
            $_SESSION['pseudo'] = $_POST['psdCo'];
            $_SESSION['password'] = $_POST['pswCo'];

            $page= new Controller;
            $page->verifyConnexion();

            if ($_SESSION["pseudo"]==="admin" && $_SESSION["password"]==="jfbook") {
                ?><script>$("#btnAdmin").css("display","block")</script>  <?php
                ?><script>$("#updateChap").css("display","block")</script>  <?php
                ?><script>$("#deleteChap").css("display","block")</script>  <?php
            }

        }else{
            require("view/error.php");
            ?><script>$("#errorCo").css("display","block")</script><?php
        }

       
    }elseif ($_GET['action'] == "member"){
        $page= new Controller;
        $page->listCst();

    }elseif ($_GET['action'] == "deleteMemb"){
        $page= new Controller;
        $page->validDeleteMemb();

    }elseif ($_GET['action'] == "chapter"){
        $page= new Controller;
        $page->showChapter();
        if ($_SESSION["pseudo"]==="admin" && $_SESSION["password"]==="jfbook"){
            ?><script>$("#updateChap").css("display","block")</script>  <?php
            ?><script>$("#deleteChap").css("display","block")</script>  <?php
        }
    }elseif ($_GET['action'] == "deleteChapter"){
        $page= new Controller;
        $page->validDeleteChapter();
    }elseif ($_GET['action'] == "addChapter"){
        $page= new Controller;
        $page->addChapter();
    }elseif ($_GET['action'] == "validChapter"){
        $page= new Controller;
        $page->validTheChapter();
    }elseif ($_GET['action']== "updateChapter") {
        $page= new Controller;
        $page->updatePage();
    }elseif ($_GET['action']== "update") {
        $page= new Controller;
        $page->newChapter();
    }elseif ($_GET['action']== "validComment") {
        $page= new Controller;
        $page->validOneComment();
    }elseif ($_GET['action']== "com") {
        $page= new Controller;
        $page->commentList();
    }





}else{
    $page = new Controller;
    $page->connexionPage();
    ?><script>$("header").css("display","none")</script><?php
    ?><script>$("footer").css("display","none")</script><?php
}