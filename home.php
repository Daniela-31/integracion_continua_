<style>
	a{
		font-weight: bold;
	}
</style>

<?php
	/* Check if required software is installed. Issue warning if not. */
 
	if (!$RequiredSoftwareHandler->isPHPCurlIsInstalled()){
		echo $RequiredSoftwareHandler->getNoCurlAdviceBasedOnOperatingSystem();
	}// end if

	if (!$RequiredSoftwareHandler->isPHPJSONIsInstalled()){
		echo $RequiredSoftwareHandler->getNoJSONAdviceBasedOnOperatingSystem();
	}// end if
?>

<div style=" width: 750px; overflow: hidden;">
<?php include_once (__ROOT__.'/includes/hints/hints-menu-wrapper.inc'); ?>
<span style="float: right">
	<img src="images/arrow-45-degree-left-up.png" style="margin-right: 5px" />
	<span class="label" style="float: right;">TIP:&nbsp;
	<span style="float: right; text-align: center;">Click 
	<span style="color: blue;font-style: italic;">Hint and Videos</span><br/>on each page</span></span>
</span>
</div>

<table style="margin:0px;margin-top:5px;">
 	<tr>
	    <th>
			<a title="Usage Instructions" href="./index.php?page=documentation/usage-instructions.php">
				<img alt="What Should I Do?" align="middle" src="./images/question-mark-40-61.png" />
				<br>
				What Should I Do?
			</a>
		</th>
		
		<th>
			<a href="./index.php?page=./documentation/vulnerabilities.php">
				<img alt="Help" align="middle" src="./images/siren-48-48.png" />
				<br>
				Listing of vulnerabilities
			</a>
		</th>
		<th>
			<a href="http://www.youtube.com/user/webpwnized" target="_blank">
			<img align="middle" alt="Webpwnized YouTube Channel" src="./images/youtube-play-icon-40-40.png" />
			<br>
				Video Tutorials
			</a>
		</th>
	</tr>
	<tr><td>&nbsp;</td></tr>
	<tr>

		<th>
			<a href="https://twitter.com/webpwnized" target="_blank">
				<img align="middle" alt="Webpwnized Twitter Channel" src="./images/twitter-bird-48-48.png" />
				<br>
				Release Announcements
			</a>
		</th>
		<th class="label" title="Latest Version">
			<img alt="Latest Version" align="middle" src="./images/installation-icon-48-48.png" />
			<a title="Latest Version" href="https://github.com/webpwnized/mutillidae" target="_blank">
			<br>Latest Version</a>
		</th>
	
		<th>
			<a href="documentation/mutillidae-test-scripts.txt" target="_blank">
				<img alt="Helpful hints and scripts" align="middle" src="./images/help-icon-48-48.png" />
				<br>
				Helpful hints and scripts
			</a>
		</th>
		<th class="label" title="Mutillidae LDIF File">
			<a href="configuration/openldap/mutillidae.ldif" target="_blank">
				<img align="middle" alt="Mutillidae LDIF File" src="./images/ldap-server-48-59.png" />
				<br>
				Mutillidae LDIF File
			</a>
		</th>
	</tr>
</table>
