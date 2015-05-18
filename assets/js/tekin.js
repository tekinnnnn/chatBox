/**
 * Created by wissen on 18.5.2015.
 */

function collapse() {
    $("#collapse").toggleClass("glyphicon-collapse-up");
    $("#helpContent").toggle("slow");
}


function MesajGonder() {

    var message = $('#msg').val().trim();

    if (message == "") {
        alert("Mesaj boş gönderilemez");
        $('#msg').focus();
    } else {
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "messageBox.php", //Relative or absolute path to response.php file
            data: $("#form").serialize(),
            success: function (send) {
                if (send.return == true) {
                    yeniMesajlariGetir();
                } else {
                    alert("Mesaj Gönderilemedi");
                }
            }
        });
    }
    $('#msg').val("");

}

function MesajGonder() {

    var message = $('#msg').val().trim();

    if (message == "") {
        alert("Mesaj boş gönderilemez");
        $('#msg').focus();
    } else {
        $.ajax({
            type: "POST",
            dataType: "json",
            url: "messageBox.php", //Relative or absolute path to response.php file
            data: $("#form").serialize(),
            success: function (send) {
                if (send.return == true) {
                    //yeniMesajlariGetir();
                } else {
                    alert("Mesaj Gönderilemedi");
                }
            }
        });
    }
    $('#msg').val("");

}

function yeniMesajlariGetir() {

    $.ajax({
        type: "POST",
        dataType: "json",
        url: "newMessage.php", //Relative or absolute path to response.php file
        data: $("#form").serialize(),
        success: function (newMessage) {

            $('#preloader').hide();
            if (newMessage.return == true) {

                $('#msgCount').val(newMessage.msgCount);

                if (newMessage.newMsgCount > 1) {
                    var i;
                    for (i = 0; i < newMessage.newMsgCount; i++) {
                        var alertClass;
                        if (newMessage.msg[i].sender == "admin") {
                            alertClass = "info";
                        } else {
                            alertClass = "warning";
                        }


                        $("#messageBox").append('<div class="alert alert-'+alertClass+'" role="alert">' + newMessage.msg[i].msg + '<div class="clearfix"></div><div class="pull-right time">'+newMessage.msg[i].datetime+'</div><div class="clearfix"></div> </div>');
                    }
                } else {
                    var alertClass;
                    if (newMessage.msg[0].sender == "admin") {
                        alertClass = "info";
                    } else {
                        alertClass = "warning";
                    }
                    $("#messageBox").append('<div class="alert alert-'+alertClass+'" role="alert">' + newMessage.msg[0].msg + '<div class="clearfix"></div><div class="pull-right time">'+newMessage.msg[0].datetime+'</div><div class="clearfix"></div></div>');
                }
            }
        }
    });
}