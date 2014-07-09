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
    $('.bank-block').each(function(n,el){
        if($(el).height()>max_bank_block_height) {
            max_bank_block_height = $(el).height();
        }
    });
    $('.bank-block').height(max_bank_block_height + 'px');
})