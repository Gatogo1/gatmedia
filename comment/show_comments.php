<?php
include_once("db_connect.php");
$commentQuery = "SELECT id, postID, content, userID, date FROM comments WHERE postID = '0' ORDER BY id DESC";
$commentsResult = mysqli_query($conn, $commentQuery) or die("database error:". mysqli_error($conn));
$commentHTML = '';
while($comment = mysqli_fetch_assoc($commentsResult)){
	$commentHTML .= '
		<div class="panel panel-primary">
		<div class="panel-heading">By <b>'.$comment["userID"].'</b> on <i>'.$comment["date"].'</i></div>
		<div class="panel-body">'.$comment["content"].'</div>
		<div class="panel-footer" align="right"><button type="button" class="btn btn-primary reply" id="'.$comment["id"].'">Reply</button></div>
		</div> ';
	$commentHTML .= getCommentReply($conn, $comment["id"]);
}
echo $commentHTML;

function getCommentReply($conn, $parentId = 0, $marginLeft = 0) {
	$commentHTML = '';
	$commentQuery = "SELECT id, postID, content,userID, date FROM comments WHERE postID = '".$parentId."'";	
	$commentsResult = mysqli_query($conn, $commentQuery);
	$commentsCount = mysqli_num_rows($commentsResult);
	if($parentId == 0) {
		$marginLeft = 0;
	} else {
		$marginLeft = $marginLeft + 48;
	}
	if($commentsCount > 0) {
		while($comment = mysqli_fetch_assoc($commentsResult)){  
			$commentHTML .= '
				<div class="panel panel-primary" style="margin-left:'.$marginLeft.'px">
				<div class="panel-heading">By <b>'.$comment["userID"].'</b> on <i>'.$comment["date"].'</i></div>
				<div class="panel-body">'.$comment["content"].'</div>
				<div class="panel-footer" align="right"><button type="button" class="btn btn-primary reply" id="'.$comment["id"].'">Reply</button></div>
				</div>
				';
			$commentHTML .= getCommentReply($conn, $comment["id"], $marginLeft);
		}
	}
	return $commentHTML;
}
?>