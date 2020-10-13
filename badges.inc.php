<?php
if (!defined('ISLOADEDBYSTEELSHEET')) die('Must be call by steelsheet');
?>
/* Badge style is based on boostrap framework */

.badge {
    display: inline-block;
    padding: .1em .35em;
    font-size: 80%;
    font-weight: 700 !important;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
    vertical-align: baseline;
 
    border-width: 2px;
    border-style: solid;
    border-color: rgba(255,255,255,0);
    box-sizing: border-box;
}

.badge-status {
    font-size: 0.95em;
    padding: .19em .35em;			/* more than 0.19 generate a change into heigth of lines */
}

.badge-pill, .tabs .badge {
    padding-right: .5em;
    padding-left: .5em;
 
}

.badge-dot {
    padding: 0;
    border-radius: 50%;
    padding: 0.45em;
    vertical-align: text-top;
}

a.badge:focus, a.badge:hover {
    text-decoration: none;
}

.liste_titre .badge:not(.nochangebackground) {
    background-color: <?php print $badgeSecondary; ?>;
    color: #fff;
}


/* PRIMARY */
.badge-primary{
    color: #fff !important;
    background-color: <?php print $badgePrimary; ?>;
}
a.badge-primary.focus, a.badge-primary:focus {
    outline: 0;
   
}
a.badge-primary:focus, a.badge-primary:hover {
    color: #fff !important;
    background-color: <?php print colorDarker($badgePrimary, 10); ?>;
}

/* SECONDARY */
.badge-secondary, .tabs .badge {
    color: #fff !important;
    background-color: <?php print $badgeSecondary; ?>;
}
a.badge-secondary.focus, a.badge-secondary:focus {
    outline: 0;
  
}
a.badge-secondary:focus, a.badge-secondary:hover {
    color: #fff !important;
    background-color: <?php print colorDarker($badgeSecondary, 10); ?>;
}

/* SUCCESS */
.badge-success {
    color: #fff !important;
    background-color: <?php print $badgeSuccess; ?>;
}
a.badge-success.focus, a.badge-success:focus {
    outline: 0;
   
a.badge-success:focus, a.badge-success:hover {
    color: #fff !important;
    background-color: <?php print colorDarker($badgeSuccess, 10); ?>;
}

/* DANGER */
.badge-danger {
    color: #fff !important;
    background-color: <?php print $badgeDanger; ?>;
}
a.badge-danger.focus, a.badge-danger:focus {
    outline: 0;
    
}
a.badge-danger:focus, a.badge-danger:hover {
    color: #fff !important;
    background-color: <?php print colorDarker($badgeDanger, 10); ?>;
}

/* WARNING */
.badge-warning {
    color: #fff !important;
    background-color: <?php print $badgeWarning; ?>;
}
a.badge-warning.focus, a.badge-warning:focus {
    outline: 0;
    
}
a.badge-warning:focus, a.badge-warning:hover {
    color: #212529 !important;
    background-color: <?php print colorDarker($badgeWarning, 10); ?>;
}

/* WARNING colorblind */
body[class*="colorblind-"] .badge-warning {
	  background-color: <?php print $colorblind_deuteranopes_badgeWarning; ?>;
  }
body[class*="colorblind-"] a.badge-warning.focus,body[class^="colorblind-"] a.badge-warning:focus {
	
}
body[class*="colorblind-"] a.badge-warning:focus, a.badge-warning:hover {
	background-color: <?php print colorDarker($colorblind_deuteranopes_badgeWarning, 10); ?>;
}

/* INFO */
.badge-info {
    color: #fff !important;
    background-color: <?php print $badgeInfo; ?>;
}
a.badge-info.focus, a.badge-info:focus {
    outline: 0;
  
}
a.badge-info:focus, a.badge-info:hover {
    color: #fff !important;
    background-color: <?php print colorDarker($badgeInfo, 10); ?>;
}

/* LIGHT */
.badge-light {
    color: #212529 !important;
    background-color: <?php print $badgeLight; ?>;
}
a.badge-light.focus, a.badge-light:focus {
    outline: 0;
 
}
a.badge-light:focus, a.badge-light:hover {
    color: #212529 !important;
    background-color: <?php print colorDarker($badgeLight, 10); ?>;
}

/* DARK */
.badge-dark {
    color: #fff !important;
    background-color: <?php print $badgeDark; ?>;
}
a.badge-dark.focus, a.badge-dark:focus {
    outline: 0;
    
}
a.badge-dark:focus, a.badge-dark:hover {
    color: #fff !important;
    background-color: <?php print colorDarker($badgeDark, 10); ?>;
}


/* STATUS BADGES */
<?php
for ($i = 0; $i <= 9; $i++) {
	/* Default Status */
	_createStatusBadgeCss($i, '', "STATUS".$i);

	// create status for accessibility
	_createStatusBadgeCss($i, 'colorblind_deuteranopes_', "COLORBLIND STATUS".$i, 'body[class*="colorblind-"] ');
}

_createStatusBadgeCss('1b', '', "STATUS1b");
_createStatusBadgeCss('4b', '', "STATUS4b");


/**
 * Create status badge
 *
 * @param string $statusName name of status
 * @param string $statusVarNamePrefix a prefix for var ${$statusVarNamePrefix.'badgeStatus'.$statusName}
 * @param string $commentLabel a comment label
 * @param string $cssPrefix a css prefix
 * @return void
 */
function _createStatusBadgeCss($statusName, $statusVarNamePrefix = '', $commentLabel = '', $cssPrefix = '')
{

	global ${$statusVarNamePrefix.'badgeStatus'.$statusName}, ${$statusVarNamePrefix.'badgeStatus_textColor'.$statusName};

	if (!empty(${$statusVarNamePrefix.'badgeStatus'.$statusName})) {
		print "\n/* ".strtoupper($commentLabel)." */\n";

		$thisBadgeBackgroundColor = $thisBadgeBorderColor = ${$statusVarNamePrefix.'badgeStatus'.$statusName};

		$TBadgeBorderOnly = array('0', '1b', '3', '4b', '5', '7');
		$thisBadgeTextColor = colorIsLight(${$statusVarNamePrefix.'badgeStatus'.$statusName}) ? '#212529' : '#ffffff';

		if (!empty(${$statusVarNamePrefix.'badgeStatus_textColor'.$statusName})) {
			$thisBadgeTextColor = ${$statusVarNamePrefix.'badgeStatus_textColor'.$statusName};
		}

		if (in_array((string) $statusName, $TBadgeBorderOnly)) {
			$thisBadgeTextColor = '#212529';
			$thisBadgeBackgroundColor = "#fff";
		}

		if (in_array((string) $statusName, array('0', '5', '9'))) $thisBadgeTextColor = '#999999';
		if (in_array((string) $statusName, array('6'))) $thisBadgeTextColor = '#777777';

		print $cssPrefix.".badge-status".$statusName." {\n";
		print "        color: ".$thisBadgeTextColor." !important;\n";
		if (in_array((string) $statusName, $TBadgeBorderOnly)) {
			print "        border-color: ".$thisBadgeBorderColor.";\n";
		}
		print "        background-color: ".$thisBadgeBackgroundColor.";\n";
		print "}\n";

		print $cssPrefix.".font-status".$statusName." {\n";
		print "        color: ".$thisBadgeBackgroundColor." !important;\n";
		print "}\n";

		print $cssPrefix.".badge-status".$statusName.".focus, ".$cssPrefix.".badge-status".$statusName.":focus {\n";
		print "    outline: 0;\n";

		print "}\n";

		print $cssPrefix.".badge-status".$statusName.":focus, ".$cssPrefix.".badge-status".$statusName.":hover {\n";
		print "    color: ".$thisBadgeTextColor." !important;\n";
		//print "    background-color: " . colorDarker($thisBadgeBackgroundColor, 10) . ";\n";
		if (in_array((string) $statusName, $TBadgeBorderOnly)) {
			print "        border-color: ".colorDarker($thisBadgeBorderColor, 10).";\n";
		}
		print "}\n";
	}
}
