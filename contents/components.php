<?php
	$screen->add_help_tab( array(
	    'id'    	=> 'components-tab',
	    'title' 	=> 'Page Components',
	    'content' 	=> '
	    				<h1>Page Components</h1>
						
						<!-- Spacing Break -->	    				
						<br />
						
						<ul>
							<li><a href="#menus">Menus</a></li>
							<li><a href="#shortcodes">Shortcodes</a></li>
							<li><a href="#share">Social Sharing Icons</a></li>
							<li><a href="#fb_comments">Facebook Comments</a></li>
							<li><a href="#contact">Contact Form 7 Forms</a></li>
							<li><a href="#save_cf7">Save Contact Form 7</a></li>
							<li><a href="#mailchimp">MailChimp Forms</a></li>
							<li><a href="#sidebar_blocks">Sidebar Blocks</a></li>
							<li><a href="#footer_content">Footer Content</a></li>
						</ul>
							
						<!-- Spacing Break -->	    				
						<br />
	
	    				<!---------------------------------
	        				MENUS
	    				---------------------------------->       
	    				<p id="menus">&nbsp;</p>	        				
	    				<h2>Menus</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>

	    				<p>Site Menus are managed on the <a href="/wp-admin/nav-menus.php" target="_blank">Site Menus</a>. This page can be found by clicking on the Appearance > Menus link in the Admin Menu. For a complete overview visit the <a href="https://codex.wordpress.org/WordPress_Menu_User_Guide" target="_blank">WordPress Menu User Guide</a> within the Wordpress Codex.</p>
	
	    				<!---------------------------------
	        				SHORTCODES
	    				---------------------------------->     
	    				<p id="shortcodes">&nbsp;</p>	   				
	    				<h2>Shortcodes</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>

	    				<p>Shortcodes in WordPress allow you to add various functionality into posts, pages, and widgets without actually writing any code. Simply add the element shortcode into the content editor or designated text field and publish your page. When you load the page, in the web browser, WordPress replaces the shortcode with the code that actually displays the element you are adding.</p>
	    				<p>A shortcode looks similar to an HTML tag, but is enclosed with square brackets instead of angle brackets.<br /><em><strong>Example:</strong> [contact-form-7 id="206" title="Contact"]</em></p>
	    				<p>For a complete overview visit the Shortcode API page within the <a href="https://codex.wordpress.org/Shortcode_API" target="_blank">Wordpress Codex</a>.</p>
	    				
	    				<!---------------------------------
	        				SHARE ICONS
	    				---------------------------------->   
	    				<p id="share">&nbsp;</p>	           				
	    				<h2>Social Sharing Icons</h2>   
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>

	    				<p>You can add social sharing buttons to any page on the site. When you are editing the page you will see a &lsquo;Share Buttons&rsquo; section in the sidebar on the right. You can choose whether you want to display the icons at the top of the page, bottom of the page or inline using a shortcode. If you want to display the social share icons in a section simply copy the shortcode from the Share Buttons section and paste it into the WordPress editor where you want the icons to be displayed.</p>
						
						<p><em><strong>NOTE:</strong> This functionality is provided by the <a href="/wp-admin/admin.php?page=sharethis-general" target="_blank">ShareThis plugin</a>. Please visit the <a href="/wp-admin/plugins.php" target="_blank">Plugins page</a> for a complete list of all plugins added to this site.</em></p>
	    				
	    				<!---------------------------------
	        				FACEBOOK COMMENTS
	    				---------------------------------->   
	    				<p id="fb_comments">&nbsp;</p>	           				
	    				<h2>Facebook Comments</h2>   
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>
						
						<p>Facebook Comments are managed on the <a href="/wp-admin/admin.php?page=FB-comments" target="_blank">Facebook Comments Page</a>.</p>
						<p>This plugin requires an App ID. The App ID was created on the <a href="https://developers.facebook.com" target="_blank">Facebook Developers Page</a>. There is moderation capabilities for comments wich are managed by clicking the &lsquo;Moderation Tool&rsquo; link on the post page or visiting the <a href="https://developers.facebook.com/tools-and-support/" target="">Facebook Developers Tools & Support Page</a> and clicking on the Comment Moderation Tool link. You must be logged into the Facebook account that is linked to this tool in order to view moderation page.</p>
						
						<p><em><strong>NOTE:</strong> This functionality is provided by the <a href="/wp-admin/admin.php?page=FB-comments" target="_blank">Facebook Comments plugin</a>. Please visit the <a href="/wp-admin/plugins.php" target="_blank">Plugins page</a> for a complete list of all plugins added to this site.</em></p>
	    				
	    				<!---------------------------------
	        				CONTACT FORM 7 FORMS
	    				---------------------------------->     
	    				<p id="contact">&nbsp;</p>	          				
	    				<h2>Contact Form 7 Forms</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>

	    				<p>Contact Form 7 Forms are managed on the <a href="/wp-admin/admin.php?page=wpcf7" target="_blank">Contact Forms page</a>. This page can be found by clicking on the Contact link in the Admin Menu.</p>
	    				
	    				<p>There is an invisible captcha added onto the Contact Form 7 Forms. This will validate users in the backend and can be managed on the <a href="/wp-admin/options-general.php?page=invisible-recaptcha-settings" target="_blank">Invisible reCaptcha Page</a>. The site and secret keys were generated by Bigfish Creative Group and will be managed on their reCaptcha admin page.</p>
	    				
	    				<strong>Adding a Contact Form Shortcode</strong>
						<ol>
							<li>Navigate to the Contact Forms page</li>
							<li>Locate the form you want to display on your page from the form list</li>
							<li>Copy the form shortcode. The shortcode is located next to the form title. </li>
							<li>Paste form shortcode to within the content editor on the page you want to display the form</li>
						</ol>
						
						<p><em><strong>NOTE:</strong> This functionality is provided by the <a href="https://wordpress.org/plugins/contact-form-7/" target="_blank">Contact Form 7 Plugin</a>. Please visit the <a href="/wp-admin/plugins.php" target="_blank">Plugins page</a> for a complete list of all plugins added to this site.</em></p>
						
	    				<!---------------------------------
	        				SAVE CONTACT FORM 7
	    				---------------------------------->     
	    				<p id="save_cf7">&nbsp;</p>	          				
	    				<h2>Save Contact Form 7</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>
						
	    				<p>Contact Form 7 Forms are managed on the <a href="/wp-admin/admin.php?page=save_contact_form_7" target="_blank">Save Contact Form 7 page</a>. This page can be found by clicking on the Save CF7 link in the Admin Menu.</p>
						
						<p>This plugin allows you to keep track of the users that fill out and submit forms using <a href="https://wordpress.org/plugins/contact-form-7/" target="_blank">Contact Form 7 Plugin</a>.</p>
						
						<ul>
							<li>Select from multiple CF7 to populate the entries.</li>
							<li>Track even deleted CF7 Form’s data</li>
							<li>Search, sort, filter all the entries.</li>
							<li>Export all, or only searched or filtered results.</li>
							<li>Export in PDF, CSV.</li>
							<li>Print Button to print all or filtered entries.</li>
							<li>View Uploaded Image, and download uploaded image/file</li>
						</ul>

						<p><em><strong>NOTE:</strong> This functionality is provided by the <a href="https://wordpress.org/plugins/save-contact-form-7/" target="_blank">Save Contact Form 7 Plugin</a>. Please visit the <a href="/wp-admin/plugins.php" target="_blank">Plugins page</a> for a complete list of all plugins added to this site.</em></p>
						
	    				<!---------------------------------
	        				MAILCHIMP FORMS
	    				---------------------------------->     
	    				<p id="mailchimp">&nbsp;</p>	          				
	    				<h2>MailChimp Forms</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>

	    				<p>Forms that collect user information that is added to a MailChimp list are managed on the <a href="/wp-admin/admin.php?page=mailchimp-for-wp-forms" target="_blank">MailChimp for WP page</a>. This page can be found by clicking on the MailChimp for WP in the Admin Menu.</p>
	    				
	    				<strong>Adding a MailChimp Form Shortcode</strong>
						<ol>
							<li>Navigate to the MailChimp for WP Forms page</li>
							<li>Make sure all form fields are correct</li>
							<li>Copy the form shortcode. It is located below the form editor.</li>
							<li>Paste form shortcode to within the content editor on the page you want to display the form</li>
						</ol>
	    				
	    				<p>For additional documentation visit the plugin <a href="https://kb.mc4wp.com/" target="_blank">Knowledge Base page</a></p>
	
						<p><em><strong>NOTE:</strong> This functionality is provided by the <a href="https://wordpress.org/plugins/mailchimp-for-wp/" target="_blank">MailChimp for WordPress</a>. Please visit the <a href="/wp-admin/plugins.php" target="_blank">Plugins page</a> for a complete list of all plugins added to this site.</em></p>

	
						<!---------------------------------- 
							END CONTENT - Spacing Break 
						----------------------------------->
						<p>&nbsp;</p>
						'
	) );