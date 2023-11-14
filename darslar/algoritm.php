<?php
//
//$yozuv = file_get_contents('otkan_kunlar.txt');
//// yoki
//$qiymatlar = explode("\r\n", $yozuv); // Windows sistemalarida
//$qiymatlar = array_map('strtolower', $qiymatlar);
//foreach ($qiymatlar as &$qiymatSatr) {
//
//    $qiymatSatr = explode(" ", $qiymatSatr);
////    $newQiymatSatr = str_replace('.', ' ', $qiymatSatr);
//}
//
//$status = array_count_values($qiymatSatr);
//?>
<!--<table>-->
<!--    <tr>-->
<!--        <td>--><?php //echo count($status)?><!--</td>-->
<!--    </tr>-->
<!--    --><?php
//    foreach ($status as $key => $value){
//        ?>
<!--        <tr>-->
<!--            <td>--><?php //echo $key?><!--</td>-->
<!--            <td>--><?php //echo $value?><!--</td>-->
<!--        </tr>-->
<!--        --><?php
//    }
//    ?>
<!--</table>-->

<?php
//$poytaxt = ["Toshkent", 3, 54, 6, 3, 2, "Samarqand", "Buxoro", "Xiva", "Qo'qon", "Andijon", "Namangan", "Farg'ona", "Navoiy", "Jizzax", "Sirdaryo", "Surxondaryo", "Qashqadaryo", "Xorazm", "Toshkent shahri;
//"];
//array_push($poytaxt, "Qarshi");
//array_splice($poytaxt, 1, 0, "Qo'qon");
//sort($poytaxt);
//for ($i = 0; $i < count($poytaxt); $i++){
//    echo $poytaxt[$i]."<br>";
//}
//$array = [7,6,5,4,3,2,1];
//
//array_push($array,2);
//$array1 = array_count_values($array);
//$i = 0;
////print_r($array1);
//foreach ($array1 as $key => $value){
//    if ($array1[$key] == '2'){
//       echo $array1[$value];
//    }
//    else{
//        echo " ";
//    }
//}
//1 dan 30 gacha bo'lgan toq sonlarni ko'paytmasini va yig'indisini topuvchi dastur tuzing
//$yigindi = 0;
//$kopaytma = 1;
//for ($i = 1; $i <= 30; $i++){
//    if ($i % 2 != 0){
//        $yigindi += $i;
//        $kopaytma *= $i;
//    }
//}
//echo "Yig'indi: ".$yigindi."<br>";
//echo "Ko'paytma: ".$kopaytma."<br>";
    $array = [8,7,6,5,4,3,2,1];
    $sum = 0;
    print_r($array);
    for ($i = 0; $i < count($array); $i++){
        for ($j = $i+1; $j <count($array);$j++){
            if ($array[$i] > $array[$j]){
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
            $sum += 1;
        }
    }
    print_r($array);
    echo $sum;