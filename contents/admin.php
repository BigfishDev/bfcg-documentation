<?php 
    $screen->add_help_tab( array(
	    'id'    	=> 'admin-settings-tab',
	    'title' 	=> 'Administration',
	    'content' 	=> '
	    
	    				<h1>Administration</h1>

						<!-- Spacing Break -->	    				
						<br />

						<ul>
							<li><a href="#dashboard">Dashboard</a></li>
							<li><a href="#screens">Admin Screens</a></li>
							<li><a href="#theme">Managing Your Theme</a></li>
							<li><a href="#users">User Roles</a></li>
							<li><a href="#settings">Settings</a></li>
							<li><a href="#seo">SEO</a></li>
						</ul>
						
						<!-- Spacing Break -->	    				
						<br />
						
	    				<!---------------------------------
	        				DASHBOARD
	    				---------------------------------->            				
	    				<h2 id="dashboard">Dashboard</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>
						
	    				<p>The Dashboard (wp-admin) is the first screen you see when you log into the administration area of your site. The main idea of the dashboard is to give you a place where you can get an at-a-glance overview of what&requo;s happening with your blog. You can catch up on news, view your draft posts, see who’s linking to you or how popular your content’s been, quickly put out a post, or check out and moderate your latest comments.</p>
	    						
	    				<!---------------------------------
	        				ADMIN SCREENS
	    				---------------------------------->            				
	    				<h2 id="screens">Admin Screens</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>
						
	    				<p>The admin screens allow you to control the features of your website. For a complete overview of each of the screens visit the <a href="https://codex.wordpress.org/Administration_Screens" target="_blank">Administration Screens</a> page within the WordPress Codex.</p>
	    						
	    				<!---------------------------------
	        				MANAGING THEME
	    				---------------------------------->       				
	    				<h2 id="theme">Managing Your Theme</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>
						
	    				<p>Your site&rsquo;s theme is set on the <a href="/wp-admin/themes.php" target="_blank">Themes page</a>. This page can be found by clicking on the Appearance > Themes link in the Admin Menu. This allows you to set which theme your site uses.</p>
						
						<strong>Customizing</strong>		    				
	    				<p>You can customize your theme by visiting the <a href="/wp-admin/customize.php?return=%2Fwp-admin%2Fthemes.php" target="_blank">Customize page</a>. This page can be found by clicking on the Appearance > Customize link in the Admin Menu. For a complete overview visit the <a href="https://codex.wordpress.org/Appearance_Customize_Screen" target="_blank">Appearance Customize Screen</a> page within the WordPress Codex.</p>
	    				<p>The following are the items that can be updated from this screen.</p>
						<ul>
							<li>Theme</li>
							<li>Site Identity
								<ul>
									<li>Logo</li>
									<li>Site Title</li>
									<li>Site Tagline</li>
									<li>Site Favicon</li>
								</ul>								
							</li>
							<li>Menus</li>
							<li>Widgets</li>
							<li>Homepage Settings</li>
							<li>Additional CSS
								<p>This is a place where a developer can add styles for your theme.</p>
							</li>
						</ul>
						
	    				<!---------------------------------
	        				USERS
	    				---------------------------------->            				
	    				<h2 id="users">User Roles</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>
						
	    				<p>Users are managed on the <a href="/wp-admin/users.php" target="_blank">Users</a>. This page can be found by clicking on the Users link in the Admin Menu. For a complete overview on user roles visit the <a href="https://codex.wordpress.org/Roles_and_Capabilities" target="_blank">Roles and Capabilities</a> page within the WordPress Codex.</p>
	    				
	    				<strong>Adding a User</strong>
						<ul>
							<li>Go to the Users page and click the &lsquo;Add New&rsquo; button.</li>
							<li>Fill out user details</li>
							<li>Select Role</li>
							<li>&lsquo;Add New&rsquo;</li>
						</ul>
						
	    				<!---------------------------------
	        				SETTINGS
	    				---------------------------------->            				
	    				<h2 id="settings">Settings</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>
						<p>You can update your site settings by visiting the various settings pages. Below is a list of each settings page with the site page link and the WordPress documentation page link.</p>
	    				
						<ul>
							<li><strong>General:</strong> <a href="/wp-admin/options-general.php" target="_blank">Site Page</a> | <a href="/wp-admin/options-general.php" target="_blank">Wordpress Codex</a>
								<p>The General Settings let you control how your site is displayed, such as the title, tagline, language, and visibility.</p>
							</li>
							<li><strong>Writing:</strong> <a href="/wp-admin/options-writing.php" target="_blank">Site Page</a> | <a href="https://codex.wordpress.org/Settings_Writing_Screen" target="_blank">Wordpress Codex</a>
								<p>The Writing page controls the interface you use when writing new posts such as default post category/format, Post via email and Update Services.</p>
							</li>
							<li><strong>Reading:</strong> <a href="/wp-admin/options-reading.php" target="_blank">Site Page</a> | <a href="https://codex.wordpress.org/Settings_Reading_Screen" target="_blank">Wordpress Codex</a>
								<p>The Reading settings control how your blog is displayed to visitors.</p>
							</li>
							<li><strong>Discussion:</strong> <a href="/wp-admin/options-discussion.php" target="_blank">Site Page</a> | <a href="https://codex.wordpress.org/Settings_Discussion_Screen" target="_blank">Wordpress Codex</a>
								<p>The Discussion Settings are used to control how visitors and other blogs interact with your site. You can set options concerning comments when using default WP Comments functionality. This page won&rsquo;t have any affect if the site is using a third party discussion plugin.</p>
							</li>
							<li><strong>Media:</strong> <a href="/wp-admin/options-media.php" target="_blank">Site Page</a> | <a href="" target="_blank">Wordpress Codex</a>
								<p>The Media Settings allows you to control how your media is displayed. </p>
							</li>
							<li><strong>Permalinks:</strong> <a href="/wp-admin/options-permalink.php" target="_blank">Site Page</a> | <a href="" target="_blank">Wordpress Codex</a>
								<p>Permalinks are the permanent URLs to your individual pages and blog posts, as well as your category and tag archives. This page allows you to control how the permalink is displayed.</p>
							</li>
							<li><strong>WP Media Folder:</strong> <a href="/wp-admin/options-general.php?page=option-folder" target="_blank">Site Page</a> | <a href="https://www.joomunited.com/documentation/wp-media-folder-documentation" target="_blank">Plugin Documentation</a>
								<p>This page is not a part of default WordPress settings. See the plugin documentation for more information.</p>
							</li>
						</ul>
						
	    				<!---------------------------------
	        				SEO
	    				---------------------------------->            				
	    				<h2 id="seo">SEO</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>
						<p>Yoast SEO Settings are managed on the <a href="/wp-admin/admin.php?page=wpseo_dashboard" target="_blank">General - Yoast SEO page</a>. This page can be found by clicking on the SEO link in the Admin Menu. This functionality is provided by the <a href="https://yoast.com/" target="_blank">Yoast SEO plugin</a>. To learn more about how to use this plugin read <a href="https://yoast.com/beginners-guide-yoast-seo/" target="_blank">The beginner‘s guide to Yoast SEO</a>.</p>
	    				
						<!---------------------------------- 
							END CONTENT - Spacing Break 
						----------------------------------->
						<p>&nbsp;</p>
	
	    				'
    ) );