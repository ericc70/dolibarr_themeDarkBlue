<?php
if (!defined('ISLOADEDBYSTEELSHEET')) die('Must be call by steelsheet'); ?>
/* <style type="text/css" > */

:root {
            --btncolortext:rgb(<?php print $colortextlink; ?>);
            --btncolorbg: #fbfbfb;
            --btncolorborderhover: none;
            --btncolorborder: #FFF;
            --butactionbg:rgb(218, 235, 225);
            --butactiondeletebg: rgb(234,228,225);
}

<?php
if (!empty($conf->global->MAIN_THEME_DARKMODEENABLED)) {
	print "
    @media (prefers-color-scheme: dark) {
      :root {

            --btncolortext: ;
            --btncolorbg: rgb(26,27,27);
            --btncolorborderhover: #ffffff;
            --btncolorborder: #2b2c2e;
            --butactionbg:rgb(173,140,79);
            --butactiondeletebg: rgb(252,84,91);

      }
    }";
}
?>


/* ============================================================================== */
/* Buttons for actions                                                            */
/* ============================================================================== */

div.divButAction {
    margin-bottom: 1.4em;
}
div.tabsAction > a.butAction, div.tabsAction > a.butActionRefused, div.tabsAction > a.butActionDelete,
div.tabsAction > span.butAction, div.tabsAction > span.butActionRefused, div.tabsAction > span.butActionDelete {
    margin-bottom: 1.4em !important;
}
div.tabsActionNoBottom > a.butAction, div.tabsActionNoBottom > a.butActionRefused {
    margin-bottom: 0 !important;
}

span.butAction, span.butActionDelete {
    cursor: pointer;
}

.butAction {
    background: var(--butactionbg);
    /* background: rgb(230, 232, 239); */
}
.butActionRefused, .butAction, .butAction:link, .butAction:visited, .butAction:hover, .butAction:active, .butActionDelete, .butActionDelete:link, .butActionDelete:visited, .butActionDelete:hover, .butActionDelete:active {
    text-decoration: none;
    text-transform: uppercase;
    font-weight: bold;

    margin: 0em <?php echo ($dol_optimize_smallscreen ? '0.6' : '0.9'); ?>em;
    padding: 0.6em <?php echo ($dol_optimize_smallscreen ? '0.6' : '0.7'); ?>em;
    font-family: <?php print $fontlist ?>;
    display: inline-block;
    text-align: center;
    cursor: pointer;
    /* color: #fff; */
    /* background: rgb(<?php echo $colorbackhmenu1 ?>); */
    color: #444;
    /* border: 1px solid #aaa; */
    /* border-color: rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.15) rgba(0, 0, 0, 0.25); */

   
}
.butActionNew, .butActionNewRefused, .butActionNew:link, .butActionNew:visited, .butActionNew:hover, .butActionNew:active {
    text-decoration: none;
    text-transform: uppercase;
    font-weight: normal;

    margin: 0em 0.3em 0 0.3em !important;
    padding: 0.2em <?php echo ($dol_optimize_smallscreen ? '0.4' : '0.7'); ?>em 0.3em;
    font-family: <?php print $fontlist ?>;
    display: inline-block;
    /* text-align: center; New button are on right of screen */
    cursor: pointer;
}

.tableforfieldcreate a.butActionNew>span.fa-plus-circle, .tableforfieldcreate a.butActionNew>span.fa-plus-circle:hover,
.tableforfieldedit a.butActionNew>span.fa-plus-circle, .tableforfieldedit a.butActionNew>span.fa-plus-circle:hover,
span.butActionNew>span.fa-plus-circle, span.butActionNew>span.fa-plus-circle:hover,
a.butActionNewRefused>span.fa-plus-circle, a.butActionNewRefused>span.fa-plus-circle:hover,
span.butActionNewRefused>span.fa-plus-circle, span.butActionNewRefused>span.fa-plus-circle:hover,
a.butActionNew>span.fa-list-alt, a.butActionNew>span.fa-list-alt:hover,
span.butActionNew>span.fa-list-alt, span.butActionNew>span.fa-list-alt:hover,
a.butActionNewRefused>span.fa-list-alt, a.butActionNewRefused>span.fa-list-alt:hover,
span.butActionNewRefused>span.fa-list-alt, span.butActionNewRefused>span.fa-list-alt:hover
{
	font-size: 1em;
	padding-left: 0px;
}

/*a.butActionNew>span.fa-plus-circle, a.butActionNew>span.fa-plus-circle:hover,
span.butActionNew>span.fa-plus-circle, span.butActionNew>span.fa-plus-circle:hover,
a.butActionNewRefused>span.fa-plus-circle, a.butActionNewRefused>span.fa-plus-circle:hover,
span.butActionNewRefused>span.fa-plus-circle, span.butActionNewRefused>span.fa-plus-circle:hover,
a.butActionNew>span.fa-list-alt, a.butActionNew>span.fa-list-alt:hover,
span.butActionNew>span.fa-list-alt, span.butActionNew>span.fa-list-alt:hover,
a.butActionNewRefused>span.fa-list-alt, a.butActionNewRefused>span.fa-list-alt:hover,
span.butActionNewRefused>span.fa-list-alt, span.butActionNewRefused>span.fa-list-alt:hover,
a.butActionNew>span.fa-comment-dots, a.butActionNew>span.fa-comment-dots:hover,
span.butActionNew>span.fa-comment-dots, span.butActionNew>span.fa-comment-dots:hover,
a.butActionNewRefused>span.fa-comment-dots, a.butActionNewRefused>span.fa-comment-dots:hover,
span.butActionNewRefused>span.fa-comment-dots, span.butActionNewRefused>span.fa-comment-dots:hover,*/
a.butActionNew>span.fa, a.butActionNew>span.fa:hover,
span.butActionNew>span.fa, span.butActionNew>span.fa:hover,
a.butActionNewRefused>span.fa, a.butActionNewRefused>span.fa:hover,
span.butActionNewRefused>span.fa, span.butActionNewRefused>span.fa:hover
{
	padding-<?php echo $left; ?>: 6px;
	font-size: 1.5em;
	border: none;
	
}

.butAction:hover   {
   
}
.butActionNew:hover   {
    text-decoration: underline;
 
}

.butActionDelete, .butActionDelete:link, .butActionDelete:visited, .butActionDelete:hover, .butActionDelete:active, .buttonDelete {
    background: var(--butactiondeletebg);
    /* border: 1px solid #633; */
    color: #633;
}

.butActionDelete:hover {
  
}

.butActionRefused {
    text-decoration: none !important;
    text-transform: uppercase;
    font-weight: bold !important;

    white-space: nowrap !important;
    cursor: not-allowed !important;
    margin: 0em <?php echo ($dol_optimize_smallscreen ? '0.6' : '0.9'); ?>em;
    padding: 0.6em <?php echo ($dol_optimize_smallscreen ? '0.6' : '0.7'); ?>em;
    font-family: <?php print $fontlist ?> !important;
    display: inline-block;
    text-align: center;
    cursor: pointer;
    color: #999 !important;
    border: 1px solid #ccc;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
}
.butActionNewRefused, .butActionNewRefused:link, .butActionNewRefused:visited, .butActionNewRefused:hover, .butActionNewRefused:active {
    text-decoration: none !important;
    text-transform: uppercase;
    font-weight: normal !important;

    white-space: nowrap !important;
    cursor: not-allowed !important;
    margin: 0em <?php echo ($dol_optimize_smallscreen ? '0.7' : '0.9'); ?>em;
    padding: 0.2em <?php echo ($dol_optimize_smallscreen ? '0.4' : '0.7'); ?>em;
    font-family: <?php print $fontlist ?> !important;
    display: inline-block;
    /* text-align: center;  New button are on right of screen */
    cursor: pointer;
    color: #999 !important;
    padding-top: 0.2em;
 
}

.butActionTransparent {
    color: #222 ! important;
    background-color: transparent ! important;
}


/*
TITLE BUTTON
 */

.btnTitle, a.btnTitle {
    display: inline-block;
    padding: 4px 12px 4px 12px;
    font-weight: 400;
    /* line-height: 1; */
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
 
    text-decoration: none;
    position: relative;
    margin: 0 0 0 10px;
    min-width: 80px;
    text-align: center;
    color: var(--btncolortext);
    border: none;
    font-size: 12px;
    font-weight: 300;
    background-color: var(--btncolorbg);
	border: 1px solid var(--btncolorborder);
}

a.btnTitle.btnTitleSelected {
    border: 1px solid #ccc;

}

.btnTitle > .btnTitle-icon{

}

.btnTitle > .btnTitle-label{
    color: #666666;
}

.btnTitle:hover, a.btnTitle:hover {
	border: 1px solid #bbb;
    position: relative;
    margin: 0 0 0 10px;
    text-align: center;
    /* color: #ffffff;
    background-color: rgb(<?php print $colortextlink; ?>); */
    font-size: 12px;
    text-decoration: none;
    
}

.btnTitle.refused, a.btnTitle.refused, .btnTitle.refused:hover, a.btnTitle.refused:hover {
        color: #8a8a8a;
        cursor: not-allowed;
        background-color: #fbfbfb;
        background: repeating-linear-gradient( 45deg, #ffffff, #f1f1f1 4px, #f1f1f1 4px, #f1f1f1 4px );
}

.btnTitle:hover .btnTitle-label{
     color: var(--btncolorborderhover);
}

.btnTitle.refused .btnTitle-label, .btnTitle.refused:hover .btnTitle-label{
    color: #8a8a8a;
}

.btnTitle>.fa {
    font-size: 20px;
    display: block;
}

div.pagination li:first-child a.btnTitle{
    margin-left: 10px;
}


.imgforviewmode {
	color: #aaa;
}

/* rule to reduce top menu - 2nd reduction: Reduce width of top menu icons again */
@media only screen and (max-width: <?php echo empty($conf->global->THEME_ELDY_WITDHOFFSET_FOR_REDUC2) ? round($nbtopmenuentries * 69, 0) + 130 : $conf->global->THEME_ELDY_WITDHOFFSET_FOR_REDUC2; ?>px)	/* reduction 2 */
{
	.btnTitle, a.btnTitle {
	    display: inline-block;
	    padding: 4px 4px 4px 4px;
		min-width: unset;
	}
}

<?php if (!empty($conf->global->MAIN_BUTTON_HIDE_UNAUTHORIZED) && (!$user->admin)) { ?>
.butActionRefused, .butActionNewRefused, .btnTitle.refused {
    display: none !important;
}
<?php } ?>


/*
 * BTN LINK
 */

.btn-link{
	margin-right: 5px;
	border: 1px solid #ddd;
	color: #333;
	padding: 5px 10px;
	text-decoration: none !important;
}

.btn-link:hover{
	background-color: #ddd;
	border: 1px solid #ddd;
}
