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
            
            
            
           

        </style>
       
    </head>
    <body>
        

        
            <div class="box">
                <form autocomplete="off" action="kayitol.php" method="POST">
                    <h2>Giriş Yap</h2>
                    <div class="inputBox">
                        <input type="text" required="required" name="kullanici_adi">
                        <span>Kullanıcı Adı</span>
                        <i></i>
                    </div>
                    
                    <div class="inputBox">
                        <input type="email" required="required" name="email">
                        <span><e-mail>e-mail</e-mail></span>
                        <i></i>
                    </div>
                    
                    <div class="inputBox">
                        <input type="password" required="required" name="sifre">
                        <span>şifre</span>
                        <i></i>
                    </div>
                    
                    
                    <br>
                    <br>
                    <br>
                    <div >
                    <button name="kaydett" type="submit" class="giris"><h3>Giriş Yap</h3></button>
                    <button name="kaydett" type="submit" class="kayit"> <h3>Kaydet</h3>
                     </button>
                        
                    </div>
                    
                    </form>
            </div>
        
    </body>
