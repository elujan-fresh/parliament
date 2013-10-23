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
		autoSize	: true,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none'
		});

//form reservation
$(".reservations").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: false,
		width		: '70%',
		height		: '70%',
		autoSize	: true,
		closeClick	: false,
		openEffect	: 'none',
		closeEffect	: 'none',
		ajax: {
        complete: function(jqXHR, textStatus) {
            /*$('#datepicker').datepicker({
		        inline: true,
		        nextText: '&rarr;',
		        prevText: '&larr;',
		        showOtherMonths: true,
		        dateFormat: 'yy-mm-dd',
		        dayNamesMin: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
		        //showOn: "button",
		        //buttonImage: "img/calendar-blue.png",
		        //buttonImageOnly: true,
		      } );*/

            $("#uvform").submit(function(e) {
			    e.preventDefault();
			    $.ajax({
			        method : "post",
			        url : this.action,
			        data : $(this).serialize(),
			        success : function() {
			            window.location = "http://parliament.ndmmx.com/";
			        },
			        error : function() {
			            alert("Please verify that all required fields are filled in.");
			        }
			    	});
				});

            //$('#datepicker').datepicker( "show" );
        }
    }
		});


});

function loadContact(){
	$.ajax({
	  url: "contact.php",
	  cache: false
	})
	 .done(function( html ) {
	    $( "#principal-content" ).html( html );
		$("#menu-top ul li").removeClass('active');
		$("#contact-option").addClass('active');
		$("#menu-bottom ul li").removeClass('active');
		$("#contact-option-bottom").addClass('active');

	  });
}

function loadAbout(){
	$.ajax({
	  url: "about.php",
	  cache: false
	})
	 .done(function( html ) {
	    $( "#principal-content" ).html( html );
		$("#menu-top ul li").removeClass('active');
		$("#about-option").addClass('active');
		$("#menu-bottom ul li").removeClass('active');
		$("#about-option-bottom").addClass('active');

	  });
}

function loadGallery(){
$.ajax({
	  url: "gallery.php",
	  cache: false
	})
	 .done(function( html ) {
	    $( "#principal-content" ).html( html );
	    /*/fancybox gallery
		$(".fancybox").fancybox();*/
		$("#menu-top ul li").removeClass('active');
		$("#gallery-option").addClass('active');
		$("#menu-bottom ul li").removeClass('active');
		$("#gallery-option-bottom").addClass('active');

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
	    $("#menu-bottom ul li").removeClass('active');
		$("#index-option-bottom").addClass('active');

	  });


}

function loadAlbum(albumName,photosNumber){
	$('#phothoscomplete-album').html("");
	for (var i = 0; i <= photosNumber-1; i++) {
		console.log(i);
		photoNumber= i+1;
		var $new = $("<li><a href='#'><img src='img/gallery/album"+albumName+"/small_gallery_"+photoNumber+".jpg' data-large='img/gallery/album"+albumName+"/big_gallery_"+photoNumber+".jpg' alt='' data-description='' /></a></li>");
		Gallery.addItems( $new );
	}

	
}

//table reservation functions
function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_validateForm() { //v4.0
  var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
  for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=MM_findObj(args[i]);
    if (val) { nm=val.name; if ((val=val.value)!="") {
      if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
        if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
      } else if (test!='R') { num = parseFloat(val);
        if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
        if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
          min=test.substring(8,p); max=test.substring(p+1);
          if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
    } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
  } if (errors) alert('The following error(s) occurred:\n'+errors);
  document.MM_returnValue = (errors == '');
}
//-->