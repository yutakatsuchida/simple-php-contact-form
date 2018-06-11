<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Simple Contact Form with PHP</title>
  </head>
  <body>
    <div class="container">
    <h1>Simple Contact Form with PHP</h1>
    <form method="post" action="mail/sendmail.php">
        <div class="form-group">
            <label for="fullname">Full Name</label>
			<input id="fullname" class="form-control" type="text" name="fullname" value="">
		</div>
        <div class="form-group">
            <label for="email">Email</label>
            <input id="email" class="form-control" type="text" name="email" value="">
        </div>
        <div class="form-group">
            <label for="tel">Tel</label>
            <input id="tel" class="form-control" type="text" name="tel" value="">
		</div>
        <div class="form-group">	
            <label for="message">Message</label>
            <textarea id="message" class="form-control" name="message" rows="3" cols="3"></textarea>
        </div>

        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </body>
</html>