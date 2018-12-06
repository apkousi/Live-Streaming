$(document).ready(function() {

      $("td:eq(4)").each(function(){
        if ($(this).text() <=50) {
              $('td:eq(4)').css('background-color', 'green');
          }
        else if($(this).text()>50 && $(this).text() <=60)
         {
          $('td:eq(4)').css('background-color', 'red');
        }
        else {
            $('td:eq(4)').css('background-color', 'yellow');
          }
      });

      $("td:eq(9)").each(function(){
        if ($(this).text() <=1.4) {
              $('td:eq(9)').css('background-color', 'green');
          }
        else if($(this).text() >1.4 && $(this).text() <=1.6)
         {
          $('td:eq(9)').css('background-color', 'red');
        }
        else {
            $('td:eq(9)').css('background-color', 'yellow');
          }
      });

      $("td:eq(14)").each(function(){
        if ($(this).text() <=23.5) {
              $('td:eq(14)').css('background-color', 'green');
          }
        else if($(this).text() >23.5 && $(this).text() <=26.5)
         {
          $('td:eq(14)').css('background-color', 'red');
        }
        else {
            $('td:eq(14)').css('background-color', 'yellow');
          }
      });
});
