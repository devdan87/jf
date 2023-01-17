<?php

require_once("model/Database.php");


class Chapter extends Database{

    public function createChapter(){
        $dbAddMember = $this->dbConnect();
        $reqAddMember = $dbAddMember->prepare('INSERT INTO chapter(title,content) VALUES(:val1,:val4)');
        $reqAddMember->execute(array(
            'val1'=>$_POST['onetitle'],
            'val4'=>$_POST['textContent']
        ));
    }

public function showListChapter(){
    $dbChapter = $this->dbConnect();
    $reqChapter =   $dbChapter->query('SELECT title,content FROM chapter ' );
    return  $reqChapter;
}

public function deleteOneChapter($theChapter){
    $dbChapter = $this->dbConnect();
    $reqChapter =  $dbChapter->prepare('DELETE FROM chapter WHERE id_chapter = ?');
    $reqChapter->execute(array($theChapter));
}

public function updateOneChapter($title,$id){
    $dbChapter = $this->dbConnect();
    $reqChapter =  $dbChapter->prepare('UPDATE chapter SET title=?  WHERE id_chapter =? ');
    $reqChapter->execute(array($title,$id));
    
}

}
