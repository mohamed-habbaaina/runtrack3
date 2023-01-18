
const text =  document.querySelector('#keylogger')  // recupérer la variable dans textarea

document.body.addEventListener('keyup', function(event) { // addEventListener quand "keyup"
  const key = event.key
  if((event.key != 'Enter') && (event.key != ' ')&& (event.key != 'CapsLock') && (event.key != 'Shift')){
  
  text.value += key // incrémenter le Value du textarea
}
})
