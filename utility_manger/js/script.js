var within_first_modal = false;
$('.btn-second-modal').on('click', function() {
  if ($(this).hasClass('within-first-modal')) {
    within_first_modal = true;
    $('#first-modal').modal('hide');
  }
  $('#second-modal').modal('show');
});

$('.btn-second-modal-close').on('click', function() {
  $('#second-modal').modal('hide');
  if (within_first_modal) {
    $('#first-modal').modal('show');
    within_first_modal = false;
  }
});

$('.btn-third-modal').on('click', function() {
  $('#third-modal').modal('show');
  if (within_first_modal) {
    $('#first-modal').modal('show');
    within_first_modal = false;
  }
});

$('.btn-toggle-fade').on('click', function() {
  if ($('.modal').hasClass('fade')) {
    $('.modal').removeClass('fade');
    $(this).removeClass('btn-success');
  } else {
    $('.modal').addClass('fade');
    $(this).addClass('btn-success');
  }
});



/*====================================
*     LOADER
======================================*/
function loader(_success) {
    var obj = document.querySelector('.preloader'),
    inner = document.querySelector('.preloader_inner'),
    page = document.querySelector('.page');
    obj.classList.add('show');
    page.classList.remove('show');
    var w = 0,
        t = setInterval(function() {
            w = w + 1;
            inner.textContent = w+'%';
            if (w === 100){
                obj.classList.remove('show');
                page.classList.add('show');
                clearInterval(t);
                w = 0;
                if (_success){
                    return _success();
                }
            }
        }, 20);
}
