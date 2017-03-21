



   (function mobilMenu() {
      $(".menu-open").click(function openMenu(){     
          $('.paanavi').toggle("slide");
          }); 
      })();


      (function() {
      $('#tähän avattava suljettu elementti').hide();

      $('#tähän avausnappi id').on('click', function() {    
          $('#tähän mitä avataan').toggle('slow');
        });
      })();
    



      $('#button id').click(function(){
    var $this = $(this);
    $this.toggleClass('tähänbutton id ilman #');
    if($this.hasClass('tähänbutton id ilman #')){
        $this.text('Tähän uusi teksti');         
    } else {
        $this.text('Tähän alkuperäinen teksti');
    }
    });





