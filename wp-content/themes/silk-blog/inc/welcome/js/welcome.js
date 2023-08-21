jQuery(document).ready(function() {

  var counter = jQuery('#counter-count').data('counter');
  if ( counter != '0')  {  
    jQuery('li.silkblog-w-red-tab a').append('<span class="silkblog-actions-count">' + counter + '</span>');
  } else {
    jQuery('.silkblog-tab').removeClass( 'silkblog-w-red-tab' );
  }
	/* Tabs in welcome page */
	function silkblog_welcome_page_tabs(event) {
		jQuery(event).parent().addClass("active");
        jQuery(event).parent().siblings().removeClass("active");
        var tab = jQuery(event).attr("href");
        jQuery(".silkblog-tab-pane").not(tab).css("display", "none");
        jQuery(tab).fadeIn();
	}

	var silkblog_actions_anchor = location.hash;

	if( (typeof silkblog_actions_anchor !== 'undefined') && (silkblog_actions_anchor != '') ) {
		silkblog_welcome_page_tabs('a[href="'+ silkblog_actions_anchor +'"]');
	}

    jQuery(".silkblog-nav-tabs a").click(function(event) {
        event.preventDefault();
		silkblog_welcome_page_tabs(this);
    });

 /* Tab Content height matches admin menu height for scrolling purpouses */
		$tab = jQuery('.silkblog-tab-content > div');
		$admin_menu_height = jQuery('#adminmenu').height();
    if( (typeof $tab !== 'undefined') && (typeof $admin_menu_height !== 'undefined') )
  {
		$newheight = $admin_menu_height - 180;
		$tab.css('min-height',$newheight);
  }
});
