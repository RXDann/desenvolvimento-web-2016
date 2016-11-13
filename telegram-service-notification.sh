#!/usr/bin/env bash
TELEGRAM_CMD=telegram-cli # Chamada Aplicacao
TELEGRAM_OPTS="-k /etc/telegram-cli/server.pub -WR" # Chave para Conexao
TELEGRAM_CONTACT=$TELEGRAM_CMD $TELEGRAM_OPTS -e "add_contact $Numero $Primeiro_nome $Ultimo_nome" # Para Cadastro de novos contatos na agenda...Nao testado
TELEGRAM_PEER=$Destinatario #$Primeiro_nome\_$Ultimo_nome #5561998574066 # Contato, espaço deve ser substituido por _, USUARIO/GRUPO
TELEGRAM_MSG=`cat <<TEMPLATE
***** Grupo Acadêmico  *****\n\n*** Novo Evento ***\nEvento: $Evento\nData: $Data\nDisciplina: $Disciplina\n\nVocê já está preparado?
TEMPLATE` # Mensagem Encaminhada, com Variaveis de AMBIENTE evento, data e disciplina.

$TELEGRAM_CONTACT

$TELEGRAM_CMD $TELEGRAM_OPTS -e "msg $TELEGRAM_PEER '$TELEGRAM_MSG'" #Envio da Mensagem disparador


