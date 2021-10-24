<!DOCTYPE html>
<html>

<head>
<!-- Include Bootstrap for styling -->
<link rel="stylesheet" href=
"https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

<style>
	.qr-code {
	max-width: 200px;
	margin: 10px;
	}
</style>

<title>QR Code Generator</title>
</head>

<body>
    <h1>Confirmation de participation </h1>
    <h3>Veuillez répondre à la question suivante : </h3>
    <p>Comptez-vous vous rendre à la fête à telle date ? </p>
    <input type="radio" id="yes" name="answer1" value="yes">
    <label for="html">Oui</label><br>
    <input type="radio" id="no" name="answer2" value="no">
    <label for="css">Non</label><br>

    <p id="denied" style="display:none;">Merci de votre réponse ! Si vous voulez modifier votre réponse, il vous suffit
        de rafrachir la page
    </p>

    <h2 id="accepted" style="display:none;">Veuillez rentrer les informations suivantes :</h2>

    <div class="container-fluid">


	<div class="form-horizontal" style="display:none;">
	<div class="form-group">
		<label class="control-label col-sm-2"for="content">A remplir :</label>
    <div class="col-sm-10">

		<!-- Input box to enter the required data -->
		<input type="text" size="60"
			maxlength="60" class="form-control"
			id="content1" placeholder="Entrer le prénom" />

            <input type="text" size="60"
			maxlength="60" class="form-control"
			id="content2" placeholder="Entrer le nom" />
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">

		<!-- Button to generate QR Code forthe entered data -->
		<button type="button" class="btn btn-default" id="generate" >
			Generate
		</button>
		</div>
	</div>
    <h4 id="title1" style="display:none;">Voici le QR code à présenter le jour de la fête : </h4>

    <div class="text-center">
	<!-- Get a Placeholder image initially, this will change according to the data entered later -->
	<img src="https://chart.googleapis.com/chart?cht=qr&chl=Hello+World&chs=160x160&chld=L|0"
		class="qr-code img-thumbnail img-responsive" style="display:none;" />
	</div>

    <p id="title2" style="display:none;">Veuillez le conserver avec vous, sous forme de screenshot
         ou présentez-le directement ainsi </p>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<script>
    $(document).ready(function() {
        $('input[name=answer2]').click(function(){
          if($(this).is(':checked')){
              $('input[name=answer1]').attr("disabled", true);
              $("#denied").css("display","block");
          }

        });

        $('input[name=answer1]').click(function(){
            if($(this).is(':checked')){
                $('input[name=answer2]').attr("disabled", true);
                $("#accepted").css("display","block");
                $(".form-horizontal").css("display","block");
                //$('.qr-code').css("display","block");
            }
        });
      });

	// Function to HTML encode the text
	// This creates a new hidden element,
	// inserts the given text into it
	// and outputs it out as HTML
	function htmlEncode(value) {
	return $('<div/>').text(value)
		.html();
	}

	$(function () {

	// Specify an onclick function
	// for the generate button
    $('#generate').click(function () {

		// Generate the link that would be
		// used to generate the QR Code
		// with the given data
		let finalURL ='https://chart.googleapis.com/chart?cht=qr&chl=' +
        htmlEncode($('#content1').val()) + " " +htmlEncode($('#content2').val()) +
        " a accès à l'évènement " +'&chs=160x160&chld=L|0'

		// Replace the src of the image with
		// the QR code image
		$('.qr-code').attr('src', finalURL);
        $('.qr-code').css("display","block");

        $("#title1").css("display","block");
        $("#title2").css("display","block");
	});
});

</script>
</body>

</html>
