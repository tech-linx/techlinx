<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CSS -->
    <?php include('header.php'); ?>
    <title>Product Column</title>
</head>
<body>
<div class="container my-5">
    <div class="row">
        <!-- Product Column -->
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
            <div class="card">
                <img src="product-image.jpg" class="card-img-top" alt="Product Image">
                <div class="card-body">
                    <h5 class="card-title">Product Title</h5>
                    <p class="card-text">Product Description</p>
                    <!-- Button to Share via Email -->
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#userDetailsModal">Share Product Details to Vendor via Email</button>
                    <!-- Button to Share via WhatsApp -->
                    <button class="btn btn-success mt-2" data-bs-toggle="modal" data-bs-target="#whatsappDetailsModal">Share Product Details on WhatsApp</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Form Modal for Email -->
<div class="modal fade" id="userDetailsModal" tabindex="-1" aria-labelledby="userDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="userDetailsModalLabel">User Details for Email</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="userDetailsForm">
          <div class="mb-3">
            <label for="userName" class="form-label">Name</label>
            <input type="text" class="form-control" id="userName" required>
          </div>
          <div class="mb-3">
            <label for="userEmail" class="form-label">Email</label>
            <input type="email" class="form-control" id="userEmail" required>
          </div>
          <div class="mb-3">
            <label for="userMobile" class="form-label">Mobile Number</label>
            <input type="tel" class="form-control" id="userMobile" required>
          </div>
          <button type="button" class="btn btn-primary" onclick="sendEmail()">Send Email</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Form Modal for WhatsApp -->
<div class="modal fade" id="whatsappDetailsModal" tabindex="-1" aria-labelledby="whatsappDetailsModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="whatsappDetailsModalLabel">User Details for WhatsApp</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="whatsappDetailsForm">
          <div class="mb-3">
            <label for="waUserName" class="form-label">Name</label>
            <input type="text" class="form-control" id="waUserName" required>
          </div>
          <div class="mb-3">
            <label for="waUserMobile" class="form-label">Mobile Number</label>
            <input type="tel" class="form-control" id="waUserMobile" required>
          </div>
          <button type="button" class="btn btn-success" onclick="shareToWhatsApp()">Share on WhatsApp</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap 5 JS and Popper.js -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script>
// Function to send email
function sendEmail() {
    var userName = document.getElementById('userName').value;
    var userEmail = document.getElementById('userEmail').value;
    var userMobile = document.getElementById('userMobile').value;

    var productTitle = document.querySelector('.card-title').textContent;
    var productDescription = document.querySelector('.card-text').textContent;
    var productImage = document.querySelector('.card-img-top').src;

    // Prepare email data
    var emailData = {
        userName: userName,
        userEmail: userEmail,
        userMobile: userMobile,
        productTitle: productTitle,
        productDescription: productDescription,
        productImage: productImage
    };

    // Send email request to the server
    fetch('productMail.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(emailData)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Email sent successfully!');
            var modal = new bootstrap.Modal(document.getElementById('userDetailsModal'));
            modal.hide();
        } else {
            alert('Failed to send email.');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while sending the email.');
    });
}

// Function to share product details on WhatsApp
function shareToWhatsApp() {
    var waUserName = document.getElementById('waUserName').value;
    var waUserMobile = document.getElementById('waUserMobile').value;

    var productTitle = document.querySelector('.card-title').textContent;
    var productDescription = document.querySelector('.card-text').textContent;
    var productImage = document.querySelector('.card-img-top').src;

    var whatsappMessage = `Check out this product:\n\n*${productTitle}*\n${productDescription}\n\nShared by: ${waUserName}\nMobile: ${waUserMobile}\nImage: ${productImage}`;

    // Set the recipient's phone number here
    var recipientNumber = '7995737480'; // Replace with the actual phone number

    var whatsappUrl = `https://wa.me/${recipientNumber}?text=${encodeURIComponent(whatsappMessage)}`;

    window.open(whatsappUrl, '_blank');
}

</script>
</body>
</html>
