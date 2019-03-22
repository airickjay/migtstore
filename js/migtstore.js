jQuery(window).on('load resize', function(){
  equalize();
});

function equalize(){
  jQuery('li.product').removeAttr('style');
  var maxHeight = 0;
  jQuery('li.product').each(function(i){
    if(maxHeight < jQuery(this).height()){
      maxHeight = jQuery(this).height();
    }
  });
  jQuery('li.product').height(maxHeight+'px');
}
