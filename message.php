<?php

//definir idioma
setlocale(LC_ALL,'pt_BR.UTF8');
mb_internal_encoding('UTF8'); 
mb_regex_encoding('UTF8');

// conectando com a database
$conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

// recebendo a mensagem do usuário por meio de ajax
$getMesg = mysqli_real_escape_string($conn, $_POST['text']);

// verificar a consulta do usuário para a consulta do banco de dados
$check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%' ";
$run_query = mysqli_query($conn, $check_data) or die("Error");

// receber msg em caixa alta
$getMesg = strtolower($getMesg);

/* se a consulta do usuário corresponder à consulta do banco de dados, mostrará a resposta,
caso contrário, ele irá para o else */
if(mysqli_num_rows($run_query) > 0){

    //buscar reprodução do banco de dados de acordo com a consulta do usuário
    $fetch_data = mysqli_fetch_assoc($run_query);

    //armazenar a resposta a uma variável que enviaremos para ajax
    $replay = $fetch_data['replies'];
    echo $replay;
}

// realçar textos e títulos
echo '<style>A {text-decoration: none; color: #DCDCDC;} </style>';

// inicio do fluxo
if($getMesg == 'sim'){
    echo 'Satisfação tê-lo(a) aqui, eu sou o Streamingbot, seu assistente de filmes, posso lhe ajudar a escolher um filme para você assistir sozinho ou acompanhado.<br><br>';
    echo "Então vamos lá...<br>";
    echo "Qual plataforma de streaming você conhece?<br>  
        <br>1 - Netflix 
        <br>2 - HBO GO 
        <br>3 - Prime video 
        <br>4 - Globoplay";
    echo '<br><br><img src = "https://cdn.glitch.com/528c9c78-4ebb-4a7c-b765-4ab8d205877a%2Fteste.png?v=1605212588089" width = "240px"/><br>';
    echo "<br><br>Escolha um numero:";

}elseif($getMesg == 'não' || $getMesg == 'nao' || $getMesg == 'filmes' || $getMesg == 'filme'){
    echo "Ok, vamos direto ao ponto...";
    echo "<br>Me fala como você está se sentindo hoje:<br><br>"; 
    echo "Animado(a) 🤩
        <br> Triste 😢
        <br> Desanimado(a) 😩
        <br> Alegre 😁
        <br> Inspirado(a) 💡
    <br> Deprimido(a) 😓<br>";
}

if($getMesg == 1 || $getMesg == 2 || $getMesg == 3 || $getMesg == 4){
    echo "<br><br>Me fala como você está se sentindo hoje:<br><br>"; 
    echo "Animado(a) 🤩
        <br> Triste 😢
        <br> Desanimado(a) 😩
        <br> Alegre 😁
        <br> Inspirado(a) 💡
    <br> Deprimido(a) 😓<br>";
}

if($getMesg == 'alegre' || $getMesg == 'triste' || $getMesg == 'desanimado' || $getMesg == 'desanimada' || $getMesg == 'animado' ||
   $getMesg == 'animada' || $getMesg == 'deprimido' || $getMesg == 'deprimida' || $getMesg == 'inspirado' || $getMesg == 'inspirada'){
    echo '<br><br>Me diz com quem você vai assistir?<br>';
    echo '<br>Sozinho(a) 🙋‍♂️';
    echo '<br>Familia 👨‍👩‍👦‍👦';
    echo '<br>Crush 💏';
    echo '<br>Galera 👪';   
}

// companhia
switch($getMesg){
    case 'sozinho':
    case 'sozinha':
        echo '<br><br>Encontrei os seguintes resultados:<br><br>';
        echo '<i>Clique no título ou na imagem para assistir o trailer.</i><br>';

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/0TsKraGOuag">Corrida mortal</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/0TsKraGOuag" target = "_blank"><img src = "css/img/sozinho/corrida_mortal.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (Prime video)';
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/GMKKq_bYd0E">Resgate</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/GMKKq_bYd0E" target = "_blank"><img src = "css/img/sozinho/resgate.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (Netflix)'; 
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/Rqw6kAhvNsw">Doutor sono</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/Rqw6kAhvNsw" target = "_blank"><img src = "css/img/sozinho/doutor_sono.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (HBO GO)'; 
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/4NZhwESwQfk">Project power</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/4NZhwESwQfk" target = "_blank"><img src = "css/img/sozinho/project_power.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (Netflix)'; 
        echo "<br>_______________________________";
    
        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/AhS7bRwq4K8">Sharkwater extinction</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/AhS7bRwq4K8" target = "_blank"><img src = "css/img/sozinho/shark_water.jpeg" width = "240px"/></a>';
        echo '<br>Disponível em: (Prime video)';
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/4vC4ezh3sUc">Kiriku</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/4vC4ezh3sUc" target = "_blank"><img src = "css/img/sozinho/kiriku.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (Globo play)';
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/s7MHXDEdjS0">Homem de ferro - 3</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/s7MHXDEdjS0" target = "_blank"><img src = "css/img/sozinho/homem_de_ferro3.jpg" width = "240px"/></a>';
        echo '<br>Disponível em outras plataformas';
        echo "<br>_______________________________";

        echo '<br><br>O que você achou das minhas indicações?<br>';

        echo '<br> - Ótimo 😁' ;
        echo '<br> - Legal 😃';
        echo '<br> - Bom 🙂' ;
        echo '<br> - Ruim 😕';
        echo '<br> - Péssimo ☹️<br>';
    break;
    case 'familia':
        echo '<br><br>Agora basta disputar para ver quem escolhe o filme!<br>';
        echo '<br>Encontrei os seguintes resultados:<br><br>';
        echo '<i>Clique no título ou na imagem para assistir o trailer.</i><br>';;

        echo '<br><br><strong><a target = "_blank" href = "https://www.youtube.com/embed/jFWnVdsSgxs">Madagascar 3</a></strong><br><br>';
        echo '<a href = "https://www.youtube.com/embed/jFWnVdsSgxs" target = "_blank"><img src = "css/img/familia/madagascar.jpg" width = "240px"/></a>'; 
        echo '<br>Disponível em: (Netflix)';
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/--LN7i3vuTU">Transformers 4</a></strong><br><br>';
        echo '<a href = "https://youtu.be/--LN7i3vuTU" target = "_blank"><img src = "css/img/familia/transforms.jpg" width = "240px"/></a>'; 
        echo '<br>Disponível em: (Netflix e Prime video)';
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/kynaw8oQTPk">Norbit</a></strong><br>';
        echo '<br><a href = "https://youtu.be/kynaw8oQTPk" target = "_blank"><img src = "css/img/familia/norbit.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (Netflix)'; 
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/016gjN4alcg">Como treinar o seu dragão - 2</a></strong><br>';
        echo '<br><a href = "https://youtu.be/016gjN4alcg" target = "_blank"><img src = "css/img/familia/como_treinar_seu_dragao2.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (Globo play)'; 
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/kmXjPbN-rYU">Harry Potter e as relíquias da morte</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/kmXjPbN-rYU" target = "_blank"><img src = "css/img/familia/harry_potter.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (HBO GO)'; 
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/8AUQqspFRK8">As Crônicas de Nárnia - Príncipe Caspian</a></strong><br>';
        echo '<br><a href = "https://youtu.be/8AUQqspFRK8" target = "_blank"><img src = "css/img/familia/narnia.jpg" width = "240px"/></a>';
        echo '<br>Disponível em outras plataformas';
        echo "<br>_______________________________";
       
        echo '<br><br>O que você achou das minhas indicações?<br>';

        echo '<br> - Ótimo 😁' ;
        echo '<br> - Legal 😃';
        echo '<br> - Bom 🙂' ;
        echo '<br> - Ruim 😕';
        echo '<br> - Péssimo ☹️<br>';

    break;
    case 'galera':
        echo '<br>Vamos nessa! 🍿🥤';
        echo '<br><br>Encontrei os seguintes resultados:<br><br>';
        echo '<i>Clique no título ou na imagem para assistir o trailer.</i><br>';
        
        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/8hDdnYlNUZ4">Esquadrão 6</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/8hDdnYlNUZ4" target = "_blank"><img src = "css/img/galera/esquadrao6.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (Netflix)'; 
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/fwt6h6lt1Nc">Jumanji - Next level</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/fwt6h6lt1Nc" target = "_blank"><img src = "css/img/galera/jumanji.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (HBO GO)'; 
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/oHVqKjKILoE">As tartarugas ninjas</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/oHVqKjKILoE" target = "_blank"><img src = "css/img/galera/tmnt.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (Netflix)'; 
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/faQYgdXPRnU">Uma noite de crime</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/faQYgdXPRnU" target = "_blank"><img src = "css/img/galera/uma_noite_de_crime.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (Globo play e Prime video)'; 
        echo "<br>_______________________________";
        
        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/8pYp4T8TdP4">Esquadrão suicida</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/8pYp4T8TdP4" target = "_blank"><img src = "css/img/galera/esquadrao_suicida.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (Netflix)'; 
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/xy9Wntkb7KU">Vingadores</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/xy9Wntkb7KU" target = "_blank"><img src = "css/img/galera/os_vingadores.jpg" width = "240px"/></a>';
        echo '<br>Disponível em outras plataformas'; 
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/hEJnMQG9ev8">Mad max - Estrada da fúria</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/hEJnMQG9ev8" target = "_blank"><img src = "css/img/galera/madmax.jpg" width = "240px"/></a>';
        echo '<br>Disponível em outras plataformas'; 
        echo "<br>_______________________________";

        echo '<br><br>O que você achou das minhas indicações?<br>';

        echo '<br> - Ótimo 😁' ;
        echo '<br> - Legal 😃';
        echo '<br> - Bom 🙂' ;
        echo '<br> - Ruim 😕';
        echo '<br> - Péssimo ☹️<br>';
    break;

    case 'crush':
        echo 'Huuum interessante, aposto que irá gostar desses filmes!';
        echo '<br><br>Encontrei os seguintes resultados:<br><br>';
        echo '<i>Clique no título ou na imagem para assistir o trailer.</i><br>';
   
        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/x6A_3Y9ML70">Como se fosse a primeira vez</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/x6A_3Y9ML70" target = "_blank"><img src = "css/img/crush/como_se_fosse_a_primeira_vez.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (Globo play)'; 
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/DEwIt4amgq4">50 Tons de cinza</a></strong><br>'; 
        echo '<br><a href = "https://youtu.be/DEwIt4amgq4" target = "_blank"><img src = "css/img/crush/50_tons_de_cinza.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (Globo play)'; 
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/aqpETeNbcdY">Encontro explosivo</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/aqpETeNbcdY" target = "_blank"><img src = "css/img/crush/encontro_explosivo.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (Prime video)'; 
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/kiHb5EgTTsk">Podres de ricos</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/kiHb5EgTTsk" target = "_blank"><img src = "css/img/crush/podres_de_ricos.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (HBO GO)'; 
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/dAnzuTb-A8k">Até que a sorte nos separe</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/dAnzuTb-A8k" target = "_blank"><img src = "css/img/crush/ate_que_a_sorte_nos_separe.jpg" width = "240px"/></a>';
        echo '<br>Disponível em: (Netflix)'; 
        echo "<br>_______________________________";
        
        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/CHekzSiZjrY">Titanic</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/CHekzSiZjrY" target = "_blank"><img src = "css/img/crush/titanic.jpg" width = "240px"/></a>';
        echo '<br>Disponível em outras plataformas'; 
        echo "<br>_______________________________";

        echo '<br><br><strong><a target = "_blank" href = "https://youtu.be/XDTBLSkUmYk">O maravilhoso agora</a></strong><br>';     
        echo '<br><a href = "https://youtu.be/XDTBLSkUmYk" target = "_blank"><img src = "css/img/crush/o_maravilhoso_agora.jpeg" width = "240px"/></a>';
        echo '<br>Disponível em outras plataformas'; 
        echo "<br>_______________________________";
        
        echo '<br><br>O que você achou das minhas indicações?<br>';

        echo '<br> - Ótimo 😁' ;
        echo '<br> - Legal 😃';
        echo '<br> - Bom 🙂' ;
        echo '<br> - Ruim 😕';
        echo '<br> - Péssimo ☹️<br>';
    break;   
    
}

// para chamar os favoritos
if($getMesg == 'favoritos' || $getMesg == 'favorito'){
    echo 'Acesse aqui: <a href = "https://filmow.com/listas/os-100-filmes-favoritos-de-hollywood-l27528/"><strong>Favoritos</strong>.</a>';
}

// para chamar às noticias
if($getMesg == 'noticias' || $getMesg == 'noticia' || $getMesg == 'notícias' || $getMesg == 'notícia'){
    echo 'Acesse aqui: <a href = "https://filmow.com/noticias/"><strong>Notícias</strong>.</a>';
}

if($getMesg == 'legal' || $getMesg == 'otimo' || $getMesg == 'ótimo'){
    echo 'Opa, fico feliz em ter ajudado, volte sempre! 😁 
    <br><br> Se quiser outras opções de filmes, digite: <strong>filmes</strong>';
}elseif($getMesg == 'ruim' || $getMesg == 'pessimo' || $getMesg == 'péssimo'){
    echo 'Que pena, vou tentar melhorar para que possa lhe ajudar melhor futuramente. 😢 
    <br><br> Se quiser outras opções de filmes, digite: <strong>filmes</strong>';
}elseif($getMesg == 'bom'){
    echo ' Ok, vou melhorar ainda mais! 🙂
    <br><br> Se quiser outras opções de filmes, digite: <strong>filmes</strong>';
}

// lista de mensagens genéricas
$generics = array('oi', 'olá', 'ola', 'bom dia', 'boa tarde', 'boa noite', 'não', 'nao', 'sim', 1, 2, 3, 4, 'alegre', 'triste', 'animado', 'animada', 'desanimado', 'desanimada', 'inspirado', 'inspirada',
'deprimido', 'deprimida','familia', 'sozinho', 'sozinha','galera', 'crush', 'otimo', 'ótimo', 'legal', 'bom', 'ruim', 'pessimo', 'péssimo', 'filme', 'filmes', 'Favorito', 'favorito', 'favoritos', 'noticias', 'noticia', 'notícias', 'notícia');

if ($getMesg != in_array($getMesg, $generics)){ 
    echo " Desculpa, não entendi.";
}



?>
