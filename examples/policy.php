<?php
	$policy_company  = $GLOBALS['tag_var1'];
	$policy_location = $GLOBALS['tag_var2'];
	$policy_date     = (
		empty($GLOBALS['tag_var3'])
		? (
				(new \DateTime())
				->setTimestamp(\filemtime(__FILE__))
				->format( \pulsecore\wedge\config\get_json_configs()->json->date_format )
			)
		: $GLOBALS['tag_var3']
	);
?>

<!--BEGIN Policy -->
<h2><?php echo $policy_company; ?> Terms of Service, Privacy Policy and Data Protection Policy</h2>

<h2> Terms of Service</h2>

<h3>1. Terms</h3>

<p>By accessing the website at <a href="<?php echo $path; ?>">{{domain}}</a>, you are agreeing to be bound by these terms of service, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this website are protected by applicable copyright and trademark law.</p>

<h3>2. Use License</h3>

<ol type="a" class="alist">
	<li>
		<span>Permission is granted to temporarily download one copy of the materials (information or software) on <?php echo $policy_company; ?>'s website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</span>

		<ol type="i" class="blist">
			<li>modify or copy the materials;</li>
			<li>use the materials for any commercial purpose, or for any public display (commercial or non-commercial);</li>
			<li>attempt to decompile or reverse engineer any software contained on <?php echo $policy_company; ?>'s website;</li>
			<li>remove any copyright or other proprietary notations from the materials; or</li>
			<li>transfer the materials to another person or "mirror" the materials on any other server.</li>
		</ol>
	</li>
	<li>This license shall automatically terminate if you violate any of these restrictions and may be terminated by <?php echo $policy_company; ?> at any time. Upon terminating your viewing of these materials or upon the termination of this license, you must destroy any downloaded materials in your possession whether in electronic or printed format.</li>
</ol>

<h3>3. Disclaimer</h3>

<ol type="a">
    <li>The materials on <?php echo $policy_company; ?>'s website are provided on an 'as is' basis. <?php echo $policy_company; ?> makes no warranties, expressed or implied, and hereby disclaims and negates all other warranties including, without limitation, implied warranties or conditions of merchantability, fitness for a particular purpose, or non-infringement of intellectual property or other violation of rights.</li>
    <li>Further, <?php echo $policy_company; ?> does not warrant or make any representations concerning the accuracy, likely results, or reliability of the use of the materials on its website or otherwise relating to such materials or on any sites linked to this site.</li>
</ol>

<h3>4. Limitations</h3>

<p>In no event shall <?php echo $policy_company; ?> or its suppliers be liable for any damages (including, without limitation, damages for loss of data or profit, or due to business interruption) arising out of the use or inability to use the materials on <?php echo $policy_company; ?>'s website, even if <?php echo $policy_company; ?> or a <?php echo $policy_company; ?> authorized representative has been notified orally or in writing of the possibility of such damage. Because some jurisdictions do not allow limitations on implied warranties, or limitations of liability for consequential or incidental damages, these limitations may not apply to you.</p>

<h3>5. Accuracy of materials</h3>

<p>The materials appearing on <?php echo $policy_company; ?>'s website could include technical, typographical, or photographic errors. <?php echo $policy_company; ?> does not warrant that any of the materials on its website are accurate, complete or current. <?php echo $policy_company; ?> may make changes to the materials contained on its website at any time without notice. However <?php echo $policy_company; ?> does not make any commitment to update the materials.</p>

<h3>6. Links</h3>

<p><?php echo $policy_company; ?> has not reviewed all of the sites linked to its website and is not responsible for the contents of any such linked site. The inclusion of any link does not imply endorsement by <?php echo $policy_company; ?> of the site. Use of any such linked website is at the user's own risk.</p>

<h3>7. Modifications</h3>

<p><?php echo $policy_company; ?> may revise these terms of service for its website at any time without notice. By using this website you are agreeing to be bound by the then current version of these terms of service.</p>

<h3>8. Governing Law</h3>

<p>These terms and conditions are governed by and construed in accordance with the laws of <?php echo $policy_location; ?> and you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.</p>

<h2>Privacy Policy</h2>

<p>Your privacy is important to us.</p>

<p>It is <?php echo $policy_company; ?>'s policy to respect your privacy regarding any information we may collect while operating our website. Accordingly, we have developed this privacy policy in order for you to understand how we collect, use, communicate, disclose and otherwise make use of personal information. We have outlined our privacy policy below.</p>

<ul>
    <li>We will collect personal information by lawful and fair means and, where appropriate, with the knowledge or consent of the individual concerned.</li>
    <li>Before or at the time of collecting personal information, we will identify the purposes for which information is being collected.</li>
    <li>We will collect and use personal information solely for fulfilling those purposes specified by us and for other ancillary purposes, unless we obtain the consent of the individual concerned or as required by law.</li>
    <li>Personal data should be relevant to the purposes for which it is to be used, and, to the extent necessary for those purposes, should be accurate, complete, and up-to-date.</li>
    <li>We will protect personal information by using reasonable security safeguards against loss or theft, as well as unauthorized access, disclosure, copying, use or modification.</li>
    <li>We will make readily available to customers information about our policies and practices relating to the management of personal information.</li>
    <li>We will only retain personal information for as long as necessary for the fulfilment of those purposes.</li>
</ul>

<p>We are committed to conducting our business in accordance with these principles in order to ensure that the confidentiality of personal information is protected and maintained. <?php echo $policy_company; ?> may change this privacy policy from time to time at <?php echo $policy_company; ?>'s sole discretion.</p>
  
<h2>Data protection policy</h2>
 
<p>Data protection policy in accordance with the EU General Data Protection Regulation (GDPR)</p>
  
<h3>1. Data protection principles</h3>
  	
<p><?php echo $policy_company; ?> is committed to processing data in accordance with its responsibilities under the GDPR. Article 5 of the GDPR requires that personal data shall be:</p>
  	
<ol type="i" class="blist">
	<li>"processed lawfully, fairly and in a transparent manner in relation to individuals;</li>
	<li>collected for specified, explicit and legitimate purposes and not further processed in a manner that is incompatible with those purposes; further processing for archiving purposes in the public interest, scientific or historical research purposes or statistical purposes shall not be considered to be incompatible with the initial purposes;</li>
	<li>adequate, relevant and limited to what is necessary in relation to the purposes for which they are processed;</li>
	<li>accurate and, where necessary, kept up to date; every reasonable step must be taken to ensure that personal data that are inaccurate, having regard to the purposes for which they are processed, are erased or rectified without delay;</li>
	<li>kept in a form which permits identification of data subjects for no longer than is necessary for the purposes for which the personal data are processed; personal data may be stored for longer periods insofar as the personal data will be processed solely for archiving purposes in the public interest, scientific or historical research purposes or statistical purposes subject to implementation of the appropriate technical and organisational measures required by the GDPR in order to safeguard the rights and freedoms of individuals; and</li>
	<li>processed in a manner that ensures appropriate security of the personal data, including protection against unauthorised or unlawful processing and against accidental loss, destruction or damage, using appropriate technical or organisational measures."</li>
</ol>
	  	
<h3>2. General provisions</h3>

<ol type="i" class="blist">
	<li>This policy applies to all personal data processed by <?php echo $policy_company; ?>.</li>
	<li>The Responsible Person shall take responsibility for <?php echo $policy_company; ?>'s ongoing compliance with this policy.</li>
	<li>This policy shall be reviewed at least annually.</li>
</ol>
  
<h3>3. Lawful, fair and transparent processing</h3>

<ol type="i" class="blist">
	<li>To ensure its processing of data is lawful, fair and transparent, <?php echo $policy_company; ?> shall maintain a Register of Systems.</li>
	<li>The Register of Systems shall be reviewed at least annually. </li>
	<li>Individuals have the right to access their personal data and any such requests made to <?php echo $policy_company; ?> shall be dealt with in a timely manner. </li>
</ol>

<h3>4. Lawful purposes</h3>

<ol type="i" class="blist">
	<li>All data processed by <?php echo $policy_company; ?> must be done on one of the following lawful bases: consent, contract, legal obligation, vital interests, public task or legitimate interests.</li>
	<li><?php echo $policy_company; ?> shall note the appropriate lawful basis in the Register of Systems.</li>
	<li>Where consent is relied upon as a lawful basis for processing data, evidence of opt-in  consent shall be kept with the personal data.</li>
	<li>Where communications are sent to individuals based on their consent, the option for the individual to revoke their consent should be clearly available and systems should be in place to ensure such revocation is reflected accurately in <?php echo $policy_company; ?>'s systems.</li>
</ol>

<h3>5. Data minimisation</h3>

<ol type="i" class="blist">
	<li><?php echo $policy_company; ?> shall ensure that personal data are adequate, relevant and limited to what is necessary in relation to the purposes for which they are processed.</li>
	<li><?php echo $policy_company; ?> only collects Name and Email address for account creation purposes. No credit card, address or other personal information is stored.</li>
</ol>

<h3>6. Accuracy</h3>

<ol type="i" class="blist">
	<li><?php echo $policy_company; ?> shall take reasonable steps to ensure personal data is accurate.</li>
	<li>Where necessary for the lawful basis on which data is processed, steps shall be put in place to ensure that personal data is kept up to date.</li>
</ol>

<h3>7. Archiving / removal</h3>

<ol type="i" class="blist">
	<li>To ensure that personal data is kept for no longer than necessary, <?php echo $policy_company; ?> shall put in place an archiving policy for each area in which personal data is processed and review this process annually.</li>
	<li>The archiving policy shall consider what data should/must be retained, for how long, and why.</li>
</ol>

<h3>8. Security</h3>

<ol type="i" class="blist">
	<li><?php echo $policy_company; ?> shall ensure that personal data is stored securely using modern software that is kept-up-to-date.</li>
	<li>Access to personal data shall be limited to personnel who need access and appropriate security should be in place to avoid unauthorised sharing of information.</li>
	<li>When personal data is deleted this should be done safely such that the data is irrecoverable.</li>
	<li>Appropriate back-up and disaster recovery solutions shall be in place.</li>
</ol>

<h3>9. Breach</h3>

<p>In the event of a breach of security leading to the accidental or unlawful destruction, loss, alteration, unauthorised disclosure of, or access to, personal data, <?php echo $policy_company; ?> shall promptly assess the risk to people’s rights and freedoms and if appropriate report this breach to the ICO (<a href="https://ico.org.uk/for-organisations/guide-to-the-general-data-protection-regulation-gdpr/personal-data-breaches/">more information on the ICO website</a>). </p>
	  	
<p>END OF POLICIES</p>

<p>Date of Last Revision: <?php echo \htmlentities($policy_date); ?></p>
