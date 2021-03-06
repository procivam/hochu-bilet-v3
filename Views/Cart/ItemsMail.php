<table align="left" border="1" cellpadding="5" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th></th>
			<th>Наименование</th>
			<th>Цена</th>
			<th>Количество</th>
			<th>Итог</th>
		</tr>
	</thead>
	<tbody>
		<?php $amount = 0; ?>
		<?php foreach( $cart as $item ): ?>
			<?php $obj = Core\Arr::get($item, 'obj'); ?>
			<?php $amt = (int) Core\Arr::get($item, 'count', 1) * (int) $obj->cost; ?>
			<?php $amount += $amt; ?>
			<tr>
				<td>
					<?php if( is_file(HOST.Core\HTML::media('images/product/medium/'.$obj->image)) ): ?>
						<img src="<?php echo 'http://'.$_SERVER['REQUEST_URI'].Core\HTML::media('images/product/medium/'.$obj->image); ?>" width="80" />
					<?php else: ?>
						<img src="<?php echo 'http://'.$_SERVER['REQUEST_URI'].Core\HTML::media('pic/no-photo.png'); ?>" width="80" />
					<?php endif; ?>
				</td>
				<td><?php echo $obj->name . ( $obj->size_name ? ', ' . $obj->size_name : '' ); ?></td>
				<td><?php echo (int) $obj->cost; ?> грн.</td>
				<td><?php echo (int) Core\Arr::get($item, 'count', 1); ?></td>
				<td><?php echo $amt; ?></td>
			</tr>
		<?php endforeach; ?>
	</tbody>
	<thead>
		<tr>
			<th colspan="4"><b>ВСЕГО:</b></th>
			<th><?php echo $amount; ?> грн.</th>
		</tr>
	</tfooter>
</table>