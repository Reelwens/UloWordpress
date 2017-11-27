var link1 = document.getElementById('menu-item-179');
var link2 = document.getElementById('menu-item-174');
var link3 = document.getElementById('menu-item-175');
var link4 = document.getElementById('menu-item-176');


if (document.querySelector('#home')) {
    link1.classList.add('active');
} else if(document.querySelector('#testimony')) {
    link4.classList.add('active');
} else if(document.querySelector('#features')) {
    link2.classList.add('active');
}  else if(document.querySelector('#press')) {
    link3.classList.add('active');
}
