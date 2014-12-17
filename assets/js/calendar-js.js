jQuery(document).ready(function() {
	
	
		/* initialize the external events
		-----------------------------------------------------------------*/
	
		jQuery('#external-events div.external-event').each(function() {
		
			// create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
			// it doesn't need to have a start or end
			var eventObject = {
				title: $.trim($(this).text()) // use the element's text as the event title
			};
			
			// store the Event Object in the DOM element so we can get to it later
			jQuery(this).data('eventObject', eventObject);
			
			// make the event draggable using jQuery UI
			jQuery(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});
			
		});
	
	
		/* initialize the calendar
		-----------------------------------------------------------------*/
		
		jQuery('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
            editable: true,
            weekends: false,
            hiddenDays: [6, 7],
            start: '06:00',
            end: '23:00',
			droppable: true, // this allows things to be dropped onto the calendar !!!
			drop: function(date, allDay) { // this function is called when something is dropped
			    alert(date + ' ' + allDay);
				// retrieve the dropped element's stored Event Object
				var originalEventObject = jQuery(this).data('eventObject');
				
				// we need to copy it, so that multiple events don't have a reference to the same object
				var copiedEventObject = $.extend({}, originalEventObject);
				
				// assign it the date that was reported
				copiedEventObject.start = date;
				copiedEventObject.allDay = allDay;
				
				// render the event on the calendar
				// the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
				jQuery('#calendar').fullCalendar('renderEvent', copiedEventObject, true);
				
				// is the "remove after drop" checkbox checked?
				if (jQuery('#drop-remove').is(':checked')) {
					// if so, remove the element from the "Draggable Events" list
					jQuery(this).remove();
				}
			},
            dayClick: function(date, jsEvent, view) {
                //alert('Clicked on: ' + date);
                //alert('Coordinates: ' + jsEvent);
                //alert('Current view: ' + view.name);
                // change the day's background color just for fun
                //$(this).css('background-color', 'red');
                
                //$('.theCalendar').html('<div style="padding: 20px 0; text-align: center;"><i class="fa fa-circle-o-notch fa-spin fa-4x"></i></div>');
                $('#calendar').fullCalendar('changeView', 'agendaDay');
            },
            eventSources: [

            // your event source
            {
                events: [ // put the array in the `events` property
                    {
                        title  : 'event2',
                        start  : '2014-11-28T07:00:00',
                        end    : '2014-11-28T11:00:00'
                    },
                    {
                        title  : 'event3',
                        start  : '2014-11-28T12:30:00',
                    }
                ],
                color: 'black',     // an option!
                textColor: 'yellow' // an option!
            }

            // any other event sources...

        ]
		});
        
		
	});