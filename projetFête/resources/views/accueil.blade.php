<!DOCTYPE html>
<html>
    <head>
        <title>Testing QR code</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript">
            function generateBarCode()
            {
                var nric = $('#text').val();
                var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=50x50';
                $('#barcode').attr('src', url);
            }
        </script>
    </head>
    <body>
        <input id="text" type="text"
            value="NRIC or Work Permit" style="Width:20%"
            onblur='generateBarCode();' />

      <img id='barcode'
            src="https://api.qrserver.com/v1/create-qr-code/?data=HelloWorld&amp;size=100x100"
            alt=""
            title="HELLO"
            width="50"
            height="50" />
    </body>
</html>
