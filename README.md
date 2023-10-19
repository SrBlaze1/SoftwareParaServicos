# SoftwareParaServicos
Alunos: Carlos Eduardo & Thiago Silva

**Atividade Pilha de Desenvolvimento Web**

**Objetivo**: Criar um ambiente de desenvolvimento web com PHP e um banco de dados MySQL usando Docker.

**Tarefa**:

1. **Criação do Dockerfile**:
   - Crie um arquivo Dockerfile com as instruções necessárias para configurar o ambiente.
   - O Dockerfile deve incluir as seguintes etapas:
     - Uso de uma imagem base com PHP e Apache.
     - Instalação das extensões do PHP necessárias.
     - Instalação do cliente MySQL.
     - Cópia dos arquivos do aplicativo PHP para o diretório de trabalho do Apache.
     - Exposição da porta 80 para acesso web.
     - Inicialização do servidor Apache quando o contêiner for iniciado.

2. **Construção da Imagem Docker**:
   - Use o seguinte comando para construir a imagem a partir do Dockerfile:
     ```
     docker build -t meu-ambiente-php-mysql .
     ```

3. **Criação e Execução do Contêiner**:
   - Crie um contêiner a partir da imagem com o seguinte comando:
     ```
     docker run -d -p 8080:80 --name meu-container-php-mysql meu-ambiente-php-mysql
     ```

4. **Conexão ao Banco de Dados MySQL**:
   - Atualize o arquivo `config.php` no aplicativo PHP com as configurações de conexão corretas, incluindo o nome do container MySQL, o nome de usuário, a senha e o nome do banco de dados.

**Observações**:

Este documento descreve os passos a serem seguidos para a configuração do ambiente de desenvolvimento web com PHP e MySQL usando Docker. Certifique-se de seguir as etapas.