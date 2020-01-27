<?php
echo strlen("Hello world!"); // Used for  define string length
echo"<br>";
echo str_word_count("Reetu Thakur");//count the word length with space
echo"<br>";
echo strrev("Reetu Thakur");//Reverse the string
echo"<br>";
echo strpos("Reetu Thakur", "Thakur");// Find the string position
echo "<br>";
 $x= "My Name is reetu Thakur";
 echo str_replace("reetu", "Reet", $x);//find, replace , string
 echo "<br>";
 echo strstr("Hello world!","world");//Search first occurence
 echo "<br>";
 echo strtolower("Hey Reetu THAKUR");//Convert the upper letters in lower
 echo "<br>";
 echo strtoupper("Hello REETU Thakur");//Convert the lower letters in upper
 $str = "Hello World!";
echo $str . "<br>";
echo "<br>";
echo trim($str,"Hed!");//Trim the character
echo "<br>";
echo strtr("Hilla Warld","ia","eo");//Replace the ia with eo
echo "<br>";
print_r(str_split("Hello"));//Replace the string into an array
echo "<br>";
print "Hello world!"; //print the value
echo "<br>";
$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);//use to replace the each % sign withn the arguments

?>