<?
$stringBr = "PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.";
$stringOne =nl2br($stringBr);
//echo "$stringOne";
$stringTwo = "PHP does not require (or support) explicit type definition in variable declaration; a variable's type is determined by the context in which the variable is used.";
//echo "$stringTwo";


//1. Find occurance of PHP from string 1.
	echo strpos($stringOne,"PHP")."<br />";

//2. Find the position where PHP occures in the string 1.

//3. Create array of words in string 1 & print them using a recursive function.

//4. Capitalise string 1
$strUpper = strtoupper($stringOne);
	echo "<br />"."$strUpper"."<br />"; 




//echo "5. Combine string 1 & 2."."<br />" 
	echo "$stingOne"."$stringTwo"."<br />";



//6.Echo string 1 & 2 using heredoc.
echo "6.Echo string 1 & 2 using heredoc"."<br />";
echo '$stringOne'.'$stringTwo'."<br />";



echo "7. Print current date"."<br>";
echo date("Y/m/d") . "<br />";


//8. print 12th Jan 2012
$afterSevenDays = mktime(0,0,0,date("m")-5,date("d")-6,date("Y"));
echo "<br />"." january 12 ".date("Y/m/d", $afterSevenDays)."<br />";


//9. add 7 days in current date
$afterSevenDays = mktime(0,0,0,date("m"),date("d")+7,date("Y"));
echo "After 7 days date is  ".date("Y/m/d", $afterSevenDays)."<br />";

//10. Cut the string 1 into 4 parts & print it.
//for($count1=0;$count1<strlen($stringOne);$count1=$count1+53) 
//{
	//$i =0;
$cut=substr($stringOne, count1, $length = count1);
echo " " ."cut=$cut"."<br />";
//
//$i++;
//}

//11. Divide the string 1 by occurances of '.'. Combine the array in reverse word sequence

//12. Remove the HTML characters from string.
echo strip_tags($text, '<br />');

//13. Print the 'PHP' word from string 1 by traversing it using string functions



//14. Find the length of string 1 & 2
stringLength($stringOne,$stringTwo);

//15. Create file & write string 1 to that file using PHP functions.
createWriteFile();

CompareDates();




function stringLength($stringOne,$stringTwo) 
{
$length1=strlen($stringOne);
$length2=strlen($stringTwo);
echo "length of string 1 is $length1 and length of string 2 is $length2"."<br />"; 
}//end of string length


//15. Create file & write string 1 to that file using PHP functions.

function createWriteFile($stringOne) 
{
	
	}

//16. Print all Global varibles provided by PHP



//17. Usage and examples of Header (PHP) 
/*
Usage 
1)PHP is not limited to outputting html. PHP can output images, pdf, javascript files, etc. 
2)Browsers determine what type of content is by analyzing the headers sent
*/




//18. Redirect page 1 to page 2. 



//19. Compare two dates. (12-4-2010 & 12-5-2011). Calculate the days between these two dates. 
function CompareDates() {
$date1 = new DateTime("2010-04-12");
$date2 = new DateTime("2011-05-12");
$interval = $date1->diff($date2);
echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 
}

//20. Print date after 20 days from current date
$afterTwentyDays = mktime(0,0,0,date("m")+1,date("d")+8,date("Y"));
echo "After 20  days date is  ".date("Y/m/d", $afterTwentyDays);

//21. Print date in array format.

?>