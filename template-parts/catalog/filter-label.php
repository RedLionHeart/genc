<?php $name = $args['name'];
$term = $args['term'];
$current_filter = $args['current_filter'];?>

<label class="check-filter">
    <input type="checkbox" name="<?=$name.'[]';?>" value="<?=$term->name;?>" <?php if($current_filter){
        foreach ($current_filter as $item){
            if($item === $term->name){
                echo 'checked';
            }
        }
    }?>>
    <div class="box-check">
        <div class="box-plus">
            <div></div>
            <div></div>
        </div>
        <h4 class="h4"><?=$term->name;?></h4>
    </div>
</label>