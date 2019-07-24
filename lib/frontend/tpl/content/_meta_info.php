<?php
	if ( $this->show_author() || $this->show_date() ) { ?>
	<div class="<?php echo $this->get_prefix( 'meta' ); ?>">
		<?php echo $this->show_author() ? '<span class="'.$this->get_prefix('author').'">'.get_the_author().'</span>' : ''; ?>
		<?php
			echo $this->show_author() && $this->show_date() ? ' - ' : '';
			
			echo $this->show_date() ? '<span class="'.$this->get_prefix('date').'">'.get_the_date().'</span>' : '';
		?>
	</div>
<?php } ?>