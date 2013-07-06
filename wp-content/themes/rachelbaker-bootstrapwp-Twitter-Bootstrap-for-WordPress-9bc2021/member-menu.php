<!-- Button to trigger modal -->
<ul class="member-nav inline">
	<li>415.508.4429 / <a href="mailto:info@hgbusinesslaw.com">info@hgbuisnesslaw.com</a></li> /
	<li>
		<a href="" data-toggle="modal" data-target="#contactModal" class="" data-backdrop="false">Contact Us</a>
	</li> /
	<li><a href="http://totalattorneys.com/hgbusinesslaw">Client Login</a></li>
	
</ul>
 
<!-- Modal -->
<div id="contactModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="Contact Us" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Contact Us</h3>
  </div>

  <div class="modal-body">
  	<?php echo do_shortcode( '[contact-form-7 id="131" title="Contact form 1"]' ); ?>
	</div> 
</div>