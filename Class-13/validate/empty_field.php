<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/26/2019
 * Time: 11:29 PM
 */
$flied = ['userNameErr'=>$userName, 'emailErr'=>$email, 'messageFieldErr'=>$message];

foreach ($flied as $key => $data){
    if(empty($data)){
        header('location:../index.php#contact?'.$key.'=1');
    }
}
?>