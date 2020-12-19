// (function(d, s, id) {
//   var js, fjs = d.getElementsByTagName(s)[0];
//   if (d.getElementById(id)) return;
//   js = d.createElement(s); js.id = id;
//   js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=248875905254277";
//   fjs.parentNode.insertBefore(js, fjs);
// }(document, 'script', 'facebook-jssdk'));



 
$(document).ready(function(){
 
        $(".slidingPersonal").hide();
        $(".show_hide_personal").show();
 
    $('.show_hide_personal').click(function(){
    $(".slidingPersonal").slideToggle();
	$(".slidingOrganisation").hide();
	$('.slidingOrganisation').remove();
    });
 
});
 
 $(document).ready(function(){
 
        $(".slidingOrganisation").hide();
        $(".show_hide_organisation").show();
 
    $('.show_hide_organisation').click(function(){
    $(".slidingOrganisation").slideToggle();
	  $(".slidingPersonal").hide();
	   $('.slidingPersonal').remove();
	    });
 
});
 $(document).ready(function(){
 
        $(".slidingContact").hide();
        $(".show_hide_contact").show();
 
    $('.show_hide_contact').click(function(){
    $(".slidingContact").slideToggle();
    });
 
});

