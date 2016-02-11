  $(function(){


$('.button').on('click', function(){
  var panelId = $(this).attr('panelId');
      var form = $("<form action='php/categorize.php' id='del' method='post'>" +
               "<input type='hidden' name='categories' value='"+panelId+"' />" +
               '</form>');
  $('body').append(form);
  form.submit();
  $('#del').remove();

  }); 

$('.button').mouseover(function(){
  var panelId = $(this).attr('panelId');
  var pic = $(this).attr('pic');
  
       $('.selection').html(panelId+"<br>"+"<img src='image/icon/"+pic+".png' width='200px'>");
}).mouseleave(function(){    $('.selection').html(""); });
});
