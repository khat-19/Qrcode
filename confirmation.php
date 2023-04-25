<!DOCTYPE html>
<html>
  <head>
    <title>Confirmation Page</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
  </head>

  <body>
    <h1>Confirmation Page</h1>
    <h2>Kindly please check the below data and sublit after verification.</h2>
    <p>Name: <?php echo $_POST["name"]; ?></p>
    <p>Email: <?php echo $_POST["email"]; ?></p>
    <p>Message: <?php echo $_POST["message"]; ?></p>

    <div id="qrcode-container"></div>
    <canvas id="qrcode-canvas"></canvas>
    <p>The current timestamp is: <span id="timestamp"></span></p>
    <button type="submit">Submit</button>
    <button id="download-btn">Download PDF</button>




<script>
//QR CODE SCANNER
  // Get the data from the form
  var name = "<?php echo htmlspecialchars($_POST['name']); ?>";
  var email = "<?php echo htmlspecialchars($_POST['email']); ?>";
  var message = "<?php echo htmlspecialchars($_POST['message']); ?>";
  var data = name + '\n' + email + '\n' + message;

  // Generate the QR code
  var qr = new QRious({
    element: document.getElementById('qrcode-canvas'),
    value: data,
    size: 200
  });

  // Add a label for the QR code
  var container = document.getElementById('qrcode-container');
  var label = document.createElement('p');
  label.innerHTML = 'Scan this QR code to view the data:';
  container.insertBefore(label, document.getElementById('qrcode-canvas'));


  
 

</script>
  </body>
</html>
