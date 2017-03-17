<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>.:: LOGIN ADMIN ::.</title>

        <link href="style/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="style/css/layout.css" type="text/css" rel="stylesheet">
        <script src="style/js/jquery-2.2.3.min.js" type="text/javascript"></script>
        <style>



        </style>
    </head>
    <body class="login-backgound">

        <div class="login-center-login-panel">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h1 class="panel-title">Please Login Here</h1>
                </div>
                <div class="panel-footer">
                    <form name="formLogin" id="formLogin" method="post" role="form" action="">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input name="user" type="text" 
                                   class="username form-control" id="username"/>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input name="pass" type="password"
                                   class="password form-control" id="password"/>
                        </div>
                        <div style="text-align: center">
                            <input class="btn btn-primary" id="button-login" name="button-login" type="button" value="Submit" />
                        </div>
                    </form>
                </div>  <!-- end og leftside-->
            </div>
        </div>  <!-- end of container-->

        <div id="animationLogin">
            <div id="login-layer-black"></div> 
            <div id="loader" ></div>
        </div>

        <div id="response">
            <div id="textresponse">Success</div>
        </div>
    </body>
</html>
<pre>
</pre>
<script>
    var $_GET = <?php echo json_encode($_GET); ?>;

    $('#animationLogin').hide();
    $('#response').hide();

    $('#button-login').click(function () {
        $('#animationLogin').show();
        $.ajax({
            type: 'post',
            url: window.location.href.substr(0, window.location.href.length - $_GET['page'].length) + 'modules/proses.php',
            data: {data: $('#formLogin').serialize(), param: 'login'},
            dataType: 'json',
            success: function (result) {
                $('#animationLogin').hide();
                if (result['status'] === 'true') {
                    $('#response').show("fast", function () {
                        setTimeout(function () {
                            $('#response').hide();
                            window.location = window.location.href.substr(0, window.location.href.length - $_GET['page'].length);
                        }, 3200);
                    });
                } else {
                    $('#response').css("background-color", "Red");
                    $('#textresponse').html('Gagal');
                    $('#response').show("slow", function () {
                        setTimeout(function () {
                            $('#response').hide();
                        }, 3200);
                    });
                    alert("Login gagal");
                }
            }
        });
    });
</script>
