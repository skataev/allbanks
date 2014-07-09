$(document).ready(function(){
    $('#search-bank input[type=text]').focus(function(){
        if($.trim($(this).val())=='Suchbegriff...') {
            $(this).val('');
        }
    }).blur(function(){
        if($.trim($(this).val())=='') {
            $(this).val('Suchbegriff...');
        }
    });

    var max_bank_block_height = 0;
    $('.bank-block .logo-holder').each(function(n,el){
        if($(el).height()>max_bank_block_height) {
            max_bank_block_height = $(el).height();
        }
    });
    $('.bank-block .logo-holder').height(max_bank_block_height + 'px');

    var max_bank_block_height = 0;
    $('.bank-block .inner-line').each(function(n,el){
        if($(el).height()>max_bank_block_height) {
            max_bank_block_height = $(el).height();
        }
    });
    $('.bank-block .inner-line').height(max_bank_block_height + 'px');
})