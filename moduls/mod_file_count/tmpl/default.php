<?php defined( '_JEXEC' ) or die( 'Restricted access' ); // no direct access ?>

<style>
	.txt_count {
		color: #08c; 
    font-size: 100%;
   } 
	.well {
    padding: 15px;
	}
</style>

<?php echo JText::_('MOD_FILE_COUNT_TOTAL') ?>
<span class="txt_count" >
	<?php echo $filecount; ?>
</span>
&nbsp;
<?php if (!empty($link)): ?>
		<a href="<?php echo $link; ?>" ><?php echo JText::_('MOD_FILE_COUNT_FIELD_LINK_TEXT') ?></a>
<?php endif;?>
