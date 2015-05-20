<?php

/**
 * @file
 * Theme file to handle carousel display.
 *
 * Variables passed:
 * - $flickity_item_count:The variable indicating
 *   the number of contents available to be diplayed in the block.
 * - $flickity_items: An array of slider items.
 *   Each row is an array of content.
 */
?>

<div class="gallery-main">
  <div class="gallery">
    <?php  for ($i = 0; $i < $flickity_item_count; $i++):
      $item_class = ($i == 0) ? 'item active' : 'item';
    ?>
	 <img alt="<?php print $flickity_items[$i]['image']['alt']; ?>" src="<?php print $flickity_items[$i]['image']['pic']; ?>" /> 
    <?php endfor; ?>
		</div>
    <p class="caption">&nbsp;</p>
	
</div>
