<?php
if(isset($_GET['k'])){
    if($_GET['k']){
        $video=$_GET['k'];
    ?>
    <style>
    .watching{
        padding:20px
        width: 100%;
        height: auto;
    }
    .video{
        padding-top: 75px;
    }
    .descri{
        width: 100%;
        height: 20px;
    }
</style>
<div class="watching">
    <div class="video"><?php echo $video; ?></div>

</div>
<div class="descri">

</div>
    <?php
    }else{
        header("Location: /movieclub/htdocs/index.php");
    }
    
}else{
    header("Location: /movieclub/htdocs/index.php");
}
?>
