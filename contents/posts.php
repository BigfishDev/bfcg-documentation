<?php 
	$screen->add_help_tab( array(
        'id'    	=> 'blog-posts-tab',
        'title' 	=> 'Blog Posts',
        'content' 	=> '
        				<h1>Adding a Blog Post</h1>

						<!-- Spacing Break -->	    				
						<br />

						<ul>
							<li><a href="#manage">Managing Posts</a></li>
						</ul>
						
						<!-- Spacing Break -->	    				
						<br />
						
	    				<!---------------------------------
	        				MANAGING POSTS
	    				---------------------------------->            				
	    				<h2 id="manage">Managing Posts</h2>
						<hr />
						<!-- Spacing Break -->	 
						<p>&nbsp;</p>
						
	    				<p>Blog posts are managed on the <a href="/wp-admin/edit.php" target="_blank">Posts page</a>. This page can be found by clicking on the Posts link in the Admin Menu.</p>
	    				<p>There are many options regarding post publishing, categories and permalinks. For a complete overview visit the <a href="https://codex.wordpress.org/Writing_Posts" target="_blank">Writing Posts page</a> within the WordPress Codex.</p>
	    				
	    				<strong>Adding a Post</strong>
						<ol>
							<li>Click the &lsquo;Add New&rsquo; button on the top of the posts page.</li>
							<li>Add your content to the post.</li>
							<li>Publish the post by clicking the &lsquo;Publish&rsquo; button in the sidebar on the right hand side</li>
						</ol>

						<!---------------------------------- 
							END CONTENT - Spacing Break 
						----------------------------------->
						<p>&nbsp;</p>
						'
	) );