jQuery(document).ready(function ($) {
	//open popup
		$("#game").on("click", function (event) {
			event.preventDefault();
			  $("#pop.cd-popup").addClass("is-visible");
			  
			});
		  




	//close popup
	$(".cd-popup").on("click", function (event) {
	  if (
		$(event.target).is(".cd-popup-close") ||
		$(event.target).is(".cd-popup") || $(event.target).is(".clickRefuse")
	  ) {
		event.preventDefault();
		$(this).removeClass("is-visible");
	  }
	});
	//close popup when clicking the esc keyboard button
	$(document).keyup(function (event) {
	  if (event.which == "27" ) {
		$(".cd-popup").removeClass("is-visible");
	  }
	});


	  
  });

