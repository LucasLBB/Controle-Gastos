function senha(){
    let senha = document.getElementById('senha').value
	if(senha > 10){
		console.log('legal')
	}else{
		console.log('chato')
	}
}