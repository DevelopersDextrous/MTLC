<?php if($this->session->userdata('is_logged_in') == true): ?>

	<nav class="k-functional-navig top_right"><!-- functional navig -->
        
                <ul id="drop-down-left" class="k-dropdown-menu list-inline pull-right">
                    <li style="">
                        <a href="#" class="Pages Collection" title="" style="text-transform: none; border-top: none;"><?php echo $this->session->userdata('user_name')."  "; ?>
                        <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo base_url(); ?>index.php/admin" style="text-transform: none;">Admin Home</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/admin/logout" style="text-transform: none;">Sign Out!</a></li>
                        </ul>
                    </li>

                        
                    
                </ul>
        
            </nav>


	<?php elseif(!(isset($is_logged_in))): ?>

		<nav class="k-functional-navig"><!-- functional navig -->
        
                <ul class="list-inline pull-right">
                    <li><a href="#mymodal" data-toggle="modal" data-target="#myModal" style="font-size: 14px; font-weight: bold;">
                    <span class="glyphicon glyphicon-user" aria-hidden="true"> </span>
                    <span class="glyphicon glyphicon-font" aria-hidden="true"></span>dmin Login</a></li>
                </ul>
        
            </nav>

		<?php endif; ?>