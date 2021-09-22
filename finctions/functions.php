<?php 

function filterString($field)
{
    $field = filter_var(trim($field),FILTER_SANITIZE_STRING);
    return $field;
}
function filterEmail($field)
{
 $field = filter_var(trim($field),FILTER_SANITIZE_EMAIL);
 if(filter_var($field, FILTER_VALIDATE_EMAIL)){
     return $field;
 }
 
 else
 {
     return false;
 }
 if(empty($field)){
     return $field;

 }else {
     return false ;
 }
}
$nameError = $emailError = $phoneError ='';
$name = $email = $phone = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
$name=filterString($_POST['name']);
if(!$name)
{
    $nameError ='الاسم مطلوب ';
}
    // validat email 
    $email=filterEmail($_POST['email']);
if(!$email)
{
    $emailError =' البريد غير صحيح  ';
}


}
?>