var faanyagok = document.getElementsByClassName('faanyag_gomb');

for (let i = 0; i < faanyagok.length; i++) {
    faanyagok[i].addEventListener("click", ()=>{
        console.log(faanyagok[i].innerHTML);

        var anyag_leirasok = document.getElementsByClassName('anyag_leiras');

        for (let j = 0; j < anyag_leirasok.length; j++) {
            anyag_leirasok[j].classList.add("d-none");            
        }

        switch (faanyagok[i].innerHTML) {
            case "Bükk": anyag_leirasok[0].classList.remove("d-none"); break;
            case "Cseresznye": anyag_leirasok[1].classList.remove("d-none"); break;
            case "Dió": anyag_leirasok[2].classList.remove("d-none"); break;
            case "Mahagóni": anyag_leirasok[3].classList.remove("d-none"); break;
            case "Tölgy": anyag_leirasok[4].classList.remove("d-none"); break;
        
            default: break;
        }
    })
}

document.getElementById('ajanlat').onsubmit = (event)=>{
    event.preventDefault();

    let nev = document.getElementById('nev').value;
    let email = document.getElementById('email').value;
    let telefon = document.getElementById('telefon').value;
    let szerszamok = document.getElementById('szerszamok').value;

    if(nev != '' && email != '' && telefon != '' && szerszamok != 'Válaszon egy kategóriát!'){
        alert('Sikeresen elküldtük!');
        window.location.href = `./index.php?`
        
    }
    else{
        alert('Töltse ki a mezőket!');
    }
}