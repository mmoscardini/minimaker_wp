			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

			<?php get_sidebar('footer'); ?>


			<?php do_action('cpotheme_after_main'); ?>
			
			
			<?php do_action('cpotheme_before_footer'); ?>
			<footer id="footer" class="footer secondary-color-bg dark">
				<div class="container">
					<?php echo "Mini Maker "; echo date("Y"); echo" ©"; ?>
				</div>
			</footer>
			<?php do_action('cpotheme_after_footer'); ?>
			
			<div class="clear"></div>
		</div><!-- wrapper -->
		<?php do_action('cpotheme_after_wrapper'); ?>
	</div><!-- outer -->
	<?php wp_footer(); ?>
</body>
</html>
