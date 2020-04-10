<?php
namespace App\Libraries\Billing;
class CardDeclineCodes
{
    public static $codeToMessages = [
        0 => ["title" => "", "message" => ""],
        0 => ["title" => "Transação não autorizada", "message" => ""],
        1000 => ["title" => "Transação não autorizada", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1001 => ["title" => "Cartão vencido", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1002 => ["title" => "Transação não permitida", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1003 => ["title" => "Rejeitado emissor", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1004 => ["title" => "Cartão com restrição", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1005 => ["title" => "Transação não autorizada", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1006 => ["title" => "Tentativas de senha excedidas", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1007 => ["title" => "Rejeitado emissor", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1008 => ["title" => "Rejeitado emissor", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1009 => ["title" => "Transação não autorizada", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1010 => ["title" => "Valor inválido", "message" => "É possível que o tipo de operação seja inválido. Ex.: cartão de débito onde se aceita apenas crédito"],
        1011 => ["title" => "Cartão inválido", "message" => "O número do cartão digitado está incorreta. Oriente o portador a tentar novamente, se atentando ao preenchimento do número do cartão"],
        1013 => ["title" => "Transação não autorizada", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1014 => ["title" => "Tipo de conta inválido ", "message" => "O tipo de conta selecionado não existe. "],
        1015 => ["title" => "Função não suportada", "message" => "É possível que o tipo de operação seja inválido. Ex.: cartão de débito onde se aceita apenas crédito"],
        1016 => ["title" => "Saldo insuﬁciente", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão para aumento do limite"],
        1017 => ["title" => "Senha inválida", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1019 => ["title" => "Transação não permitida", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1020 => ["title" => "Transação não permitida", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1021 => ["title" => "Rejeitado emissor ", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1022 => ["title" => "Cartão com restrição", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1023 => ["title" => "Rejeitado emissor", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1024 => ["title" => "Transação não permitida", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1025 => ["title" => "Cartão Bloqueado", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1027 => ["title" => "Excedida a quantidade de transações para o cartão", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        1042 => ["title" => "Tipo de conta inválido", "message" => "O tipo de conta selecionado não existe"],
        1045 => ["title" => "Código de segurança inválido", "message" => "O CVV digitado está incorreto. Oriente o portador a tentar novamente, se atentando ao preenchimento do CVV"],
        1049 => ["title" => "Banco/emissor do cartão inválido", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        2000 => ["title" => "Cartão com restrição", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        2001 => ["title" => "Cartão vencido", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        2002 => ["title" => "Transação não permitida", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        2003 => ["title" => "Rejeitado emissor ", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        2004 => ["title" => "Cartão com restrição", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        2005 => ["title" => "Transação não autorizada", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        2006 => ["title" => "Tentativas de senha excedidas", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        2007 => ["title" => "Cartão com restrição", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        2008 => ["title" => "Cartão com restrição", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        2009 => ["title" => "Cartão com restrição", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        5003 => ["title" => "Erro interno", "message" => "Retente a transação"],
        5006 => ["title" => "Erro interno", "message" => "Retente a transação"],
        5025 => ["title" => "Código de segurança (CVV) do cartão não foi enviado", "message" => "Certifique-se que foi realizado o envio do CVV no fechamento do checkout"],
        5054 => ["title" => "Erro interno", "message" => "Retente a transação"],
        5062 => ["title" => "Transação não permitida para este produto ou serviço", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        5086 => ["title" => "Cartão poupança inválido", "message" => "O tipo de conta selecionado não existe"],
        5088 => ["title" => "Transação não autorizada Amex", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        5089 => ["title" => "Erro interno", "message" => "Retente a transação"],
        5092 => ["title" => "O valor solicitado para captura não é válido", "message" => "Contate o suporte da plataforma"],
        5093 => ["title" => "Banco emissor Visa indisponível", "message" => "Transação não autorizada"],
        5095 => ["title" => "Erro interno", "message" => "Retente a transação"],
        5097 => ["title" => "Erro interno", "message" => "Retente a transação"],
        9102 => ["title" => "Transação inválida", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        9103 => ["title" => "Cartão cancelado", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        9107 => ["title" => "O banco/emissor do cartão ou a conexão parece estar offline", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        9108 => ["title" => "Erro no processamento", "message" => "Retente a transação"],
        9109 => ["title" => "Erro no processamento", "message" => "Retente a transação"],
        9111 => ["title" => "Time-out na transação", "message" => "Retente a transação"],
        9112 => ["title" => "Emissor indisponível", "message" => "Oriente o portador a entrar em contato com o banco emissor do cartão"],
        9113 => ["title" => "Transmissão duplicada", "message" => "É possível que o cliente já tenha realizado a compra com sucesso e está erroneamente enviando o pagamento uma segunda vez"],
        9124 => ["title" => "Código de segurança inválido", "message" => "O CVV digitado está incorreto. Oriente o portador a tentar novamente, se atentando ao preenchimento do CVV"],
        9999 => ["title" => "Erro não especiﬁcado", "message" => "Retente a transação"],
        "IMSG" => ["title" => "Algum dado enviado na criação da transação não condiz com o modo de leitura aceito pela adquirente", "message" => "Contate o banco emissor."]
    ];

    public static function getReason($code)
    {
        $message = [
            "title" => "Erro ao capturar transação",
            "message" => "Contate o suporte para entender o motivo."
        ];
        if(isset(self::$codeToMessages[$code]))
            return self::$codeToMessages[$code];

        return $message;
    }
}
