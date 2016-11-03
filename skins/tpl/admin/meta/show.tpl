
<!-- ./skins/tpl/admin/meta/show.tpl begin -->
  
<div style="background-color:#FFFFCC; padding:10px">
<div  style="float:left;">
<h3>Установка метаданных для модуля <strong style="color:#0000FF"><?php echo $modul; ?></strong></h3>
<form action="" method="post">  
<h4>Тайтл</h4>  
<input name="form[value1]" type="text" size="70" value="<?php echo $POST['value1']; ?>" />  
<h4>Ключевые слова</h4>  
<textarea name="form[value2]" cols="50" rows="8"><?php echo $POST['value2']; ?></textarea>  
<h4>Описание</h4>  
<textarea name="form[value3]" cols="50" rows="8"><?php echo $POST['value3']; ?></textarea><br />  
<input name="ok" type="submit" />  
</form> 
</div>
<div style="float:right;width:200px; padding:10px 0px 0px 50px">
<?php echo $menu; ?>
</div>
<div style="clear:both"></div>
</div>

<!-- ./skins/tpl/admin/meta/show.tpl end -->
