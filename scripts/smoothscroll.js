/* --- Smooth Scroll ---*/
$(document).ready(function() {
  $(".scroll").click(function() {
    var location = ("#" + $(event.target).text()).toLowerCase();
      $('html, body').animate({
          scrollTop: $(location).offset().top - 100
      }, 700);
  });
});

/*$(document).ready(function() {
	 $('a[href=#]').click(function(){
	     $('html, body').animate({scrollTop:0}, 'slow');
	     return false;
	});
}); */

$(document).ready(function() {
  $(".bottomMenu").hide();
	$("#myModal").hide();
	$(".home_page").show();
  $("#all_content").show();
  $("#all").css('opacity', '0.3');
	/*$(".workcontent").hide();*/
	
  $("#personal_content").hide();
  $("#work_content").hide();
    /*$("#work").css({
      'border':'2px solid #00BCD4',
      'padding': '3px'
    });*/
	$(".home_nav").click(function(){
    
    /*$(".workcontent").hide();*/
    $(".home_page").show();
  });

  $(".about_nav").click(function(){
    
    /*$(".workcontent").hide();*/
    $(".home_page").show();
  });

  $(".work_nav").click(function(){
    
    /*$(".workcontent").hide();*/
    $(".home_page").show();
  });

  $("#card1").click(function(){
  	$("#myModal").css('display', 'block');
  	/*$(".nav_container").css('opacity','.8')*/
  })

/* -------- Toggling between projects ------- */
  $(".personal").click(function(){

    /*$("#personal").css({
      'border':'2px solid #00BCD4',
      'padding': '3px'
    });
    $("#all").css({
      'border':'none',
      'padding': '5px'
    });
    $("#work").css({
      'border':'none',
      'padding': '5px'
    });*/
      $("#personal").css('opacity', '0.3');
      $("#work").css('opacity', '0.8');
      $("#all").css('opacity', '0.8');
    $("#personal_content").show();
    $("#all_content").hide();
    $("#work_content").hide()
 
  });  
  $(".all").click(function(){
    /*$("#all").css({
      'border':'2px solid #00BCD4',
      'padding': '3px'
    });
    $("#personal").css({
      'border':'none',
      'padding': '5px'
    });
    $("#work").css({
      'border':'none',
      'padding': '5px'
    });*/
      $("#all").css('opacity', '0.3');
      $("#personal").css('opacity', '0.8');
      $("#work").css('opacity', '0.8');
    $("#personal_content").hide();
    $("#all_content").show();
    $("#work_content").hide();

  }); 
  $(".work").click(function(){
    /*$("#work").css({
      'border':'2px solid #00BCD4',
      'padding': '3px'
    });
    $("#personal").css({
      'border':'none',
      'padding': '5px'
    });
    $("#all").css({
      'border':'none',
      'padding': '5px'
    });*/
      $("#work").css('opacity', '0.3');
      $("#all").css('opacity', '0.8');
      $("#personal").css('opacity', '0.8');
    $("#personal_content").hide();
    $("#all_content").hide();
    $("#work_content").show();
  }); 
/* --------- End Section ---------- */




 /* var modal = document.getElementById('myModal');
  window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
	}
	$(".close").click(function(){
  	modal.style.display = "none";
  })*/

/* ----- Loader ------- */
/*$(window).load(function() {
    // Animate loader off screen
    $(".loader").fadeOut("slow");;
});*/
/* --- Back to Top Scroll ---- */
$(document).scroll(function() {
  var y = $(this).scrollTop();
  if (y > 500) {
    $('.bottomMenu').fadeIn();
    $('.bottomMenu').show();
  } else {
    $('.bottomMenu').fadeOut();
  }
  $('.contact_icons').css("margin-left","0px");
});
$('a[href=#top]').click(function(){
 $('body','html').animate({
     scrollTop: 0},"slow");});

});






	