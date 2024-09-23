<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechLinx Overview</title>
    <?php include('header.php'); ?>
     <style>
        .thank-you {
            text-align: center;
            padding: 50px;
        }
        .thank-you h1 {
            font-size: 3em;
            margin-bottom: 20px;
        }
        .thank-you p {
            font-size: 1.2em;
        }
        .thank-you .btn {
            margin-top: 20px;
        }
      
        .contextThankyou{
            position:relative;
            top:180px;
        }
    </style>
</head>

<body>
    <?php include('menu.php'); ?>
       <section class="thankyoubg solCard3" style="height:100vh">
            <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 thank-you">
               <div class="contextThankyou">
                    <h2 class="secondaryHeading">Thank You!</h2>
                <p>Your form has been successfully submitted. We will get back to you shortly.</p>
                <a href="index.php" class="btn btnGRa px-4 py-1 text-white rounded-pill">Go Back to Home</a>
               </div>
            </div>
        </div>
    </div>
       </section>
    <?php include('footer.php'); ?>
</body>

</html>