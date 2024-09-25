const l_sText = "Améliorer ";
const l_lWord = ["le future", "mes compétences"];
const l_eTitle = document.querySelector('#content_move > .content > .title_div > .same_line > p');
let l_iCurrWord = 0;

l_eTitle.innerHTML = l_sText + l_lWord[l_iCurrWord] ;

function F_vAnim() {
    let i = 0;
    let maxLenght = l_eTitle.outerText.length;

    function Add()
    {
        l_eTitle.innerHTML = l_sText + l_lWord[l_iCurrWord].substring(0, i);
        i++;

        if (i <= l_lWord[l_iCurrWord].length) {
            setTimeout(Add, 125);
        } else {
            i = 0;
            maxLenght = l_eTitle.outerText.length;
            setTimeout(Remove, 3500); // Temps avant de changer de mot
        }
    }

    function Remove() {
        l_eTitle.innerHTML = l_eTitle.outerText.substring(0, maxLenght - i);
        i++;

        if (i <= l_lWord[l_iCurrWord].length) {
            setTimeout(Remove, 50);
        } else {
            l_iCurrWord = (l_iCurrWord + 1) % l_lWord.length;
            i = 0;
            maxLenght = l_eTitle.outerText.length;
            setTimeout(Add, 500); // Temps avant de changer de mot
        }
    }

    Remove();
}

F_vAnim();
