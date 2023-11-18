

<style>
   #preloader {
  position: fixed;
  top: 0; left: 0;
  width: 100%;
  height: 100vh;
  background: #F6F6F6;
  z-index: 9999;
  transition: all 0.4s ease;
}

.loader {
  position: absolute;
  top: 50%; left: 50%;
  transform: translate(-50%,-50%);
  transition: 0.4s;
}

.loader .loader_text {
  font-size: 50px;
  font-weight: 600;
  font-family: sans-serif;
  color: #26001B;
  margin: 20px auto;
  text-align: center;
}

.loader .loader_bar  {
  position: relative;
  width: 300px;
  height: 12px;
  background: #EDEEF7;
  border-radius: 50px;
}

.loader .loader_bar:before {
  content: '';
  position: absolute;
  top: 0; left: 0;
  width: 100%;
  height: 100%;
  background: #0075F6;
  border-radius: 50px;
  animation: fill 0.3s ease;
}

@keyframes fill {
  0% { width: 0% }
  100% { width: 100% }
}
</style>
<!-- Source:  Source: http://codepen.io/ahsanrathore/post/accurate-page-progress-bar-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div id="preloader">
  <div class="loader">
    <center>
    <img style="width:200px;" src="img/logo.png" alt="">
    </center>
  
    <p class="loader_text" id="loader_text"><span class="loader_text_unit" data-count="100">0</span><span>%</span></p>
    <div class="loader_bar" id="loader_bar"></div>
  </div>
</div>



<script>
$(window).on('load', function() {
  $('#preloader').css({
    "transform": "translateY(-100%)",
    "transition-delay": "0.6s"
  });
  $('.loader').css({
    "opacity": "0",
    "transform": "translate(-50%,-100%)",
    "transition-delay": "0.3s"
  });

  $('.loader_text_unit').each(function() {
    var $this = $(this),
        countTo = $this.attr('data-count');

    $({ countNum: $this.text()}).animate({
      countNum: countTo
    },

    {

      duration: 300,
      easing:'linear',
      step: function() {
        $this.text(Math.floor(this.countNum));
      },
      complete: function() {
        $this.text(this.countNum);
      }
    });
  });

});
</script>