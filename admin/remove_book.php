<?php

$link = mysqli_connect('localhost','root','','bookalicious');


if(isset($_GET['id'])){
    $id = $_GET['id'];
    $delete_book = "delete from book where id = '$id'";

    $run_delete = mysqli_query($link,$delete_book);

    if($run_delete){
        echo "<script>alert('Book Removed')</script>";
        echo "<script>window.open('booklist.php','_self')</script>";
    }
}

?>