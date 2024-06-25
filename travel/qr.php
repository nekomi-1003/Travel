<!DOCTYPE html>
<html>
<head>
    <title>QR Code</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <h1>Welcome to SiargaoEscape</h1>
        <img id="qr-code-image" alt="QR code">
        <br><br>
        <button onclick="redirectToHome()" style="background-color: #ff7d27;">Done</button>
    </center>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <script>
        const urlParams = new URLSearchParams(window.location.search);
        const qrData = urlParams.get('qrdata');

        const options = {
            value: qrData,
            size: 300,
            level: 'H'
        };

        const qrCode = new QRious(options);
        const qrCodeImage = qrCode.toDataURL();

        document.getElementById('qr-code-image').src = qrCodeImage;

        function redirectToHome() {
            window.location.href = "home-two.php";
        }
    </script>
</body>
</html>
