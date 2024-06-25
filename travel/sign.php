<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <h1>Sign Up</h1>
        <form onsubmit="generateQRCode(event)">
            <input type="text" id="user" name="name" placeholder="Name" required/><br><br>
            <input type="text" id="newUser" name="newUsername" placeholder="Email" required/><br><br>
            <input type="password" id="newPass" name="password" placeholder="Password" required/><br><br>
            <input type="password" id="conPas" name="conPassword" placeholder="Confirm Password" required/><br><br>

            <button type="submit" id="newBtn" name="signup">Sign Up</button>
        </form>
        <p style="font-size:14px; color:rgb(61 44 19);">Already a member? <a href="login.php">Login</a></p>
    </center>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <script>
        function generateQRCode(event) {
            event.preventDefault(); // Prevent form submission

            const name = document.getElementById('user').value;
            const email = document.getElementById('newUser').value;
            const con = document.getElementById('conPas').value;

            const qrData = `Name: ${name}\nEmail: ${email}\nPassword: ${con}`;

            const options = {
                value: qrData,
                size: 300,
                level: 'H'
            };

            const qrCode = new QRious(options);
            const qrCodeImage = qrCode.toDataURL();

            // Redirect to qr.php with the QR code value as a URL parameter
            window.location.href = `qr.php?qrdata=${encodeURIComponent(qrData)}`;

            // Insert data into the database
            insertData(name, email, con);
        }

        function insertData(name, email, pass) {
            const xhr = new XMLHttpRequest();
            const url = 'insert2.php';
            const params = `name=${name}&email=${email}&pass=${pass}`; // Fix parameter name
            xhr.open('POST', url, true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function () {
                if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
                    console.log('Data inserted successfully');
                }
            };
            xhr.send(params);
        }
    </script>
</body>
</html>
