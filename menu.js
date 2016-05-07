// this whole thing is a mess but still works! idk how tho..., documentation is kinda old, this file has changed a lot
var state = false;
var plus = 0;

// all the animations and css modifications in one function
function openMenu() {
    $("body").animate({left: "300px"}, 200);
    $("#menu").animate({left: "0"}, 200);
    $("#expand").css("width", "100%");
    $("#expand").css("height", "100%");
    $("#expand").animate({opacity: 1}, 210);
}

// all the animations and css modifications in one function
function closeMenu() {
    $("body").animate({left: "0"}, 200);
    $("#menu").animate({left: "-300px"}, 200);
    $("#expand").animate({opacity: 0}, 200);
    setTimeout(function(){
      $("#expand").css("width", "0");
      $("#expand").css("height", "0");
    }, 210);
}

window.addEventListener('load', function () {
  body = document.getElementsByTagName("body");

  // handles first touch positions on each touch
  body[0].addEventListener('touchstart', function(e) {
    var touch = e.touches[0];
    startx = parseInt(touch.clientX);
    // gets starting x coordinate on touch start
    body[0].addEventListener('touchmove', touchMove, false);
    body[0].addEventListener('touchend', touchUp, false);
  }, false);

  body[0].addEventListener('touchend', touchUp, false);

  // handles touch movement
  body[0].addEventListener('touchmove', function(e) {
    var touch = e.touches[0];
    x = parseInt(touch.clientX);
    // gets x coordinate constantly on mouse move
  }, false);

  body[0].addEventListener('touchmove', touchMove, false);

  document.getElementById("hamburger").addEventListener('touchend', function(e) {
      body[0].removeEventListener('touchmove', touchMove, false);
      body[0].removeEventListener('touchend', touchUp, false);
      openMenu();
      plus = 300;
      distance = 300;
    e.preventDefault();
  }, false);
  document.getElementById("expand").addEventListener('touchend', function(e) {
      body[0].removeEventListener('touchmove', touchMove, false);
      body[0].removeEventListener('touchend', touchUp, false);
      closeMenu();
      plus = 0;
      distance = 0;
    e.preventDefault();
  }, false);

  // mouse

  body[0].addEventListener('mousedown', function(e){
    // calculate mouse position on mousedown (once)
    body[0].addEventListener('mouseleave', mouseUp, false);
    body[0].addEventListener('mouseup', mouseUp, false);
    cXM = e.clientX;

    body[0].addEventListener('mousemove', function(e){
      // calculate mouse position x on the page constantly
      cX = e.clientX;
    }, false);
    body[0].addEventListener('mousemove', mouseMove, false);
  }, false);

  $("#hamburger").mouseup(function(){
    body[0].removeEventListener('mousemove', mouseMove, false);
    body[0].removeEventListener('mouseleave', mouseUp, false);
    body[0].removeEventListener('mouseup', mouseUp, false);
    openMenu();
    plus = 300;
    cXF = 300;
  });
  $("#expand").mouseup(function(){
    body[0].removeEventListener('mousemove', mouseMove, false);
    body[0].removeEventListener('mouseleave', mouseUp, false);
    body[0].removeEventListener('mouseup', mouseUp, false);
    closeMenu();
    plus = 0;
    cXF = 0;
  });

  body[0].addEventListener('mouseup', mouseUp, false);
  body[0].addEventListener('mouseleave', mouseUp, false);

}, false);

function mouseUp() {
  body[0].removeEventListener('mousemove', mouseMove, false);
  if (cXF >= 150) {
    openMenu();
    plus = 300;
    cXF = 300;
  } if (cXF < 150) {
    closeMenu();
    plus = 0;
    cXF = 0;
  }
}

function mouseMove() {
  cXF = cX - cXM + plus;
    // if mouse has moved right 300px or more on mousedown, cXF will always be 300, prevents over dragging
  if (cXF >= 300) {
    cXF = 300;
  } if (cXF <= 0) {
    // if mouse has moved left 0px or less on mousedown, cXF will always be 0, prevents over dragging
    cXF = 0;
  }
  // set body to be equal to mouse movement x on mousedown
  $("#menu").css("left", (cXF - 300));
  $("body").css("left", cXF);
}

function touchUp(e) {
  body[0].removeEventListener('touchmove', touchMove, false);
  if (distance >= 150) {
    openMenu();
    plus = 300;
    distance = 300;
  } else {
    closeMenu();
    plus = 0;
    distance = 0;
  }
}

function touchMove() {
  distance = x - startx + plus;

  if (distance >= 300) {
    distance = 300;
    // if user has dragged left 300px or more on touchmove, distance will always be 0, prevents over dragging
  } else if (distance <= 0) {
    distance = 0;
    // if user has dragged left 0px or less on touchmove, distance will always be 0, prevents over dragging
  }
  // sets body left to be same as distance
  $("#menu").css("left", (distance - 300));
  $("body").css("left", distance);
}
