

<iframe name="votar" style="display:none;"></iframe>   
<form action="comm/love_submi.php"  method="POST" target="votar">
<ul>
    <input type="hidden" name="userID" value="<?php echo $useridCODE ?>">
    <input type="hidden" name="postID" value="<?php echo $code ?>">
            <li  class=" com "><samp class="p-1"><button   type="submit" name="submit" class="text-white btn btn-outline  btn-sm"  data-toggle="modal" data-target="#exampleModal"><i style="color:<?php echo $like_color ?> "  class="fa  fa-heart" aria-hidden="true"></i><?php echo $total_like?> Love </button></samp></li>
            <li class=" com  rounded"><samp class="p-1"><a  href="<?=$links;?>"  class=" btn btn-outline  btn-sm text-white" onclick="demoDisplay()" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-comment" aria-hidden="true"> <?php echo $total_comment?></i> Comment </a></samp></li>


</ul>
 </form>
          