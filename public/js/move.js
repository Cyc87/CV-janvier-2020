var moveText = {

  texth1: document.getElementById("textHello"),
  texth2: document.getElementById("textHello2"),

  move: function () {

    this.displayText();

  },
  displayText: function () {
    var myThis = this;
    setTimeout(function () {
      myThis.texth1.style.display = "block";
    }, 3000);
    setTimeout(function () {
      myThis.texth2.style.display = "block";
    }, 5000);
  },
}
moveText1 = Object.create(moveText);
moveText1.move();
