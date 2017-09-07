	<footer class="clearfix">
		<div class="col-md-4">
			<ol>
				<li>
					<?= $config->address1?>
				</li>
				<li>
					<?= $config->address2?>
				</li>
				<li>
					<?= $config->address3?>
				</li>
			</ol>
		</div>
		<div class="col-md-4">
			<div
			  class="fb-like"
			  data-share="true"
			  data-width="450"
			  data-show-faces="true">
			</div>
		</div>
		<div class="col-md-4">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8666887036175!2d105.77328300487012!3d21.03801947231585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313454c9f6140849%3A0x8c5640d9d84529cc!2sCollege+of+Dance!5e0!3m2!1sen!2s!4v1503483426410" width="91%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
	</footer>
	
	<script type="text/javascript" src="<?= url('public/plugins/jquery/jquery.min.js')?>"></script>
	<script type="text/javascript" src="<?= url('public/plugins/bootstrap/js/bootstrap.min.js')?>"></script>

	<script type="text/javascript" src="<?= url('public/tinymce/jquery.tinymce.min.js')?>"></script>
	<script type="text/javascript" src="<?= url('public/tinymce/tinymce.min.js')?>"></script>
	<script type="text/javascript">
		tinymce.init({ selector:'textarea#editor' });
	</script>
</body>
</html>