<?
/*global varibale declaration*/
$stringBr = "PHP parses a file by looking for <br/> one of the special tags that tells it to start interpreting the text as PHP code. The parser then executes all of the code it finds until it runs into a PHP closing <br/> tag.";
$stringOne =nl2br($stringBr);
$stringTwo = "PHP does not require (or support) explicit type definition in variable declaration; a variable's type is determined by the context in which the variable is used.";
$temp=explode(".", $stringOne);



	//1. Find occurance of PHP from string 1.
	occ($stringOne);


	//2. Find the position where PHP occures in the string 1.
	findPhp($stringOne);

	//3. Create array of words in string 1 & print them using a recursive function.
	echo"<br />";
	echo "3. Create array of words in string 1 & print them using a recursive function.";
	$arr=explode(" ",$stringOne);
	print_r($arr);
	$result = array_reverse_recursive($arr);
	print_r($result);
	echo "<br />";

	//4. Capitalise string 1
	capital($stringOne);

	//combine first and second string
	combineOneAndTwo($stringOne);



	//6.Echo string 1 & 2 using heredoc.
	Heredoc($stringOne,$stringTwo);



	//7.current date
	currentDate();

	//8. print 12th Jan 2012
	printTwelthJan();

	//9. add 7 days in current date
	CurrentPlusSevenDays();	
	
	
	//10. Cut the string 1 into 4 parts & print it."	
	cut($stringOne);

	//"11. Divide the string 1 by occurances of '.'. Combine the array in reverse word sequence".
	divideStringByDot($temp); 

	



	//12. Remove the HTML characters from string.
	//echo"without html"
	removeHtml($stringOne);

	//13. Print the 'PHP' word from string 1 by traversing it using string functions
	printPhp($stringOne);
	

	//14. Find the length of string 1 & 2
	stringLength($stringOne,$stringTwo);

	
	fileWrite($stringOne);
	//16. Print all Global varibles provided by PHP"
	printGlobal();

	//"17. Usage and examples of Header (PHP)";
	headerInfo();

	//18. Redirect page 1 to page 2.
	redirection();

	//19. Compare two dates. (12-4-2010 & 12-5-2011). Calculate the days between these two dates. 
	CompareDates();

	//20. Print date after 20 days from current dateafterTwenty();
	afterTwenty();
	
	//21. Print date in array format.	
	dateInArray();

function CurrentPlusSevenDays()
	 {
		echo"9. add 7 days in current date";
		$afterSevenDays = mktime(0,0,0,date("m"),date("d")+7,date("Y"));
		echo "After 7 days date is  ".date("Y/m/d", $afterSevenDays)."<br />";
		echo"<br />";
	}

function combineOneAndTwo($stringOne)
{
	echo "5. Combine string 1 & 2."."<br />" ;
	echo "$stringOne"."$stringTwo"."<br />";
	echo "<br />";
}

function  capital($stringOne) {	
	echo "<br />";
	echo "4. Capitalise string 1"."<br>";
	$strUpper = strtoupper($stringOne);
	echo "$strUpper"."<br />";
	echo "<br />"; 
}

function array_reverse_recursive($arr) 
{
    foreach ($arr as $key => $val) {
        if (is_array($val))
            $arr[$key] = array_reverse_recursive($val);
    }
    return array_reverse($arr);
}


function Heredoc($stringOne,$stringTwo)
{
	echo "6.Echo string 1 & 2 using heredoc"."<br />";
	echo '$stringOne'.'$stringTwo'."<br />";
}


function currentDate() {
	echo"<br />";
	echo "7. Print current date"."<br>";	
	echo date("Y/m/d") . "<br />";
	echo "<br />";
}

	function printTwelthJan()
	 {
		echo"8. print 12th Jan 2012"."<br />";
		$afterSevenDays = mktime(0,0,0,date("m")-5,date("d")-6,date("Y"));
		echo " january 12 ".date("Y/m/d", $afterSevenDays)."<br />";
		echo "<br />";
	}
	
function printPhp() 
	{
	echo"<br />";
	echo"13. Print the 'PHP' word from string 1 by traversing it using string functions";
	echo substr($stringOne, 0,3);
	echo"<br />";
	}
	//10. Cut the string 1 into 4 parts & print it."	
	function cut($temp1)
	{
	echo"<br />";
	echo"10. Cut the string 1 into 4 parts & print it."."<br />";
	$string_replace = str_replace(" ","",$temp1);
	$count = strlen($string_replace)/4;
	$out = str_split($temp1,$count+3);
	print_r($out);
	echo "<br />";
	}
//16. Print all Global varibles provided by PHP"
function printGlobal() 
{
	echo"<br />";
	echo"16. Print all Global varibles provided by PHP"."<br />";
	echo phpinfo(INFO_VARIABLES);
}

function divideStringByDot($temp)
{
	echo"<br />";
	echo "11. Divide the string 1 by occurances of '.'. Combine the array in reverse word sequence"."<br />";
	echo "****";
	print_r($temp);
	$temp1=explode(" ", $temp[0]);
	echo"temp 0"."<br />";
	print_r($temp1);
	$temp2=explode(" ", $temp[1]);
	echo"<br />";
	echo"temp 1"."<br />";
	print_r($temp1);
	$reverse_temp1=array_reverse($temp1);
	$reverse_temp2=array_reverse($temp2);
	echo"<br />";
	echo "reverse array print"."<br />";
	echo "$reverse_temp2"."$reverse_temp1"."<br />";
	echo "<br />";
}


function removeHtml($stringOne) 
{	
	echo"<br />";
	echo"12. Remove the HTML characters from string.";
	//echo"without html";
	echo strip_tags($stringOne, '<br />');
	print_r("$stringOne");
	echo "<br />";
}



function stringLength($stringOne,$stringTwo) 
{
	echo"<br />";
	echo"14. Find the length of string 1 & 2"."<br />";
	$length1=strlen($stringOne);
	$length2=strlen($stringTwo);
	echo "length of string 1 is $length1 and length of string 2 is $length2"."<br />"; 
}//end of string length


//15. Create file & write string 1 to that file using PHP functions.
function fileWrite($catch) 
{
	echo"<br />";
	echo"15. Create file & write string 1 to that file using PHP functions.";
	echo"<br />";
	echo"redirect to output.txt"."<br />";
	$file=fopen("output.txt","w");
	fwrite($file, $catch);
	//$fclose($file);
	//echo"$$$$$$$$$$$$$$$$";	
}


	
function headerInfo() {
	echo"<br />";
	echo "17. Usage and examples of Header (PHP)"."<br />"; 
	echo"Usage"."<br />"; 
	echo"1)PHP is not limited to outputting html. PHP can output images, pdf, javascript files, etc."."<br />"; 
	echo "2)Browsers determine what type of content is by analyzing the headers sent"."<br />";


	// Date in the past
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
	header("Cache-Control: no-cache");
	header("Pragma: no-cache");

	//to download pdf
	header("Content-type:application/pdf");
	// It will be called downloaded.pdf
	header("Content-Disposition:attachment;filename='downloaded.pdf'");// The PDF source is in original.pdf
	readfile("original.pdf");

	//to download jpg
	header("Content-type:image/jpg");
	header("Content-Disposition:attachment;filename='downloaded.jpg'");// The PDF source is in original.jpg
	readfile("original.jpg");
}


//18. Redirect page 1 to page 2.

function redirection() {
	echo "<br />";
	echo "18. Redirect page 1 to page 2."."<br />"; 
	echo "header('Location: /info.php')";
	echo"To know how it works then load page sample.php which redirects to info.php";
	echo "<br />";
}
	

	
//19. Compare two dates. (12-4-2010 & 12-5-2011). Calculate the days between these two dates. 
function CompareDates() 
{
echo"<br />";
echo"19. Compare two dates. (12-4-2010 & 12-5-2011). Calculate the days between these two dates."."<br />";
$date1 = new DateTime("2010-04-12");
$date2 = new DateTime("2011-05-12");
$interval = $date1->diff($date2);
echo "difference " . $interval->y . " years, " . $interval->m." months, ".$interval->d." days "; 
echo "<br />";
}

//20. Print date after 20 days from current date
function afterTwenty() 
{
echo"<br />";
echo "20. Print date after 20 days from current date";
$afterTwentyDays = mktime(0,0,0,date("m")+1,date("d")+8,date("Y"));
echo "After 20  days date is  ".date("Y/m/d", $afterTwentyDays);
echo "<br />";
}



//21. Print date in array format.
function dateInArray()
	 {	
	echo"<br />";
	echo "21. Print date in array format."."<br>";
	$today = getdate();
	print_r($today);
	echo "<br />";
	}

function occ ($stringOne) 
	{
	echo "1. Find occurance of PHP from string 1."."<br />";
	$occ=substr_count($stringOne,"PHP");
	echo"$occ"."<br>";
	}

 function findPhp($string)
	{
		echo"<br />";
		echo"2. Find the position where PHP occures in the string 1.";
		echo"<br />";

    	$array = array();
    	$i=0;
    	$sum =0 ;
    	$arr = explode("PHP",$string);
    	foreach($arr as $item)
    	{
         $pos = strlen($item);
         $array[$i] = ($pos);
         $i = $i+1;
         $sum = $sum + $pos;
    	}
    foreach($array as $item)
    {
      echo $item."  ";
    }
    
}
?>