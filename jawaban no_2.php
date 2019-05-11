<?php
function is_username_valid($username){
$regex = preg_match('@[a-z]@', $username);
if(!$regex && strlen($username)<=8){
    echo "username harus lebih dari 8karakter, mengandung huruf BESAR, huruf kecil dan angka";
}else{
    echo 'username masuk';
    }
}
function is_email_valid($email){
    $pecah =  explode("@",$email);
    if(strlen($pecah[0])>=4 && filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo "email $email Sah";
    }else{
    echo "email $email Tidak Sah";
    }
    
}
