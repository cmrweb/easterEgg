
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>EasterEgg</title>
	<style>
	#easterEgg{
		display: none;
		position: absolute;
		top: 0;bottom: 0;left: 0;right:0;
	}
	</style>
</head>
<body>
	<div id="easterEgg"></div>
</body>
</html>


<script>
var key = "";
var show = false;
var block = document.querySelector('#easterEgg');
var content = ""
function eastEgg(inputName) {
    if (show === false) {
        key += inputName;
        switch (key) {
            case "ArrowDownArrowUp":
                show = true;
                key = "";
                console.log('code 1');
				block.style.display = "block";
				block.style.backgroundColor = "#000";
				block.append("lol");
                
                break;
            case "ArrowUpArrowDown":
                show = true;
                key = "";
                console.log('code 2');
				block.style.display = "block";
				block.style.backgroundColor = "#ccc";
				block.append("lol");
                
                break;

            default:
                //DO SOMETHING
                break;
        }
    }
}
document.addEventListener('keydown', (e) => {
    const inputName = e.key;
    eastEgg(inputName);
})
</script>