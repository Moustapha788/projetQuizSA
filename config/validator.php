<?php
/***
* VALIDATOR (les fonctions de validation)
*/
// ! fonction champ_obligatoire
function champ_obligatoire(string $key,string $data,array &$errors,string $message="ce champ est obligatoire"){
    if(empty($data)){
        $errors[$key]=$message;
    }
}
// ! fonction valid_email
function valid_email(string $key,string $data,array &$errors,string $message="email invalid"){
    if(!filter_var($data,FILTER_VALIDATE_EMAIL)){
        $errors[$key]=$message;
    }
}
// ! fonction qui permet de nettoyer une chaine des carartères indésirables
function nettoyer_chaine(string &$chaine):string{
    $chaine=strip_tags(htmlspecialchars(trim($chaine)));
    return $chaine;
}
// ! fonction valid_password
function valid_password(string $key,string $data,array &$errors,string $message="entrer un mot de passe valide"){
    if(empty($data)){
        $errors[$key]=$message;
    }else{
        if(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z]{6,}$/', $data)){
            $errors[$key]='format invalide';
        }
    }
}
// ! matched_passwords_required
function matched_passwords_required(string $password1,string $password2,array &$errors,string $key,string $message):void{
    if(!is_matched_password($password1,$password2,)){
        $errors[$key]=$message;
    }
}
// ! is_matched_password
function is_matched_password(string $password1,string $password2,):bool{
    return $password1===$password2;
}
// ! upload_photo_user
function upload_photo_user(string $avatar):string{
    if($_SESSION[KEY_USER_CONNECT][$avatar]===''){
        return 'generatedPhotos.png';
    }else{
        return $_SESSION[KEY_USER_CONNECT][$avatar];
    }
}
// ! get_first_name_admin
function get_first_name_admin(string $nom):string{
    if($_SESSION[KEY_USER_CONNECT][$nom]===''){
        return 'Admin';
    }else{
        return $_SESSION[KEY_USER_CONNECT][$nom];
    }
}
// ! get_last_name_admin
function get_last_name_admin(string $prenom):string{
    if($_SESSION[KEY_USER_CONNECT][$prenom]===''){
        return 'Admin';
    }else{
        return $_SESSION[KEY_USER_CONNECT][$prenom];
    }
}
