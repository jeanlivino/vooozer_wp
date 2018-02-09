# Plugin Vooozer para WordPress

Um plugin simples que gera um shortcode para inserção do iframe com aúdio da Vooozer nos posts do WordPress.

## Conteúdo

Plugin Vooozer para WordPress inclui os seguintes arquivos:

* `CHANGELOG.md`. Lista de de mudanças no projeto.
* `README.md`. O arquivo que você está lendo.
* A `vooozer.php` Função que cria o shortcode `[vooozer]` com o atributo `ID`.

## Recursos

* O Plugin Vooozer para WordPress cria um shortcode que permite adicionar iframe com aúdio da Vooozer apenas informando o id, sem precisar inserir o código iframe completo. No seguinte formato:
  * `[vooozer id="123456"]` onde o ID é referente ao aúdio na plataforma.

## Instalação

* Baixe o arquivo deste repositório;
* Na área administrativa de seu WordPress acesse o menu Plugins -> Adicionar Novo -> Enviar/Fazer upload do plugin -> aponte para o caminho do arquivo vooozer.zip e selecione Instalar Agora;
* Clique em ativar

## Como Utilizar

* Acesse a sua conta no Vooozer
* Vá para este link https://go.vooozer.com/request/urlLists e selecione o aúdio desejado.
* Copie o id que fica na url da página do aúdio após `https://go.vooozer.com/request?url=`
* Va até o seu post no WordPress e insira o Shortcode `[vooozer id="123456"]`, substituindo o `123456` pelo id do seu aúdio.
