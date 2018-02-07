<?php 
    $screen->add_help_tab( array(
        'id'    	=> 'media-tab',
        'title' 	=> 'Media Library',
        'content' 	=> '
        				<h1>Media Library</h1>

						<!-- Spacing Break -->	    				
						<br />
						
        				<ul>
        					<li><a href="#add_remove">Introduction to the Media Library</a></li>
        					<li><a href="#update">Replacing Media</a></li>
        					<li><a href="#folders">Media Folders</a></li>
        				</ul>

						<!-- Spacing Break -->	    				
						<br />
						
        				<!---------------------------------
            				Intro
        				---------------------------------->            				
        				<h2 id="intro">Introduction to the Media Library</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>
						
        				<p>Media consists of the images, video, recordings, and files that you upload and use in your blog. This media library can be found by clicking on the Media link in the Admin Menu. For a complete overview of library visit the <a href="https://codex.wordpress.org/Media_Library_Screen" target="_blank">Media Library Screen</a> page within the Wordpress Codex.
        				
        				<!---------------------------------
            				Adding and Removing
        				---------------------------------->
        				<h2 id="update">Adding and Removing Images from Library</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>
						
        				<p>Replace a file in your media library by uploading a new file in its place. No need for deleting, renaming and re-uploading files!</p>
        				
						<ol>
							<li>Go to Media Library in admin panel</li>
							<li>Find image to be replaced
								<ul>
									<li><strong>If you are in List View</strong>
										<ul>
											<li>Hover over the image you wish to replace</li>
											<li>Click the &lsquo;Replace media&rsquo; link</li>
										</ul>
									</li>
									<li><strong>If you are in Grid View</strong>
										<ul>
											<li>Hover over the image you wish to replace</li>
											<li>Click on the image you want to replace</li>
											<li>Click the &lsquo;Upload a new file&rsquo; in the attachment details sidebar</li>
										</ul>
									</li>
								</ul>
							</li>
							<li>You will be taken to the &lsquo;Replace Media Upload Page&rsquo;.</li>
							<li>Select ‘Choose File’ to upload a new image/file</li>
							<li>Select media replacement type:
								<ul>
									<li><strong>Just replace the file.</strong> This option requires you to upload a file of the same type as the one you are replacing. The name of the attachment will stay the same no matter what the file you upload is called.</li>
									<li><strong>Replace the file, use new file name and update all links.</strong> If you check this option, the name and type of the file you are about to upload will replace the old file. All links pointing to the current file will be updated to point to the new file name.</li>
								</ul>
							</li>
							<li>Hit the ‘Upload’ button and update the image.</li>
						</ol>
        				<p><em><strong>NOTE:</strong> This functionality is provided by the <a href="https://wordpress.org/plugins/enable-media-replace/" target="_blank">Enable Media Replace plugin</a>. Please visit the <a href="/wp-admin/plugins.php" target="_blank">Plugins page</a> for a complete list of all plugins added to this site.</em></p>
        				
        				<!---------------------------------
            				MEDIA FOLDERS
        				---------------------------------->
        				<h2 id="folders">Media Folders</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>
						
        				<p>Your media library is equipped with media folders that allow you to navigate files like you do within your desktop file browser. You can upload and drag&rsquo;n drop media into folders and sub-folders within the native WordPress media manager. Each section of your site that requires images has documentation on where these images are stored in your media library. View your <a href="/wp-admin/upload.php" target="_blank">Media Library</a> to view the file structure. To learn more about managing your media visit the WP Media folder <a href="https://www.joomunited.com/documentation/wp-media-folder-documentation" target="_blank">documentaion page</a>. </p>
						<p><em><strong>NOTE:</strong> This functionality is provided by the <a href="https://www.joomunited.com/" target="_blank">WP Media folder plugin</a>. Please visit the <a href="/wp-admin/plugins.php" target="_blank">Plugins page</a> for a complete list of all plugins added to this site.</em></p>

						<!---------------------------------- 
							END CONTENT - Spacing Break 
						----------------------------------->
						<p>&nbsp;</p>
						'
    ) );