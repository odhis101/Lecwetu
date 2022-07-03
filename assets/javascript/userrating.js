

const scoreSelection = document.querySelectorAll('.scoreSelection');
const selectedScore = document.querySelector('.selectedScore');
const score = selectedScore.innerHTML;


//COLOR CHANGER



//SCORE SELECTOR
const scoreSelector = () => {
    scoreSelection.forEach(scoreselection => {
        scoreselection.addEventListener('click', ()=> {
            const selection = scoreselection.innerHTML;
            document.getElementById("text1").value = selection ;
            selectedScore.innerHTML = selection;
            selectedScore.style.backgroundColor = "#fff"
        });
    });
}


scoreSelector();




