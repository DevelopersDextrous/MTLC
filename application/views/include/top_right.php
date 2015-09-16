
<?php if($is_logged_in == true): ?>

	<nav class="k-functional-navig"><!-- functional navig -->
        
                <ul class="list-inline pull-right">

                    <li><?php echo $this->session_user_data->user_name; ?></li>

                    <ul class="sub-menu">
                    	<li><a href="<?php echo base_url(); ?>index.php/admin/logout">Sign Out!</a></li>
                    </ul>
                </ul>
        
            </nav>


	<?php else: ?>

		<nav class="k-functional-navig"><!-- functional navig -->
        
                <ul class="list-inline pull-right">
                    <li><a href="#mymodal" data-toggle="modal" data-target="#myModal">Admin Login</a></li>
                </ul>
        
            </nav>

		<?php endif; ?>