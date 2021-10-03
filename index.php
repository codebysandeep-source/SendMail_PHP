<?php include 'sendemail.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Mail</title>
<link rel="stylesheet" href="style.css">
    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
</head>
<body>
        <!--alert messages start-->
        <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="container">
        <div class="row">
            <div class="col-md-8" style="padding-top:100vh;">
            <p>Developed by Sanpage...</p>
            </div>
            <div class="col-md-4 my-5">
                <div class="card">
                    <center class="card-title" style="padding-top: 1.5em;"><h3>Send Mail</h3></center>
                    <div class="card-body">
                        <form action="" method="POST" class="form-control">

                            <label for="from">FROM</label>
                            <input type="text" id="from" name="from" value="sandeepkc510@gmail.com" readonly class="form-control py-2 my-2" >
    
                            <label for="to">TO</label>
                            <input type="email" id="to" name="email" placeholder="Email Address..." class="form-control py-2 my-2" >

                            <label for="name">NAME</label>
                            <input type="text" name="name" placeholder="Name..." class="form-control py-2 my-2" >
                            <label for="message">MESSAGE</label>
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Message..."></textarea>

                            <input type="submit" name="submit" class="btn btn-success my-5 float-right" >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <!--contact section end-->

        <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>
</body>
</html>