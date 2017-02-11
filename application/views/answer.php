<div class="row columns">
	<h1 class="subheader">Answer for Problem 1</h1>
</div>
<section>
	<div class="row">
		<div class="large-7 columns">
			<h2>Result</h2>
		</div>
		<div class="large-4 large-offset-1 columns">
			<div class="callout secondary">
				<dl>
					<dt>Question</dt>
					<dd><p><?php echo $problem; ?></p></dd>
					<dt>Number</dt>
					<dd><p><?php echo $number; ?> <?php echo $start_unit; ?></p></dd>
					<dt>Student</dt>
					<dd><p><?php echo $student; ?></p></dd>
				</dl>
			</div>
		</div>
	</div>
</section>
<hr>
<section>
	<div class="row columns">
		<h2>Debug</h2>
		<?php
			echo '<pre>';
			var_dump($post);
			echo '</pre>';
		?>
	</div>
</section>