    <header class="
	<?php
	if (is_home() || is_front_page()) {
		echo 'header';
	} else {
		echo 'header header__single';
	} ?>
	">
    	<div class="wrapper only-desk">
    		<div class="header__logo">
    			<h1>
    				logo
    				<a href="<?php echo esc_url(home_url()); ?>" title="<?php echo get_bloginfo('name'); ?>"">
    					<img src="<?php echo get_field('img', 'option') ?>" alt="Dr Fabio Freire" />
    				</a>

    				<span class="hamburguer">
    					&nbsp;
    				</span>
    			</h1>
    		</div>
    		<nav class="header__nav">
    			<ul>
    				<?php
					$header_menu = wp_get_nav_menu_items("menu-principal");
					foreach ($header_menu as $key => $menu_item) {
						echo '<li> <a title="' . str_replace('*', '', $menu_item->title) . '" href="' . $menu_item->url . '" class="menu__item ' . (get_the_ID() == $menu_item->object_id ? 'is-current active' : '') . '" target="' . $menu_item->target . '">';
						$menu_title = $menu_item->title;

						if (strpos($menu_item->title, '*') !== false) {
							$menu_title = str_replace('*', '', $menu_item->title);
						}

						echo $menu_title;
						echo '</a> </li>';
					}
					?>
    			</ul>

    			<div class="social__medias">
    				<?php if (get_field('instagram', 'option')) : ?>
    					<a href="<?php the_field('instagram', 'option'); ?>">
    						<svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
    							<path fill-rule="evenodd" clip-rule="evenodd" d="M64.5 32.9C64.5 37.7 64.7 42.5 64.5 47.3C64.1 53.6 61.6 58.8 55.9 62.2C53.6 63.5 51 64.5 48.4 64.5C40 64.8 31.6 64.9 23.2 64.9C21.2 64.9 19.2 64.7 17.3 64.5C8.39998 63.8 2.29998 58.1 1.19998 49.3C0.799984 46.3 0.699984 43.3 0.699984 40.3C0.599984 33.5 0.799984 26.6 0.899984 19.8C0.899984 17.2 1.39998 14.6 2.29998 12.2C4.69998 6.00002 9.29998 2.60002 15.7 1.50002C18.4 1.10002 21.1 0.900024 23.8 0.900024C31.4 0.900024 39 0.900024 46.6 1.10002C51 1.20002 55.1 2.50002 58.5 5.50002C62.4 8.90002 64.2 13.3 64.4 18.3C64.6 23.2 64.5 28.1 64.5 32.9V32.9ZM32.7 7.10002C32.7 7.16669 32.7 7.20002 32.7 7.20002C27.8 7.20002 23 7.00002 18.1 7.20002C11.6 7.60002 7.49998 11.8 6.99998 18.3C6.69998 21.8 6.49998 25.3 6.59998 28.8C6.59998 34.8 6.69998 40.8 6.89998 46.8C7.09998 51.5 8.89998 55.4 13.5 57.4C15.2 58.1 17.2 58.5 19.1 58.6C25 58.9 30.9 58.9 36.8 58.9C40.5 58.9 44.1 58.8 47.8 58.6C50.1 58.4 52.3 57.6 54.2 56.2C57 53.9 58.2 50.9 58.4 47.5C58.6 43.8 58.8 40.1 58.7 36.5C58.7 30.4334 58.6 24.4 58.4 18.4C58.3 15.1 57 12.3 54.6 10.1C52.3 8.10003 49.6 7.30002 46.7 7.20002C42 7.10002 37.3 7.10002 32.7 7.10002Z" fill="white" />
    							<path fill-rule="evenodd" clip-rule="evenodd" d="M32.6 49.4C23.5 49.4 16.1 42.1 16.2 32.9C16.3 23.4 23.5 16.4 32.7 16.4C41.7 16.3 49.3 23.3 49.2 33C49.1 43.2 40.9 49.5 32.6 49.4ZM43.2 33.1C43.3 27.4 38.6 22.5 32.9 22.4C27.1 22.3 22.2 27 22.2 32.8C22.1 38.5 26.9 43.3 32.7 43.4C38.3 43.5 43.1 38.8 43.2 33.1Z" fill="white" />
    							<path d="M49.6999 19.8C51.8538 19.8 53.5999 18.0539 53.5999 15.9C53.5999 13.7461 51.8538 12 49.6999 12C47.546 12 45.7999 13.7461 45.7999 15.9C45.7999 18.0539 47.546 19.8 49.6999 19.8Z" fill="white" />
    						</svg>
    					</a>
    				<?php endif; ?>
					<?php if (get_field('facebook', 'option')) : ?>
    					<a href="<?php the_field('facebook', 'option'); ?>">
    						<svg width="36" height="66" viewBox="0 0 36 66" fill="none" xmlns="http://www.w3.org/2000/svg">
    							<path d="M1.09999 25.3C4.49999 25.3 7.59999 25.3 10.9 25.3C11 24.3 11.1 23.6 11.1 22.8C11.2 20.1 11.2 17.5 11.3 14.8C11.4 12.4 12 10.1 13.1 7.99998C15.1 4.19998 18.3 2.09998 22.4 1.19998C26.7 0.299976 30.9 0.899976 35.5 1.69998C35.6 4.99998 35.5 8.19998 35.5 11.6C33.8 11.7 32.4 11.8 31 11.7C26.2 11.5 23.7 13.7 23.9 19C24 20.9 23.9 22.8 23.9 24.9C25.8 25.5 27.6 25.1 29.3 25.2C31.1 25.2 32.8 25.2 34.6 25.2C34.7 25.9 34.8 26.4 34.7 26.9C34.3 29.7 33.9 32.6 33.5 35.4C33.3 36.5 32.8 37 31.6 37C29.2 37 26.8 37 24.1 37C23.7 41.8 24 46.5 23.9 51.1C23.9 55.7 23.9 60.3 23.9 64.8C22.1 65.5 14 65.7 11.3 65.1C11 55.9 11.3 46.7 11.1 37.3C7.79999 36.7 4.49999 37.4 1.19999 36.8C0.799989 33 0.999989 29.3 1.09999 25.3V25.3Z" fill="white" />
    						</svg>
    					</a>
    				<?php endif; ?>
    				<?php if (get_field('whatsapp', 'option')) : ?>
    					<a href="<?php the_field('whatsapp', 'option'); ?>">
    						<span>whatsapp</span>
    						<svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
    							<path fill-rule="evenodd" clip-rule="evenodd" d="M0.699951 65.5C0.999951 64.5 1.19995 63.6 1.39995 62.8C2.53328 58.6 3.69995 54.4 4.89995 50.2C5.09995 49.3 4.99995 48.5 4.59995 47.7C-0.200049 37.9 -0.500049 28 4.49995 18.3C9.99995 7.60003 18.9 1.60003 30.9 0.800027C43.4 -0.0999726 53.2999 4.90003 60.2999 15.3C68.1999 27.1 66.9 43.2 57.4 53.9C50.7 61.5 42.0999 65.2 31.9 65C27.4 64.9 23.1 63.8 19.1 61.8C18.1 61.3 17.3 61.2 16.3 61.5C11.6 62.8 6.99995 64 2.39995 65.2C1.89995 65.3 1.39995 65.4 0.699951 65.5V65.5ZM8.69995 57.6C9.39995 57.4 9.79995 57.4 10.2 57.3C12.5 56.7 14.7 56.1 17 55.5C18 55.2 18.9 55.3 19.9 55.8C28.4 60.5 37.2 60.8 45.7 56.2C63.5 46.4 64.4 22.6 48.9 11.3C38.3 3.50003 23.3 4.70003 14.3 14.1C5.59995 23.1 4.09995 36 10.5 46.7C11 47.6 11.2 48.4 10.9 49.4C10.1 52 9.49995 54.7 8.69995 57.6V57.6Z" fill="#4a72b0" />
    							<path d="M23.2 18.7C24.5 18.3 25.2 19.1 25.7 20.4C26.3 22 26.9666 23.6 27.7 25.2C28.2 26.2 28.1 27.1 27.4 28C27 28.5333 26.6 29.0333 26.2 29.5C25.4 30.4 25.3 30.6 26 31.6C27.7 34.4 29.9 36.7 32.6 38.4C33.7 39.1 34.9 39.6 36 40.2C36.7 40.6 37.3 40.4 37.8 39.8C38.4666 38.9333 39.1333 38.1 39.8 37.3C40.6 36.3 40.9 36.2 42 36.7C43.9 37.6 45.8 38.5 47.7 39.4C48.5 39.8 48.8 40.4 48.7 41.3C48.4 44.5 46.3 46.8 43 47.4C41.4 47.7 39.7 47.6 38.1 47.1C31.9 45.4 26.9 41.9 22.9 36.9C21 34.7 19.2 32.5 18.2 29.7C17 26.3 17.2 23.2 19.5 20.2C20.5 19.1 21.5 18.4 23.2 18.7V18.7Z" fill="#4a72b0" />
    						</svg>
    					</a>
    				<?php endif; ?>
    			</div>
    		</nav>
    	</div>
    	<div class="wrapper only-mobile">
    		<nav class="header__nav">
    			<ul>
    				<?php
					$header_menu = wp_get_nav_menu_items("menu-principal");
					foreach ($header_menu as $key => $menu_item) {
						echo '<li> <a title="' . str_replace('*', '', $menu_item->title) . '" href="' . $menu_item->url . '" class="menu__item ' . (get_the_ID() == $menu_item->object_id ? 'is-current active' : '') . '" target="' . $menu_item->target . '">';
						$menu_title = $menu_item->title;

						if (strpos($menu_item->title, '*') !== false) {
							$menu_title = str_replace('*', '', $menu_item->title);
						}

						echo $menu_title;
						echo '</a> </li>';
					}
					?>
    			</ul>

    			<div class="social__medias">
    				<?php if (get_field('instagram', 'option')) : ?>
    					<a href="<?php the_field('instagram', 'option'); ?>">
    						<svg width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
    							<path fill-rule="evenodd" clip-rule="evenodd" d="M64.5 32.9C64.5 37.7 64.7 42.5 64.5 47.3C64.1 53.6 61.6 58.8 55.9 62.2C53.6 63.5 51 64.5 48.4 64.5C40 64.8 31.6 64.9 23.2 64.9C21.2 64.9 19.2 64.7 17.3 64.5C8.39998 63.8 2.29998 58.1 1.19998 49.3C0.799984 46.3 0.699984 43.3 0.699984 40.3C0.599984 33.5 0.799984 26.6 0.899984 19.8C0.899984 17.2 1.39998 14.6 2.29998 12.2C4.69998 6.00002 9.29998 2.60002 15.7 1.50002C18.4 1.10002 21.1 0.900024 23.8 0.900024C31.4 0.900024 39 0.900024 46.6 1.10002C51 1.20002 55.1 2.50002 58.5 5.50002C62.4 8.90002 64.2 13.3 64.4 18.3C64.6 23.2 64.5 28.1 64.5 32.9V32.9ZM32.7 7.10002C32.7 7.16669 32.7 7.20002 32.7 7.20002C27.8 7.20002 23 7.00002 18.1 7.20002C11.6 7.60002 7.49998 11.8 6.99998 18.3C6.69998 21.8 6.49998 25.3 6.59998 28.8C6.59998 34.8 6.69998 40.8 6.89998 46.8C7.09998 51.5 8.89998 55.4 13.5 57.4C15.2 58.1 17.2 58.5 19.1 58.6C25 58.9 30.9 58.9 36.8 58.9C40.5 58.9 44.1 58.8 47.8 58.6C50.1 58.4 52.3 57.6 54.2 56.2C57 53.9 58.2 50.9 58.4 47.5C58.6 43.8 58.8 40.1 58.7 36.5C58.7 30.4334 58.6 24.4 58.4 18.4C58.3 15.1 57 12.3 54.6 10.1C52.3 8.10003 49.6 7.30002 46.7 7.20002C42 7.10002 37.3 7.10002 32.7 7.10002Z" fill="white" />
    							<path fill-rule="evenodd" clip-rule="evenodd" d="M32.6 49.4C23.5 49.4 16.1 42.1 16.2 32.9C16.3 23.4 23.5 16.4 32.7 16.4C41.7 16.3 49.3 23.3 49.2 33C49.1 43.2 40.9 49.5 32.6 49.4ZM43.2 33.1C43.3 27.4 38.6 22.5 32.9 22.4C27.1 22.3 22.2 27 22.2 32.8C22.1 38.5 26.9 43.3 32.7 43.4C38.3 43.5 43.1 38.8 43.2 33.1Z" fill="white" />
    							<path d="M49.6999 19.8C51.8538 19.8 53.5999 18.0539 53.5999 15.9C53.5999 13.7461 51.8538 12 49.6999 12C47.546 12 45.7999 13.7461 45.7999 15.9C45.7999 18.0539 47.546 19.8 49.6999 19.8Z" fill="white" />
    						</svg>
    					</a>
    				<?php endif; ?>
					<?php if (get_field('facebook', 'option')) : ?>
    					<a href="<?php the_field('facebook', 'option'); ?>">
    						<svg width="36" height="66" viewBox="0 0 36 66" fill="none" xmlns="http://www.w3.org/2000/svg">
    							<path d="M1.09999 25.3C4.49999 25.3 7.59999 25.3 10.9 25.3C11 24.3 11.1 23.6 11.1 22.8C11.2 20.1 11.2 17.5 11.3 14.8C11.4 12.4 12 10.1 13.1 7.99998C15.1 4.19998 18.3 2.09998 22.4 1.19998C26.7 0.299976 30.9 0.899976 35.5 1.69998C35.6 4.99998 35.5 8.19998 35.5 11.6C33.8 11.7 32.4 11.8 31 11.7C26.2 11.5 23.7 13.7 23.9 19C24 20.9 23.9 22.8 23.9 24.9C25.8 25.5 27.6 25.1 29.3 25.2C31.1 25.2 32.8 25.2 34.6 25.2C34.7 25.9 34.8 26.4 34.7 26.9C34.3 29.7 33.9 32.6 33.5 35.4C33.3 36.5 32.8 37 31.6 37C29.2 37 26.8 37 24.1 37C23.7 41.8 24 46.5 23.9 51.1C23.9 55.7 23.9 60.3 23.9 64.8C22.1 65.5 14 65.7 11.3 65.1C11 55.9 11.3 46.7 11.1 37.3C7.79999 36.7 4.49999 37.4 1.19999 36.8C0.799989 33 0.999989 29.3 1.09999 25.3V25.3Z" fill="white" />
    						</svg>
    					</a>
    				<?php endif; ?>
    				<?php if (get_field('whatsapp', 'option')) : ?>
    					<a href="<?php the_field('whatsapp', 'option'); ?>">
    						<span>whatsapp</span>
    						<svg width="66" height="66" viewBox="0 0 66 66" fill="none" xmlns="http://www.w3.org/2000/svg">
    							<path fill-rule="evenodd" clip-rule="evenodd" d="M0.699951 65.5C0.999951 64.5 1.19995 63.6 1.39995 62.8C2.53328 58.6 3.69995 54.4 4.89995 50.2C5.09995 49.3 4.99995 48.5 4.59995 47.7C-0.200049 37.9 -0.500049 28 4.49995 18.3C9.99995 7.60003 18.9 1.60003 30.9 0.800027C43.4 -0.0999726 53.2999 4.90003 60.2999 15.3C68.1999 27.1 66.9 43.2 57.4 53.9C50.7 61.5 42.0999 65.2 31.9 65C27.4 64.9 23.1 63.8 19.1 61.8C18.1 61.3 17.3 61.2 16.3 61.5C11.6 62.8 6.99995 64 2.39995 65.2C1.89995 65.3 1.39995 65.4 0.699951 65.5V65.5ZM8.69995 57.6C9.39995 57.4 9.79995 57.4 10.2 57.3C12.5 56.7 14.7 56.1 17 55.5C18 55.2 18.9 55.3 19.9 55.8C28.4 60.5 37.2 60.8 45.7 56.2C63.5 46.4 64.4 22.6 48.9 11.3C38.3 3.50003 23.3 4.70003 14.3 14.1C5.59995 23.1 4.09995 36 10.5 46.7C11 47.6 11.2 48.4 10.9 49.4C10.1 52 9.49995 54.7 8.69995 57.6V57.6Z" fill="#4a72b0" />
    							<path d="M23.2 18.7C24.5 18.3 25.2 19.1 25.7 20.4C26.3 22 26.9666 23.6 27.7 25.2C28.2 26.2 28.1 27.1 27.4 28C27 28.5333 26.6 29.0333 26.2 29.5C25.4 30.4 25.3 30.6 26 31.6C27.7 34.4 29.9 36.7 32.6 38.4C33.7 39.1 34.9 39.6 36 40.2C36.7 40.6 37.3 40.4 37.8 39.8C38.4666 38.9333 39.1333 38.1 39.8 37.3C40.6 36.3 40.9 36.2 42 36.7C43.9 37.6 45.8 38.5 47.7 39.4C48.5 39.8 48.8 40.4 48.7 41.3C48.4 44.5 46.3 46.8 43 47.4C41.4 47.7 39.7 47.6 38.1 47.1C31.9 45.4 26.9 41.9 22.9 36.9C21 34.7 19.2 32.5 18.2 29.7C17 26.3 17.2 23.2 19.5 20.2C20.5 19.1 21.5 18.4 23.2 18.7V18.7Z" fill="#4a72b0" />
    						</svg>
    					</a>
    				<?php endif; ?>
    			</div>
    		</nav>
    	</div>
    </header>