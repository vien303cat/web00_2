<?php
include_once("head.php");

$sql = " select * from title where title_seq = '".$_GET["seq"]."' ; ";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>

<p class="t cent botli">修改圖片</p>
        <form method="post"  action="" enctype="multipart/form-data">
<table width="80%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="50%">標題區圖片：</td>
    <td width="50%"><input type="file" name="newimg" ></td>
    <input type="hidden" value="<?=$_GET["seq"]?>" name="newdata" >
  </tr>
  <tr>
    <td width="50%">標題區替代文字：</td>
    <td width="50%"><input type="text" value="<?=$c2["title_txt"]?>" name="newtxt"></td>
  </tr>
</table>
<table style="margin-top:40px; width:100%;">
     <tbody><tr>
      <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </tbody></table> 
        </form>