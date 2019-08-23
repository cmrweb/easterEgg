<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CmrEasterEgg</title>
    <style>
    #easterEgg {
        display: none;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
    }
    #easterEgg p {
        text-align: center;
        font-size: 7em;
        font-weight: bold;
    }
    </style>
</head>

<body>
    <p>code 1: &darr; &uarr; &larr; &rarr;</p>
    <p>code 2: &uarr; &darr; &larr; &rarr;</p>

    <div id="easterEgg"></div>
</body>

</html>


<script>
var key = "";
var show = false;
var block = document.querySelector('#easterEgg');
var content = ["<p>code 1</p>", "<p>code 2</p>"];

function eastEgg(input) {
    if (show === false) {
        key += input;
        switch (key) {
            case "40383739":
                show = true;
                key = "";
                //
                console.log('code 1');
                block.style.display = "block";
                block.style.backgroundColor = "#333";
                block.innerHTML = content[0];

                break;
            case "38403739":
                show = true;
                key = "";
                //
                console.log('code 2');
                block.style.display = "block";
                block.style.backgroundColor = "#ccc";
                block.innerHTML = content[1];

                break;

            default:
                break;
        }
    }
}
document.addEventListener('keydown', (e) => {
    const input = e.keyCode;
    eastEgg(input);
    //
    console.log(e.keyCode);
})
</script>