/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 * 
 */

"use strict";

var fullscreen = document.getElementsByClassName('fullscreen-btn');
$(fullscreen).click(function(){
    event.preventDefault();
  });

  
function logout() {
  event.preventDefault();
  document.getElementById('logout-form').submit();
}
