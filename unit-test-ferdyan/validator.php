<?php 

// file : validator.php
function validateAge ($age) {
    //harus angka 
    if(!is_numeric($age)){
        throw new InvalidArgumentException("Umur harus angka");
    }
    //tidak boleh negatif 
    if ($age<0){
        throw new InvalidArgumentException("umur tidak boleh negatif");
    }
    return true;
}

// file : validator.php
function validateName ($name) {
    //harus angka 
    if(!is_string($name)){
        throw new InvalidArgumentException("nama harus diisi");
    }
    //tidak boleh negatif 
    if (!empty($name)){
        throw new InvalidArgumentException("nama tidak boleh kosong");
    }
    return true;
}