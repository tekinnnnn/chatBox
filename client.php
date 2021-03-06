<html>
<head>
    <meta charset="UTF-8">
    <title>Admin Tarafı</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/tekin.css" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/tekin.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            collapse();
            yeniMesajlariGetir();

            setInterval(function () {
                yeniMesajlariGetir();
            }, 10000); //10 seconds
        });
    </script>

</head>
<body>
<div class="container">
    <div class="col-md-24">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Birşeyler Birşeyler..</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#" onclick="collapse();">Help Desk</a></li>
                        <li><a href="index.php">Kullanıcı Tarafı</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
</div>

<div class="panel panel-info helpDesk">
    <div class="panel-heading">
        <h3 class="panel-title">HelpDesk <a href="#" onclick="collapse();"><span id="collapse"
                                                                                 class="pull-right glyphicon glyphicon-collapse-up glyphicon-collapse-down"></span></a>
        </h3>
    </div>
    <div id="helpContent">
        <div class="panel-body" style="overflow-y: auto; max-height: 400px">
            <div class="col-md-24">
                <div class="row" id="messageBox">
                    <!--
                    <div class="alert alert-info" role="alert">asd asd</div>
                    <div class="alert alert-warning" role="alert">...</div>
                    !-->
                    <img id="preloader" src="assets/img/chasing-arrows-64.gif" class="center-block" width="32px">
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="input-group">
                <form id="form" method="post" onsubmit="return false;">
                    <input type="hidden" id="user" name="user" value="admin">
                    <input type="hidden" id="msgCount" name="msgCount" value="0">
                    <input id="msg" name="msg" type="text" class="form-control" placeholder="Mesaj girin...">
                </form>
            <span class="input-group-btn">
                <button id="gonder" class="btn btn-default" type="button" onclick="MesajGonder()">Gönder</button>
            </span>
            </div>
            <!-- /input-group -->
        </div>
        <!--    </div>-->
    </div>
</body>
</html>