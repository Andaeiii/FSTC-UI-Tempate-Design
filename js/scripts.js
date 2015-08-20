//when the document loads... do these events... 

$(document).ready(function(e) {
	//hidebox shows reveal..
	function hideBox() {
      $("#exampleModal").trigger('reveal:close');
    }
	  
});



//javascript...
function mkvars(ar){
	v = '';
	for(j=0; j<ar.length; j++){
		s = ar[j] + '=' +  $.trim($('#'+ar[j]).val());
		v += s;
		if(j < ar.length-1){
			v += '&';
		}
	}
	
	return v;
}

function emptyVals(ar){
	for(j=0; j<ar.length; j++){
		$('#'+ar[j]).val('');
	}
}

/////////////////////////////////////////////////////////////////////////////////////////automate feedsss..

function updateStatus(){
	var myRadio = $('input[name=statustype]');
	var chkval = myRadio.filter(':checked').val();	//gives me quote or ideas... 

	//toggleFade('#st-panel');
	var mg = $.trim($('#statusmsg').val());
	ax = 'stype=' + chkval + '&msgtxt=' + mg;
	
	//alert(chkval);
	
	$('#ldx').show();

	$.ajax({
		type:'post',
		data:ax,
		url:'/status/new',
		success:function(msg){
			refreshFeeds(msg, ax);
		}
	})
	
}

function refreshFeeds(msg, ax){
	alert(msg);
	$('#ldx').hide();
	window.location.href = '/home';
	emptyVals(ax);	//clear the fields....
}


function getPage(type, pg){
	$('#st_feeds').slideUp('medium', function(){
		$('#feedsldx').show();
		$.ajax({
			type:'post',
			url:'/ajax/pages/'+ type+ '/'+ pg,
			success:function(msg){
				//alert(msg);
				$('#st_feeds').html(msg);
				$('#st_feeds').slideDown('medium');
				$('#feedsldx').hide();
			}
		});
	});
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////

function addWork(){
	ar = String('jobtp;jobaddr;duedate;jobinfo').split(';');
	ax = mkvars(ar);
	
	$('#ldx').show();

	$.ajax({
		type:'post',
		data:ax,
		url:'/vacancy/new',
		success:function(msg){
			$('#ldx').hide();
			refreshFeeds(msg, ax);
		}
	})
}

function shwDateBox(){
	//$('#exampleModal').foundation('reveal', 'open');
	//alert('focused');
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////

function setMsgId(v, txt){
	//alert('setting');
	$('#msg_subj > span').text(unescape(txt));		//set the text in the message subject...
	$('#s_id_tp').val(Number(v));					//set the id of the messageto be sent...
}

function sendMessageToUser(){
	/*
		s_id_tp	= id of message to retrieve title ++
		s_msgtxt = message text...
	*/
	
	ar = String('s_id_tp;s_msgtxt').split(';');
	ax = mkvars(ar);
	
	/*
		$("#exampleModal").trigger('reveal:close'); 
		alert(ax);
	*/
	
	$('#mldx').show();
	
	$.ajax({
		type:'post',
		data:ax,
		url:'/messages/add',
		success:function(msg){
			alert(msg);
			$('#mldx').hide();
			window.location.href = '/home';
			emptyVals(ax);	//clear the fields....
		}
	})
	
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////

function addBlogPost(){
	ar = String('btp;bimg;btxt').split(';');
	ax = mkvars(ar);
	
	/*alert(ax);*/
	
	$('#ldx').show();

	$.ajax({
		type:'post',
		data:ax,
		url:'/blog/new',
		success:function(msg){
			refreshFeeds(msg, ax);
		}
	})
}

function shwDateBox(){
	//$('#exampleModal').foundation('reveal', 'open');
	//alert('focused');
}


function uplImg(obj){
	$('#upldiv').html('<img src="/ajax/yahoo.gif" align="absmiddle"/>&nbsp;-&nbsp;uploading');
	alert($(obj).val());
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////

function verifyInput(){
	return false;
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////

function clrTxt(obj){
	$(obj).val('');
}

/*function updateStatus(){
	toggleFade('#st-panel');
}*/

function toggleFade(v){
	$(v).fadeTo('medium', 0.2, function(){
		$(v).fadeTo('medium', 1);
	});
}

var pos;
function flip(obj, bool){
	$(obj).css('z-index', 100);
	if(!bool){
		TweenMax.to(obj, 0.3, {scale:1.3});
	}else{
		TweenMax.to(obj, 0.3, {scale:1.3, rotation:-25});
	}
}

function xflip(obj, bool){
	$(obj).css('z-index', 0);
	if(!bool){
		TweenMax.to(obj, 0.3, {scale:1});
	}else{
		TweenMax.to(obj, 0.3, {scale:1, rotation:0});
	}
}