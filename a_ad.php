<?php

//新增
if(!empty($_POST["txt"])){ 
    $sql = "insert into marquee value(NULL,'".$_POST["txt"]."','1')";
    mysqli_query($link,$sql);
    echo "<script>document.location.href='admin.php?do=admin&redo=ad'</script>";
}

//修改文字顯示

if(!empty($_POST["update"][0])){
    $sql = "update marquee set marquee_display ='0'";
    mysqli_query($link,$sql);
    for($i=0;$i<count($_POST["display"]);$i++ ){
        $sql = "update marquee set marquee_display = '1'  where marquee_seq = '".$_POST["display"][$i]."' ";
        mysqli_query($link,$sql);
    }
    for($i=0;$i<count($_POST["update"]);$i++ ){
        $sql = "update marquee set marquee_txt ='".$_POST["update"][$i]."'  where marquee_seq = '".$_POST["no"][$i]."' ";
        mysqli_query($link,$sql);
    }
}

//刪除

if(!empty($_POST["del"][0])){
    for($i=0;$i<count($_POST["del"]);$i++ ){
        $sql = "DELETE FROM marquee where marquee_seq ='".$_POST["del"][$i]."' ";
        mysqli_query($link,$sql);
    }
    echo "<script>document.location.href='admin.php?do=admin&redo=ad'</script>";
}

$sql = "select * from marquee ";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>


<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">動態文字廣告管理</p>
        <form method="post"  action="">
    <table width="100%">
    	<tbody><tr class="yel">
        	<td width="80%">動態文字廣告</td><td width="10%">顯示</td><td width="10%">刪除</td>
                    </tr>
                    <?php do{ ?>
                    <tr class="yel">
                    <td width="80%"><input type="text" value="<?=$c2["marquee_txt"]?>" name="update[]" style="width:500px;" ></td>
                    <td width="10%"><input type="checkbox" name="display[]" value="<?=$c2["marquee_seq"]?>" <?php if($c2["marquee_display"] == 1){ echo "checked='checked'"; } ?> ></td>
                    <td width="10%"><input type="checkbox" name="del[]" value="<?=$c2["marquee_seq"]?>" > </td>
                    <input type="hidden" name='no[]' value="<?=$c2['marquee_seq']?>" >
                    </tr>
                    <?php }while($c2  = mysqli_fetch_assoc($c1)) ?>
    </tbody></table>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td width="200px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;a_ad_add.php?do=marquee&#39;)" value="新增動態文字廣告"></td>
      <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </tbody></table>    

        </form>
                                    </div>
                                                </div>
