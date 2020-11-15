$(document).ready(function(){
    $("div.alert").delay(800).slideUp();
});

$(document).ready(function(){
    $('.title').click(function(){
        $('.chat').hide();
    });
    $('.chatsub').click(function(){
        $('.chat').show();
    });
});

