function sendMail() {
    // Inicializa o EmailJS com seu user ID
    (function() {
        emailjs.init("TarY14HIZVfFtGIVP");
    })();

    // Coleta os dados do formulário
    var nome = document.querySelector("#sendername").value;
    var sobrenome = document.querySelector("#to").value;
    var email = document.querySelector("#subject").value;
    var tel = document.querySelector("#replyto").value;
    var mensagem = "nome: " + nome + " " + sobrenome + " e-mail: " + email + " telefone: " + tel + " mensagem: " + document.querySelector("#message").value;

    var params = {
        sendername: nome,
        to: sobrenome,
        subject: email,
        replyto: tel,
        message: mensagem,
    };

    var serviceID = "service_3s2v72h";
    var templateID = "template_rkuvejr";

  //Envia o Email
     emailjs.send(serviceID, templateID, params)
        .then(res => {
            Swal.fire({
                title: "Sucesso!",
                text: "Mensagem Enviada!",
                icon: "success",
                iconColor:"white",
                timer: 3000, // Duração do SweetAlert em milissegundos
                showConfirmButton: false // Não exibe o botão de confirmação
            });

            // Recarrega a página após o SweetAlert desaparecer
            setTimeout(() => {
                location.reload();
            }, 3500); // Tempo para recarregar dps do sweet alert
        })
        .catch(err => {
            console.error("Erro ao enviar o e-mail: ", err); // Exibe erro no console, se houver
            alert("Falha ao enviar o e-mail. Tente novamente mais tarde.");
        });
}