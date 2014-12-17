jQuery(document).ready(function() {
    $( "body").delegate( "#taskListForm", "submit", function(e) {
        e.preventDefault();
        
        /**data check**/
        var date = $('#datepicker').val();
        var from = $('#fromTime').val();
        var to = $('#toTime').val();
        var customer = $('#selectCustomer').val();
        var proyecto = $('.theproject').val();
        var subtask = $('.thesubtask').val();
        var task = $('#selectTask').val();
        var unixtime1 = Date.parse("24/09/2011 "+from+":00");
        var unixtime2 = Date.parse("24/09/2011 "+to+":00");
        var diferencia = unixtime2-unixtime1;
        var detail = $('#detail').val();

        if(diferencia <= 0){
            swal({
              title: "ERROR",
              text: "The field (from) can't be greater or equal than the field (to).",
              type: "error",
            });
        }
        else if(date=='' || customer==0 || task==0 || proyecto==0 || subtask==0 || detail==''){
            swal({
              title: "ERROR",
              text: "All fields are required.",
              type: "error",
            });
        }
        else{
            var datos = $(this).serialize();
        
            $.ajax({
                data: datos,
                url: base+"ajax/loadTaskList",
                type: "POST"
            }).done(function(d) {
                $('.tasksList').prepend(d);
                $( ".tasksList tr:first" ).addClass('bounceInDown animated');
                $('#detail').val('');
                
                var count = $('.tasksList > tr').length;
                if(count>0){
                    $('.saveTasksBtn').show();
                }else{
                    $('.saveTasksBtn').hide();
                }
            });
        }
        
        return false;
        
    });
    
    $( "body").delegate( "#selectCustomer", "change", function() {
        var customer = $('option:selected', this).attr('value');
        if(customer==0){
            $("#selectProject select").prop("disabled", true); 
            $("#selectProject select").val("0"); 
        }else{
            $("#selectProject").prop("disabled", false);
            $("#selectProject").html('<div style="padding: 5px 0px; text-align: center;"><i class="fa fa-circle-o-notch fa-spin"></i></div>');
            $("#selectProject").load(base+'ajax/loadprojects/'+customer);
            //$('.allSelect').hide();
            //$('.client-'+customer).show();
        }
    });
    
    $( "body").delegate( "#selectTask", "change", function() {
        var task = $('option:selected', this).attr('value');
        if(task==0){
            $("#selectSubtask select").prop("disabled", true); 
            $("#selectSubtask select").val("0");
        }else{
            $("#selectSubtask").prop("disabled", false);
            $("#selectSubtask").html('<div style="padding: 5px 0px; text-align: center;"><i class="fa fa-circle-o-notch fa-spin"></i></div>');
            $("#selectSubtask").load(base+'ajax/loadsubtasks/'+task);
            
        }
    });
    
    //var nombreLinea = $('option:selected', this).attr('lang');
    
    $( "body").delegate( ".delete-row", "click", function() {
        var obj = $(this);
        swal({
          title: "Are you sure?",
          text: "You will delete this data permanetly.",
          type: "warning",
          showCancelButton: true,
          confirmButtonColor: "#DD6B55",
          confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false
        },
        function(){
            $(obj).closest('tr').fadeOut(function(){
                $(obj).remove();
            });
            swal("Deleted!", "Your data has been deleted.", "success");
            var count = $('.tasksList > tr').length;
            if(count>0){
                $('.saveTasksBtn').show();
            }else{
                $('.saveTasksBtn').hide();
            }
        });
        
        return false;
    });
});