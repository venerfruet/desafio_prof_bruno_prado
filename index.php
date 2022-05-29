<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Desafio Prof. Bruno Prado</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  
  <style type="text/css">
        h1{
            font-family: monospace;
        }
  </style>
  
  <script>
  $( function() {
      
    $( "#dialog" ).dialog({
        width: 500,
        height:400,
        position: { my: "top", at: "center" }
    });
    
    $( "#accordion" ).accordion({
      heightStyle: "content"
    });
    
  } );
  </script>
</head>
<body>
    <h1><center>Desafio do Prof. Bruno Prado</center</h1>
    <div id="dialog" title="Exercícios Finais">
        <div id="accordion">
          <h3>Termos-chave(O que é internet)</h3>
          <div>
            <p>"Você conhece algum termo que não foi abordado aqui? Alguma gíria, alguma palavra, expressão ou sigla utilizada na internet, nos bate-papos, em jogos online?"</p>
            <p>Resposta: Sim, "bugado".</p>
          </div>
          <h3>A internet atualmente(O que é internet)</h3>
          <div>
            <p>"Na sua vida pessoal, houve alguma mudança em relação ao acesso à internet e ao consumo de dados online? Por exemplo: vídeo, música, troca de mensagens, compras, alimentação, notícias, cursos..."</p>
            <p>Resposta: Sim, uso a internet desde quando era tudo estático, tinhamos até que saber o endereço do que precisávamos. E com a evolução, naturalmente comecei a usar serviços que iam surgindo.</p>
          </div>
          <h3>O que são redes(Como funciona a internet)</h3>
          <div>
            <p>"Use o terminal de comando para descobrir o endereço de sites famosos."</p>
            <p>web.dio.me -> Disparando d9xvcm3ctqqhv.cloudfront.net [13.227.126.5]</p>
            <p>github.com -> Disparando github.com [20.201.28.151]</p>
            <p>linkedin.com -> Disparando linkedin.com [13.107.42.14]</p>
          </div>
          <h3>Roteadores, switches e modems(TCP/IP, portas, roteadores, switches e modems)</h3>
          <div>
            <p>"O Gmail costuma user portas próprias, que não são as padrões de SMTP e POP3. Tente descobrir quais são."</p>
            <p>Resposta:</p>
            <p>imap.gmail.com -> Porta: 993</p>
            <p>smtp.gmail.com -> Porta para SSL: 465</p>
            <p>smtp.gmail.com -> Porta para TLS/STARTTLS: 587</p>
          </div>
          <h3>Bluetooth(Celular, internet e outros dispositivos</h3>
          <div>
            <p>"Na sua vida pessoal, houve alguma mudança em relação ao acesso à internet e ao consumo de dados online? Por exemplo: vídeo, música, troca de mensagens, compras, alimentação, notícias, cursos..."</p>
            <p>Resposta: Sim, uso a internet desde quando era tudo estático, tinhamos até que saber o endereço do que precisávamos. E com a evolução, naturalmente comecei a usar serviços que iam surgindo.</p>
          </div>
          <h3>Browser(Browser, sites, aplicativos e webserver)</h3>
          <div>
              <p>"Entre no site: <a href="http://archive.org/web/" target="_blank">http://archive.org/web/</a>, pesquise como eram antigamente os sites mais famosaos de em dia."</p>
              <p>Resultado <a href="https://web.archive.org/web/20220529210258/https://www.yahoo.com/" target="_blank">https://web.archive.org/web/20220529210258/https://www.yahoo.com/</a></p>
          </div>
          <h3>Site, aplicativo e e-commerce(Browser, sites, aplicativos e webserver)</h3>
          <div>
              <p>"Boleto só existe no Brasil. Verdade? Será que algum outro país usa?"</p>
              <p>Resposta: Verdade, só o Brasil faz uso do boleto.</p>
              <p>"Débito é uma invenção brasileira. Será?"</p>
              <p>Resposta: Não encontrei a resposta, mas vou continuar pesquisando.</p>
              <p>"Os sites de hoje em dia usam mais sistemas próprios de pagamento ou tercerizado."</p>
              <p>Resposta: Na maioria tudo tercerizados, pode até escolher qual o meio de pagamento.</p>
              <p>"Faça uma busca quantitativa no Google, veja qual mais aparece: site, aplicativo ou programa(de computador)."</p>
              <p>Site: Aproximadamente 25.270.000.000 resultados.</p>
              <p>Aplicativo: Aproximadamente 1.290.000.000 resultados</p>
              <p>Programa de computador: Aproximadamente 159.000.000 resultados</p>
          </div>
          <h3>Web-server(Browser, sites, aplicativos e webserver)</h3>
          <div>
              <p>"Tente encontrar, na Internet, como se dá o acesso aos web-services dos Correios e do Governo para, por exemplo, buscar os dados de um CEP e od dados sobre os estudantes do Brasil, respectivamente."</p>
              <p>Correios -> <a href="http://www.buscacep.correios.com.br/" target="_blank">http://www.buscacep.correios.com.br/</a></p>
              <p>Correios API -> <a href="https://correiosapi.apphb.com/" target="_blank">https://correiosapi.apphb.com/</a></p>
              <p>Governo -> <a href="https://dadosabertos.mec.gov.br/" target="_blank">"https://dadosabertos.mec.gov.br/</a></p>
          </div>
          <h3>Definição de Front-end, Back-end e Fullstack(O que são Stacks)</h3>
          <div>
              <p>"Tente encontrar. na Internet, quais são as tecnologias utilizadas em cada stack de grandes empresas."</p>
              <p>Resposta: Fiz uma pesquisa, meio que por cima, e encontrei isso:</p>
              <p><a href="https://blog.back4app.com/pt/top-10-tecnologias-de-backend/" target="_blank">Top 10 Tecnologias de Backend - Back4App Blog</a></p>
          </div>
          <h3>Diversos termos comuns - Parte 2(LPs e termos)</h3>
          <div>
              <p>"Pesquise um pouco sobre Apache, MySQL e PHP, pois vamos usar na próxima aula para construir nossa primeira aplicação-teste."</p>
              <p>Apache -> Servidor web ou HTTP server.</p>
              <p>MySQL -> Banco de Dados.</p>
              <p>PHP -> Linguagem de programação.</p>
          </div>
        </div>
    </div>
</body>
</html>