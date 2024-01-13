<?php

// named argument can eliminate to maintain argument order when it need to call the function
function personInfo($name, $age, $hometown, $currentcity = "dhaka")
{

    echo "person name is $name his age: $age, hometown: $hometown, currentcity: $currentcity";

}

personInfo(age: 25, hometown:"cumilla",name: "ashik" );
?>