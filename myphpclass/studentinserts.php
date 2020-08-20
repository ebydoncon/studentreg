<?php 
include_once("connection.php");
class insertTable extends Dbh{
//Inserting into Eleven different fields
public function insert_13fields($tablename, $fieldname, $fieldvalue, $fieldname1, $fieldvalue1, $fieldname2, $fieldvalue2, $fieldname3, $fieldvalue3, $fieldname4, $fieldvalue4, $fieldname5, $fieldvalue5, $fieldname6, $fieldvalue6, $fieldname7, $fieldvalue7, $fieldname8, $fieldvalue8, $fieldname9, $fieldvalue9, $fieldname10, $fieldvalue10, $fieldname11, $fieldvalue11, $fieldname12, $fieldvalue12){

    $mysqli = $this->connect();

    $sql = "INSERT INTO {$tablename} SET {$fieldname}=:fieldvalue, {$fieldname1}=:fieldvalue1, {$fieldname2}=:fieldvalue2, {$fieldname3}=:fieldvalue3, {$fieldname4}=:fieldvalue4, {$fieldname5}=:fieldvalue5, {$fieldname6}=:fieldvalue6, {$fieldname7}=:fieldvalue7, {$fieldname8}=:fieldvalue8, {$fieldname9}=:fieldvalue9, {$fieldname10}=:fieldvalue10, {$fieldname11}=:fieldvalue11, {$fieldname12}=:fieldvalue12";

    $stmt = $mysqli->prepare($sql);

    if($stmt->execute([':fieldvalue'=>$fieldvalue, ':fieldvalue1'=>$fieldvalue1, ':fieldvalue2'=>$fieldvalue2, ':fieldvalue3'=>$fieldvalue3, ':fieldvalue4'=>$fieldvalue4, ':fieldvalue5'=>$fieldvalue5, ':fieldvalue6'=>$fieldvalue6, ':fieldvalue7'=>$fieldvalue7, ':fieldvalue8'=>$fieldvalue8, ':fieldvalue9'=>$fieldvalue9, ':fieldvalue10'=>$fieldvalue10, ':fieldvalue11'=>$fieldvalue11, ':fieldvalue12'=>$fieldvalue12])){
        
        return "Insertion Made";
        //array('action'=>'Success', 'counting'=>1);
    } else {
         return $failed="failed: " . $mysqli->error;
          
         //array('action'=>'Success', 'counting'=>0);
    }

}
}
?>