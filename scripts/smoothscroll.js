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
<<<<<<< HEAD
  $(".all_content").show();
	/*$(".workcontent").hide();*/
	
  $("#personal_content").hide();
  $("#current_content").hide();
  $("#work_content").hide();
    $("#work").css({
      'border':'2px solid #00BCD4',
      'padding': '3px'
    });
=======
  $("#all_content").show();
  $("#all").css('opacity', '0.3');
	/*$(".workcontent").hide();*/
	
  $("#personal_content").hide();
  $("#work_content").hide();
    /*$("#work").css({
      'border':'2px solid #00BCD4',
      'padding': '3px'
    });*/
>>>>>>> a7ee0596975725ee26b022af0de1642f59fe7a58
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
<<<<<<< HEAD
  	$(".nav_container").css('opacity','.8')
=======
  	/*$(".nav_container").css('opacity','.8')*/
>>>>>>> a7ee0596975725ee26b022af0de1642f59fe7a58
  })

/* -------- Toggling between projects ------- */
  $(".personal").click(function(){
<<<<<<< HEAD
    $("#personal").css({
      'border':'2px solid #00BCD4',
      'padding': '3px'
    });
    $("#current").css({
=======
    /*$("#personal").css({
      'border':'2px solid #00BCD4',
      'padding': '3px'
    });
    $("#all").css({
>>>>>>> a7ee0596975725ee26b022af0de1642f59fe7a58
      'border':'none',
      'padding': '5px'
    });
    $("#work").css({
      'border':'none',
      'padding': '5px'
<<<<<<< HEAD
    });
    $("#personal_content").show();
    $("#current_content").hide();
    $("#work_content").hide()
 
  });  
  $(".current").click(function(){
    $("#current").css({
=======
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
>>>>>>> a7ee0596975725ee26b022af0de1642f59fe7a58
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
<<<<<<< HEAD
    });
    $("#personal_content").hide();
    $("#current_content").show();
=======
    });*/
      $("#all").css('opacity', '0.3');
      $("#personal").css('opacity', '0.8');
      $("#work").css('opacity', '0.8');
    $("#personal_content").hide();
    $("#all_content").show();
>>>>>>> a7ee0596975725ee26b022af0de1642f59fe7a58
    $("#work_content").hide();

  }); 
  $(".work").click(function(){
<<<<<<< HEAD
    $("#work").css({
=======
    /*$("#work").css({
>>>>>>> a7ee0596975725ee26b022af0de1642f59fe7a58
      'border':'2px solid #00BCD4',
      'padding': '3px'
    });
    $("#personal").css({
      'border':'none',
      'padding': '5px'
    });
<<<<<<< HEAD
    $("#current").css({
      'border':'none',
      'padding': '5px'
    });
    $("#personal_content").hide();
    $("#current_content").hide();
    $("#work_content").hide();
=======
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
>>>>>>> a7ee0596975725ee26b022af0de1642f59fe7a58
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






	