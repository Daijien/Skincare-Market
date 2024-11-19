<?php
    $order = isset($_POST['opsi']) ? $_POST['opsi'] : null;    
    $pricemin = isset($_POST['min']) ? $_POST['min'] : null;
    $pricemax = isset($_POST['max']) ? $_POST['max'] : null;

    
    if ( $order == "name ASC" ) {
        $orderBy = "name ASC";
    } else if ( $order == "name DESC" ){
        $orderBy = "name DESC";    
    }  else if ( $order == "Price ASC" ){
        $orderBy = "Price ASC";
    } else if ( $order == "Price DESC" ){
        $orderBy = "Price DESC";
    } else 
        $orderBy = "RAND()";

    //ngecek nilai min max
    if (!is_numeric($pricemin)) {
        $pricemin = null;
    }
    if (!is_numeric($pricemax)) {
        $pricemax = null;
    }

    if ( isset($pricemin) && isset($pricemax) ) 
        header("location:product.php?order=$orderBy&min=$pricemin&max=$pricemax");
    else 
        header("location:product.php?order=$orderBy");


    exit();
    
?>