function cerrar(){
    //localStorage.clear()
    firebase.auth().signOut()
    .then(function() {
        console.log('...saliendo')
    })
    .catch(function(error) {
        console.log(error)
    })
    window.location='./index.html'
}