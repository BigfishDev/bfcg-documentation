<?php 	
	$screen->add_help_tab( array(
		'id'    	=> 'general-tab',
		'title' 	=> 'Content',
		'content' 	=> '
						<h1>Content</h1>			

						<!-- Spacing Break -->	    				
						<br />		

						<ul>
							<li><a href="#manage">Managing Pages</a></li>
							<li><a href="#wysiwyg">Content Editor</a></li>
							<li><a href="#manage_layouts">Managing Layouts</a></li>
						</ul>
						
						<!-- Spacing Break -->	    				
						<br />
						
	    				<!---------------------------------
	        				MANAGING PAGES
	    				---------------------------------->               
	    				<p id="manage">&nbsp;</p>	       				
	    				<h2>Managing Pages</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>

	    				<p>Pages are managed in <a href="/wp-admin/edit.php?post_type=page" target="_blank">Pages</a>. This page can be found by clicking on the Pages link in the Admin Menu.</p>
	    				<p>There are many options regarding page publishing, parent/child relationships and templates. For a complete overview visit <a href="https://codex.wordpress.org/Pages" target="_blank">Pages</a> within the Wordpress Codex.</p>
	    				
	    				<strong>Adding a Page</strong>
						<ol>
							<li>Click the &lsquo;Add New&rsquo; button on the top of the page list.</li>
							<li>Add your content to the page.</li>
							<li>Publish the page by clicking the &lsquo;Publish&rsquo; button in the sidebar on the right hand side</li>
						</ol>
	
						<!---------------------------------
							WYSIWYG
						---------------------------------->        
	    				<p id="wysiwyg">&nbsp;</p>	              				
						<h2>Content Editor</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>
						
						<strong>Formatting a Heading</strong>
						<p>There are suggested heading instructions within each section, if applicable. </p>
						<ol>
						<li>Click on the Font Format drop down list to select the suggested heading format</li>
						</ol>
						
						<strong>Formatting a Paragraph</strong>
						<ol>
							<li>Select the paragraph option from the font format dropdown in the simple text editor</li>
							<li>Add paragraph text</li>
							<li>Press the ‘enter’ button to add another paragraph</li>
						</ol>
						
						<strong>Adding a line break</strong>
						<ul>
							<li>Hold Shift+Return <em>(Mac)</em></li>
							<li>Hold Shift+Enter <em>(PC)</em></li>
						</ul>
						
						<strong>Adding Links</strong>
						<ol>
							<li>Highlight the text that you would like to make a hyper link</li>
							<li>Click the ‘insert/edit link ‘ icon in the WYSIWYG options panel</li>
							<li>Paste the URL you want to add or type a page title to add existing content</li>
							<li><strong>Open link in new tab</strong> 
								<ul>
									<li>Click the gear icon to open a ‘Link Options’ window</li>
									<li>Click the ‘open link in new tab’ option. This will open the url in a new tab within the browser</li>
								</ul>
							</li>
						</ol>
						
						<strong>Editing Links</strong>
						<ol>
							<li>Click on the link that needs updating</li>
							<li>A simple ‘Link Options’ window will appear</li>
							<li>Click the ‘edit’ icon</li>
							<li>Edit the link<br /><em><strong>NOTE:</strong> To open the advanced ‘Link Options’ window, click the gear icon</em></li>
							<li>Click the ‘Apply’ icon</li>
						</ol>
								
						<strong>Deleting Links</strong>
						<ol>
							<li>Click on the link that needs deleting</li>
							<li>A simple ‘Link Options’ window will appear</li>
							<li>Click the ‘Remove Link’ icon</li>
						</ol>
						
						<strong>Adding a Button</strong>
						<ol>
							<li>Click the [btn] button in the content editor toolbar</li>
							<li>The following shortcode will appear in the editor: <br />[btn link="ADD URL" new_window="false"]BUTTON_TEXT[/btn]</li>
							<li>Replace ADD_URL with the internal page path or external page URL.</li>
							<li>Replace the BUTTON_TEXT with the updated button CTA</li>
						</ol>
						<p><em><strong>NOTE:</strong> If you are linking to an internal page copy the url after the main site domain.</em></p>
						<p>Example:</p>
						<ul>
							<li>About us page URL: <i>https://partnersinaction.org/about-us/</i></li>
							<li>You will paste <i>/about-us/</i> into the ADD_URL area of the button shortcode.</li>
						</ul>
						<p><a href="/wp-content/plugins/bfcg-documentation/assets/img/sample-btn-shortcode.jpg" target="_blank"><img style="max-width:100%" src="/wp-content/plugins/bfcg-documentation/assets/img/sample-btn-shortcode.jpg" /></a></p>
						
						<strong>Linking to a Media File</strong>
						<ul>
							<li>Open the <a href="/wp-admin/upload.php" target="_blank">Media Library Page</a> in a new tab.</li>
							<li>Find the asset/file that you want to link to and click on it to open the &lsquo;Attachment Details View&rsquo;</li>
							<li>Copy the url starting at <i>/wp-content/</i></li>
						</ul>
						
						<strong>Example:</strong>						
						<p>Asset URL: <i>https://pia.bigfishdev.com/wp-content/uploads/2018/01/icon-major-gifts.png</i></p>
						<p>Copy this part of the URL: <i>/wp-content/uploads/2018/01/icon-major-gifts.png</i></p>
						<p><a href="/wp-content/plugins/bfcg-documentation/assets/img/sample-media-url.jpg" target="_blank"><img style="max-width:100%" src="/wp-content/plugins/bfcg-documentation/assets/img/sample-media-url.jpg" /></a></p>

						<strong>Adding Images</strong>
						<ol>
							<li>Click the ‘Add Image’ button to add an image from the media library</li>
						</ol>
						
						<strong>Removing Images</strong>
						<ol>
							<li>Hover over the existing image</li>
							<li>An edit and an ‘x’ will appear</li>
							<li>Click the ‘x’ icon to remove the image</li>
						</ol>
						            				
	    				<!---------------------------------
	        				Managing Layouts
	    				---------------------------------->        
	    				<p id="manage_layouts">&nbsp;</p>	              				
	            		<h2>Managing Layouts</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>
							
						<strong>Adding Layouts:</strong>
						<ol>
							<li>Click the &lsquo;Add Section Layout&rsquo; button</li>
							<li>Select the layout option from the list of layouts</li>
						</ol>
						<p><a href="/wp-content/plugins/bfcg-documentation/assets/img/sample-layouts-add-content-section.jpg" target="_blank"><img style="max-width:100%" src="/wp-content/plugins/bfcg-documentation/assets/img/sample-layouts-add-content-section.jpg" /></a></p>
						<p><a href="/wp-content/plugins/bfcg-documentation/assets/img/sample-layouts-add-content-section-2.jpg" target="_blank"><img style="max-width:100%" src="/wp-content/plugins/bfcg-documentation/assets/img/sample-layouts-add-content-section-2.jpg" /></a></p>
												            				
						<strong>Removing Layouts and Rows:</strong>
						<ol>
							<li>Hover over the layout title you wish to remove.</li>
							<li>A plus icon and a minus icon will appear on the right hand side of the content block.</li>
							<li>Click the minus icon to remove the layout.</li>
						</ol>
						<p><a href="/wp-content/plugins/bfcg-documentation/assets/img/sample-layouts-remove-layout.jpg" target="_blank"><img style="max-width:100%" src="/wp-content/plugins/bfcg-documentation/assets/img/sample-layouts-remove-layout.jpg" /></a></p>
						<p><a href="/wp-content/plugins/bfcg-documentation/assets/img/sample-layouts-remove-row.jpg" target="_blank"><img style="max-width:100%" src="/wp-content/plugins/bfcg-documentation/assets/img/sample-layouts-remove-row.jpg" /></a></p>
						            				
						<strong>Adding Sections and Rows: </strong>
						<ol>
							<li>Hover over the place on the page where you want to add a section or a row.</li>
							<li>A plus icon and a minus icon will appear on the right hand side of the content block.</li>
							<li>Click the plus icon to add the section or row.</li>
						</ol>
						<p><a href="/wp-content/plugins/bfcg-documentation/assets/img/sample-layouts-add-layout.jpg" target="_blank"><img style="max-width:100%" src="/wp-content/plugins/bfcg-documentation/assets/img/sample-layouts-add-layout.jpg" /></a></p>
						<p><a href="/wp-content/plugins/bfcg-documentation/assets/img/sample-layouts-add-row.jpg" target="_blank"><img style="max-width:100%" src="/wp-content/plugins/bfcg-documentation/assets/img/sample-layouts-add-row.jpg" /></a></p>
	
						<strong>To Reorder Sections:</strong>
						<ol>
							<li>Hover over the number to the left of the section you wish to reorder</li>
							<li>A crosshair will appear as the mouse cursor.</li>
							<li>Drag the section to the desired location </li>
						</ol>
						<p><a href="/wp-content/plugins/bfcg-documentation/assets/img/sample-layouts-reorder-layout.jpg" target="_blank"><img style="max-width:100%" src="/wp-content/plugins/bfcg-documentation/assets/img/sample-layouts-reorder-layout.jpg" /></a></p>
						<p><a href="/wp-content/plugins/bfcg-documentation/assets/img/sample-layouts-reorder-row.jpg" target="_blank"><img style="max-width:100%" src="/wp-content/plugins/bfcg-documentation/assets/img/sample-layouts-reorder-row.jpg" /></a></p>
						
						<!---------------------------------- 
							END CONTENT - Spacing Break 
						----------------------------------->
						<p>&nbsp;</p>
						'
) );