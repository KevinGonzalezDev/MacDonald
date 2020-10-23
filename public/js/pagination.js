var block1 = document.getElementById('feedback-block1');
var block2 = document.getElementById('feedback-block2');
var block3 = document.getElementById('feedback-block3');

var buttons = document.getElementsByClassName('button-pagination');

let picked = 0;


if(picked == 0){
    block1.style.display = 'flex';
}

console.log("Toy vivo");

buttons[0].addEventListener('click', function(){
    block1.style.display = 'flex';
    buttons[0].className += ' picked';

        picked = 1;

    //HIDE
    block2.style.display = 'none';
    block3.style.display = 'none';

    buttons[1].className = 'button-pagination';
    buttons[2].className = 'button-pagination';
})


buttons[1].addEventListener('click', function(){
    block2.style.display = 'flex';
    buttons[1].className += ' picked';

        picked = 2;

    //HIDE
    block1.style.display = 'none';
    block3.style.display = 'none';
    buttons[0].className = 'button-pagination';
    buttons[2].className = 'button-pagination';
})

buttons[2].addEventListener('click', function(){
    block3.style.display = 'flex';
    buttons[2].className += ' picked';

        picked = 3;
        
    //HIDE
    block1.style.display = 'none';
    block2.style.display = 'none';
    buttons[0].className = 'button-pagination';
    buttons[1].className = 'button-pagination';
})


