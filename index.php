<script>
var key = "";
var show = false;

function eastEgg(inputName) {
    if(show===false){
        key += inputName;
		if (key === "ArrowDownArrowUp") {
			show = true;
			key=""
			console.log('code 1')
            //DO SOMETHING
		} 
		if (key === "ArrowUpArrowDown") {
			show = true;
			key=""
			console.log('code 2')
            //DO SOMETHING
		} 
    }
}
document.addEventListener('keydown', (e) => {
    const inputName = e.key;
    eastEgg(inputName)
})
</script>