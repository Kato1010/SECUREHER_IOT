# FECAP - Fundação de Comércio Álvares Penteado

<p align="center">
<a href= "https://www.fecap.br/"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhZPrRa89Kma0ZZogxm0pi-tCn_TLKeHGVxywp-LXAFGR3B1DPouAJYHgKZGV0XTEf4AE&usqp=CAU" alt="FECAP - Fundação de Comércio Álvares Penteado" border="0"></a>
</p>

# Projeto Secure Her


## Integrantes: 
<a href="https://www.linkedin.com/in/ana-flavia-lor%C3%AAdo-9629b5210/"> Ana Flavia Ribeiro Loredo dos Santos </a> <br>
<a href="https://www.linkedin.com/in/fernanda-mayumi-kuba-kato/"> Fernanda Mayumi Kuba Kato </a> <br>
<a href="https://www.linkedin.com/in/kevinmakotos/"> Kevin Makoto Shiroma</a> <br>
<a href="https://www.linkedin.com/in/renato-riichi-kato-09b86482/"> Renato Riichi Kato </a> <br> 
<a href="https://www.linkedin.com/in/massao-kato%EF%BC%88%E3%83%88%E3%83%88%E3%83%AD%EF%BC%89-1aa869278/"> Vinicius Massao Kato </a> <br>


                                                                                                            

## Professores Orientadores: 
  <a href="https://www.linkedin.com/in/victorbarq/">Victor Bruno Alexander Rosetti de Quiroz</a> <br>
  <a href="https://br.linkedin.com/in/eduardo-savino-gomes-77833a10?original_referer=https%3A%2F%2Fwww.google.com%2F">Eduardo Savino Gomes</a> <br>
  <a href="https://www.linkedin.com/in/adriano-valente-534576135/">Adriano Felix valente</a> <br>

## Descrição

<p align="center">
<img src="https://github.com/2023-1-NADS1/B02-SecureHer/blob/main/imagens/Logotipo/secureH.png?raw=true" border="0"> <br>
  Projeto Interdisciplinar IoT  <a href="https://secureher.tech/">
</p>


### Objetivos: <br>
 
<p> Um projeto voltado para o <b>5º Objetivo da ONU (Igualdade de gênero)</b> e o <b>11º Objetivo (Cidades e Comunidades Sustentáveis)</b>, a qual a mulher utilizará um dispositivo IoT vestível para sua segurança pessoal afim de criar um ambiente urbano seguro e inclusivo para as mulheres e implementando medidas para prevenir e combater a violência nas cidades.</p> <br>

### Resumo do Projeto: <br>

<p> Este dispositivo vestível possuirá um botão que ao ser pressionado <b>3 vezes</b> disparará uma mensagem de socorro em situações de perigo iminente. </p>
<p>Será utilizado o GPS do próprio celular e quando disparado enviará uma notificação informando <b>contatos de emergência da mulher sobre o local e horário sobre onde o botão foi pressionado, independente da distância</b>. </p>

 
<p> Através do GPS o app pode gerar relatórios dos locais que tenha maior incidência de ocorrências, com a finalidade de ajudar a população evitando áreas de risco e auxiliar a polícia para reforçar a segurança desses locais. </p> <br>

### Sensores e Atuadores:  <br>
<ul> 
    <li> Chave Táctil KFC-A06 - 6 X 6 X 4,3mm - 2 Terminais </li>
    <li> 2 Resistores 220Ω </li>
    <li> 2 Jumpers macho/macho </li>
    <li> 4 Jumpers fêmea/fêmea </li>
    <li> 1 LED </li>
</ul>

<p> <a href="https://github.com/2023-1-NADS1/B02-SecureHer/blob/main/imagens/Modelagem%20Wokwi/esquema_secure_her.PNG" > Clique aqui para ver a modelagem do projeto </a> <p> <br>
  
  ### Arduino:  <br>
  <p> Foi utilizado o microcontrolador ESP-32 WROOM-32D, pois foi necessária a utilização do bluetooth, junto com o app criado no MIT APP INVENTOR <p>

  <p> <a href="https://github.com/2023-1-NADS1/B02-SecureHer/blob/main/src/C%C3%B3digo%20Arduino%20ESP%2032/CODIGO_SECUREHER.ino" > Clique aqui para ver o código arduino programado em C++ </a> <p> <br><br>
    
  ### MIT APP INVENTOR  <br>
    
  <p> O app foi criado do zero por meio do <a href="https://appinventor.mit.edu/">MIT APP INVENTOR</a> com 11 telas criadas para simular o mais próximo de um produto no mercado. As telas criadas são: </p>
    
  <ol>
  <li> Tela de carregamento inicial do app; </li>
  <li> Tela de login; </li>
  <li> Tela de cadastro do usuário; </li>
  <li> Tela de recuperação de senha; </li>
  <li> Tela de alteração da nova senha; </li>
  <li> Tela de utilização do APP com o arduino; </li>
  <li> Tela de perfil, onde são mostrados os dados de cadastro; </li>
  <li> Tela de configuração; </li>
  <li> Tela de alteração de cadastro; </li>
  <li> Tela de contato e </li>
  <li> Tela de como utilizar o app. </li>    
  </ol>
  
  <p> As telas 2, 3, 4, 5, 6, 7 e 9 possuem integração com o banco de dados MySQL através de scripts com a linguagem PHP. </p> 
  
 <a href="https://github.com/2023-1-NADS1/B02-SecureHer/tree/main/src/Backend"> Clique aqui e veja os scripts na linguagem PHP </a> <br><br>
  
  ### Domínio e Hospedagem <br>
  
  <p> Foram contratados uma hospedagem e um domínio para a facilitação do uso das ferrramentas entre os integrantes do grupo e tornar o projeto mais próximo possível de um produto no mercado. </p>
  <p> Para viabilizar financeiramente foram contratados um domínio de extensão .tech e uma hospedagem compartilhada. O domínio utilizado é o <a href="https://secureher.tech">secureher.tech</a>.
  <p> Com a hospedagem, foi possível a utilização de um banco de dados MySQL e todas as informações inseridas no app foram colocadas dentro deste banco. </p>
  
  <br><br>
  
   ### Banco de Dados <br>
    
   <p> Foram criadas duas tabelas denominadas CLIENTES e OCORRENCIA.</p>
   
   <p> Na tabela CLIENTES foi utilizada a seguinte estrutura: </p><br>
  <img src="https://github.com/2023-1-NADS1/B02-SecureHer/blob/main/imagens/Banco%20de%20Dados/CLIENTES.PNG?raw=true" width= 500px height= 300px> <br>
  
  <p> Onde o CPF foi utilizada como PRIMARY KEY da tabela e o email como UNIQUE, para evitar duplicidade de cadastros. </p>
  <p> É de conhecimento do grupo que a tabela NÃO respeita as formas normais, porém, como o foco do projeto é o IoT e o APP, deixamos a tabela desta forma. </p>
  
   <p> E para a tabela OCORRENCIA foi utilizada a seguinte estrutura: </p><br>
  <img src="https://github.com/2023-1-NADS1/B02-SecureHer/blob/main/imagens/Banco%20de%20Dados/OCORRENCIA.PNG?raw=true" > <br>
  
  <p> Onde o IDOCORRENCIA foi utilizada como PRIMARY KEY da tabela. </p>
  <p> Além disso, colocamos que a FK_CLIENTES é a FOREIGN KEY, ligando as tabelas CLIENTES e OCORRENCIA por meio do CPF. </p> <br><br>
  
  
    
   ### O Projeto na prática <br>
   
   <p> Primeiro, com o ESP32 montado abrimos junto o APP e o conectamos com o dispositivo, e então acionamos o botão do pânico, apertando 3 vezes até o LED ficar acesso direto por 3 segundos. </p>
   
   ![Acionamento do dispositivo](https://github.com/2023-1-NADS1/B02-SecureHer/blob/main/imagens/Modelagem%20Wokwi/giphy.gif?raw=true)
   
   <p> Com o botão do pânico acionado, a mensagem "botão do pânico foi acionado" deve ser enviada via bluetooth e recebida pelo APP, mostrando a mensagem, o horário e o endereço do acionamento do botão. </p>

   <p> Além disso, o app liga para o contato de emergência e envia um SMS sozinho(com o endereço de ocorrência), após o acionamento do mesmo. </p>
   
   <p> O objetivo do projeto é a mulher avisar o contato de emergência que sairá para algum lugar perigoso e caso haja uma ligação por parte dela é possível que ela esteja em perigo. É claro que em situações de perigo ela não conseguirá falar ao telefone, por isso é importante a comunicação com seu contato de emergência que ao receber uma ligação e não sair nenhuma voz é possível que ela esteja em perigo e lembrar que um SMS de ocorrência pode ser enviado. </p>

![Funcionamento do APP](https://github.com/2023-1-NADS1/B02-SecureHer/blob/main/imagens/Modelagem%20Wokwi/SecureHer.gif?raw=true)

<p> Assim, os dados são enviados ao Banco de dados: </p> <br>

 <img src="https://github.com/2023-1-NADS1/B02-SecureHer/blob/main/imagens/Banco%20de%20Dados/1.PNG?raw=true"> <br>


  
## 🛠 Estrutura de pastas

-Raiz<br>
|<br>
|-->documentos<br>
  &emsp;|-->antigos<br>
  &emsp;|Documentação.docx<br>
|-->imagens<br>
    &emsp;|-->Banco de Dados<br>
   &emsp;|-->Logotipo<br>
  &emsp;|-->Modelagem Wokwi<br>
  &emsp;|-->Modelo 3d case<br>
|-->src<br>
  &emsp;|-->Backend<br>
  &emsp;|-->Código Arduino ESP 32<br>
  &emsp;|-->Prototipagem 3d<br>
|README.md<br>

 <!--            A pasta raiz contem dois arquivos que devem ser alterados:

                <b>README.MD</b>: Arquivo que serve como guia e explicação geral sobre seu projeto. O mesmo que você está lendo agora.

                Há também 4 pastas que seguem da seguinte forma:

                <b>documentos</b>: Toda a documentação estará nesta pasta.

                <b>executáveis</b>: Binários e executáveis do projeto devem estar nesta pasta.

                <b>imagens</b>: Imagens do sistema

                <b>src</b>: Pasta que contém o código fonte.
 -->

## 🛠 Instalação

<b>Android:</b>

Faça o Download do secureher.apk no seu celular.
Execute o APK e siga as instruções de seu telefone.

```sh
Coloque código do prompt de comnando se for necessário
```

<!-- 
              <b>Windows:</b>

            Não há instalação! Apenas executável!
            Encontre o JOGO.exe na pasta executáveis e execute-o como qualquer outro programa.

            ```sh
            Coloque código do prompt de comnando se for necessário
            ```

            <b>HTML:</b>

            Não há instalação!
            Encontre o index.html na pasta executáveis e execute-o como uma página WEB (através de algum browser).



## 💻 Configuração para Desenvolvimento

Descreva como instalar todas as dependências para desenvolvimento e como rodar um test-suite automatizado de algum tipo. Se necessário, faça isso para múltiplas plataformas.

Para abrir este projeto você necessita das seguintes ferramentas:

-<a href="https://godotengine.org/download">GODOT</a>

```sh
make install
npm test
Coloque código do prompt de comnando se for necessário
```
-->
  
## 🗃 Histórico de lançamentos

A cada atualização os detalhes devem ser lançados aqui.

* 1 - 14/04/2023
    * Início: Dia que foi determinado o tema com o professor;
* 2 - 20/04/2023
    * Estudos referente a programação em arduino
    * Primeiros testes: Inicialmente no arduino
* 3 - 25/04/2023
    * Testes utilizando o Esp8266
* 4 - 29/04/2023
    * MUDANÇA: Troca do esp8266 pelo ESP32 (por causa do Bluetooth)
    * Compra do ESP32 e componentes;
 * 5 - 08/05/2023
    * Trabalho em andamento;
    * Conclusão: Programação do ESP32.
* 6 - 15/05/2023
    * Trabalho em andamento
    * Estudos sobre a criação do App
* 7 - 20/05/2023 - 29/05/2023
    * Criação do App no App Inventor (Designer e programação em blocos);
    * Trabalho em andamento.
* 8 - 30/05/2023
    * Case (capinha protetora) em andamento;
    * App concluído.
* 9 - 03/06/2023
    * Últimos retoques
    * Finalização

## 📋 Licença/License


## 🎓 Referências

Aqui estão as referências usadas no projeto.

1. <https://randomnerdtutorials.com/esp32-bluetooth-classic-arduino-ide/>
2. <https://github.com/gabrieldejesus/readme-model>
3. <https://www.canva.com/>
4. <https://appinventor.mit.edu/>
5. <https://www.youtube.com/watch?v=UpZjOAwugBU&list=PLx4x_zx8csUjl2tMSl-Ml9HhzAis6iOLP&ab_channel=CFBCursos>
6. <https://www.youtube.com/watch?v=BT4YihNXiYw&list=PL7sbjUYIdF3Ux_UrRiBaC73OrJLvLza4u&ab_channel=TheCodingBus>
