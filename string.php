<!-- <?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowels($str) 
{
    $str = strtolower($str); 
    $vowelCount = 0; 
  
    for ($i = 0; $i < strlen($str); $i++) { 
        if (in_array($str[$i], ["a", "e", "i", "o", "u"])) { 
            $vowelCount++; 
        } 
    } 
  
    return $vowelCount; 
} 
  
// Driver code 
// $str = $strings[1]; 
$vowelsCount = countVowels($strings[0]); 
$vowelsCount2 = countVowels($strings[1]); 
$vowelsCount3 = countVowels($strings[2]); 
$vowelsCount4 = countVowels($strings[3]); 

echo "original string: " .$strings[0] .", vowels: " .$vowelsCount." Reversed String:" . strrev($strings[0]) ."\n"; 
echo "original string: " .$strings[1] .", vowels: " .$vowelsCount2." Reversed String:" . strrev($strings[1]) ."\n"; 
echo "original string: " .$strings[2] .", vowels: " .$vowelsCount3." Reversed String:" . strrev($strings[2]) ."\n"; 
echo "original string: " .$strings[2] .", vowels: " .$vowelsCount4." Reversed String:" . strrev($strings[3]) ."\n";

