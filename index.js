
// const select = document.getElemenById("genere");
// const griglia= document.getElemenById("griglia");

fetch("api.php")
.then(response => response.json())
.then(data => {
    data
    let filtrati = []
    let genereScelto = "tutti";
    for(let i=0; i<data.length; i++){
        if(genereScelto == "tutti" || data[i].genere == genereScelto){
            filtrati.push(data[i])
        }

    }

})
