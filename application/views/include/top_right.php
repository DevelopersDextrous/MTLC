<?php if($this->session->userdata('is_logged_in') == true): ?>

	<nav class="k-functional-navig"><!-- functional navig -->
        
                <ul class="list-inline pull-right">

                    
                    	<li><a href="<?php echo base_url(); ?>index.php/admin/logout">Sign Out!</a></li>
                    
                </ul>
        
            </nav>


	<?php elseif(!(isset($is_logged_in))): ?>

		<nav class="k-functional-navig"><!-- functional navig -->
        
                <ul class="list-inline pull-right">
                    <li><a href="#mymodal" data-toggle="modal" data-target="#myModal">Admin Login</a></li>
                </ul>
        
            </nav>

		<?php endif; ?>