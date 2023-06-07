# FECAP - Fundação de Comércio Álvares Penteado

<p align="center">
<a href= "https://www.fecap.br/"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRhZPrRa89Kma0ZZogxm0pi-tCn_TLKeHGVxywp-LXAFGR3B1DPouAJYHgKZGV0XTEf4AE&usqp=CAU" alt="FECAP - Fundação de Comércio Álvares Penteado" border="0"></a>
</p>

# Projeto Secure Her


## Integrantes: 
<a href="https://www.linkedin.com/in/ana-flavia-lor%C3%AAdo-9629b5210/">Ana Flavia Ribeiro Loredo dos Santos</a> <br>
<a href="https://www.linkedin.com/in/fernanda-mayumi-kuba-kato/">Fernanda Mayumi Kuba Kato</a> <br>
<a href="https://www.linkedin.com/in/kevinmakotos/">Kevin Makoto Shiroma</a> <br>
<a href="https://www.linkedin.com/in/renato-riichi-kato-09b86482/">Renato Riichi Kato </a> <br> 
<a href="https://www.linkedin.com/in/massao-kato%EF%BC%88%E3%83%88%E3%83%88%E3%83%AD%EF%BC%89-1aa869278/">Vinicius Massao Kato </a> <br>


                                                                                                            

## Professores Orientadores: 
  <a href="https://www.linkedin.com/in/victorbarq/">Victor Bruno Alexander Rosetti de Quiroz</a> <br>
  <a href="https://br.linkedin.com/in/eduardo-savino-gomes-77833a10?original_referer=https%3A%2F%2Fwww.google.com%2F">Eduardo Savino Gomes</a> <br>
  <a href="https://www.linkedin.com/in/adriano-valente-534576135/">Adriano Felix valente</a> <br>

## Descrição

<p align="center">
<img src="https://github.com/2023-1-NADS1/B02-SecureHer/blob/main/imagens/secureH.png" border="0"> <br>
  Projeto Interdisciplinar IoT  <a href="https://secureher.tech/">
</p>

### Resumo do Projeto: <br><br>
 
<p> Um projeto voltado para o tema Igualdade de gênero (Objetivo de Desenvolvimento Sustentável nº 5 da ONU), a qual a mulher utilizará um dispositivo IoT vestível para sua segurança pessoal. </P>
<p> Além disso, nosso projeto está alinhado ao 11º Objetivo de Desenvolvimento Sustentável – Cidades e Comunidades Sustentáveis, buscando criar um ambiente urbano seguro e inclusivo para as mulheres. Implementaremos medidas para prevenir e combater a violência nas cidades. </p>
<p> Este objeto possuirá um <u>botão</u> que ao ser pressionado 3 vezes disparará uma mensagem de socorro em situações de perigo iminente. </P>
<p> Será utilizado o GPS do próprio celular e quando disparado enviará uma notificação informando Contatos de emergência da mulher sobre o local e horário onde o botão foi pressionado, independente da distância.  </p>




<p>  Através do gps o app pode gerar relatórios dos locais que tenha maior incidência de ocorrências, com a finalidade de ajudar a população evitando áreas de risco e auxiliar a polícia para reforçar a segurança desses locais. </p>

### Sensores e Autuadores:  <br><br>
<ul> 
    <li> Chave Táctil KFC-A06 - 6 X 6 X 4,3mm - 4 Terminais </li>
    <li> 2 Resistores 220Ω </li>
    <li> 2 Jumpers macho/macho </li>
    <li> 4 Jumpers fêmea/fêmea </li>
    <li> 1 LED </li>
</ul>

<p> <a href="https://github.com/2023-1-NADS1/B02-SecureHer/blob/main/imagens/esquema_secure_her.PNG" > Clique aqui para ver a modelagem do projeto </a> <p>

## 🛠 Estrutura de pastas

-Raiz<br>
|<br>
|-->documentos<br>
  &emsp;|-->antigos<br>
  &emsp;|Documentação.docx<br>
|-->imagens<br>
|-->src<br>
  &emsp;|-->Backend<br>
  &emsp;|-->Frontend<br>
|readme.md<br>

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

* 0.2.1 - 25/01/2022
    * MUDANÇA: Atualização de docs (código do módulo permanece inalterado)
* 0.2.0 - 15/01/2022
    * MUDANÇA: Remove `setDefaultXYZ()`
    * ADD: Adiciona `init()`
* 0.1.1 - 11/01/2022
    * CONSERTADO: Crash quando chama `baz()` (Obrigado @NomeDoContribuidorGeneroso!)
* 0.1.0 - 10/01/2022
    * O primeiro lançamento adequado
    * MUDANÇA: Renomeia `foo()` para `bar()`
* 0.0.1 - 01/01/2022
    * Trabalho em andamento

## 📋 Licença/License


## 🎓 Referências

Aqui estão as referências usadas no projeto.

1. <https://randomnerdtutorials.com/esp32-bluetooth-classic-arduino-ide/>
2. <https://github.com/gabrieldejesus/readme-model>
3. <https://www.canva.com/>
4. <https://appinventor.mit.edu/>
5. <https://www.youtube.com/watch?v=UpZjOAwugBU&list=PLx4x_zx8csUjl2tMSl-Ml9HhzAis6iOLP&ab_channel=CFBCursos>
6. <https://www.youtube.com/watch?v=BT4YihNXiYw&list=PL7sbjUYIdF3Ux_UrRiBaC73OrJLvLza4u&ab_channel=TheCodingBus>
