// JavaScript Document

var ball;
var canvas;
var stage;

var cv, vx, vy; 	//speed of ball...


function initBall(){	
	
	initAnimation();	
}

function initAnimation(){
		//get dimensions of document...
	w = Number($(document).width());
	h = Number($(document).height());

	
	//draw canvas element on stage same dimensions...
	createCanvas(true, 'mycanvas');
	
	//create easeljs elecment...
	canvas = document.getElementById('mycanvas');		
	stage = new createjs.Stage(canvas);
	
	
	//get x and y coords..
	vx  = 36;
	vy  = 40;
	
	//make Ball Animation.....
	createBall(60);	
	
	//alert(ball.width + ',' + ball.height);	
	animateBall();
}




function createCanvas(doc, id){
	//set the dimension of the canvas...
	cv = document.createElement('canvas');
	
	if(doc){
		cv.setAttribute('width', w);
		cv.setAttribute('height', h);	
	}
	
	cv.setAttribute('id', id);	
	cv.setAttribute('class', String(id));	
	
	$('body').prepend(cv);
}

function createBall(wid){
	wx = Number(wid);
	ball = new createjs.Shape();
	
	ball.graphics.beginStroke('#050505').setStrokeStyle(7);
	ball.graphics.beginFill('#990000');	
	ball.regX = 10;
	ball.regY = 10;
	
	ball.graphics.drawCircle(25, 25, wx/2);
	ball.width = wx;
	ball.height = wx;
	
	ball.alpha = 1;

	stage.addChild(ball);
	stage.update();
}


function onEnterFrame() {
	
	ball.x += vx;
    ball.y += vy;
	
	sw = stage.canvas.width - 20;
	sh = stage.canvas.height;

	/* 
		first check the left and right boundaries
		check if the x position of the left side of the ball is less than or equal to the left side of the screen, which would be 0
		then set the balls x position to that point, in case it already moved off the screen
		and multiply the ball's x speed by -1, which will make it move right instead of left 
	*/
	
    if(ball.x <= ball.width/2){ 
        ball.x = ball.width/2; 
        vx *= -1; 
    }
	
	/* 
		 check to see the right side of the ball is touching the right boundary, which would be 550
		 reposition it, just in case multiply the x speed by -1 (now moving left, not right)
	*/
 
    else if(ball.x >= sw - ball.width/2){ 
        ball.x = sw - ball.width/2; 
        vx *= -1;  
    }
 
	/*
		now we do the same with the top and bottom of the screen
		if the y position of the top of the ball is less than or equal to the top of the screen
		like we did before, set it to that y position...
		...and reverse its y speed so that it is now going down instead of up
	*/
	
    if(ball.y <= ball.height/2){ 
        ball.y = ball.height/2; 
        vy *= -1; 
    } 
	
	/*
		if the bottom of the ball is lower than the bottom of the screen
		reposition it and reverse its y speed so that it is moving up now
	*/
	
	else if(ball.y >= sh - ball.height/2){ 
        ball.y = sh - ball.height/2; 
        vy *= -1; 

    }
	
	//update the stage... 
	stage.update();
}

function animateBall(){
 	//Update stage will render next frame
    createjs.Ticker.addEventListener("tick", onEnterFrame);

}

