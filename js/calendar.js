
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth'
        });
        calendar.render();
      });


      $(document).ready(function(){
        $("#accion").on('change', function(){
          var value =$("#accion").val();
          if (value==1){
            $("#infoForm").hide();
          }

          if(value==2){
            $("#infoForm").show();
          }
        });
      
      });


      $(document).ready(function(){
        $("button").click(function(){
          $("#infoForm").hide();
        });
      });