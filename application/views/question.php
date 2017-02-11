<div class="row columns">
	<h1 class="subheader">Problem 1</h1>
</div>
<section>
	<div class="row">
		<div class="large-7 columns">
			<h2>Question</h2>
			<p class="lead"><?php echo $problem; ?></p>

			<h3>Mass: <span class="number"><?php echo $number; ?></span> <span class="units"><?php echo $start_unit; ?></span></h3>
			<form method="post" action="<?php echo base_url();?>index.php/main/answer/">
				<input type="hidden" name="number" value="<?php echo $number; ?>">
				<input type="hidden" name="student" value="<?php echo $student; ?>">
				<input type="hidden" name="problem" value="<?php echo $problem; ?>">
				<input type="hidden" name="start-unit" value="<?php echo $start_unit; ?>">
				<label>
					<h3>Answer</h3>
					<input type="text" class="answer" placeholder="">
				</label>
				<h3>Units</h3>
				<fieldset>
					<?php
						foreach ($units as $unit=>$label) {
							echo '<input id="' . $unit . '" type="radio" name="end-unit" value="' . $unit. '"><label for="' . $unit . '">' . $label . '</label>';
						}
					?>
				</fieldset>

				<br>
				<input class="button primary" type="submit" name="submit" value="Submit">
			</form>
		</div>
		<div class="large-4 large-offset-1 columns">
			<div class="callout secondary">
				<h3>Help</h3>
			</div>
		</div>
	</div>
</section>