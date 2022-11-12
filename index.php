<?php
function one_digit($num,$arrOfNum){
    return $arrOfNum[$num];
}
function two_digit($num,$arrOfNum){
    if($num < 10) return  one_digit($num,$arrOfNum);
    if($num<=19){
        return $arrOfNum[$num];
    }
    return $arrOfNum[intdiv($num,10)*10]." ".one_digit($num%10,$arrOfNum);

}
function three_digit($num,$arrOfNum){
    if($num < 100) return  two_digit($num,$arrOfNum);
    return $arrOfNum[intdiv($num,100)]." "."hundred"." ".two_digit($num%100,$arrOfNum);
}
function four_digit($num,$arrOfNum){
    if($num < 1000) return  three_digit($num,$arrOfNum);
    return $arrOfNum[intdiv($num,1000)]." "."thousand"." ".three_digit($num%1000,$arrOfNum);
}
function five_digit($num,$arrOfNum){
    if($num < 10000) return  four_digit($num,$arrOfNum);
    return two_digit(intdiv($num,1000),$arrOfNum)." "."thousand"." ".three_digit($num%1000,$arrOfNum);
}
function six_digit($num,$arrOfNum){

    return three_digit(intdiv($num,1000),$arrOfNum)." "."thousand"." ".three_digit($num%1000,$arrOfNum);
}
function translate($num){
    $arrOfNum = [0=>"",1=>'one', 2=>'two', 3=>'three', 4=>'four', 5=>'five', 6=>'six', 7=>'seven', 8=>'eight',
        9=>'nine', 10=>'ten', 11=>'eleven', 12=>'twelve', 13=>'thirteen', 14=>'fourteen',
        15=>'fifteen', 16=>'sixteen', 17=>'seventeen', 18=>'eighteen', 19=>'nineteen',20=>'twenty', 30=>'thirty', 40=>'forty', 50=>'fifty', 60=>'sixty', 70=>'seventy',
            80=>'eighty', 90=>'ninety'];
    switch (strlen((string)$num)){
        case 1:
            return one_digit($num,$arrOfNum);
        case 2:
            return two_digit($num,$arrOfNum);
        case 3:
            return three_digit($num,$arrOfNum);
        case 4:
            return four_digit($num,$arrOfNum);

        case 5:
            return five_digit($num,$arrOfNum);

        case 6:
            return six_digit($num,$arrOfNum);

    }

}
$number = (int)readline("Введите число:");

echo(translate($number));
?>