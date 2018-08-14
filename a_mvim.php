<?php

//新增
if(!empty($_FILES["img"]["name"])){ 
    $ee = explode(".",$_FILES["img"]["name"])[1];
    $imgname = $strtime.".".$ee;
    copy($_FILES["img"]["tmp_name"],"img/".$imgname);
    $sql = "insert into mvim value(NULL,'".$imgname."','1')";
    mysqli_query($link,$sql);

    echo "<script>document.location.href='admin.php?do=admin&redo=mvim'</script>";
}

//修改文字顯示

if(!empty($_POST["display"][0])){
    $sql = "update mvim set mvim_display ='0'";
    mysqli_query($link,$sql);
    for($i=0;$i<count($_POST["display"]);$i++ ){
        $sql = "update mvim set mvim_display = '1'  where mvim_seq = '".$_POST["display"][$i]."' ";
        mysqli_query($link,$sql);
    }
}

//刪除

if(!empty($_POST["del"][0])){
    for($i=0;$i<count($_POST["del"]);$i++ ){
        $sql = "DELETE FROM mvim where mvim_seq ='".$_POST["del"][$i]."' ";
        mysqli_query($link,$sql);
    }
    echo "<script>document.location.href='admin.php?do=admin&redo=mvim'</script>";
}

//更新圖片

if(!empty($_POST["newdata"])){
    if(!empty($_FILES["newimg"]["name"])){

        $sql = "select * from mvim where mvim_seq ='".$_POST["newdata"]."'" ;
        $c1  = mysqli_query($link,$sql);
        $c2  = mysqli_fetch_assoc($c1);
        unlink("img/".$c2["mvim_img"]);
        $ee = explode(".",$_FILES["newimg"]["name"])[1];
        $imgname = $strtime.".".$ee;
        copy($_FILES["newimg"]["tmp_name"],"img/".$imgname);
        $sql = "update mvim set mvim_img ='".$imgname."' where mvim_seq = '".$_POST["newdata"]."' " ;
        mysqli_query($link,$sql);
    }   
    echo "<script>document.location.href='admin.php?do=admin&redo=mvim'</script>";
}


$sql = "select * from mvim ";
$c1  = mysqli_query($link,$sql);
$c2  = mysqli_fetch_assoc($c1);
?>


<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
                                    <p class="t cent botli">動畫圖片管理</p>
        <form method="post"  action="">
    <table width="100%">
    	<tbody><tr class="yel">
        	<td width="75%">動畫圖片</td><td width="5%">顯示</td><td width="5%">刪除</td><td width="15%"></td>
                    </tr>
                    <?php do{ ?>
                    <tr class="yel">
                    <td width="75%"><embed src='img/<?=$c2["mvim_img"]?>' width="200" height="100" ></embed></td>
                    <td width="5%"><input type="checkbox" name="display[]" value="<?=$c2["mvim_seq"]?>" <?php if($c2["mvim_display"] == 1){ echo "checked='checked'"; } ?> ></td>
                    <td width="5%"><input type="checkbox" name="del[]" value="<?=$c2["mvim_seq"]?>" > </td>
                    <input type="hidden" name='no[]' value="<?=$c2['mvim_seq']?>" >
                    <td width="15%"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;a_mvim_update.php?do=mvim&seq=<?=$c2["mvim_seq"]?>&#39;)" value="更換動畫"></td>
                    </tr>
                    <?php }while($c2  = mysqli_fetch_assoc($c1)) ?>
    </tbody></table>
           <table style="margin-top:40px; width:70%;">
     <tbody><tr>
      <td width="200px"><input type="button" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;a_mvim_add.php?do=mvim&#39;)" value="新增動畫圖片"></td>
      <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
     </tr>
    </tbody></table>    

        </form>
                                    </div>
                                                </div>
