var url = 'https://api.myjson.com/bins/uq6h7';

function setup() {
   loadJSON(url, gotData, 'json');
   canvas = createCanvas(500, 400 * 0.8);
   canvas.parent('top');
   canvas.style('z-index', '-1');
   noStroke();
   noLoop();
}

function gotData(data) {
   console.log(data);
   var nombre = data.dogs[6];
   text(nombre, width/2, height/2);

 }

function draw() {
   background(237, 34, 93);
   fill(255);
   textSize(20);
   textAlign(CENTER);
}
