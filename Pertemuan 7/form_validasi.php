<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dengan Validasi</title>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form action="proses_validasi.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <br>
        
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi</h1>
    <form id="myForm"> 
    <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <span id="nama-error" style="color:red;"></span>
        <br>
        
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <span id="email-error" style="color:red;"></span>
        <br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span>
        <br>
        
        <input type="submit" value="Submit">
    </form>

    <div id="hasil">
        <!--Hasil akan ditampilkan di sini-->
    </div>

    <script>
        $(document).ready(function(){
            $("#myForm").submit(function(event){
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                if(nama === ""){
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else{
                    $("#nama-error").text("");
                }

                if(email === ""){
                    $("#email-error").text("Email harus diisi. ");
                    valid = false;
                } else{
                    $("#email-error").text("");
                }

                if(password === ""){
                    $("#password-error").text("Password harus diisi. ");
                    valid = false;
                } else{
                    if (password.length < 8) {
                        $("#password-error").text("Password minimal 8 karakter. ");
                    } else 
                    {
                        $("#password-error").text("");
                    }
                }

                
                event.preventDefault();
                

                var formData = $("#myForm").serialize();

                $.ajax({
                    url: "proses_validasi.php",
                    type: "POST",
                    data: formData,
                    success: function (response){
                        $("#hasil").html(response);
                    }
                })

            })
        })
    </script>
</body>
</html>