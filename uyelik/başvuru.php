<?php

include("baglanti.php");

if(isset($_POST["kaydet"]))
{
    $ad=$_POST["ad"];
    $soyad=$_POST["soyad"];
    $fakulte=$_POST["fakulte"];
    $bolum=$_POST["bolum"];
    $sinif=$_POST["sinif"];
    $anaadi=$_POST["anaadi"];
    $babaadi=$_POST["babaadi"];

    $ekle="INSERT INTO kullanicilar (adi,soy_ad,fakulte,bolum,sinif,ana_adi,baba_adi) VALUES ('$ad','$soyad','$fakulte','$bolum','$sinif','$anaadi','$babaadi')";
    $calistirekle=mysqli_query($baglanti,$ekle);

    if ($calistirekle){
        echo "<script>alert('Başvurunuz Tamamlandı')</script>";
    }
    else{
        echo "<script>alert('Başvurunuz Tamamlanmadı')</script>";
    }

    mysqli_close($baglanti);
}

?>
<!doctype html>
<html>
    
    
    <head>
        <title>burs başvurusu</title>
        <link rel="stylesheet" href="style-2.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />s
        <style>
            
            .box{
                width: 53%; 
                margin: 0 auto; 
                height: 70%;
                
                
                background-size: 100%;
                background-repeat: no-repeat;
               
                padding: 15%;
                overflow: hidden;
                background: #1c1c1c;
	            border-radius: 8px;
	
                padding-top: 50%;
                position: relative;}
                            
	            
	
	            

                
            
            
            
            button{
                border: none;
	            outline: none;
	            padding: 20px 20px;
                padding-left: 60px;
                padding-bottom: 35px;
	            background: #45f3ff;
	            cursor: pointer;
	            border-radius: 4px;
	            font-weight: 600;
                float: right;
                width: 26%;
                height: 13%;
                border-radius: 7px;
                font-size: 100%;
                margin: 10px 0;
	            font-size: 0.75em;
	            color: black;
	            text-decoration: beige;
            }
   

            button:hover {
                background-color: #45f3ff;
                color: whitesmoke;
                border-radius: 7px;
               
            }
            
            
            
           

        </style>
       
    </head>
    <body>
        

        
            <div class="box">
                <form autocomplete="off" action="başvuru.php" method="POST">
                    <h2>Başvuru Yap</h2>
                    
                    
                    <div class="inputBox">
                        <input type="text" required="required" name="ad">
                        <span>Adınız</span>
                        <i></i>
                    </div>
                    
                    <div class="inputBox">
                        <input type="text" required="required" name="soyad">
                        <span>Soy Adınız</span>
                        <i></i>
                    </div>
                    
                    <div class="inputBox">
                        <input type="text" required="required" name="fakulte">
                        <span>Fakülte</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="text" required="required" name="bolum">
                        <span>Bölüm</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="text" required="required" name="sinif">
                        <span>Sınıf</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="text" required="required" name="anaadi">
                        <span>Ana Adı</span>
                        <i></i>
                    </div>
                    <div class="inputBox">
                        <input type="text" required="required" name="babaadi">
                        <span>Baba Adı</span>
                        <i></i>
                    
                    </div>
                    <br>
                    <br>
                    <br>
                    <div >
                        <button name="kaydet"> <h3>Kaydet</h3>
                     </button>
                        
                    </div>
                    </form>
            </div>
        
    </body>
