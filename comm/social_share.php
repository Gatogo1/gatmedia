<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

/* Solid Social Share Buttons */
.btn{
          text-align:center;
          width:5px;
}
.btn-social,
.btn-social:visited,
.btn-social:focus,
.btn-social:hover,
.btn-social:active {
  color: #ffffff;
  text-decoration: none;
  transition: opacity .15s ease-in-out;
}

.btn-social:hover,
.btn-social:active {
 opacity: .75;
}

.btn-fb {
  background-color: #3b5998;
}

.btn-tw {
  background-color: #1da1f2;
}

.btn-in {
  background-color: #0077b5;
}

.btn-gp {
  background-color: #db4437;
}

.btn-rd {
  background-color:green;
}

.btn-hn {
  background-color: #ff4000;
}

/* Outline Social Share Buttons */

.btn-social-outline {
  background-color: transparent;
  background-image: none;
  text-decoration: none;
  transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;
}

.btn-fb-outline {
  color: #3b5998;
  border-color: #3b5998;
}

.btn-fb-outline:hover,
.btn-fb-outline:active {
  color: #ffffff;
  background-color: #3b5998;
}

.btn-tw-outline {
  color: #1da1f2;
  border-color: #1da1f2;
}

.btn-tw-outline:hover,
.btn-tw-outline:active {
  color: #ffffff;
  background-color: #1da1f2;
}

.btn-in-outline {
  color: #0077b5;
  border-color: #0077b5;
}

.btn-in-outline:hover,
.btn-in-outline:active {
  color: #ffffff;
  background-color: #0077b5;
}

.btn-gp-outline {
  color: #db4437;
  border-color: #db4437;
}

.btn-gp-outline:hover,
.btn-gp-outline:active {
  color: #ffffff;
  background-color: #db4437;
}

.btn-rd-outline {
  color: #ff4500;
  border-color: #ff4500;
}

.btn-rd-outline:hover,
.btn-rd-outline:active {
  color: #ffffff;
  background-color: #ff4500;
}

.btn-hn-outline {
  color: #ff4000;
  border-color: #ff4000;
}

.btn-hn-outline:hover,
.btn-hn-outline:active {
  color: #ffffff;
  background-color: #ff4000;
}

/* Fluid Styles */

.fluid {
  display: flex;
}

.fluid a {
  flex-grow: 1;
  margin-right: 0.25rem;
}

.fluid a:last-child {
  margin-right: 0rem;
}
</style>

<h6>Show support by sharing this article</h6>
  <div>
    <?php 
 $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://"; 
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    
    ?>
    <a class="btn btn-social btn-fb " href="https://www.facebook.com/sharer.php?u=<?php echo $url ?>" target="_blank" title="Share this post on Facebook">
        <i class="fab fa fa-facebook"></i> 
        
    </a>
      <a class="btn btn-sm m-1 btn-social btn-tw"href="https://twitter.com/intent/tweet?url=<?php echo $url ?>" target="_blank" title="Share this post on Twitter">
        <i class="fa fa-twitter"></i> 
    </a>
    <a class="btn btn-sm m-1 btn-social btn-in" href="https://www.linkedin.com/shareArticle?mini=true&url=PAGE_URL&amp;title=<?php echo $url ?>" target="_blank" title="Share this post on LinkedIn">
      <i class="fa fa-linkedin" data-fa-transform="grow-2"></i>
    </a>
  
<a class="btn btn-sm m-1 btn-social btn-rd" href="https://api.whatsapp.com/send?text=<?php echo $url ?>" data-action="share/whatsapp/share ">
      <i class="fa fa-whatsapp" data-fa-transform="grow-4"></i>
    </a>



  </div>

