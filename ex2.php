<?php


$number = readline("Print number: ");

$arr1 = ["1"=> "one", "2" => "two", "3" => "three", "4" => "four", "5" => "five", "6" =>"six",
"7" => "seven", "8" => "eight", "9" => "nine", "10" => "ten", "11" => "eleven",
"12" => "twelve", "13" => "thirteen", "14" => "fourteen", "15" => "fifteen", 
"16" => "sixteen", "17" => "seventeen", "18" => "eighteen", "19" => "nineteen"];

$arr2 = ["2" => "twenty", "3" => "thirty", "4" => "forty", "5" => "fifty", "6" => "sixty",
"7" => "seventy", "8" => "eighty", "9" => "ninety"];

function NumberBetween_10_99($n, $arr1, $arr2) {
    if ((int)$n >= 10 and (int)$n < 20)
        return $arr1[$n];
    elseif ($n[1] == '0')
        return $arr2[$n[0]];
    else
        return $arr2[$n[0]]. " " . $arr1[$n[1]];
}

$index = strlen($number);

while ($index >0) {
    if($index == 7) {
       echo $arr1[$number[0]]. " million ";
    }
    
    elseif ($index== 6 and $number[strlen($number)-$index] != '0') {
        if ($number[strlen($number)-5] == '0' and $number[strlen($number)-4] != '0')
            echo $arr1[$number[strlen($number)-$index]]. " hundred and ". $arr1[$number[strlen($number)-4]]. " thousand ";
        elseif ($number[strlen($number)-5] != '0') {
            $s = $number[strlen($number)-5] . $number[strlen($number)-4];
            echo $arr1[$number[strlen($number)-$index]]. " hundred and ". NumberBetween_10_99($s, $arr1, $arr2). " thousand ";
        }
        else
            echo $arr1[$number[strlen($number)-$index]]. " hundred thousand "; 
    }
    
    elseif ($index == 5 and $number[strlen($number)-$index] != '0' and $number[strlen($number)-6] == '0') {
        $s = $number[strlen($number)-5] . $number[strlen($number)-4];
        echo NumberBetween_10_99($s, $arr1, $arr2). " thousand ";
        
    }
    
    elseif ($index ==4 and (($number[strlen($number)-$index] != '0' and $number[strlen($number)-6] == '0' and $number[strlen($number)-5] == '0') or strlen($number) == 4)) {
        echo $arr1[$number[strlen($number) - 4]]. " thousand ";
    }
    
    elseif ($index == 3 and $number[strlen($number)-$index] != '0') {
        if ($number[strlen($number)-2] == '0' and $number[strlen($number)-1] != '0')
            echo $arr1[$number[strlen($number)-$index]]. " hundred and ". $arr1[$number[strlen($number)-1]];
        elseif ($number[strlen($number)-2] != '0') {
            $s = $number[strlen($number)-2] . $number[strlen($number)-1];
            echo $arr1[$number[strlen($number)-$index]]. " hundred and ". NumberBetween_10_99($s, $arr1, $arr2);
        }
        else
            echo $arr1[$number[strlen($number)-$index]]. " hundred "; 
    }
    
    elseif ($index == 2 and $number[strlen($number)-$index] != '0' and $number[strlen($number)-3] == '0') {
        $s = $number[strlen($number)-2] . $number[strlen($number)-1];
        echo NumberBetween_10_99($s, $arr1, $arr2);
    }
        
    elseif ($index ==1 and (($number[strlen($number)-$index] != '0' and $number[strlen($number)-2] == '0' and $number[strlen($number)-3] == '0') or strlen($number) == 1))  {  
        echo $arr1[$number[strlen($number) - 1]];
    }
    
    $index -=1;

}


?>