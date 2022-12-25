function number_to_text($number) {
    $ones = array("", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen");
    $tens = array("", "", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety");
    $scales = array("", "thousand", "million", "billion", "trillion", "quadrillion", "quintillion", "sextillion", "septillion", "octillion", "nonillion");

    if ($number == 0) {
        return "zero";
    }

    $result = "";
    $scale_count = 0;

    while ($number > 0) {
        $remainder = $number % 1000;
        $number = floor($number / 1000);

        if ($remainder > 0) {
            $result = number_to_text_three_digits($remainder) . " " . $scales[$scale_count] . " " . $result;
        }
        $scale_count++;
    }

    return $result;
}

function number_to_text_three_digits($number) {
    global $ones, $tens;

    $result = "";
    if ($number >= 100) {
        $result .= $ones[floor($number / 100)] . " hundred";
        $number %= 100;
    }
    if ($number >= 20) {
        $result .= " " . $tens[floor($number / 10)];
        $number %= 10;
    }
    if ($number > 0) {
        $result .= " " . $ones[$number];
    }

    return $result;
}


