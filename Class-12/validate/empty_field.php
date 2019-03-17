<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 2/26/2019
 * Time: 11:29 PM
 */
$flied = ['firstNameErr'=>$firstName, 'lastNameErr'=>$lastName, 'emailErr'=>$email, 'phoneErr'=>$phone, 'addressErr'=>$address, 'cityErr'=>$city, 'stateErr'=>$state, 'zipErr'=>$zip, 'websiteErr'=>$website, 'hostingErr'=>$hosting, 'commentErr'=>$comment];

foreach ($flied as $key => $data){
    if(empty($data)){
        header('location:../index.php?'.$key.'=1');
    }
}
?>