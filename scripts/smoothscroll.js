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
  $(".all_content").show();
	/*$(".workcontent").hide();*/
	
  $("#personal_content").hide();
  $("#current_content").hide();
  $("#work_content").hide();
    $("#work").css({
      'border':'2px solid #00BCD4',
      'padding': '3px'
    });
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
  	$(".nav_container").css('opacity','.8')
  })

/* -------- Toggling between projects ------- */
  $(".personal").click(function(){
    $("#personal").css({
      'border':'2px solid #00BCD4',
      'padding': '3px'
    });
    $("#current").css({
      'border':'none',
      'padding': '5px'
    });
    $("#work").css({
      'border':'none',
      'padding': '5px'
    });
    $("#personal_content").show();
    $("#current_content").hide();
    $("#work_content").hide()
 
  });  
  $(".current").click(function(){
    $("#current").css({
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
    });
    $("#personal_content").hide();
    $("#current_content").show();
    $("#work_content").hide();

  }); 
  $(".work").click(function(){
    $("#work").css({
      'border':'2px solid #00BCD4',
      'padding': '3px'
    });
    $("#personal").css({
      'border':'none',
      'padding': '5px'
    });
    $("#current").css({
      'border':'none',
      'padding': '5px'
    });
    $("#personal_content").hide();
    $("#current_content").hide();
    $("#work_content").hide();
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
});
$('a[href=#top]').click(function(){
 $('body','html').animate({
     scrollTop: 0},"slow");});

});






	