<script>
var key="";
document.addEventListener('keydown', (event) => {
  const inputName = event.key;
  console.log(inputName)
  if (inputName === 'ArrowUp' && key==="") {
    key+="ArrowUp";
  }
  if (inputName === 'l' && key==="ArrowUp") {
    key+="l";
  }
  if (inputName === 'o' && key==="ArrowUpl") {
    key+="o";
  }
  if (inputName === 'l'  && key==="ArrowUplo") {
    key+="l"; 
  }
  if(key==="ArrowUplol"){
      console.log("lol")
  }
  //console.log(key)
})
</script>