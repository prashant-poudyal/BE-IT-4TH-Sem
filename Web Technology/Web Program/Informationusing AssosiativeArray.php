<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Functions</title>
</head>
<body>

<?php

$name = "Prashant";
$city = "Kathmandu";

echo "Welcome $name";
echo "<br>";

echo 'Welcome to $city';   // Single quotes don't replace variables
echo "<br>";

// String Concatenation
$firstName = "Prashant";
$lastName = "Poudyal";

$fullName = $firstName . " " . $lastName;

echo $fullName;
echo "<br>";

// strlen()
echo strlen("PHP Programming");
echo "<br>";

// str_word_count()
echo str_word_count("Nepal is a beautiful country.");
echo "<br>";

// ucfirst()
echo ucfirst("php programming");
echo "<br>";

// strtolower()
echo strtolower("DANIEL");
echo "<br>";

// strrev()
echo strrev("Daniel");
echo "<br>";

// strpos()
echo strpos("welcome to php", "php");
echo "<br>";

// str_replace()
echo str_replace("java", "PHP", "i love java");
echo "<br>";

// strcmp()
echo strcmp("php", "php");
echo "<br>";

// substr()
echo substr("Programming", 0, 7);
echo "<br>";

// trim()
$a = "      nepal      ";
echo trim($a);
echo "<br>";

$b = trim($a);
echo strlen($b);
echo "<br>";

// explode()
$data = explode(",", "Ram,Shyam,Hari");
print_r($data);
echo "<br><br>";

// implode()
$arr = array("Ram", "Shyam", "Hari");
echo implode("_", $arr);
echo "<br>";

// str_repeat()
echo str_repeat("php ", 3);
echo "<br>";

// md5()
echo md5("password");
echo "<br>";

// sha1()
echo sha1("password");
echo "<br>";

// htmlspecialchars()
echo htmlspecialchars("<h1>Welcome</h1>");
echo "<br>";

// preg_match()
$text = "Welcome to pHP";

if (preg_match("/PHP/i", $text)) {
    echo "Pattern Found";
} else {
    echo "Pattern Not Found";
}

echo "<br>";

// Email Validation
$email = "student@gmail.com";
$pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";

if (preg_match($pattern, $email)) {
    echo "Valid Email Address";
} else {
    echo "Invalid Email Address";
}

?>

</body>
</html>