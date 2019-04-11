$('.header__block-button__button').click(function(){
  var name = $('#name').val();
  var email = $('#email').val();
  var comment = $('#comment').val();

  $.ajax({
    url: '../actions/add.php',
    type: 'POST',
    cache: false,
    data: {'name' : name, 'email' : email, 'comment' : comment},
    dataType: 'html',
    success: function(data) {
      if(data == 'Готово') {
        $('#error-block').attr('class', 'success-block');
        $('#error-block').text('Все готово');
        $('#name').val("");
        $('#email').val("");
        $('#comment').val("");
        $('#error-block').show();
        $('#comment-block').load('show.php');
      }
      else {
        $('#error-block').attr('class', 'error-block');
        $('#error-block').text(data);
        $('#error-block').show();
      }
    }
  });
});
