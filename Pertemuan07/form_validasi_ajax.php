<!DOCTYPE html>
<html>
<head>
    <title>Form Validasi dengan AJAX</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
    <h1>Form Validasi dengan AJAX</h1>
    <form id="myForm" method="post" action="proses_validasi.php">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>
        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        
        <input type="submit" value="Submit">
    </form>
    
    <div id="hasil" style="margin-top: 20px; font-weight: bold;"></div>
    
    <script>
    $(document).ready(function() {
        $("#myForm").submit(function(event) {
            event.preventDefault(); 
            
            var nama = $("#nama").val();
            var email = $("#email").val();
            var valid = true;
            
            // 1. Validasi Client-side
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi");
                valid = false;
            } else {
                $("#nama-error").text("");
            }
            
            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else {
                $("#email-error").text("");
            }
            
            if (valid) {
                var formData = $(this).serialize();
                
                $.ajax({
                    url: "proses_validasi.php", 
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        $("#hasil").html(response);
                    }
                });
            }
        });
    });
    </script>
</body>
</html>