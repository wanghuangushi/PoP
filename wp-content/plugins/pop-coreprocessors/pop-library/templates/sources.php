<?php
/**---------------------------------------------------------------------------------------------------------------
 *
 * Template Sources
 *
 * ---------------------------------------------------------------------------------------------------------------*/

define ('GD_TEMPLATESOURCE_ALERT', 'alert');
define ('GD_TEMPLATESOURCE_BLOCK_BARE', 'block-bare');
define ('GD_TEMPLATESOURCE_BLOCK_DESCRIPTION', 'block-description');
define ('GD_TEMPLATESOURCE_BLOCKGROUP_BLOCKUNITS', 'blockgroup-blockunits');
define ('GD_TEMPLATESOURCE_BUTTONGROUP', 'buttongroup');
define ('GD_TEMPLATESOURCE_BUTTON', 'button');
define ('GD_TEMPLATESOURCE_BUTTONINNER', 'buttoninner');
define ('GD_TEMPLATESOURCE_CAROUSEL', 'carousel');
define ('GD_TEMPLATESOURCE_CAROUSEL_CONTROLS', 'carousel-controls');
define ('GD_TEMPLATESOURCE_CAROUSEL_INNER', 'carousel-inner');
define ('GD_TEMPLATESOURCE_CODE', 'code');
define ('GD_TEMPLATESOURCE_CONDITIONWRAPPER', 'conditionwrapper');
define ('GD_TEMPLATESOURCE_CONTENT', 'content');
define ('GD_TEMPLATESOURCE_CONTENTMULTIPLE_INNER', 'contentmultiple-inner');
define ('GD_TEMPLATESOURCE_CONTENTSINGLE_INNER', 'contentsingle-inner');
define ('GD_TEMPLATESOURCE_CONTROL_ANCHOR', 'anchor-control');
define ('GD_TEMPLATESOURCE_CONTROL_BUTTON', 'button-control');
define ('GD_TEMPLATESOURCE_CONTROL_DROPDOWNBUTTON', 'dropdownbutton-control');
define ('GD_TEMPLATESOURCE_CONTROL_RADIOBUTTON', 'radiobutton-control');
define ('GD_TEMPLATESOURCE_CONTROLBUTTONGROUP', 'controlbuttongroup');
define ('GD_TEMPLATESOURCE_CONTROLGROUP', 'controlgroup');
define ('GD_TEMPLATESOURCE_DIVIDER', 'divider');
define ('GD_TEMPLATESOURCE_FETCHMORE', 'fetchmore');
define ('GD_TEMPLATESOURCE_FORM', 'form');
define ('GD_TEMPLATESOURCE_FORM_INNER', 'form-inner');
define ('GD_TEMPLATESOURCE_FORMCOMPONENT_BUTTONGROUP', 'formcomponent-buttongroup');
define ('GD_TEMPLATESOURCE_FORMCOMPONENT_CAPTCHA', 'formcomponent-captcha');
define ('GD_TEMPLATESOURCE_FORMCOMPONENT_CHECKBOX', 'formcomponent-checkbox');
define ('GD_TEMPLATESOURCE_FORMCOMPONENT_DATERANGE', 'formcomponent-daterange');
define ('GD_TEMPLATESOURCE_FORMCOMPONENT_FEATUREDIMAGE', 'formcomponent-featuredimage');
define ('GD_TEMPLATESOURCE_FORMCOMPONENT_FEATUREDIMAGE_INNER', 'formcomponent-featuredimage-inner');
define ('GD_TEMPLATESOURCE_FORMCOMPONENT_FETCHLINKTYPEAHEAD', 'formcomponent-typeahead-fetchlink');
define ('GD_TEMPLATESOURCE_FORMCOMPONENT_INPUTGROUP', 'formcomponent-inputgroup');
define ('GD_TEMPLATESOURCE_FORMCOMPONENT_SELECT', 'formcomponent-select');
define ('GD_TEMPLATESOURCE_FORMCOMPONENT_SELECTABLETYPEAHEAD', 'formcomponent-typeahead-selectable');
define ('GD_TEMPLATESOURCE_FORMCOMPONENT_SELECTABLETYPEAHEADTRIGGER', 'formcomponent-selectabletypeaheadtrigger');
define ('GD_TEMPLATESOURCE_FORMCOMPONENT_TEXT', 'formcomponent-text');
define ('GD_TEMPLATESOURCE_FORMCOMPONENT_TEXTAREA', 'formcomponent-textarea');
define ('GD_TEMPLATESOURCE_FORMGROUP', 'formgroup');
define ('GD_TEMPLATESOURCE_HIDEIFEMPTY', 'hideifempty');
define ('GD_TEMPLATESOURCE_MESSAGEFEEDBACK', 'messagefeedback');
define ('GD_TEMPLATESOURCE_MESSAGEFEEDBACK_INNER', 'messagefeedback-inner');
define ('GD_TEMPLATESOURCE_LATESTCOUNT', 'latestcount');
define ('GD_TEMPLATESOURCE_LAYOUT_MAXHEIGHT', 'layout-maxheight');
define ('GD_TEMPLATESOURCE_LAYOUT_CONTENT', 'layout-content');
define ('GD_TEMPLATESOURCE_LAYOUT_LINKCONTENT', 'layout-linkcontent');
define ('GD_TEMPLATESOURCE_LAYOUT_APPENDSCRIPT', 'script-append');
define ('GD_TEMPLATESOURCE_LAYOUT_AUTHOR_CONTACT', 'layout-author-contact');
define ('GD_TEMPLATESOURCE_LAYOUT_AUTHOR_USERPHOTO', 'layout-author-userphoto');
define ('GD_TEMPLATESOURCE_LAYOUT_AUTHORCONTENT', 'layout-authorcontent');
define ('GD_TEMPLATESOURCE_LAYOUT_CATEGORIES', 'layout-categories');
define ('GD_TEMPLATESOURCE_LAYOUT_COMMENT', 'layout-comment');
define ('GD_TEMPLATESOURCE_LAYOUT_DATAQUERY_UPDATEDATA', 'layout-dataquery-updatedata');
define ('GD_TEMPLATESOURCE_LAYOUT_EMBEDPREVIEW', 'layout-embedpreview');
define ('GD_TEMPLATESOURCE_LAYOUT_INITJSDELAY', 'layout-initjs-delay');
define ('GD_TEMPLATESOURCE_LAYOUT_FULLOBJECTTITLE', 'layout-fullobjecttitle');
define ('GD_TEMPLATESOURCE_LAYOUT_FULLVIEW', 'layout-fullview');
define ('GD_TEMPLATESOURCE_LAYOUT_FULLUSER', 'layout-fulluser');
define ('GD_TEMPLATESOURCE_LAYOUT_LATESTCOUNTSCRIPT', 'script-latestcount');
define ('GD_TEMPLATESOURCE_LAYOUT_MARKER', 'layout-marker');
define ('GD_TEMPLATESOURCE_LAYOUT_MENU_ANCHOR', 'layout-menu-anchor');
define ('GD_TEMPLATESOURCE_LAYOUT_MENU_COLLAPSESEGMENTEDBUTTON', 'layout-menu-collapsesegmentedbutton');
define ('GD_TEMPLATESOURCE_LAYOUT_MENU_DROPDOWN', 'layout-menu-dropdown');
define ('GD_TEMPLATESOURCE_LAYOUT_MENU_DROPDOWNBUTTON', 'layout-menu-dropdownbutton');
define ('GD_TEMPLATESOURCE_LAYOUT_MENU_INDENT', 'layout-menu-indent');
define ('GD_TEMPLATESOURCE_LAYOUT_MENU_MULTITARGETINDENT', 'layout-menu-multitargetindent');
define ('GD_TEMPLATESOURCE_LAYOUT_MESSAGEFEEDBACK', 'layout-messagefeedback');
define ('GD_TEMPLATESOURCE_LAYOUT_MESSAGEFEEDBACKFRAME', 'layout-messagefeedbackframe');
define ('GD_TEMPLATESOURCE_LAYOUT_MULTIPLE', 'layout-multiple');
define ('GD_TEMPLATESOURCE_LAYOUT_PAGETAB', 'layout-pagetab');
define ('GD_TEMPLATESOURCE_LAYOUT_POPOVER', 'layout-popover');
define ('GD_TEMPLATESOURCE_LAYOUT_POSTADDITIONAL_MULTILAYOUT_LABEL', 'layout-postadditional-multilayout-label');
define ('GD_TEMPLATESOURCE_LAYOUT_POSTSTATUSDATE', 'layout-poststatusdate');
define ('GD_TEMPLATESOURCE_LAYOUT_TAGINFO', 'layout-taginfo');
define ('GD_TEMPLATESOURCE_LAYOUT_POSTTHUMB', 'layout-postthumb');
define ('GD_TEMPLATESOURCE_LAYOUT_PREVIEWPOST', 'layout-previewpost');
define ('GD_TEMPLATESOURCE_LAYOUT_PREVIEWUSER', 'layout-previewuser');
define ('GD_TEMPLATESOURCE_LAYOUT_SCRIPTFRAME', 'layout-scriptframe');
define ('GD_TEMPLATESOURCE_LAYOUT_SEGMENTEDBUTTON_LINK', 'layout-segmentedbutton-link');
define ('GD_TEMPLATESOURCE_LAYOUT_STYLES', 'layout-styles');
define ('GD_TEMPLATESOURCE_LAYOUT_SUBCOMPONENT', 'layout-subcomponent');
define ('GD_TEMPLATESOURCE_LAYOUT_TAG', 'layout-tag');
define ('GD_TEMPLATESOURCE_LAYOUT_USERAVATAR', 'layout-useravatar');
define ('GD_TEMPLATESOURCE_LAYOUT_USERPOSTINTERACTION', 'layout-userpostinteraction');
define ('GD_TEMPLATESOURCE_LAYOUTPOST_AUTHORAVATAR', 'layoutpost-authoravatar');
define ('GD_TEMPLATESOURCE_LAYOUTPOST_AUTHORNAME', 'layoutpost-authorname');
define ('GD_TEMPLATESOURCE_LAYOUTPOST_DATE', 'layoutpost-date');
define ('GD_TEMPLATESOURCE_LAYOUTPOST_STATUS', 'layoutpost-status');
define ('GD_TEMPLATESOURCE_LAYOUTPOST_TYPEAHEAD_COMPONENT', 'layoutpost-typeahead-component');
define ('GD_TEMPLATESOURCE_LAYOUTPOST_TYPEAHEAD_SELECTED', 'layoutpost-typeahead-selected');
define ('GD_TEMPLATESOURCE_LAYOUTSTATIC_TYPEAHEAD_COMPONENT', 'layoutstatic-typeahead-component');
define ('GD_TEMPLATESOURCE_LAYOUTTAG_TYPEAHEAD_COMPONENT', 'layouttag-typeahead-component');
define ('GD_TEMPLATESOURCE_LAYOUTUSER_MENTION_COMPONENT', 'layoutuser-mention-component');
define ('GD_TEMPLATESOURCE_LAYOUTUSER_QUICKLINKS', 'layoutuser-quicklinks');
define ('GD_TEMPLATESOURCE_LAYOUTUSER_TYPEAHEAD_COMPONENT', 'layoutuser-typeahead-component');
define ('GD_TEMPLATESOURCE_LAYOUTUSER_TYPEAHEAD_SELECTED', 'layoutuser-typeahead-selected');
define ('GD_TEMPLATESOURCE_MESSAGE', 'message');
define ('GD_TEMPLATESOURCE_MULTIPLE', 'multiple');
define ('GD_TEMPLATESOURCE_PAGESECTION_PLAIN', 'pagesection-plain');
define ('GD_TEMPLATESOURCE_SCRIPT_APPENDCOMMENT', 'script-append-comment');
define ('GD_TEMPLATESOURCE_SCRIPT_LAZYLOADINGREMOVE', 'script-lazyloading-remove');
define ('GD_TEMPLATESOURCE_SCROLL', 'scroll');
define ('GD_TEMPLATESOURCE_SCROLL_INNER', 'scroll-inner');
define ('GD_TEMPLATESOURCE_SOCIALMEDIA', 'sm'); // Comment Leo: renamed from "socialmedia" to "sm" because AdBlockPlus blocks them
define ('GD_TEMPLATESOURCE_SOCIALMEDIA_ITEM', 'sm-item'); // Comment Leo: renamed from "socialmedia" to "sm" because AdBlockPlus blocks them
define ('GD_TEMPLATESOURCE_STATUS', 'status');
define ('GD_TEMPLATESOURCE_SUBMENU', 'submenu');
define ('GD_TEMPLATESOURCE_TABLE', 'table');
define ('GD_TEMPLATESOURCE_TABLE_INNER', 'table-inner');
define ('GD_TEMPLATESOURCE_USERLOGGEDIN', 'userloggedin');
define ('GD_TEMPLATESOURCE_VIEWCOMPONENT_BUTTON', 'viewcomponent-button');
define ('GD_TEMPLATESOURCE_VIEWCOMPONENT_HEADER_COMMENTCLIPPED', 'viewcomponent-header-commentclipped');
define ('GD_TEMPLATESOURCE_VIEWCOMPONENT_HEADER_COMMENTPOST', 'viewcomponent-header-commentpost');
define ('GD_TEMPLATESOURCE_VIEWCOMPONENT_HEADER_POST', 'viewcomponent-header-post');
define ('GD_TEMPLATESOURCE_VIEWCOMPONENT_HEADER_REPLYCOMMENT', 'viewcomponent-header-replycomment');
define ('GD_TEMPLATESOURCE_VIEWCOMPONENT_HEADER_USER', 'viewcomponent-header-user');
define ('GD_TEMPLATESOURCE_VIEWCOMPONENT_HEADER_TAG', 'viewcomponent-header-tag');
define ('GD_TEMPLATESOURCE_WIDGET', 'widget');

$pop_serverside_rendering = PoP_ServerSideRendering_Factory::get_instance(); 
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_ALERT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_BLOCK_BARE, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_BLOCK_DESCRIPTION, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_BLOCKGROUP_BLOCKUNITS, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_BUTTONGROUP, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_BUTTON, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_BUTTONINNER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_CAROUSEL, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_CAROUSEL_CONTROLS, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_CAROUSEL_INNER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_CODE, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_CONDITIONWRAPPER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_CONTENT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_CONTENTMULTIPLE_INNER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_CONTENTSINGLE_INNER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_CONTROL_ANCHOR, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_CONTROL_BUTTON, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_CONTROL_DROPDOWNBUTTON, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_CONTROL_RADIOBUTTON, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_CONTROLBUTTONGROUP, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_CONTROLGROUP, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_DIVIDER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FETCHMORE, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FORM, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FORM_INNER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FORMCOMPONENT_BUTTONGROUP, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FORMCOMPONENT_CAPTCHA, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FORMCOMPONENT_CHECKBOX, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FORMCOMPONENT_DATERANGE, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FORMCOMPONENT_FEATUREDIMAGE, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FORMCOMPONENT_FEATUREDIMAGE_INNER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FORMCOMPONENT_FETCHLINKTYPEAHEAD, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FORMCOMPONENT_INPUTGROUP, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FORMCOMPONENT_SELECT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FORMCOMPONENT_SELECTABLETYPEAHEAD, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FORMCOMPONENT_SELECTABLETYPEAHEADTRIGGER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FORMCOMPONENT_TEXT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FORMCOMPONENT_TEXTAREA, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_FORMGROUP, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_HIDEIFEMPTY, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_MESSAGEFEEDBACK, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_MESSAGEFEEDBACK_INNER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LATESTCOUNT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_MAXHEIGHT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_CONTENT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_LINKCONTENT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_APPENDSCRIPT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_AUTHOR_CONTACT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_AUTHOR_USERPHOTO, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_AUTHORCONTENT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_CATEGORIES, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_COMMENT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_DATAQUERY_UPDATEDATA, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_EMBEDPREVIEW, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_INITJSDELAY, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_FULLOBJECTTITLE, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_FULLVIEW, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_FULLUSER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_LATESTCOUNTSCRIPT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_MARKER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_MENU_ANCHOR, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_MENU_COLLAPSESEGMENTEDBUTTON, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_MENU_DROPDOWN, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_MENU_DROPDOWNBUTTON, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_MENU_INDENT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_MENU_MULTITARGETINDENT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_MESSAGEFEEDBACK, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_MESSAGEFEEDBACKFRAME, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_MULTIPLE, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_PAGETAB, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_POPOVER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_POSTADDITIONAL_MULTILAYOUT_LABEL, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_POSTSTATUSDATE, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_TAGINFO, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_POSTTHUMB, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_PREVIEWPOST, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_PREVIEWUSER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_SCRIPTFRAME, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_SEGMENTEDBUTTON_LINK, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_STYLES, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_SUBCOMPONENT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_TAG, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_USERAVATAR, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUT_USERPOSTINTERACTION, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUTPOST_AUTHORAVATAR, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUTPOST_AUTHORNAME, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUTPOST_DATE, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUTPOST_STATUS, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUTPOST_TYPEAHEAD_COMPONENT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUTPOST_TYPEAHEAD_SELECTED, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUTSTATIC_TYPEAHEAD_COMPONENT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUTTAG_TYPEAHEAD_COMPONENT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUTUSER_MENTION_COMPONENT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUTUSER_QUICKLINKS, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUTUSER_TYPEAHEAD_COMPONENT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_LAYOUTUSER_TYPEAHEAD_SELECTED, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_MESSAGE, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_MULTIPLE, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_PAGESECTION_PLAIN, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_SCRIPT_APPENDCOMMENT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_SCRIPT_LAZYLOADINGREMOVE, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_SCROLL, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_SCROLL_INNER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_SOCIALMEDIA, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_SOCIALMEDIA_ITEM, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_STATUS, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_SUBMENU, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_TABLE, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_TABLE_INNER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_USERLOGGEDIN, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_VIEWCOMPONENT_BUTTON, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_VIEWCOMPONENT_HEADER_COMMENTCLIPPED, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_VIEWCOMPONENT_HEADER_COMMENTPOST, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_VIEWCOMPONENT_HEADER_POST, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_VIEWCOMPONENT_HEADER_REPLYCOMMENT, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_VIEWCOMPONENT_HEADER_USER, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_VIEWCOMPONENT_HEADER_TAG, POP_COREPROCESSORS_PHPTEMPLATES_DIR);
$pop_serverside_rendering->add_templatesource_path(GD_TEMPLATESOURCE_WIDGET, POP_COREPROCESSORS_PHPTEMPLATES_DIR);