<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>TEDxJabi Official Website..... </title>

<script type="text/javascript" src="js/gsap/TweenMax.min.js"></script>
<script type="text/javascript" src="js/utils/canvasldr.js"></script>


<!--	for more intense JQuery Animations...	 -->
<script type="text/javascript" src="js/jquery/jquery-1.9.1.min.js"></script>	
<script type="text/javascript" src="js/jquery/equalHeights.js"></script>

<script type="text/javascript" src="js/scripts.js"></script>
<link type="text/css" href="style.css" rel="stylesheet"/>

<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Francois+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Archivo+Black' rel='stylesheet' type='text/css'>


<link href="js/jquery/jquery.mCustomScrollbar.css" rel="stylesheet" />


<script type="text/javascript">
	
	//prepare the imgs....
	st = '';
	for(t=1; t <= 10; t++){
		st += '\'logos/p'+t+'.jpg\'';
		/*if(t <= 9){
			st += ',';
		}*/
	}
	
	st += 'thmbs/1.jpg,thmbs/2.jpg';
	
	//alert(st);
	
	function MM_swapImgRestore() { //v3.0
	  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
	}
	function MM_preloadImages() { //v3.0
	  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
		var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
		if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
	}
	
	function MM_findObj(n, d) { //v4.01
	  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
		d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
	  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
	  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
	  if(!x && d.getElementById) x=d.getElementById(n); return x;
	}
	
	function MM_swapImage() { //v3.0
	  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
	   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
	}
	
	
	//preload images....
	$(document).ready(function(e) {
        MM_preloadImages(st.toString());
    });

</script>


</head>

<body onload="init()" onresize="adjust();">

<div class="boxx rad25" id="boxx"></div>

<div id="ldr" class="ldr"></div>

<div id="body" class="body">    	
    <div class="lbar">
    	<div id="lynks" class="lynks">
        	<a href="javascript:;" onclick="mmenu(1,0);">home</a>
        	<a href="javascript:;" onclick="mmenu(2,0);">about TED + TEDx</a>
        	<a href="javascript:;" onclick="mmenu(3,0);">ricochet</a>
        	<a href="javascript:;" onclick="mmenu(4,0);">the team</a>
        	<a href="javascript:;" onclick="mmenu(5,0);">the speakers</a>
        	<a href="javascript:;" onclick="mmenu(6,0);">partners</a>
        	<a href="javascript:;" onclick="mmenu(7,0);">contact + register</a>
        </div>
        <div class="social">
        	<a href="http://www.twitter.com/tedxjabi" target="_blank"><img src="assets/twitter.jpg"/></a>
            <a href="https://www.facebook.com/tedxjabi" target="_blank"><img src="assets/fbook.jpg"/></a>
        </div>
    </div>
    <div id="rbar" class="rbar">
    
         <a href="javascript:;" id="regbtn" class="regbtn" onclick="doreg();"><img src="assets/regsta.png" width="142" height="38" /></a>
          <div id="prdiv" class="prdiv">
          	<span class="red"><strong>Registration Fee</strong></span>
           <!-- <span class="white">&#8358;10,000 Only</span>-->
              <span class="white">Free</span>
          </div>
         	
             <div id="bodycontent" class="bodycontent">               
                
                  <div id="t1" class="content2">
                        <div><img src="assets/logo.png" width="895" height="154" /></div>
                        <div>
                            <p>
                                <span><b>NIGERIAN</b> IDEAS WORTH SPREADING</span><br />
                                <strong>WHERE:</strong> LADI KWALI HALL, SHERATON HOTEL, ABUJA<br />
                                <strong>WHEN:</strong> 08th November 2014, 11:00am - 02:00pm <br /><br />
                                <b>who's speaking?</b>
                            </p>
                        </div>
                        
                        
                        <div id="spkrbox">
                        	
                            <div id="spkrdiv2" class="thmbs">
                            
                            </div>
                            
                        </div>
                        
                        
                        
                        <div class="clr" id="clr"></div>
                        
                  </div>
                  
                    <div id="t2" class="content">
                       <div class="richimg"><img src="assets/smallrichkx2.png"/></div><br />
  					   <div id="richtxt" class="richtxt scroller">
                                TED is a non-profit organization devoted to Ideas worth Spreading. TED Started as a four-day conference in California 25 years ago, TED has grown to support world-changing ideas with multiple initiatives. The annual TED Global Conference invites the world's leading thinkers and doers to speak for 18 minutes. Their talks are then made available, free, at <a href="http://www.ted.com" target="_blank">TED.com</a>. Speakers have included Bill Gates, Al Gore, Sir Richard Branson, NgoziOkonjo-Iweala.
<br /><br />

Created in the spirit of TED's mission, "ideas worth spreading", the TEDx program is designed to give communities, organizations and individuals the opportunity to stimulate dialogue through TED-like experiences at the local level. TEDx events are fully planned and coordinated independently. For more, please visit the official TEDx website: <a href="www.ted.com/tedx" target="_blank">www.ted.com/tedx</a> and <a href="http://www.ted.com" target="_blank">TED.com</a>
                       </div>
                  </div>
                  
                  
                  
                  <div id="t3" class="content">
                       <div class="richimg"><img src="assets/smallrichkx.png"/></div><br />
  					   <div id="richtxt" class="richtxt scroller">
                               "....We live in an age of constant change where evolution is occurring exponentially faster today than it did yesterday, literarily. We're constantly bombarded and confronted with opportunities and constraints for choices that have in most cases lasting impact as they seem to ricochet off different aspects of our existence. 
 <br /><br />
The impact of this ricochet may be mild, it may be intense, but there is certainly ricochet as we all receive, process, and react to life's experiences, opportunities, and information to differing degrees.
 <br /><br /> 
Ricochet seeks to create a forum for socially aware knowledge seeking change driven individuals to be engaged with hard-hitting material concerning society, human development, profession, and ultimately our evolution as specie, a people, a demographic, a culture, and a time....."
                       </div>
                  </div>
                                     
              
              
              
               <div id="t4" class="content" style="display: block; opacity: 1;">

                    <div id="rteamids" class="rteamids">   
                     
                        <a id="tb1" class="rtbox" href="javascript:;" onclick="chgTeam(1, this);" style="opacity: 0.4;">
                            <span id="rfname" class="fname">Ujuaku</span>
                            <span id="rsname" class="sname">Akukwe</span>
                        </a>  
                        
                        <a id="tb2" class="rtbox" href="javascript:;" onclick="chgTeam(2, this);" style="opacity: 0.4;">
                            <span id="rfname" class="fname">Ninah</span>
                            <span id="rsname" class="sname">Briggs</span>
                        </a> 
                         
                        <a id="tb3" class="rtbox" href="javascript:;" onclick="chgTeam(4, this);" style="opacity: 0.4;">
                            <span id="rfname" class="fname">King</span>
                            <span id="rsname" class="sname">Onoja</span>
                        </a>
                            
                        <div class="clr" id="clr"></div>
                        
                    </div>
                
                    <div class="clr" id="clr"></div>
                    
                    
                    <div class="teamtp">
                        
                        <div id="tmsg">
                        	
                            <span class="msg scroller" id="tm1">
                            Ujuaku Akukwe is the founder <a href="http://www.inspiredthots.org.ng" target="_blank">Inspired Thots Limited</a> with which she has championed several strategic engagements. She has responsibility for expanding knowledge of family growth as it relates to child development and parenting. She's also a media consultant.<br /></br>

Ujuaku has significant experience in developing leaders at all levels; she has co-founded and incubated a number of companies, which include Clean Digital Production Limited, Knowledge Square Consult, and others.<br /></br>

Ujuaku has facilitated several formal and informal organizational training and mentoring programs, and has developed learning curriculum at all level.<br /></br>

Ujuaku is well travelled and she’s a regular speaker and facilitator at events and seminars.
                            </span>
                            
                            <span class="msg scroller" id="tm2">
                            
                           With a Bachelor's Degree in Environmental Sciences and a Bachelor's Degree in Architecture from the University of Lagos, Ninah commenced his working career with Habitat Associates (Abuja). He then secured a Master's Degree in Architecture (Computing and Design) from the University of East London, and subsequently a Professional Practice Degree in Architecture from Kingston University, Surrey, United Kingdom. His working career continued at Broadway Malyan (London) as a Design Architect and later Associate, and then at HOK International (London) as an Associate and Lead Designer. He continued this nineteen year journey by returning to Lagos in 2010 to rejoin Multixept AssociatesLimited where he was a founding partner, and later moved to Abuja where he is currently a Director <a href="http://www.deckardtyler.com/" target="_blank">Deckard Tyler Limited</a>.<br /></br>

Ninah's passions include high-quality design, the application of technology and process in capacity development, sustainable systems and solutions, and strategic innovation. He
is a Chartered Member of the Royal Institute of British Architects (RIBA), a Member of Nigerian Institute of Architects (NIA), and currently the PRO of the NIA Abuja Chapter.

                            </span>
                            
                            <span class="msg scroller" id="tm3">
                            
                             King Ilemona Onoja has over 8 years experience in legal practice and the provision of legal advisory services. Much of this time has been spent in pursuit of a career that is focused on meeting client needs and ensuring their satisfaction; promoting personal character appreciation, growth and development in a dynamic and progressive organisation.<br /><br />
He obtained his LL.B (Hons) from Benue State University. He then went on to obtain his Bachelor of Laws from the Nigerian Law School and was called to the Nigerian Bar in 2006.He has had the privilege of working at some of the most prestigious law firms in Nigeria.<br /><br />
He volunteers for two non-governmental organisations - Gender &amp; Peace Initiative and AdaMark Foundation for Girls, both of which are dedicated towards achieving better education, social status and wellbeing of the Nigerian girl child.<br /><br />
He is very passionate about inspiring the emergence of a new generation of leaders. King is the lead partner at GreyhamBounds Solicitors &amp; Attorneys.

                            </span>
                        
                        
                        </div> 
                    </div>
                    
                    <div class="xmails" id="xmails">
                    	<span>email</span>
                         <a id="m1" class="smail" href="mailto:ujuaku@tedxjabi.net" class="email" target="_blank">ujuaku@tedxjabi.net</a>  
                         <a id="m2" class="smail" href="mailto:ninah@tedxjabi.net" class="email" target="_blank">ninah@tedxjabi.net</a>  
                         <a id="m3" class="smail" href="mailto:ilemona@tedxjabi.net" class="email" target="_blank">ilemona@tedxjabi.net</a>  
                    </div>
                    <div class="clr" id="clr"></div>
                    
                    <div id="teamdiv" class="thmbs">
                        <a id="w1" href="javascript:;" onclick="chgTeam(1, this);"><img src="team/s1.jpg" width="87" height="87"></a>
                        <a id="w2" href="javascript:;" onclick="chgTeam(2, this);"><img src="team/s2.jpg" width="87" height="87"></a>
                        <a id="w3" href="javascript:;" onclick="chgTeam(3, this);"><img src="team/s4.jpg" width="87" height="87"></a>
                        <div class="clr" id="clr"></div>
                    </div>
                
                
                </div>
                
                
                
                
                  
                  
                  
                  
                   <div id="t5" class="content">

					<div id="spkrbox2" class="rtids">
                                           	
                        <div id="spkrtp">
                        </div>                                                              
                        
                        
                        
                        <div id="spkrdiv" class="thmbs">                        
                        </div>
                        
                    </div>
                    
                    <div id="rpmsg" class="rptp">
                        <span id="rmsg" class="msg scroller">The event was staged for the first time in Abuja with our maiden name TEDxKids@Asorock on children’s day in 2013, making a huge success and receiving applause from many in Nigeria and abroad. This has made us more resolved and passionate to bring about a broader community event for leaders, thus the birth of TEDxJabi.  TEDxJabi involves a live show of inspiring ideas and unique experiences. Furthermore, all the talks will be recorded for later..The event was staged for the first time in Abuja with our maiden name TEDxKids@Asorock on children’s day in 2013, making a huge success and receiving applause from many in Nigeria and abroad. This has made us more resolved and passionate to bring about a broader community event for leaders, thus the birth of TEDxJabi.<br />  TEDxJabi involves a live show of inspiring ideas and unique experiences. Furthermore, all the talks will be recorded for laterThe event was staged for the first time in Abuja with our maiden name TEDxKids@Asorock on children’s day in 2013, making a huge success and receiving applause from many in Nigeria and abroad. This has made us more resolved and passionate to bring about a broader community event for leaders, thus the birth of TEDxJabi.  TEDxJabi involves a live show of inspiring ideas and unique experiences. Furthermore, all the talks will be recorded for later </span> 
                    </div>
                    
                    
         
                  </div>
         
         
                  
                  
                  
                  <div id="t6" class="content">
                        <div id="partners" class="partners"> <!-- fitbox -->
                        
                        </div>
                  </div>
					          
                  
                  <div id="t7" class="content">
                  
                        <div class="cols"> 
                        	  
                        <h1>CONTACT</h1>
                         <br />

                        <a href="mailto:contactus@tedxjabi.com" target="_blank" class="nmx"><b>contactus</b>@tedxjabi.net</a>
					   <br />
                        <a href="mailto:ujuaku@tedxjabi.com" target="_blank" class="nmx"><b>ujuaku</b>@tedxjabi.net</a>
                       +234 80 3316 9652
                        <br /> <br />
                        <a href="mailto:ilemona@tedxjabi.com" target="_blank" class="nmx"><b>ilemona</b>@tedxjabi.net</a>
                        +234 80 5746 0178
                        <br /> <br />
                        <a href="mailto:ninah@tedxjabi.com" target="_blank" class="nmx"><b>ninah</b>@tedxjabi.net</a>
                        +234 80 5721 3245
                        <br /> <br />
                        <br /> <br />
                         
                          
                        </div>
                        
                        <div class="cols regcol">
                          
                              <h2 class="red">REGISTER</h2>
                              <br />
                              <p>
                              
                              	<div id="xform" class="form">
                                
                                    <div class="nmx">name:</div>
                                    <span><input type="text" id="tname"/></span>
                                    
                                    <div class="nmx">email address:</div>
                                    <span><input type="text" id="tmail"/></span>
                                    
                                    <div class="nmx"> mobile number:</div>
                                    <span><input type="text" id="tnum"/></span> 
                                    
                                    <div class="nmx">profession/industry:</div>
                                    <span><input type="text" id="tpro"/></span>
                                    
                                    <div class="btns">
                                        <a href="javascript:;" onclick="send();"> submit</a>
                                        <a href="javascript:;" onclick="clr();"> reset</a>
                                        <div class="clr"></div>
                                    </div>
                                    
                                </div>
                                
                               <!-- 
                               
                               <span class="red">conditions:</span><br />
                                <span class="xdoc">                                    
                                    <span class="red">*</span> email address verification would be sent to your provided email address for registration to be complete<br />
                                    <span class="red">*</span> reservations would only hold for 2 weeks from time of booking,
                                    with a reminder email automatically sent at 75% expiration of reservation<br />
                                </span>
                                <br /> <br />
                               <div class="accdetails"> Acc Name:  <span class="red">TEDxJabi</span><br />
                                Acc Bank:  <span class="red">Zenith Bank PLC</span><br />
                                Acc Number:  <span class="red">101 375 5543</span>
                               </div> 
                                 		
                               -->
                               
                              </p>
                          
                        </div>
                        
                  </div>
                
                
             </div>
      
      <div class="footlog"><img src="assets/footlogx.jpg" width="228" height="64" /></div>
         
    </div>
</div>

<script src="js/jquery/jquery-1.9.0.min.js"></script>
<script src="js/jquery/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="js/createjs/createjs-2013.12.12.min.js"></script>
<script type="text/javascript" src="js/scripts2.js"></script>


<script>


ur = String('www.medicaidradiology.com;www.noi-polls.com;www.sheratonabuja.com;https://twitter.com/AdoptATweep;www.tedxjabi.com;www.tedxjabi.com;www.tedxjabi.com;www.tedxjabi.com;www.tedxjabi.com;www.tedxjabi.com').split(';');
                        makeLogos(6, 'partners', ur);	//amount, div...

	$(document).ready(function(e) {
      //  $(window).load(function(e) {
			//$(".content").mCustomScrollbar("destroy");	
			//initialize|create scrollbars......
			$(".scroller").mCustomScrollbar({
				scrollButtons:{	enable:true	}
			});
			
			if(!is_touch_device()){
		//make scroller on the homepage...
				//make scrollable on the inner page..
				makeScrollable($('#spkrbox2'), $('#spkrdiv'));
				makeScrollable($('#spkrbox2'), $('#spkrtp'));		
				//make scroller on the homepage...
				makeScrollable($('#spkrbox'), $('#spkrdiv2'));
      //  });
	  		}else{
				enableTouchScrolls();
			}
			
		//startball animation..
		initBall();
    });
	
	

	function makeScrollable($outer, $inner){

		var extra = 800;
		//Get menu width
		var divWidth = $outer.width();
		//Remove scrollbars
		$outer.css({
			overflow: 'hidden'
		});
		//Find last image in container
		var lastElem = $inner.find('a:last');
		$outer.scrollLeft(0);
		//When user move mouse over menu
		$outer.unbind('mousemove').bind('mousemove',function(e){
			var containerWidth = lastElem[0].offsetLeft + lastElem.outerWidth() + 2*extra;
			var left = (e.pageX - $outer.offset().left) * (containerWidth-divWidth) / divWidth - extra;
			$outer.scrollLeft(left);
		});
	}

</script>
    
    
</body>
</html>