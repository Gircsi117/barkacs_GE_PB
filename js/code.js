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