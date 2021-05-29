const dropClick = document.getElementById('drop-click');
const dropBlock = document.getElementById('drop-block');

dropClick.addEventListener('click', function(){
    dropBlock.classList.toggle("remove-drop");
})