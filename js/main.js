$(window).load(function (){

//facebook
	(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_US/all.js#xfbml=1"; //pedir app id facebook
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));

//twitter
    !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");



//ajax principal
	$.ajax({
	  url: "principal.php",
	  cache: false
	})
	 .done(function( html ) {
	    $( "#principal-content" ).html( html );

	  });

//fb social pop-up
		$(".various").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: false,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
	});

});
//$("h1").css("background-color", "yellow");

function loadGallery(){
$.ajax({
	  url: "gallery.php",
	  cache: false
	})
	 .done(function( html ) {
	    $( "#principal-content" ).html( html );
	    //fancybox gallery
		$(".fancybox").fancybox();
		$("#menu-top ul li").removeClass('active');
		$("#gallery-option").addClass('active');

	  });
}

function loadIndex(){
$.ajax({
	  url: "principal.php",
	  cache: false
	})
	 .done(function( html ) {
	    $( "#principal-content" ).html( html);
	    $("#menu-top ul li").removeClass('active');
	    $("#index-option").addClass('active');

	  });


}