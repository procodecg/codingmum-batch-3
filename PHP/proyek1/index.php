<!DOCTYPE html>
<html>

<head>
    <title>PHP Test</title>
</head>

<body>
    <?php 
    echo '<h1>Proyek 1</h1>';
    echo '<p>Hello World</p>'; 
    echo '<strong>Ini huruf bold</strong><br>';
    
    function myAge($birthYear) { // defines a function, this one is named "myAge"
        $yearsOld = date('Y') - $birthYear; // calculates the age
        return $yearsOld . ' year' . ($yearsOld != 1 ? 's' : ''); // returns the age in a descriptive form
    }
    
    
    echo 'I am currently ' . myAge(1981) . ' old.'; // outputs the text concatenated

    function getAdder($x) {
        return function($y) use ($x) {
            return $x + $y; };
    }
    $adder = getAdder(8);
    echo $adder(2); // prints "10"
   ?>
    
   </body>
</html>