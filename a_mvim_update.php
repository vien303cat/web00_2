<?php
include_once("head.php");

$sql = " select * from mvim where mvim_seq = '".$_GET["seq"]."' ; ";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>

<p class="t cent botli">修改動畫圖片</p>
        <form method="post"  action="" enctype="multipart/form-data">
<table width="80%" border="0" cellspacing="0" cellpadding="5">
  <tr>
    <td width="50%">動畫圖片：</td>
    <td width="50%"><input type="file" name="newimg" ></td>
    <input type="hidden" value="<?=$_GET["seq"]?>" name="newdata" >
  </tr>
</table>
<table style="margin-top:40px; width:100%;">
     <tbody><tr>
      <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </tbody></table> 
        </form>