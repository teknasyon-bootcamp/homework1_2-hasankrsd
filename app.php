<?php
//Bu alan hesaplamanın yapılması istenilen verilerin girildiği alan.
$gender = "male"; // cinsiyet (male/female)
$weight = 55; // kilo (kg)
$height = 170; // boy (cm)
$age = 25; // yaş (sene)

$guess = "1470"; // Tahmin edilen değer
//Burada cinsiyete göre değişen BMR hesaplamasının yapıldığı yer.
if ($gender=="male") {
    $bmr=88.362+(13.397*$weight)+(4.799*$height)-(5.677*$age);
}
else if ($gender=="female") {
    $bmr=447.593+(9.247*$weight)+(3.098*$height)-(4.330*$age);
}
//Bu bölüm yukarda çıkan BMR sonucunun yazdırıldığı alan.
echo "BMR: ".$bmr."<br>";
//Burada da çıkan BMR değeri ve tahmin değeri karşılaştırılıp bu karşılaşma sonucunda 'büyüktür', 'küçüktür' veya 'eşittir' olarak sonuçlanıp yazdırıldığı alan.
 if ($guess>$bmr) {
echo "Tahmin değerinden küçüktür.";
 }
elseif($guess==$bmr){
echo "Tahmin değerine eşittir.";
}
elseif($guess<$bmr){
echo "Tahmin değerinden büyüktür";
}
