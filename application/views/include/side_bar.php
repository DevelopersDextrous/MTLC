<div id="k-sidebar" class="col-lg-4 col-md-4"><!-- sidebar wrapper -->

    <div class="col-padded col-shaded"><!-- inner custom column -->

        <ul class="list-unstyled clear-margins"><!-- widgets -->

            <li class="widget-container widget_nav_menu"><!-- widget -->

                <h1 class="title-widget">Select</h1>
                <ul>
                    <li><a href="<?php echo base_url(); ?>/index.php/article/article_list" title="menu item">Articles (<?php $i=0; foreach ($article_count as $key) {
                        $i++;
                    } echo $i; ?>)</a></li>

                </ul>
                <ul>
                    <li><a href="<?php echo base_url(); ?>/index.php/director/director_list" title="menu item">Our Directors (<?php $i=0; foreach ($director_count as $key) {
                        $i++;
                    } echo $i; ?>)</a></li>

                </ul>

            </li>
        </ul>

    </div><!-- inner custom column end -->

</div><!-- sidebar wrapper end -->