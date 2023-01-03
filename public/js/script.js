jQuery(document).ready(function ($) {

  // LOGICIELS
  $("#log1").on("click", function (event) {
    event.preventDefault();
    $("#Logpop1.cd-popup").addClass("is-visible");
  });
  $("#log2").on("click", function (event) {
    event.preventDefault();
    $("#Logpop2.cd-popup").addClass("is-visible");
  });
  $("#log3").on("click", function (event) {
    event.preventDefault();
    $("#Logpop3.cd-popup").addClass("is-visible");
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

// Search bar

function mySearchFunction() {
 
  // Declare variables
  var input, filter, ul, li, item, i, txtValue;
  // User Input
  input = document.getElementById("myInput");
  // Filter, makes search not case sensitive
  filter = input.value.toUpperCase();
  // Grabs the parent element by id
  ul = document.getElementById("stateList");
  items = document.getElementsByClassName("grid-item");
  // Individual item on list
  li = ul.getElementsByClassName("TitleDesc");
    let num = 0;
  // Treats lists items like an array, where each item can be accessed through      it's index
  for (i = 0; i < li.length; i++) {
    item = li[i];
    // Iterate over each list item to see if the value of the input, ignoring         case, matches the inner text or inner html of the item.
    txtValue = item.textContent || item.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
        num++;
      let element = document.getElementById("game" + (i + 1));

      element.style.display = "flex";
    } else {
      let element = document.getElementById("game" + (i + 1));
      element.style.display = "none";
    }
  }
        if(num <1){
        document.getElementById("result").innerHTML  = "Nous avons trouvé <span style='font-size:50px; color: rgb(182, 57, 57)'>" + num +   "</span> jeu...";
    }else{
        document.getElementById("result").innerHTML  = "Nous avons trouvé <span style='font-size:50px; color: rgb(182, 57, 57)'>" + num +   "</span> jeux...";
    }
    
    num=0;
}



function mySearchFunction2() {
  // Declare variables
  var input, filter, ul, li, item, i, txtValue;
  // User Input
  input = document.getElementById("myInput");
  // Filter, makes search not case sensitive
  filter = input.value.toUpperCase();
  // Grabs the parent element by id
  ul = document.getElementById("stateList");
  items = document.getElementsByClassName("grid-item");
  // Individual item on list
  li = ul.getElementsByTagName("h2");

  // Treats lists items like an array, where each item can be accessed through      it's index
  for (i = 0; i < li.length; i++) {
    item = li[i];
    // Iterate over each list item to see if the value of the input, ignoring         case, matches the inner text or inner html of the item.
    txtValue = item.textContent || item.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      let element = document.getElementById("log" + (i + 1));

      element.style.display = "flex";
    } else {
      let element = document.getElementById("log" + (i + 1));
      element.style.display = "none";
    }
  }
}


let list = document.querySelectorAll('.list');
let num = 0;
let itemBox = document.querySelectorAll('.grid-item');
for(let i = 0; i<list.length; i++){
    list[i].addEventListener('click', function(){
    
        for(let j = 0; j<list.length; j++){
            list[j].classList.remove('active');
        }
        this.classList.add('active');
        let dataFilter = this.getAttribute('data-filter');
        for(let k = 0; k<itemBox.length; k++){
            itemBox[k].classList.remove('active');
            itemBox[k].classList.add('hide');
        
        if(itemBox[k].getAttribute('data-item') == dataFilter || dataFilter == "all"){
            itemBox[k].classList.remove('hide');
            itemBox[k].classList.add('active');
            num++;
        }
    }
    })
      if(num <1){
        document.getElementById("result").innerHTML  = "Nous avons trouvé <span style='font-size:50px; color: rgb(182, 57, 57)'>" + num +   "</span> jeu...";
    }else{
        document.getElementById("result").innerHTML  = "Nous avons trouvé <span style='font-size:50px; color: rgb(182, 57, 57)'>" + num +   "</span> jeux...";
    }
    
    num=0;
}

