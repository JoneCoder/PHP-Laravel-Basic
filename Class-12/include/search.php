<?php
/**
 * Created by PhpStorm.
 * User: MR. Shariful
 * Date: 3/6/2019
 * Time: 12:05 PM
 */
if(isset($_GET['search'])){
    $searchData = $_GET['search'];
    header('location:profile.php?search='.$searchData);
}