<?php /* Called by header, option theme, non usefull for the project */ ?>
<div class="headertop">
	<div class="container">     
		<div class="widget-left">
			<?php
			if ( ! dynamic_sidebar( 'header-info-left' ) ) : ?>
			<div class="headerinfo">
				<?php
				if( get_theme_mod('header_phone', '+123 456 7890') ) { ?>
				<span class="phoneno"><?php echo esc_html(get_theme_mod('header_phone', '+123 456 7890', 'skt-charity')); ?></span>
					<?php
				}
				?>
				<?php
				if( get_theme_mod('header_address', '1600 Amphitheatre Parkway Mountain View, CA 94043') ) { ?>
					<span class="address">
					<?php echo esc_html(get_theme_mod('header_address', '1600 Amphitheatre Parkway Mountain View, CA 94043', 'skt-charity')); ?>
					</span>
					<?php
				}
				?>                 
			</div>                 
			<?php
			endif; // end sidebar widget area ?>     
		</div><!--widget-left-->
		<div class="widget-right">
			<?php
			if(!dynamic_sidebar('header-info-right')): ?>
			<div class="headerinfo">               
				<?php
				if ( get_theme_mod('donate_link') != "") { ?> 
				<a class="heart" href="<?php echo esc_url(get_theme_mod('donate_link','#')); ?>"><?php esc_attr_e('Donate','skt-charity'); ?></a>
				<?php
				}else{
					?>
				<a class="heart" href="<?php echo esc_url('#');?>"><?php esc_attr_e('Donate','skt-charity'); ?></a>
					<?php
					}
					?>
				<?php
				if ( get_theme_mod('volunteer_link') != "") { ?> 
					<a class="user" href="<?php echo esc_url(get_theme_mod('volunteer_link','#')); ?>"><?php esc_attr_e('Become a Volunteer','skt-charity'); ?></a>
				<?php
				}else{
					?>
					<a class="user" href="<?php echo esc_url('#');?>"><?php esc_attr_e('Become a Volunteer','skt-charity'); ?></a>
					<?php
					}
					?>
			</div>
			<?php
			endif;
			?>
		</div><!--widget-right-->
		<div class="clear"></div>     
	</div>
</div><!-- end headertop -->
