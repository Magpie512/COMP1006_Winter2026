
<?php
declare(strict_types=1); // Enable strict types

/* 
  This is a 
  Multi-line Comment
*/

//3. Variables, Data Tyoes, Concatenation, Conditional Statements & Echo

$firstName = "Mara"; //string
$age = 28; //integer
$isStudent = true; //boolean
$height = 5.6; //float
echo "<p>Hello, my name is " . $firstName . ", I am " . $age . " years old.</p>";

if ($isStudent) {
    echo "<p>I am a student.</p>";
} else {
    echo "<p>I am not a student.</p>";
}

//4. Loosely Typed Language Demo

$num1 = "10"; //string
$num2 = 20; //integer

function add($num1, $num2) {
    return $num1 + $num2; //PHP will convert string to integer
}

echo "<p>The sum is: " . add($num1, $num2) . "</p>";

//5. Strict Types & Types Hints


//6. OOP with PHP 

class Person {
    private string $name;
    private int $age;
    private bool $isStudent;

    public function __construct(string $name, int $age, bool $isStudent) {
        $this->name = $name;
        $this->age = $age
        $this->isStudent = $isStudent;
        }

    public function introduce(): string {
        return "Hello, my name is " . $this->name . " and I am " . $this->age . " years old.";
    }
}