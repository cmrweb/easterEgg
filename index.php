<script>
var key = "";
var show = false;

function allTime(inputName) {
    if(show===false){
        if (inputName === 'ArrowUp' && key === "") {
            key += "ArrowUp";
        }
        if (inputName === 'l' && key === "ArrowUp") {
            key += "l";
        }
        if (inputName === 'o' && key === "ArrowUpl") {
            key += "o";
        }
        if (inputName === 'l' && key === "ArrowUplo") {
            key += "l";
        }        
    }
}

function oneTime(inputName) {
    if(show===false){
        if (inputName === 'ArrowUp') {
            key += "ArrowUp";
        }
        if (inputName === 'l') {
            key += "l";
        }
        if (inputName === 'o') {
            key += "o";
        }
    }
}

document.addEventListener('keydown', (e) => {
    const inputName = e.key;
    //allTime(inputName)
    oneTime(inputName)
    if (key === "ArrowUplol" && show === false) {
        show = true;
        key=""
        console.log("lol")
    }
    //console.log(key)
})
</script>