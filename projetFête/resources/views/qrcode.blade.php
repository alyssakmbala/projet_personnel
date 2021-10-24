<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire de confirmation</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <script type="text/javascript">
            function generateBarCode()
            {
                var fname = $('#fname').val();
                var lname = $('#lname').val();

                console.log("first name : "+fname);
                console.log("last name : "+lname);

                var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + fname + '&amp;size=50x50';
                $('#barcode').attr('src', url);
                //picture();
            }

            function picture(){
                var pic = "https://api.qrserver.com/v1/create-qr-code/?data=HelloWorld&amp;size=100x100"
                document.getElementById('barcode').src = pic.replace('90x90', '225x225');
                document.getElementById('bigpic').style.display='block';
                }
        </script>
    </head>
    <body>

        <!--<form action="/action_page.php">-->
            <label for="Fname">Prénom:</label><br>
            <input type="text" id="fname" name="fname" value="John" ><br>
            <label for="Lname">Nom:</label><br>
            <!--<input type="text" id="lname" name="lname" value="Doe"><br><br>-->
            <input type="submit" value="Soumettre" onclick:"generateBarCode();">
         <!-- </form>-->

            <img id='barcode'
            src="https://api.qrserver.com/v1/create-qr-code/?data=HelloWorld&amp;size=100x100"
            alt=""
            title="HELLO"
            width="50"
            height="50" />
    </body>
</html>
