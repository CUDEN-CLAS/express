(function ($) {
  $(document).ready(function(){
    $('.search-options input').change(function(){
      var label = $(this).attr('data-placeholder');
      var action = $(this).attr('data-action');
      $('.cu-search .form-text').attr('placeholder', label);
      $('.cu-search-box form').attr('action', action);
    });
  });
}(jQuery));

(function ($) {
  $('.cu-search-box-small form').submit(function() {
    var query = $('input[name="query"]').val();
    if ($('input[value="Ucdenver.edu"]').prop('checked')){
    
    window.location.href = 'https://www1.ucdenver.edu/search#/?query='+query+'';
    return false;
    }
    if ($('input[value="Ucdenver.edu"]').length < 1){
    window.location.href = 'https://www1.ucdenver.edu/search#/?query='+query+'';
 
    return false;
    }
  });
}(jQuery));

(function ($) {
  $('.cu-search-box-big form').submit(function() {
    var query = $('input[name="query"]').val();
    if ($('input[value="Ucdenver.edu"]').prop('checked')){
    
    window.location.href = 'https://www1.ucdenver.edu/search#/?query='+query+'';
    
    return false;
    }
    
    if ($('input[value="Ucdenver.edu"]').length < 1){
    window.location.href = 'https://www1.ucdenver.edu/search#/?query='+query+'';
 
    return false;
    }
  });
}(jQuery));

