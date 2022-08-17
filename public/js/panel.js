let list = document.querySelectorAll('.navigation li');
let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');
let draggBox = document.querySelector('#box-form');
let parentBox = document.querySelector('#panel-body');

function activeLink() {
    list.forEach((item) => item.classList.remove('hovered'));
    this.classList.add('hovered');
  }
  list.forEach((item) => item.addEventListener('mouseover',activeLink));

  toggle.onclick = function() {
      navigation.classList.toggle('active');
      main.classList.toggle('active');
  }


//   DRAG & DROP
//   draggBox.onmousedown = function(event) {

//     let shiftX = event.clientX - draggBox.getBoundingClientRect().left;
//     let shiftY = event.clientY - draggBox.getBoundingClientRect().top;
  
//     draggBox.style.position = 'absolute';
//     parentBox.append(draggBox);
  
//     moveAt(event.pageX, event.pageY);
  

//     function moveAt(pageX, pageY) {
//       draggBox.style.left = pageX - shiftX + 'px';
//       draggBox.style.top = pageY - shiftY + 'px';
//     }
  
//     function onMouseMove(event) {
//       moveAt(event.pageX, event.pageY);
//     }
  

//     parentBox.addEventListener('mousemove', onMouseMove);
  

//     draggBox.onmouseup = function() {
//       parentBox.removeEventListener('mousemove', onMouseMove);
//       draggBox.onmouseup = null;
//     };
  
//   };
  
//   draggBox.ondragstart = function() {
//     return false;
//   };