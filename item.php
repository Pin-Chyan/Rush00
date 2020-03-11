<table class="item">
	<tr>
		<td class="tabimg"><a href="<?=$item['id']?>"><img style="width: 250px;" src="<?=$item['img']?>"></td>
	</tr>
	<tr>
		<td><a href="<?=$item['id']?>"><?=$item['title']?></td>
	</tr>
	<tr>
		<td class="tabdesc">length: <?=$item['weight']?>g / Price: $<?=$item['price']?></td>
	</tr>
	<tr>
		<td class="tabdesc">Type: <?=ucfirst($item['cat'])?> / Origin: <?=ucfirst($item['orig'])?></td>
	</tr>
</table>