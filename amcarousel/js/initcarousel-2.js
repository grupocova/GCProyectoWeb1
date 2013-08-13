jQuery(document).ready(function(){
    var scripts = document.getElementsByTagName("script");
    var jsFolder = "";
    for (var i= 0; i< scripts.length; i++)
    {
        if( scripts[i].src && scripts[i].src.match(/initcarousel-2\.js/i))
            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);
    }
    if ( typeof html5Lightbox === "undefined" )
    {
        html5Lightbox = jQuery(".html5lightbox").html5lightbox({
            skinsfoldername:"",
            jsfolder:jsFolder
        });
    }
    jQuery("#amazingcarousel-2").amazingcarousel({
        jsfolder:jsFolder,
        
        skinsfoldername:"",
        interval:3000,
        itembottomshadowimagetop:99,
        random:false,
        direction:"vertical",
        arrowheight:32,
        itembackgroundimagewidth:100,
        skin:"Showcase",
        responsive:true,
        bottomshadowimage:"bottomshadow-110-95-0.png",
        navstyle:"bullets",
        enabletouchswipe:true,
        backgroundimagetop:-40,
        arrowstyle:"none",
        bottomshadowimagetop:95,
        transitionduration:1000,
        hoveroverlayimage:"../img/hoveroverlay-64-64-5.png",
        itembottomshadowimage:"../img/itembottomshadow-100-98-3.png",
        showitembottomshadow:false,
        transitioneasing:"easeOutExpo",
        showitembackgroundimage:false,
        itembackgroundimage:"",
        playvideoimagepos:"center",
        circular:true,
        arrowimage:"arrows-32-32-4.png",
        showbottomshadow:false,
        screenquery:{
	mobile: {
		screenwidth: 600,
		visibleitems: 1
	}
},
        navimage:"../img/bullet-16-16-0.png",
        itembackgroundimagetop:0,
        showbackgroundimage:false,
        showplayvideo:true,
        spacing:8,
        scrollitems:1,
        showhoveroverlay:true,
        scrollmode:"page",
        navdirection:"vertical",
        itembottomshadowimagewidth:100,
        backgroundimage:"",
        arrowwidth:32,
        pauseonmouseover:true,
        navmode:"page",
        arrowhideonmouseleave:1000,
        navwidth:16,
        navspacing:8,
        playvideoimage:"../img/playvideo-64-64-0.png",
        visibleitems:1,
        navswitchonmouseover:true,
        bottomshadowimagewidth:110,
        autoplay:true,
        backgroundimagewidth:110,
        loop:0,
        navheight:16
    });
});