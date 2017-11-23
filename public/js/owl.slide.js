		//SCRIPT REFERENTE AO SLIDE PEQUENO DA ESQUERDA	
		$(document).ready(function() {
		 
		  $("#owl-demo").owlCarousel({
		 
		    autoPlay: 3500, //Set AutoPlay to 3 seconds
		 
		    items : 1,
		    itemsDesktop : [1199,1],
		    itemsDesktopSmall : [979,3],
		    navigation : false,
		    pagination: false,
		    transitionStyle: 'goDown',

		 
		  });
		  var owl = $("#owl-demo");
		  // Custom Navigation Events
		  $(".next").click(function(){
		    owl.trigger('owl.next');
		  })
		  $(".prev").click(function(){
		    owl.trigger('owl.prev');
		  })
		  $(".play").click(function(){
		    owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
		  })
		  $(".stop").click(function(){
		    owl.trigger('owl.stop');
		  })
		 
		});
		//SCRIPT REFERENTE AO SLIDE PEQUENO DA DIREITA	
		$(document).ready(function() {
		 
		  $("#owl-demo1").owlCarousel({
		 
		    autoPlay: 3500, //Set AutoPlay to 3 seconds
		 
		    items : 1,
		    itemsDesktop : [1199,1],
		    itemsDesktopSmall : [979,3],
		    // Navigation
		    navigation : false,
		    pagination: false,
		    transitionStyle: 'goDown',

		 
		  });
		  var owl = $("#owl-demo1");
		  // Custom Navigation Events
		  $(".next1").click(function(){
		    owl.trigger('owl.next');
		  })
		  $(".prev1").click(function(){
		    owl.trigger('owl.prev');
		  })
		  $(".play1").click(function(){
		    owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
		  })
		  $(".stop1").click(function(){
		    owl.trigger('owl.stop');
		  })
		 
		});
		//SCRIPT REFERENTE AO SLIDE PRINCIPAL	
		$(document).ready(function() {
		 
		  $("#owl-demo2").owlCarousel({
		 
		    autoPlay: 5000, //Set AutoPlay to 3 seconds
		 
		    items : 1,
		    itemsDesktop : [1199,1],
		    itemsDesktopSmall : [979,3],
		    // Navigation
		    navigation : false,
		    pagination: false,
		    transitionStyle: 'backSlide'

		 
		  });
		 
		});
		//SCRIPT RESPONSAVEL PELO NEW GALLERY 
		$(document).ready(function() {
		 
		  var owl = $("#owl-demo3");
		 
		  owl.owlCarousel({
		     
		      itemsCustom : [
		        [0, 1],
		        [450, 1],
		        [600, 1],
		        [700, 2],
		        [1000, 3],
		        [1200, 3],
		        [1400, 3],
		        [1600, 5]
		      ],
		      navigation : false,
		      pagination : false,
		      autoPlay: 4000
		 
		  });
		 
		});
