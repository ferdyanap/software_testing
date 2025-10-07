<?php 

//file :test_age.php

//ambil fungsi Validator.php

require_once "Validator.php";

//test case 1 : umur tidak huruf
try {
    $result =validateAge(-10);
    echo "PASS : umur tiga puluh seharusnya di terima";
    }catch (Exception $e){
        echo "FAIL: umur dua lima tidak di terima.  error:  "  .$e->getMessage()  . "\n";

    }



//test case 2 : nama wajib diisi
try {
    
    
    $result =validateName(1212);
    echo "PASS : nama harus di isi";
    }catch (Exception $e){
    echo "FAIL: nama tidak di terima.  error:  "  .$e->getMessage()  . "\n";

}