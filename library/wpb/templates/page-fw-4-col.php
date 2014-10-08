<div class="content" id="thumb-navigation">
      
      <div class="row thumb-cols">
        <?php
            $custom_fields = get_post_custom( get_the_ID() );
			if (is_array($custom_fields['col-1-titel'])) {

				if (is_array($custom_fields['col-1-titel'])) {
					?>
					<div class="col-xs-12 col-sm-6 col-md-3">
					  <div class="thumb-4-col">
						<a href="<?php echo get_site_url(); ?>/<?php echo $custom_fields['col-1-link'][0]; ?>" class="btn btn-block btn-4-col" role="button"><img src="<?php echo get_site_url(); ?><?php echo $custom_fields['col-1-afbeelding'][0]; ?>" alt="Zorgcirkels" class="thumb-col-img"></a>
						  <div class="thumb-4-col-caption">
							<h4><?php echo $custom_fields['col-1-titel'][0]; ?></h4>
							<p><?php echo $custom_fields['col-1-omschrijving'][0]; ?></p>
						  </div>
						<a href="<?php echo get_site_url(); ?>/<?php echo $custom_fields['col-1-link'][0]; ?>" class="btn btn-zc-<?php echo $custom_fields['col-1-class'][0]; ?> btn-block" role="button"><?php echo strtoupper($custom_fields['col-1-titel'][0]); ?></a>
					  </div>
					</div>
					<?php
				}
				if (is_array($custom_fields['col-2-titel'])) {
					?>
					<div class="col-xs-12 col-sm-6 col-md-3">
					  <div class="thumb-4-col">
						<a href="<?php echo get_site_url(); ?>/<?php echo $custom_fields['col-2-link'][0]; ?>" class="btn btn-block btn-4-col" role="button"><img src="<?php echo get_site_url(); ?><?php echo $custom_fields['col-2-afbeelding'][0]; ?>" alt="Zorgcirkels" class="thumb-col-img"></a>
						  <div class="thumb-4-col-caption">
							<h4><?php echo $custom_fields['col-2-titel'][0]; ?></h4>
							<p><?php echo $custom_fields['col-2-omschrijving'][0]; ?></p>
						  </div>
						<a href="<?php echo get_site_url(); ?>/<?php echo $custom_fields['col-2-link'][0]; ?>" class="btn btn-zc-<?php echo $custom_fields['col-2-class'][0]; ?> btn-block" role="button"><?php echo strtoupper($custom_fields['col-2-titel'][0]); ?></a>
					  </div>
					</div>
					<?php
				}
				if (is_array($custom_fields['col-3-titel'])) {
					?>
					<div class="col-xs-12 col-sm-6 col-md-3">
					  <div class="thumb-4-col">
						<a href="<?php echo get_site_url(); ?>/<?php echo $custom_fields['col-3-link'][0]; ?>" class="btn btn-block btn-4-col" role="button"><img src="<?php echo get_site_url(); ?><?php echo $custom_fields['col-3-afbeelding'][0]; ?>" alt="Zorgcirkels" class="thumb-col-img"></a>
						  <div class="thumb-4-col-caption">
							<h4><?php echo $custom_fields['col-3-titel'][0]; ?></h4>
							<p><?php echo $custom_fields['col-3-omschrijving'][0]; ?></p>
						  </div>
						<a href="<?php echo get_site_url(); ?>/<?php echo $custom_fields['col-3-link'][0]; ?>" class="btn btn-zc-<?php echo $custom_fields['col-3-class'][0]; ?> btn-block" role="button"><?php echo strtoupper($custom_fields['col-3-titel'][0]); ?></a>
					  </div>
					</div>
					<?php
				}
				if (is_array($custom_fields['col-4-titel'])) {
					?>
					<div class="col-xs-12 col-sm-6 col-md-3">
					  <div class="thumb-4-col">
						<a href="<?php echo get_site_url(); ?>/<?php echo $custom_fields['col-4-link'][0]; ?>" class="btn btn-block btn-4-col" role="button"><img src="<?php echo get_site_url(); ?><?php echo $custom_fields['col-4-afbeelding'][0]; ?>" alt="Zorgcirkels" class="thumb-col-img"></a>
						  <div class="thumb-4-col-caption">
							<h4><?php echo $custom_fields['col-4-titel'][0]; ?></h4>
							<p><?php echo $custom_fields['col-4-omschrijving'][0]; ?></p>
						  </div>
						<a href="<?php echo get_site_url(); ?>/<?php echo $custom_fields['col-4-link'][0]; ?>" class="btn btn-zc-<?php echo $custom_fields['col-4-class'][0]; ?> btn-block" role="button"><?php echo strtoupper($custom_fields['col-4-titel'][0]); ?></a>
					  </div>
					</div>
					<?php
				}
			} else {
				?>
                <div class="col-md-12">
                    Kolom 1 (col-1-titel) titel is niet gedefinieerd of er zijn helemaal geen kolomen gedefinieerd bij de 'EXTRA VELDEN' optie van deze pagina!";
                </div>
                <?php
			}
			?>
        
      </div><!-- End row -->
      
    </div><!-- End container -->