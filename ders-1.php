<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Web Teknolojilerive ve Programlama </title>
</head>
<body>
    <!-- Açııklama Satırı  -->
    <?php

    // Açıklama Satırı
    /* Açıklama Satırı Bloğu
    shift+alt+a
    echo ekrana yazdırma işlemi yapar. İçersinde  html etiketleri kullanılabilir  
    echo içine html etiketleri yazılabilir
    çift veya tek tırnak ile kullanılabilir
    Çift tırnak içerisinde değişken içerikleri gösterilir.
    Nokta işareti ile birleştirme yapılabilir
    \ Kaçış karakteridir. Özel ifadelerden önce kullanılır.


    */ 
    echo " <h3> Aydın Adnan Menderes Üniversitesi </h3> " ;
    echo " <h4> Meslek Yüksek Okulu </h4> " ;
    echo "Bilgisayar Progrmcılığı" . " Web Teknolojileri"  . "<br>" ;
    echo "Bilgisayar Progrmcılığı" . " <br> " .  "Web Teknolojileri" ; 


    echo "<hr> <h4> Değişken Tanımlama Kuralları </h4> " ;
    echo "<ol>
            <li> Değişken İsimleri $ ile başlar. </li>
            <li> Değişken isimleri sayısal bir ifadeyle başlayamaz. </li>
            <li> Değişken isimlerinde boşluk kullanılmaz. İki kelime varsa
            birinci_sinif birinciSinif birinci-sinif örneklerindeki kullanımlar önerilir. </li>    
            <li> Değişken ve dosya isimlerinde Türkçe karakter kullanılmamalıdır. </li>
            <li> Değişken isimlerinde büyük-küçük harf kullanımına duyarlıdır. \$sayi ! = \$Sayi  </li>
            <li> Değişken içerinde eğer metinsel ifade varsa çift tırnak (\") veya tejk tırnak (') kullanılır </li>
            <li> Değişken içerisinde eğer sayısal bir ifade varsa tırnak kullanılmadan yazılır. </li>
            <li> Değişken ismi değişkenin içeriğini ifade etmeli </li>
            <li> Değişkenler ekrana echo komutu ile yazdırılır </li>
        
    
    
    </ol>" ;

    echo "<hr> <h4> Değişken Tanımlama Örnekleri </h4> " ;
    $isim = "Ahmet" ;
    $soyisim = "Davut" ;
    $yas = 34 ;

    echo $isim . " ".  $soyisim ;
    echo "<br>" ;
    echo "$isim $soyisim " ;

    /* Uygulama : 
    Üniversite - myo - Ad - soyad - Numara değişkenlerini oluşturup içeriğini uygun şekilde doldurunuz.
    Girilen bu değişkenlerin değerlerini bir html tablo içerisinde gösteriniz.
    */
 
    $uni = "Adu" ; 
    $myo = "AYMES" ;
    $ad = "Nurullah" ;
    $soyad = "Akdeniz" ;
    $no = 216001022 ;
 
    ?>
    <form action="">
        <label for="uni"> Üniversite </label>   
        <input type="text" name="" disable value = "<?php echo $uni ; ?> "id="uni" > <br>
        <label for="uni"> MYO </label>
        <input type="text" name="" disable value = "<?php echo $myo ; ?> "id="myo" > <br>
        <label for="uni"> Ad </label>
        <input type="text" name="" disable value = "<?php echo $ad ; ?> "id="ad" > <br>
        <label for="uni"> Soyad </label>
        <input type="text" name="" disable value = "<?php echo $soyad ; ?> "id="soyad" >  <br>
        <label for="uni"> No </label>
        <input type="text" name="" disable value = "<?php echo $no ; ?> "id="no" > <br>
    



    </form>





    
</body>
</html>