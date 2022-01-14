
<?php

//validation
if(!(isset($_GET['a']) || isset($_GET['A']))){
    echo "Please pass value for index: A";
    exit;
}

if(!(isset($_GET['b']) || isset($_GET['B']))){
    echo "Please pass value for index: B";
    exit;
}

if(!(isset($_GET['c']) || isset($_GET['C']))){
    echo "Please pass value for index: C";
    exit;
}
$sum= exec('python C:\xampp\htdocs\Surbhi_programe\first.py ' . implode(' ', $_GET)); //getting value from python after addition
print("Total is $sum");

 
?>
