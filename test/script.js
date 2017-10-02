document.addEventListener('DOMContentLoaded', fn, false);

function fn () {
  var order = setLayers();
  let radios = document.getElementsByName('z-index');
  for(let i = 0; i < radios.length; i++){
    let radio = radios[i];
    // radio.onclick = reSetLayers;
  }
}

function setLayers () {
  let layers = document.getElementsByClassName("A").length;
  let order = [];
  for(let i = 0; i < layers ; i++){
    order.push(document.getElementsByClassName(`layer-${i}`)[0]);
  }
  return order;
}

function setLayerOnTop (e) {
  let topLayer = document.getElementsByClassName(e.currentTarget.value)[0];
}

// function reSetLayers (e) {
//   let layers = document.getElementsByClassName("A");
//   let topLayer = document.getElementsByClassName(e.currentTarget.value)[0];
//   topLayer.className.replace(/layer-./,`layer-${3}`);
//   console.log(topLayer.className);
//   topLayer.className = topLayer.className.replace(/layer-./,`layer-${3}`);

  // let otherLayers = [];
  // for(let j = 0 ; j < layers.length; j++){
  //   console.log(layers[j],topLayer);
  //   if(layers[j] !== topLayer){
  //     otherLayers.push(layers[j]);
  //   }
  // }
  // console.log(otherLayers);
  // for(let i = 0 ; i < otherLayers.length; i++){
  //   // layers[i].className += ` layer-${i+1}`;
  //   layers[i].className.replace(/layer-./,`layer-${i+1}`);
  // }
  // topLayer.className.replace(/layer/,`bug`);
  // console.log(topLayer.className);
// }
