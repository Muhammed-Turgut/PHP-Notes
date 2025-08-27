<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
   <h3>Form Uygulamam</h3>
   <hr/>

   <form action="sonuc.php" method="post" enctype="multipart/form-data">  <!-- Burdaki enctype eklenmese dosya aktarılamaz -->
    
   <input type="file" name="dosya"/>
   <input type="submit" name="Gonder" value="YUKLE"/>

   </form>
    </center>
</body>
</html>