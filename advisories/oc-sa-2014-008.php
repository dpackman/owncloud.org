<div class="row page-content-header">
	<div class="col-md-4">
		<h1>Security Advisory</h1>
		<a style="margin-left: 0.5em;" href="/security/advisories/">Back to advisories</a>
	</div>
</div>
<div class="row">
	<div class="col-md-4">
		<?php get_template_part('advisories/advisory-side'); ?>
	</div>
	<div class="col-md-8">
		<h2>Users can mount the local filesystem (oC-SA-2014-008)</h2>
		<p>3rd July 2014</p>
		<p>Risk level: <strong>High</strong></p>
		<h3>Description</h3>
		<p><p>Due to not properly sanitzing the mount configuration authenticated users are able to mount the local filesystem into their ownCloud. A successful exploit requires the files_external app to be enabled.</p></p>
		<h3>Affected Software</h3>
		<ul>
			<li>ownCloud Server < <strong>6.0.2</strong> ()</li><li>ownCloud Server < <strong>5.0.15</strong> ()</li>
		</ul>
		<h3>Action Taken</h3>
		<p></p>
		<h3>Acknowledgements</h3>
		<p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
		<ul>
			<li>Lukas Reschke - ownCloud Inc. (lukas@owncloud.org) - Vulnerability discovery and disclosure.</li>
		</ul>
		</br>
	</div>
</div>