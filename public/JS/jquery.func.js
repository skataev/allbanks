$(document).ready(function(){
    $('#search-bank input[type=text]').focus(function(){
        if($.trim($(this).val())=='Suchbegriff...') {
            $(this).val('');
        }
    }).blur(function(){
        if($.trim($(this).val())=='') {
            $(this).val('Suchbegriff...');
        }
    })
})