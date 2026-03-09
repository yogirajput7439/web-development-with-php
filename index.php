<?php
echo "hello Yogesh"; // In PHP we can use echo to print something on the screen

$name = "Yogesh";  // Using Doller sign we can declare a variable 
$name2 = "Rajput";
$age = 22;  // In PHP we can declare a variable without mention the data type
echo $name;
echo $name2;
echo $age;
echo "Name " .$name . "Surname is " . $name2 . "And the age is : " . $age ; // Condition Statement in PHP

if($age > 18){
    echo " You are eligible for voting.";
}
else{
    echo " you are not eligible for voting.";
}

// For Loop in PHP 

for($i = 0; $i < 20; $i++){
    if($i % 2 == 0){
        echo $i . "<br>";
    }
}

// While Loop in PHP 

$i = 0;

while($i < 20){
    if($i % 2 == 0){
        echo $i . "<br>";
    }
    $i++;
}

// Function In PHP
function greet(){
    echo "Hello, Welcome to PHP Programming!";
}

greet();

?>

// Now the HTML In PHP

<?php
if(isset($_POST['username']))
{
    $name = $_POST['username'];
    echo "Hello " . $name;
}
?>

<form method="post">
<input type="text" name="username">
<input type="submit">
</form>