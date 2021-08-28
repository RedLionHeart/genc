<?php $name = $args['name'];
$term = $args['term'];?>

<label class="check-filter">
    <input type="checkbox" name="<?=$name.'[]';?>" value="<?=$term->name;?>">
    <div class="box-check">
        <div class="box-plus">
            <div></div>
            <div></div>
        </div>
        <h4 class="h4"><?=$term->name;?></h4>
    </div>
</label>