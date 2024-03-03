<div class="di" style="height:540px; border:#999 1px solid; width:53.2%; margin:2px 0px 0px 0px; float:left; position:relative; left:20px;">
	<marquee scrolldelay="120" direction="left" style="position:absolute; width:100%; height:40px;">
		<?php
		$ads = $Ad->all(['sh' => 1]);
		foreach ($ads as $ad) {
			echo $ad['text'] . " / ";
		}
		?>
	</marquee>
	<h3>更多最新消息顯示區</h3>
	<hr>

	<?php
	$total = $News->count(['sh' => 1]);
	$div = 5;
	$pages = ceil($total / $div);
	$now = $_GET['p'] ?? 1;
	$start = ($now - 1) * $div;
	$news = $News->all(['sh' => 1], " limit $start,$div");
	?>
	<ol start="<?= $start + 1; ?>">
		<?php
		foreach ($news as $new) {
		?>
			<li class="sswww">
				<?= mb_substr($new['text'], 0, 20); ?>...
				<div class="all" style="display:none"><?= $new['text']; ?></div>
			</li>
		<?php
		}
		?>
		<?php
		if ($now > 1) {
			$prev = $now - 1;
			echo "<a href='?do=$do&p=$prev'><</a>";
		}
		for ($i = 1; $i <= $pages; $i++) {
			$fontsize = ($now == $i) ? '24px' : '16px';
			echo "<a href='?do=$do&p=$i'style='font-size:$fontsize'>$i</a>";
		}
		if ($now < $pages) {
			$next = $now + 1;
			echo "<a href='?do=$do&p=$next'>></a>";
		}
		?>
</div>
<script>
	$(".sswww").hover(
		function() {
			$("#alt").html("" + $(this).children(".all").html() + "").css({
				"top": $(this).offset().top - 50
			})
			$("#alt").show()
		}
	)
	$(".sswww").mouseout(
		function() {
			$("#alt").hide()
		}
	)
</script>