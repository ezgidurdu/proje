
<?php

$kullanici_Adi = $_POST["kullanici-adi"] ?? null;
$sifre = $_POST["sifre"] ?? null;

if ($_POST) {

    try {

        $host = "localhost";
        $db_kullanici = "root";
        $db_sifre = "";
        $vt = "basvuru";

        $baglanti = new PDO("mysql:host=$host;dbname=$vt;charset=utf8", $db_kullanici, $db_sifre);

        $sorgu = $baglanti->prepare('SELECT * FROM uye WHERE kullanici_adi = :kullaniciAdi');
        $sorgu->execute(['kullaniciAdi' => $kullanici_Adi]);

        $uye = $sorgu->fetch(PDO::FETCH_ASSOC);

        if ($uye) {
            if ($sifre === $uye['sifre']) {
                 header('Location:başvuru.php');
            } else {
                echo "<script>alert('Giriş Başarısız')</script>";
            }
        } else {
            echo "<script>alert('Kullanıcı Bulunamadı')</script>";
        }
    } catch (PDOException $e) {
        echo "Bağlantı hatası: " . $e->getMessage();
    }
}

?>







<!doctype html>
<html>
    
    
    <head>
        <title>burs başvurusu</title>
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="sweetalert2.all.min.js"></script>
        <style>
            
            .box{
                width: 55%; 
                height: 520px;
                margin: 0 auto;   
                background-size: 100%;
                background-repeat: no-repeat;  
                padding: 15%;
                overflow: hidden;}
                
            
            
            
                button{
                border: none;
	            outline: none;
	            padding: 20px 20px;
                margin: 5px;
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
            .giris{
                margin: 10px;
            }
            a {
                color: black; 
                text-decoration: none;
            }

            a:hover {
                color: whitesmoke !important; 
            }
            
            
           

        </style>
       
    </head>
    <body>
   

        
            <div class="box">
                <form  action="giris.php" method="POST">
                    <h2>Giriş Yap</h2>
                    <div class="inputBox">
                        <input type="text" required="required" name="kullanici-adi"/>
                        <span>Kullanıcı Adı</span>
                        <i></i>
                    </div>
                    
                    <div class="inputBox">
                        <input type="email" required="required" name="email">
                        <span><e-mail>e-mail</e-mail></span>
                        <i></i>
                    </div>
                    
                    <div class="inputBox">
                        <input type="password" required="required" name="sifre"/>
                        <span>şifre</span>
                        <i></i>
                    </div>
                    
                    
                    <br>
                    <br>
                    <br>
                    <div >
                    <button name="giris_yap" type="submit" class="giris"> <a href="başvuru.php"><h3>Giriş Yap</h3></a></button>
                    
                        
                    </div>
                    
                    </form>
            </div>
        
    </body>

