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
            <label for="province">Province</label>
            <select class="form-control" id="province" name="province">
                <option value="">--- Select Your Province ---</option>
                <option value="Ontario">Ontario</option>
                <option value="Quebec">Quebec</option>
                <option value="Nova Scotia">Nova Scotia3</option>
            </select>
        </div>
        <fieldset class="form-group">
            <legend>Radio buttons</legend>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1">
                    Option one is this and that—be sure to include why it's great
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                    Option two can be something else and selecting it will deselect option one
                </label>
            </div>
            <div class="form-check disabled">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                    Option three is disabled
                </label>
            </div>
        </fieldset>
        <fieldset class="form-group">
            <legend>Checkbox</legend>
            <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" id="checkboxSuccess" name="checkbox[]" value="Checkbox with success">
                Checkbox with success
            </label>
            </div>
            <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" id="checkboxWarning" name="checkbox[]" value="Checkbox with warning">
                Checkbox with warning
            </label>
            </div>
            <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" id="checkboxDanger" name="checkbox[]" value="Checkbox with danger">
                Checkbox with danger
            </label>
            </div>
        </fieldset>
        <div class="form-group">	
            <label for="message">Message</label>
            <textarea id="message" class="form-control" name="message" rows="3" cols="3"></textarea>
        </div>

        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
  </body>
</html>