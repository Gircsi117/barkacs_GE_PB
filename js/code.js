var faanyagok = document.getElementsByClassName('faanyag_gomb');

for (let i = 0; i < faanyagok.length; i++) {
    faanyagok[i].addEventListener("click", ()=>{
        console.log(faanyagok[i].innerHTML);
    })
}