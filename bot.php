<!DOCTYPE html>

<html lang = "pt-br">
<head>
    <meta charset = "UTF-8">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>StreamingBot</title>
    <link rel = "stylesheet" href = "css/stylebot.css">
    <script src = "https://kit.fontawesome.com/a076d05399.js"></script>
    <script src = "https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel = "sortcut icon" href = "https://cdn.glitch.com/528c9c78-4ebb-4a7c-b765-4ab8d205877a%2FStreaming%20Bot%202%20(3).png?v=1603084471631" type = "png"/>
</head>
<body>
  
    <div class = "wrapper">
        <div class = "title"> <a href = "index.html"><img class = "voltar" src = "https://img.icons8.com/plasticine/100/000000/circled-left-2.png" alt = "voltar à página inicial" ></a>STREAMINGBOT</div>
      
        <div class = "form">
            <div class = "bot-inbox inbox">
                <div class = "icon">
        
                </div>
                <div class = "msg-header">
                    <p>Olá, seja bem vindo(a). Fico feliz com sua visita!<br>
                    <br>É a sua primeira vez aqui?<br><br>sim 😵<br>não 😎
                    </p>
                </div>
            </div>
        </div>
        <div class = "typing-field">
            <div class = "input-data">
              
            <form class = "chat" method = "post" autocomplete = "off"></form>
                <input id = "data" type = "text" placeholder = "Digite sua mensagem..." required>
                <button id = "btn">Enviar</button>
                
                <script>
                var input = document.getElementById("data");
                    input.addEventListener("keyup", function(event){
                    if (event.keyCode === 13) {
                        event.preventDefault();
                        document.getElementById("btn").click();
                    }
                });
                </script>

                <script>
                    $(document).ready(function(){
                        $("#btn").on("click", function(){
                            $value = $("#data").val();
                            $msg = '<div class = "user-inbox inbox"><div class = "msg-header"><p>'+ $value +'</p></div></div>';
                            $(".form").append($msg);
                            $("#data").val('');
                            
                            // iniciar o ajax
                            $.ajax({
                                url: 'message.php',
                                type: 'POST',
                                data: 'text='+ $value,
                                success: function(result){
                                    $replay = '<div class = "bot-inbox inbox"><div class = "icon"></div><div class = "msg-header"><p>'+ result +'</p></div></div>';
                                
                                    $(".form").append($replay);
                                
                                    // quando o chat descer, a barra de rolagem desce automaticamente
                                    $(".form").scrollTop($(".form")[0].scrollHeight);
                                }
                            });
                        });
                    });
                </script>          
            </div>
        </div>
    </div>
    
</body>
</html>