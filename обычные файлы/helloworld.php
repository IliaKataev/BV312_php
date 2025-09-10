<?php

$input = "20.01.1994";

[$day, $month, $year] = explode(".", $input);

$daymonth = sprintf("%02d.%02d", $day, $month);

echo $daymonth;

$zodiacIntervals = [
    'Водолей' => ['21.01', '19.02'],
    'Рыбы' => ['20.02', '20.03'],
    'Овен' => ['21.03', '20.04'],
    'Телец' => ['21.04', '21.05'],
    'Близнецы' => ['22.05', '21.06'],
    'Рак' => ['22.06', '22.07'],
    'Лев' => ['23.07', '21.08'],
    'Дева' => ['22.08', '23.09'],
    'Весы' => ['24.09', '23.10'],
    'Скорпион' => ['24.10', '22.11'],
    'Стрелец' => ['23.11', '22.12'],
    'Козерог' => ['23.12', '20.01'],
];

function toInt(string $ddmm): int {
    [$dd, $mm] = explode('.', $ddmm);
    return (int)($mm * 100 + $dd);
}

$zodiac = toInt($daymonth);

foreach ($zodiacIntervals as $sign => [$start, $end]) 
    {  
        $startInt = toInt($start);
        $endInt = toInt($end);

        if($startInt <= $endInt){
            if($zodiac >= $startInt && $zodiac <= $endInt)
                {
                    echo $sign;
                    exit;
                }

        } else {
            if($zodiac >= $startInt || $zodiac <= $endInt)
            {
                echo $sign;
                exit;
            }
        }

    }


?>
