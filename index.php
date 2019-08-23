<script>
var key = "";
var show = false;

function eastEgg(inputName) {
    if (show === false) {
        key += inputName;
        switch (key) {
            case "ArrowDownArrowUp":
                show = true;
                key = ""
                console.log('code 1')
                //DO SOMETHING
                break;
            case "ArrowUpArrowDown":
                show = true;
                key = ""
                console.log('code 2')
                //DO SOMETHING
                break;

            default:
                //DO SOMETHING
                break;
        }
    }
}
document.addEventListener('keydown', (e) => {
    const inputName = e.key;
    eastEgg(inputName)
})
</script>