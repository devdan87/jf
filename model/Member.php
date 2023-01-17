<?php

require_once("model/Database.php");


class Member extends Database{



public function addMember(){
    $dbAddMember = $this->dbConnect();
    $reqAddMember = $dbAddMember->prepare('INSERT INTO user(pseudo,psswd,email,date_inscription) VALUES(:val1,:val2,:val4,NOW())');
    $reqAddMember->execute(array(
        'val1'=>$_POST['nom'],
        'val2'=>password_hash($_POST['mdp'], PASSWORD_DEFAULT),
        'val4'=>$_POST['mail']
    ));
}


public function checkMember($pseudo){
    $dbCheckUser =  $this->dbConnect();
    $reqCheckUser = $dbCheckUser->prepare('SELECT pseudo From user WHERE pseudo = ?');
    $reqCheckUser->execute(array($pseudo));
    $count = $reqCheckUser->rowCount();
    if ($count > 0) {
      return true;
    }else{
        return false;
    }
}



public function checkPassword($pseudo){
    $db = $this->dbConnect();
    $check = $db->prepare('SELECT id_user,pseudo,psswd,email,date_inscription From user WHERE pseudo = ?');
    $check->execute(array($pseudo));
    $infoUser = $check->fetch();
    return $infoUser;
}


public function theListCst(){
    $dbCst = $this->dbConnect();
    $reqListCst =  $dbCst->query('SELECT id_user,pseudo,email,date_inscription FROM user ' );
    return $reqListCst;
}


public function deleteMember($theMemb){
    $dbMemb = $this->dbConnect();
    $reqTheMemb =  $dbMemb->prepare('DELETE FROM user WHERE id_user = ?');
    $reqTheMemb->execute(array($theMemb));
}

}