<fieldset class="personalblock" id="documents">
	<legend><strong><?php p($l->t('Documents')) ?></strong></legend>
	<table class="nostyle">
		<tbody><tr>
				<td>
					<input id="webodf-unstable" type ="checkbox"
						   <?php if ($_['unstable'] === 'true'){ ?>
							   checked="checked"
						   <?php } ?>
						   />
					<label for="webodf-unstable">
						<?php p($l->t('Advanced feature-set'))?>&nbsp;
						<?php p($l->t('(Unstable)')); ?>
					</label>
				</td>
			</tr>
		</tbody></table>
</fieldset>