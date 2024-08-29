const formulario = document.querySelector("form")

formulario.addEventListener("submit", (evento) => {
    evento.preventDefault()
    const datos = new FormData(formulario)
    fetch("guardar.php",{
        method: "POST",
        body: datos
    }).then(
        cabezera => {
            console.log("ver que tiene: ", cabezera);
            return cabezera.json()
        }       
    ).then(
        datos => {
            console.log(datos)
            if (datos.respuesta == "ok") {
                const
            }
        }
    )
})