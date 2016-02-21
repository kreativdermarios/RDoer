function createCookie(name,value,days) {
      if (days) {
        var date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        var expires = "; expires="+date.toGMTString();
      }
      else var expires = "";
      document.cookie = name+"="+value+expires+"; path=/";
    }
    function readCookie(name) {
      var nameEQ = name + "=";
      var ca = document.cookie.split(';');
      for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
      }
      return null;
    }
    
    function buscaClick(link){

     // alert(window.location.hostname);

      var hostname = window.location.hostname;
      
      now = new Date
      valorcokkie = 'internalta_'+now.getYear()+now.getMonth()+now.getDay()+now.getHours()+now.getMinutes()+now.getSeconds();

      id_acesso = readCookie("ppkcookie");
      if( ! id_acesso ){ 
        createCookie('ppkcookie', valorcokkie, 7);
      }

      var url = 'https://rdoer.herokuapp.com/dados/'+id_acesso+'/'+link+'/'+hostname;
      $.get(url, function(dataReturn) {
        $('#load').html(dataReturn);
      });

    }