<?php foreach($result as $key => $value){ ?>
      
      <input type="checkbox" value="" <?php if($value['table_field1']!=''){?>CHECKED<?php } ?> onclick="clickfunc()">
      <?php //your array data process here
      <?php }?>
