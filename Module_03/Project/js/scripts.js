/*switch statement for the day of the week*/

var day;
switch (new Date().getDay()) {
  case 0:
    day = "<em>Sunday Funday</em>";
    break;
  case 1:
    day = "<em>Boring Monday</em>";
    break;
  case 2:
    day = "<em>Twisted Tuesday</em>";
    break;
  case 3:
    day = "<em>Hump Day</em>";
    break;
  case 4:
    day = "<em>Thursday</em>";
    break;
  case 5:
    day = "<em>Freaky Friday</em>";
    break;
  case 6:
    day = "<em>Saturday</em>";
}

/*If else statement for time of day*/

var time = (new Date().getHours());
if (time < 10) {
  timeofday = "<b>Good morning</b> ";
} else if (time >= 10 && time < 16) {
  timeofday = "<b>Good day</b> ";
} else {
  timeofday = "<b>Good Night!</b> ";
}// Empty JS for your own code to be here
