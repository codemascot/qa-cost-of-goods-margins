<?php // -*- coding: utf-8 -*-
/**
 * Here this "price_fields" class with the div is
 * very important to hide this fields for variation products.
 *
 * DO NOT REMOVE THE "price_fields" HTML CLASS OR THE "div".
 */
?>
<div class="price_fields">
	<label>
		<span class="title">
			<?php echo $label; ?>
		</span>
		<span class="input-text-wrap">
			<input
					type="text"
					name="<?php echo $name; ?>"
					class="text qa-input-field"
					placeholder="<?php echo $label; ?>"
					style="<?php echo $style; ?>"
					value=""
			>
		</span>
	</label>
	<br class="clear"/>
</div>
