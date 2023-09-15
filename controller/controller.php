<?php

require_once("model/Database.php");

require_once("model/Member.php");

require_once("model/Chapter.php");

require_once("model/Comment.php");

class Controller{

    public function inscriptionPage(){
        require("view/inscription.php");
        ?><script>$("header").css("display","none")</script><?php
        ?><script>$("footer").css("display","none")</script><?php
    }

    public function connexionPage(){
        require("view/connexion.php");
        ?><script>$("header").css("display","none")</script><?php
        ?><script>$("footer").css("display","none")</script><?php
    }

    public function productPage(){
        require("view/product.php");
    }


    public function welcomePage(){
        require("view/welcome.php");
        if ($_SESSION["pseudo"]==="admin"){
            ?><script>$("#btnAdmin").css("display","block")</script>  <?php
        }
    }

    public function memberList(){
        require("view/listMember.php");
    }

    public function commentList(){
        require("view/listComment.php");
    }

    public function deconnexionPage(){
        require("view/deconnexion.php");
        ?><script>$("header").css("display","none")</script><?php
        ?><script>$("footer").css("display","none")</script><?php
    }

    public function updatePage(){
        require("view/updateChapter.php");

    }
   



    public function checkInscription(){
        $checkTheUser = new Member;
       $checking = $checkTheUser->checkMember($_POST['nom']);
        if ($checking === true){
            require("view/error.php");
            ?><script>$("#psdExist").css("display","block")</script>  <?php
            ?><script>$("header").css("display","none")</script><?php
        ?><script>$("footer").css("display","none")</script><?php
        }
       else{
        $customer= new Member;
            $customer->addMember();
            require("view/connexion.php");
           
            
        } 
    }

    public function addChapter(){
        require("view/addChapter.php");
    }

    public function validTheChapter(){
        $chap=new Chapter;
        $newChap=$chap->createChapter();
        require("view/listChapter.php");
    }


   
    public function verifyConnexion(){
        $checkCo = new Member;
        $checkTheCo =  $checkCo->checkPassword($_POST['psdCo']);
        $passCheck = password_verify($_POST['pswCo'], $checkTheCo['psswd']);
        $nameCheck =  $checkCo->checkMember($_POST['psdCo']);
        if ($passCheck==true &&  $nameCheck==true) {
          require("view/welcome.php");
        }else{
          require("view/error.php");
          ?><script>$("#errorCo").css("display","block")</script>  <?php
          ?><script>$("header").css("display","none")</script><?php
          ?><script>$("footer").css("display","none")</script><?php
        }
    }


    public function validDeleteMemb(){
        $memb= new Member;
        $theMemb = $memb->deleteMember($_GET['idMemb']);
        require("view/deleteMemb.php");
    }


    public function validDeleteChapter(){
        $chapter = new Chapter;
        $theChapter = $chapter->deleteOneChapter($_GET['idChap']);
        require("view/deleteChapter.php");
    }
    
    

    public function listCst(){
        $cst = new Member;
        $showCst = $cst->theListCst();
        require("view/listMember.php");
    }


        public function showChapter(){
            $chapter = new Chapter;
            $showTheChapter= $chapter->showListChapter();
            require("view/listChapter.php");
        }
    

        public function newChapter(){
            $chapter = new Chapter;
            $theChapter= $chapter->updateOneChapter($_POST['lastTitle'],$_POST['textContent'], $_GET['var']);
        
            require("view/listChapter.php");
        }

        public function validOneComment(){
            $comment= new Comment;
            $theComment = $comment->addComment();
            require("view/validComment.php");
        }


}