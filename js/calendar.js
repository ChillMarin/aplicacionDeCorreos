
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
            $("#fechayhora").hide();
          }

          if(value==2 || value==3 ){
            $("#fechayhora").show();
          }
        });
      
      });


      function SubForm (){
        $.ajax({
            url: '../correos/correo.php',
            type: 'post',
            data: $('#formulario').serialize(),
            success: function(){
                alert("Correo enviado");
            }
        });
    }

      function excel()
      {
  
          var Form = new FormData($('#formulario')[0]);
          $.ajax({
  
              url: "../correos/correo.php",
              type: "post",
              data : Form,
              processData: false,
              contentType: false,
              success: function(data)
              {
                  alert('Correos agregados!');
                  
              }
          });
      }

      