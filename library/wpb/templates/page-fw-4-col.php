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
                    <p>Kolom 1 (col-1-titel) titel is niet gedefinieerd of er zijn helemaal geen kolomen gedefinieerd bij de 'EXTRA VELDEN' optie van deze pagina!</p>
                    <p>Om kolommen te gebruiken maak je bij de optie 'Extra velden' ('Custom fields') variabelen aan met de gegevens voor elke kolom.</p>
                    <ul class="list-group">
  						<li class="list-group-item">col-1-titel -> Titel van het item</li>
                        <li class="list-group-item">col-1-afbeelding -> Afbeeldings url (zonder domeinnaam url, dus geen http://mijnsite.nl)</li>
                        <li class="list-group-item">col-1-omschrijving -> Korte tekst met betreekking tot het item</li>
                        <li class="list-group-item">col-1-link -> de link die wordt gevolgd bij klikken op de button</li>
                        <li class="list-group-item">col-1-class -> standaard geef je hier basis aan, maar als je css styles gebruikt voor afzonderlijke kolommen kan je hier een classnaam aangeven. (in het style sheet moet je dan een class definieren die begint met 'button-wpb-' + de class naam die je hier hebt aangegeven)</li>
                    </ul>
                    <p>Je kan tot 4 kolommen aanmaken, als je meer rijen van 4 kolommen wilt gebruiken moet je dat in de template aanpassen.</p>
                </div>
                <?php
			}
			?>
        
      </div><!-- End row -->
      
    </div><!-- End container -->