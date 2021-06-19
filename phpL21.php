<?php

if($_POST['gender'] == "male")
{
    echo "Welcome Mr. ".$_POST['fname']." ".$_POST['lname'];
}
else
{
    echo "Welcome Miss. ".$_POST['fname']." ".$_POST['lname'];

}
echo "</br>";
echo "</br>";
echo "</br>";
echo "Please Review your information";
echo "</br>";
echo "</br>";

echo "Name: ".$_POST['fname']." ".$_POST['lname'];

echo "</br>";
echo "Adress: ".$_POST['address'];

echo "</br>";
echo "Skills: ";

if(isset($_POST['php']) && !empty($_POST['php'])) 
{
    echo "</br>";
    echo $_POST['php'];
}
if(isset($_POST['j2se']) && !empty($_POST['j2se']))
{
    echo "</br>";
    echo $_POST['j2se'];
}
if(isset($_POST['mysql']) && !empty($_POST['mysql']))
{
    echo "</br>";
    echo $_POST['mysql'];
}
if(isset($_POST['postgree']) && !empty($_POST['postgree']))
{
    echo "</br>";
    echo $_POST['postgree'];
}

echo "</br>";
echo "Department: ".$_POST['dept'];



