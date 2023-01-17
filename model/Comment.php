<?php

require_once("model/Database.php");


class Comment extends Database{

    public function addComment(){
    $dbAddComment = $this->dbConnect();
    $reqAddComment = $dbAddComment->prepare('INSERT INTO comment(id_user,title,comment,date_comment) VALUES(:val1,:val2,:val3,NOW())');
    $reqAddComment->execute(array(
        'val1'=>$_SESSION['id'],
        'val2'=>$_GET['mainTitle'],
        'val3'=>$_POST['textComment']
    ));
    }


    public function listComment($idChapter){
        $dbComment = $this->dbConnect();
        $reqComment=  $dbComment->prepare('SELECT * FROM comment where id = ? ');
        $reqComment->execute(array($idChapter));
    }


}