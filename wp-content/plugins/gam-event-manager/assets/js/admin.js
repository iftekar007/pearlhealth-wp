var Admin= function () {    /// <summary>Constructor function of the event admin class.</summary>    /// <returns type="Home" />      // Uploading files    var file_frame;    var file_target_input;    var file_target_wrapper;    return {	    ///<summary>        ///Initializes the admin.          ///</summary>             ///<returns type="initialization settings" />           /// <since>1.0.0</since>         init: function()         {						 //Tooltips			 jQuery( ".tips, .help_tip" ).tipTip({								  'attribute' : 'data-tip',								  'fadeIn' : 50,								  'fadeOut' : 50,								  'delay' : 200			 				    });			// datetime picker for post event			var date = new Date();			var currentMonth = date.getMonth();			var currentDate = date.getDate();			var currentYear = date.getFullYear();						jQuery('input#_event_start_date').datetimepicker({										 sideBySide: true,				                  showClear: true,                 format: 'YYYY-MM-DD',                 toolbarPlacement: 'bottom',				 minDate: new Date(currentYear, currentMonth, currentDate)				});						jQuery('input#_event_start_time').datetimepicker({						format: 'LT'							});			jQuery('input#_event_end_date').datetimepicker({						  				sideBySide: true,				                showClear: true,                format: 'YYYY-MM-DD',                toolbarPlacement: 'bottom',				minDate: new Date(currentYear, currentMonth, currentDate)			});						jQuery('input#_event_end_time').datetimepicker({						format: 'LT'							});			jQuery( "input#_event_registration_deadline" ).datetimepicker({				sideBySide: true,					showClear: true,				format: 'YYYY-MM-DD',				toolbarPlacement: 'bottom',				minDate: new Date(currentYear, currentMonth, currentDate)			});					                          /*show default value of the expiry date based on settings */			jQuery('input#_event_expiry_date').datetimepicker({						  				sideBySide: true,			    format: 'l', //only date,			    date:jQuery('#_event_expiry_date').val(),			    showClear: true,			    toolbarPlacement: 'bottom'			});										//event end date not less than event start date			jQuery("#_event_end_date").on("dp.change", function (e) {				jQuery('#_event_start_date').data("DateTimePicker").maxDate(e.date);			});					    //event expiry date not less than event end date			jQuery("#_event_expiry_date").on("dp.change", function (e) {				jQuery('#_event_expiry_date').data("DateTimePicker").minDate(jQuery('#_event_end_date').val());			});			//Author			jQuery("p.form-field-author").on('click',Admin.author.changeAuthor);			jQuery("#setting-event_manager_submission_expire_options").on('change',Admin.settings.selectEventExpiryOption);							//file upload 			jQuery(".gam_event_manager_upload_file_button").live('click',Admin.fileUpload.addFile);			jQuery(".gam_event_manager_add_another_file_button").live('click',Admin.fileUpload.addAnotherFile);		},	author:	{			   /// <summary>			   /// Change Author.           			   /// </summary>			   /// <param name="parent" type="Event"></param>           			   /// <returns type="actions" />     			   /// <since>1.0.0</since>       			   changeAuthor: function(event) 			   {			   	jQuery(this).closest( 'p' ).find('.current-author').hide();				jQuery(this).closest( 'p' ).find('.change-author').show();				return false;				event.preventDefault();			   },	},		settings :	{	            /// <summary>			   /// You can set event submission expiry time either event end date or specific days..           			   /// </summary>			   /// <param name="parent" type="Event"></param>           			   /// <returns type="actions" />     			   /// <since>1.0.0</since>       			   selectEventExpiryOption: function(event) 			   {			   	var option= jQuery( "#setting-event_manager_submission_expire_options option:selected" ).val();					if ( option =='days' ) 								     jQuery('#setting-event_manager_submission_duration').closest('tr').show();				else 				    				      jQuery('#setting-event_manager_submission_duration').closest('tr').hide();				event.preventDefault();			   }	},	fileUpload:	{               /// <summary>			   /// Upload new file from admin area.          			   /// </summary>			   /// <param name="parent" type="Event"></param>           			   /// <returns type="actions" />     			   /// <since>1.0.0</since>       			   addFile: function(event) 			   {			   	event.preventDefault();				file_target_wrapper = jQuery( this ).closest('.file_url');				file_target_input   = file_target_wrapper.find('input');				// If the media frame already exists, reopen it.				if ( file_frame ) 				{				    file_frame.open();				    return;				}			     	// Create the media frame.				file_frame = wp.media.frames.file_frame = wp.media({					title: jQuery( this ).data( 'uploader_title' ),					button: {						text: jQuery( this ).data( 'uploader_button_text' ),					},					multiple: false  // Set to true to allow multiple files to be selected				});				// When an image is selected, run a callback.				file_frame.on( 'select', function() 				{				    // We set multiple to false so only get one image from the uploader					attachment = file_frame.state().get('selection').first().toJSON();					jQuery( file_target_input ).val( attachment.url );				});				// Finally, open the modal				file_frame.open();			   },			   /// <summary>			   /// Upload new file from admi area. when admin want to add another file then admin can add new file.           			   /// </summary>			   /// <param name="parent" type="Event"></param>           			   /// <returns type="actions" />     			   /// <since>1.0.0</since>       			   addAnotherFile: function(event) 			   {    			   	event.preventDefault();    			   	var wrapper           = jQuery( this ).closest( '.form-field' );    				var field_name        = jQuery( this ).data( 'field_name' );    				var field_placeholder = jQuery( this ).data( 'field_placeholder' );    				var button_text       = jQuery( this ).data( 'uploader_button_text' );    				var button            = jQuery( this ).data( 'uploader_button' );    				jQuery( this ).before('<span class="file_url"><input type="text" name="' + field_name + '[]" placeholder="' + field_placeholder + '" /><button class="button button-small gam_event_manager_upload_file_button" data-uploader_button_text="' + button_text + '">' + button + '</button></span>');			   }	   }          } //enf of return}; //end of classAdmin= Admin();jQuery(document).ready(function($) {  Admin.init();});