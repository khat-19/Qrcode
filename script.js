 
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
 

  var timestampElement = document.getElementById('timestamp');
  var timestamp = Date.now();
  timestampElement.innerHTML = timestamp;



 


 
  // Get the data from the form
  var name = "<?php echo htmlspecialchars($_POST['name']); ?>";
  var email = "<?php echo htmlspecialchars($_POST['email']); ?>";
  var message = "<?php echo htmlspecialchars($_POST['message']); ?>";
  var data = name + '\n' + email + '\n' + message;

  // Generate the QR code
  var qrCodeCanvas = document.getElementById('qrcode-canvas');
  var qrCode = new QRCode(qrCodeCanvas, {
    text: data,
    width: 100,
    height: 100
  });

  // Create the PDF
  var pdf = new jsPDF();
  pdf.text(data, 10, 10);

  // Add the QR code to the PDF
  var qrCodeImageData = qrCodeCanvas.toDataURL('image/jpeg', 1.0);
  pdf.addImage(qrCodeImageData, 'JPEG', 10, 50, 50, 50);

  // Download the PDF when the button is clicked
  var downloadBtn = document.getElementById('download-btn');
  downloadBtn.addEventListener('click', function() {
    pdf.save('confirmation.pdf');
  });
 
