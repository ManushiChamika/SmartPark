<?php

    $con=new mysqli("localhost","root","","smartparkpro");

        if($con->connect_error){

            die("Connection Failed:".$con->connect_error);
        }

?>