/**
* Theme: Uplon Admin Template
* Author: Coderthemes
* Component: Full-Calendar
* 
*/

function registerSchedule(title, start, end, className) {
                
    var xhttp = new XMLHttpRequest();
    
    xhttp.open('POST', "user_admin_schedule_registration.php?title=" + title + 
                        "&start=" + start + 
                        "&end=" + end + 
                        "&className=" + className, true);
    
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText.match("error:")) {
                document.getElementById("error").innerHTML = this.responseText.replace("error:","");
            }
        } else if (this.status == 403 || this.status == 404) {
            alert("Ocorreu um erro.\nO cadastro não pode ser efetuado.");
        }
    };
    xhttp.send();
}



!function($) {
    "use strict";

    var CalendarApp = function() {
        this.$body = $("body")
        this.$modal = $('#event-modal'),
        this.$event = ('#external-events div.external-event'),
        this.$calendar = $('#calendar'),
        this.$saveCategoryBtn = $('.save-category'),
        this.$categoryForm = $('#add-category form'),
        this.$extEvents = $('#external-events'),
        this.$calendarObj = null
    };


    


    /* on drop */
    CalendarApp.prototype.onDrop = function (eventObj, date) { 
        var $this = this;
            // retrieve the dropped element's stored Event Object
            var originalEventObject = eventObj.data('eventObject');
            var $categoryClass = eventObj.attr('data-class');
            // we need to copy it, so that multiple events don't have a reference to the same object
            var copiedEventObject = $.extend({}, originalEventObject);
            // assign it the date that was reported
            copiedEventObject.start = date;
            if ($categoryClass)
                copiedEventObject['className'] = [$categoryClass];
            // render the event on the calendar
            $this.$calendar.fullCalendar('renderEvent', copiedEventObject, true);
            // is the "remove after drop" checkbox checked?
            if ($('#drop-remove').is(':checked')) {
                // if so, remove the element from the "Draggable Events" list
                eventObj.remove();
            }
    },
    /* on click on event */
    CalendarApp.prototype.onEventClick =  function (calEvent, jsEvent, view) {
        
        //TODO DAR A OPÇÃO DE MUDAR O HORARIO DO EVENTO
        
        
        var $this = this;
            var form = $("<form></form>");
            form.append("<label>Change event name</label>");
            form.append("<div class='input-group'><input class='form-control' type=text value='" + calEvent.title + "' /><span class='input-group-btn'><button type='submit' class='btn btn-success waves-effect waves-light'><i class='fa fa-check'></i> Save</button></span></div>");
            $this.$modal.modal({
                backdrop: 'static'
            });
            $this.$modal.find('.delete-event').show().end().find('.save-event').hide().end().find('.modal-body').empty().prepend(form).end().find('.delete-event').unbind('click').click(function () {
                $this.$calendarObj.fullCalendar('removeEvents', function (ev) {
                    return (ev._id == calEvent._id);
                });
                $this.$modal.modal('hide');
            });
            $this.$modal.find('form').on('submit', function () {
                calEvent.title = form.find("input[type=text]").val();
                $this.$calendarObj.fullCalendar('updateEvent', calEvent);
                $this.$modal.modal('hide');
                return false;
            });
    },
    /* on select */
    CalendarApp.prototype.onSelect = function (start, end, allDay) {

        var $this = this;
        
        var name = document.getElementById("username");
        var usertype = document.getElementById("usertype");
        var s = name.value;
        var type = usertype.value;
        
        $this.$modal.modal({
            backdrop: 'static'
        });
        
        var form = $("<form></form>");
        if(type == "client"){
            form.append("<div class='row'></div>");
            form.find(".row")
                .append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Categoria</label><select class='form-control' name='category'></select></div></div>")
                .find("select[name='category']")
                .append("<option value='bg-danger'>Auditório</option>")
                .append("<option value='bg-primary'>Carro</option>");
            form.find(".row")
                .append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Horário</label><select class='form-control' name='time'></select></div></div>")
                .find("select[name='time']")
                .append("<option value='T07:00:00'>M12</option>")
                .append("<option value='T08:55:00'>M34</option>")
                .append("<option value='T10:50:00'>M56</option>")
                .append("<option value='T13:00:00'>T12</option>")
                .append("<option value='T14:55:00'>T34</option>")
                .append("<option value='T16:50:00'>T56</option>");
        }
        else {
            form.append("<div class='row'></div>");
            form.find(".row")
                .append("<div class='col-md-4'><div class='form-group'><label class='control-label'>nome do Cliente</label><input class='form-control' placeholder='' type='text' name='title'/></div></div>")
                .append("<div class='col-md-4'><div class='form-group'><label class='control-label'>Categoria</label><select class='form-control' name='category'></select></div></div>")
                .find("select[name='category']")
                .append("<option value='bg-danger'>Auditório</option>")
                .append("<option value='bg-primary'>Carro</option>");
            form.find(".row")
                .append("<div class='col-md-4'><div class='form-group'><label class='control-label'>Horário</label><select class='form-control' name='time'></select></div></div>")
                .find("select[name='time']")
                .append("<option value='T07:00:00'>M12</option>")
                .append("<option value='T08:55:00'>M34</option>")
                .append("<option value='T10:50:00'>M56</option>")
                .append("<option value='T13:00:00'>T12</option>")
                .append("<option value='T14:55:00'>T34</option>")
                .append("<option value='T16:50:00'>T56</option>");
        }
            
        
        $this.$modal.find('.delete-event').hide().end().find('.save-event').show().end().find('.modal-body').empty().prepend(form).end().find('.save-event').unbind('click').click(function () {
            form.submit();
        });
        $this.$modal.find('form').on('submit', function () {
            var title;
            if(type == "client"){
                title = s;
            }
            else{
                title = form.find("input[name='title']").val();
            }
            var init = form.find("select[name='time'] option:checked").val();
            
            
            var eventTime = "01:40:00";
            var hour=0;
            var minute=0;
            var second=0;
            var h = "";
            var m = "";
            var splitTime1= eventTime.split(':');
            var splitTime2= init.split(':');
            hour = parseInt(splitTime1[0])+parseInt(splitTime2[0]);
            minute = parseInt(splitTime1[1])+parseInt(splitTime2[1]);
            second = parseInt(splitTime1[2])+parseInt(splitTime2[2]);
            minute = minute + second/60;
            second = second%60;
            hour = hour + minute/60;
            minute = minute%60;
            
            if(hour < 10){
                if (minute < 10){
                    h = "0" + hour;
                    m = "0" + minute;
                }
                else{
                    h = "0" + hour;
                    m = "" + minute;
                }
            }
            else {
                if (minute < 10){
                    h = "" + hour;
                    m = "0" + minute;
                }
                else {
                    h = "" + hour;
                    m = "" + minute;
                }
            }
            var ending = h+':'+m+':00';
            
            
            var categoryClass = form.find("select[name='category'] option:checked").val();
            if (title !== null && title.length != 0) {
                $this.$calendarObj.fullCalendar('renderEvent', {
                    title: title,
                    start: start.format() + init,
                    end: start.format() +ending,
                    allDay: false,
                    className: categoryClass
                }, true);  
                $this.$modal.modal('hide');
                
                registerSchedule(title, start.format() + init, start.format() +ending, categoryClass);
            }
            else{
                alert('Coloque o seu nome');
            }
            return false;
            
        });
        $this.$calendarObj.fullCalendar('unselect');
    },
    CalendarApp.prototype.enableDrag = function() {
        //init events
        $(this.$event).each(function () {
            // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
            // it doesn't need to have a start or end
            var eventObject = {
                title: $.trim($(this).text()) // use the element's text as the event title
            };
            // store the Event Object in the DOM element so we can get to it later
            $(this).data('eventObject', eventObject);
            // make the event draggable using jQuery UI
            $(this).draggable({
                zIndex: 999,
                revert: true,      // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
            });
        });
    }
    /* Initializing */
    CalendarApp.prototype.init = function() {
        
        //get the schedules at a external json file
        var json = (function () {
            var json = null;
            $.ajax({
                'async': false,
                'global': false,
                'url': "./database/user_admin_schedules.json",
                'dataType': "json",
                'success': function (data) {
                    json = data;
                }
            });
            return json;
        })(); 
        
        this.enableDrag();
        /*  Initialize the calendar  */
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();
        var form = '';
        var today = new Date($.now());
        
        var defaultEvents = json["defaultEvents"];


        var $this = this;
        
        $this.$calendarObj = $this.$calendar.fullCalendar({
            slotDuration: '00:30:00', /* If we want to split day time each 15minutes */
            timedEventDuration: '02:00:00',
            minTime: '07:00:00',
            maxTime: '19:00:00',  
            defaultView: 'month',  
            handleWindowResize: true,   
            height: $(window).height() - 200,   
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            events: defaultEvents,
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            eventLimit: true, // allow "more" link when too many events
            selectable: true,
            drop: function(date) { $this.onDrop($(this), date); },
            select: function (start, end, allDay) { $this.onSelect(start, end, allDay); },
            eventClick: function(calEvent, jsEvent, view) { $this.onEventClick(calEvent, jsEvent, view); }

        });

        //on new event
        this.$saveCategoryBtn.on('click', function(){
            var categoryName = $this.$categoryForm.find("input[name='category-name']").val();
            var categoryColor = $this.$categoryForm.find("select[name='category-color']").val();
            if (categoryName !== null && categoryName.length != 0) {
                $this.$extEvents.append('<div class="external-event bg-' + categoryColor + '" data-class="bg-' + categoryColor + '" style="position: relative;"><i class="fa fa-move"></i>' + categoryName + '</div>')
                $this.enableDrag();
            }

        });
    },

   //init CalendarApp
    $.CalendarApp = new CalendarApp, $.CalendarApp.Constructor = CalendarApp
    
}(window.jQuery),

//initializing CalendarApp
function($) {
    "use strict";
    $.CalendarApp.init()
}(window.jQuery);
