<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="/assets/admin/login/purple_login/images/icon_logo.png">
    <link rel="stylesheet" href="style.css">
        <title class=" tengah ">
        Isekai Klinik
        </title>
    
        </head>
<body>
    <div style="border: thin solid; width: 400px; margin: 20px auto">
        <center>
            <img src="/assets/admin/login/purple_login/images/klinik_logo.png" alt="" style="width: 200px; height: 150px">
            <h1>Isekai Klinik</h1>
            <h2>Poli .......</h2>
        </center>
     
        
     
        <div class="" style="border: thin solid; width : 300px; height : 100px; padding: 5px; margin: 20px auto">
            <center>
                <h3>"Nomor Antrian"</h3>
                <H6>"Nama"</H6>
            </center>
        </div>
        
        <div class="" style=" width : 300px; padding: 5px; margin: 20px auto">
            <p><center><span id="tanggalwaktu"></span></center></p>
            <script>
            var dt = new Date();
            document.getElementById("tanggalwaktu").innerHTML = dt.toLocaleString();
            </script>
        
        </div>  
    </div>


 
	<script>
		window.print();
	</script>
	
</body>
</html>