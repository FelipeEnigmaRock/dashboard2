function Entrar() {

    /* console.log('entrei'); */

    login = $('#login').val();
    senha = $('#senha').val();
    $.ajax({
        type: "POST",
        url: "api/autenticar.php",
        data: {login: login, senha: senha},
        success: function(resposta) {

            if(resposta.success) {
                localStorage.setItem('token', resposta.dados[0].token);
                localStorage.setItem('nome', resposta.dados[0].nome);
                window.location.href = "principal.html";
            }else {
                alert(resposta.aviso);
            }
            
        }
        
    })
}