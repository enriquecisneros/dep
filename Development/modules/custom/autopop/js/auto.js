jQuery( function() {
            jQuery( "#dialog" ).dialog({
		      autoOpen: true,
		      width: 'auto',
		      height:"auto",
		      modal: true,
		      closeText: "hide",
		      draggable: false,
		      closeOnEscape: false,
		      open: function(event, ui) {   //added here
			    jQuery('.ui-widget-overlay').on('click', function() {
			      jQuery('#dialog').dialog('close');
			    });
			  },
		      show: {
			    effect: 'fade',
			    duration: 250,

			  },
			  hide: {
			    effect: 'fade',
			    duration: 250
			  }
		    
		    });
        
    
});
  