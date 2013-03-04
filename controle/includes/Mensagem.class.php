<?php

class Mensagem {

    public static function getEmailAdmin() {
        return ConfiguracaoPeer::retrieveByPK(1)->getEmailAdmin();
    }

    /**
     * Controi o cabecalho padrao para todos os emails
     * @return string O html formatado para o cabecalho
     */
    public static function getCabecalho() {

        $url = $_SERVER['SERVER_NAME'] . ROOT_PATH;

        return "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>
            <html>
            <head>
                    <title></title>
            </head>

            <body style='margin:0px;padding:0px;background-color:#b9d8ed'>

            <table width='689' cellpadding='0' cellspacing='0' border='0'>
            <tr>
            <td height='113'><img src='http://" . $url . "/images/email/logo.jpg' alt='Serfer' width='689' height='113' border='0'></td>
            </tr>
            <tr>
            <td style='padding:20px;background-color:#FFFFFF'>
            <table width='100%' cellpadding='0' cellspacing='0' border='0'>
            <tr>
            <td style='text-align:right;font-family:Arial;font-size:14px;color:#5C5C5C;padding-bottom:10px;'>Data: " . date('d/m/Y') . "</td>
            </tr>";
    }

    /**
     * Constroi o rodape padrao para todos os emails
     * @return <String> O html formatado do rodapé
     */
    public static function getRodape($showEndereco = true) {
        $url = $_SERVER['SERVER_NAME'] . ROOT_PATH;
        $empresa = EmpresaPeer::retrieveByPK(1);

        $msg = "
            </table>
            </td>
            </tr>";

        if ($showEndereco){

            $msg .= "<tr>
                <td style='text-align:center; color:#fff;font-family:Arial;font-size:12px;' height='60' bgcolor='#054a7b'>" .
                $empresa->getNome() . " - " . $empresa->getEndereco() . " n&deg; " . $empresa->getNumero() . " - " . $empresa->getBairro() . "<br />" .
                $empresa->getCidade() . " / " . $empresa->getEstado() . " - CEP: " . $empresa->getCep() . " - " . $empresa->getEmail() .
                "</td>
                </tr>";
        }

        $msg .= "
            </table>

            </body>
            </html>";

        return $msg;

    }

    public static function enviaContato($array) {
        $nome = $array["nome"];
        $email = $array["email"];
        $telefone = $array['telefone'];
        $msg = $array['msg'];

        $mensagem = self::getCabecalho();

        $mensagem .="
            <tr>
                <td style='font-family:Arial;font-size:16px;color:#FFFFFF;background-color:#054a7b;padding:10px;'><strong>Formulário de Contato</strong></td>
            </tr>
            <tr>
                <td style='font-family:Arial;font-size:12px;color:#5C5C5C;'>

                <br />
                <ul>
                    <li><b>Nome:</b> " . $nome . " </li>
                    <li><b>E-mail:</b> " . $email . " </li>
                    <li><b>Telefone:</b> " . $telefone . " </li>
                </ul>
                <p>" . nl2br($_POST["msg"]) . "</p>
                <br />&nbsp;

                </td>
            </tr>";

        $mensagem .= self::getRodape();

        $to = array(self::getEmailAdmin());
        $assunto = "Contato :: Serfer";
        $replyTo = array(array($nome, $email));
        if (Qmail::enviaMensagem($to, $assunto, $mensagem,$replyTo)) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }

    public function salvaNews($array) {
        // Make sure that parent constructor is always invoked, since that
        // is where any default values for this object are set.

        $c = new Criteria();
        $c->add(NewsletterPeer::DS_EMAIL, $array["email"]);
        $newsletter = NewsletterPeer::doSelectOne($c);
        if (count($newsletter) == 0) {
            $newsletter = new Newsletter();
            $newsletter->setEmail($array["email"]);
            $newsletter->setNome($array["nome"]);
            $newsletter->setData(date("Y-m-d"));
            if ($newsletter->validate()) {
                if ($newsletter->save()) {
                    $result = "Seu e-mail foi cadastrado com sucesso, aguarde nossas novidades!";
                } else {
                    $result = 'N&atilde;o foi poss&iacute;vel cadastrar seu e-mail, tente novamente mais tarde.';
                }
            }
        } else {
            $result = 'O e-mail informado já está cadastrado em nossa Newsletter.';
        }

        return $result;
    }

    /**
     *
     * Envia email com link para o cliente criar uma nova senha
     *
     * @return boolean True se enviou o email false senao
     */
    public static function enviaEmailRenovarSenha($email, $id, $senha, $tipo = "cliente") {

        if ($tipo == "cliente") {
            $link =  "http://" . $_SERVER['SERVER_NAME'] . ROOT_PATH . "/login/gera_senha/";
        } else {
            $link =  "http://" . $_SERVER['SERVER_NAME'] . ROOT_PATH . "/parceiros/gera_senha/";
        }

        $mensagem = self::getCabecalho();

        $mensagem .= "
            <tr>
                <td style='font-family:Arial;font-size:16px;color:#FFFFFF;background-color:#3e69a0;padding:10px;'><strong>Recuperação de Senha</strong></td>
            </tr>
            <tr>
                <td style='font-family:Arial;font-size:12px;color:#3e69a0;'>

                <br>
                <p>
                    Recebemos uma solicitação de recuperação de senha para o e-mail <b>" . $email . "</b>,
                    para gerar uma nova senha clique no link indicado ou copie e cole a URL em seu navegador.
                    <br />
                    Caso não tenha feito esta solicitação, apenas desconsidere esta mensagem.
                </p>
                <ul>
                    <li><b>E-mail:</b> " . $email . "</li>
                    <li>
                        Para gerar uma nova senha
                        <a href='" . $link . urlencode(Cliente::codificaId($id)) . "/" . urlencode($senha) . "/' >clique aqui</a>
                        <br />
                        ou acesse: " . $link . urlencode(Cliente::codificaId($id)) . "/" . urlencode($senha) . "/
                    </li>
                </ul>
                <br />&nbsp;

                </td>
            </tr>";

        $mensagem .= self::getRodape();

        $to = $email;
        $assunto = "Recuperação de Senha :: SOS Oferta";

        return Qmail::enviaMensagem($to, $assunto, $mensagem);

    }

    /**
     *
     * Envia uma senha para o email do cliente
     *
     * @param string $senha A senha a ser enviada
     * @return boolean se enviou email ou nao
     */
    public static function enviaSenhaEmail($senha, $email) {

        $mensagem = self::getCabecalho();

        $mensagem .= "
            <tr>
                <td style='font-family:Arial;font-size:16px;color:#FFFFFF;background-color:#3e69a0;padding:10px;'><strong>Recuperação de Senha</strong></td>
            </tr>
            <tr>
                <td style='font-family:Arial;font-size:12px;color:#3e69a0;'>

                    <br />
                    <p>Recebemos uma solicitação de geração de nova senha para o e-mail <b>" . $email . "</b></p>
                    <ul>
                        <li><b>E-mail:</b> " . $email . "</li>
                        <li><b>Senha:</b> " . $senha . "</li>
                    </ul>
                    <p>Você pode modificar a senha gerada cadastrando uma nova de sua preferência, efetuando o login no site.</p>
                    <br />&nbsp;

                </td>
            </tr>";

        $mensagem .= self::getRodape();

        $to = $email;
        $assunto = "Recuperação de Senha :: SOS Oferta";

        return Qmail::enviaMensagem($to, $assunto, $mensagem);
    }

    public static function enviaTrabalheConosco($array, $files) {
        $nome = isset($array['nome']) ? $array['nome'] : '';
        $email = isset($array['email']) ? $array['email'] : '';
        $telefone = isset($array['telefone']) ? $array['telefone'] : '';
        $cidade = isset($array['cidade']) ? $array['cidade'] : '';
        $estado = isset($array['estado']) ? $array['estado'] : '';
        $atuar = isset($array['atuar']) ? $array['atuar'] : '';
        $msg = isset($array['msg']) ? $array['msg'] : '';
        $assunto = "Novo currículo";

        if(empty($atuar)){
            $atuacao = null;
        }else{
            $atuacao = "<li><b>Área de atuação:</b> ".$atuar." </li>";
        }

        $mensagem = self::getCabecalho();

        if(file_exists($files['tmp_name'])){
            $ext = pathinfo($files['name'], PATHINFO_EXTENSION);
            $fileName = 'curriculo-'.urlSlug($nome).'_'.date('d-m-Y');
            $file = '../../web/arquivos/curriculos/';
            if(file_exists($file.$fileName.'.'.$ext)){
                $fileName .= '_'.date('H-n-s');
            }
            $fileName .='.'.$ext;
            copy($files['tmp_name'], $file.$fileName);
            $currLink = "http://".$_SERVER['SERVER_NAME'].ROOT_PATH."/arquivos/curriculos/".$fileName;

            $vagaMsg = "<b>Curriculum:</b> <a href='".$currLink."'>Baixar Curriculo</a>";
        }else{
            $vagaMsg = "";
        }

        $mensagem .="
            <tr>
                <td style='font-family:Arial;font-size:16px;color:#FFFFFF;background-color:#054a7b;padding:10px;'><strong>Novo Currículo</strong></td>
            </tr>
            <tr>
                <td style='font-family:Arial;font-size:12px;color:#3e69a0;'>

                <br />
                <ul>
                    <li><b>Nome:</b> ".$nome." </li>
                    <li><b>E-mail:</b> ".$email." </li>
                    <li><b>Telefone:</b> ".$telefone." </li>
                    <li><b>Cidade:</b> ".$cidade." </li>
                    <li><b>Estado:</b> ".$estado." </li>
                    ".$atuacao."
                </ul>
                <br />
                ".$msg."
                <br />
                <br />
                ".$vagaMsg."
                <br />&nbsp;
                </td>
            </tr>";

        $mensagem .= self::getRodape();

        $to = array(self::getEmailAdmin());

        if(Qmail::enviaMensagem($to, $assunto, $mensagem, array(0 => array($nome, $email)))){
            $result = true;
        }else{
            $result = "N&atilde;o conseguimos enviar sua mensagem corretamente, tente novamente mais tarde...";
        }

        return $result;
    }

     public static function enviaIndicacaoProduto($array) {
        $seuNome    = utf8_decode($array['nome']);
        $seuEmail   = $array['email'];
        $nomeAmigo  = utf8_decode($array['nomeAmigo']);
        $emailAmigo = $array['emailAmigo'];
        $produtoId  = $array['cd_prod'];
        $objProduto = ($produtoId) ? ProdutoPeer::retrieveByPK($produtoId) : 'PRODUTO NÃO ENCONTRADO';

        $link =  "http://" . $_SERVER['SERVER_NAME'] . ROOT_PATH . "/seguros/detalhes/" . $objProduto->getKey();

        $mensagem = self::getCabecalho();

        $mensagem .="
            <tr>
                <td style='font-family:Arial;font-size:16px;color:#FFFFFF;background-color:#3e69a0;padding:10px;'><strong>Indicação de Produto</strong></td>
            </tr>
            <tr>
                <td style='font-family:Arial;font-size:12px;color:#3e69a0;'>
                <br />
                Olá ".$nomeAmigo." (".$emailAmigo."), seu amigo(a) ".$seuNome." (".$seuEmail."), lhe indicou o seguinte produto: <b> ".$objProduto->getNome()." </b>.
                  <br/>
                Veja abaixo a mensagem que ele escreveu: <br/>
                  <p>Mensagem: " . nl2br($array["msg"]) . "</p>
                  <br/>
                Para conhecer o produto acesse o link:
                <br/>
                <a href='".$link."'> Clique Aqui </a>
                <br />&nbsp;
                </td>
            </tr>";

        $mensagem .= self::getRodape();

        $assunto = "Indicação de Produto :: Serfer ";

        if (Qmail::enviaMensagem($emailAmigo, $assunto, $mensagem)) {
            return true;
        } else {
           return false;
        }
    }

     public static function enviaCotacaoProduto($array) {
        $produto       = $array['produto'];
        $nome          = utf8_decode($array['nome']);
        $valor         = $array['valor'];
        $sexo          = $array['sexo'];
        $dataNasc      = $array['dataNasc'];
        $estadoCivil   = $array['estadoCivil'];
        $cpf           = $array['cpf'];
        $email         = $array['email'];
        $telefone      = $array['telefone'];
        $produtoId     = $array['prodId'];

        $objProduto = ($produtoId) ? ProdutoPeer::retrieveByPK($produtoId) : 'PRODUTO NÃO ENCONTRADO';

        $link =  "http://" . $_SERVER['SERVER_NAME'] . ROOT_PATH . "/seguros/detalhes/" . $objProduto->getKey();

        $mensagem = self::getCabecalho();

        $mensagem .="
            <tr>
                <td style='font-family:Arial;font-size:16px;color:#FFFFFF;background-color:#3e69a0;padding:10px;'><strong>Cotação de Produto</strong></td>
            </tr>
            <tr>
                <td style='font-family:Arial;font-size:12px;color:#3e69a0;'>
                <br />
                Nome: ".$nome."
                <br />
                <br />
                Sexo: ".$sexo."
                <br />
                <br />
                Data de Nascimento: ".$dataNasc."
                <br />
                <br />
                Estado Civil: ".$estadoCivil."
                <br />
                <br />
                CPF: ".$cpf."
                <br />
                <br />
                Telefone: ".$telefone."
                <br />
                <br />
                Email: ".$email."
                <br />
                <br />
                Produto: ".$produto."
                <br />
                <br />
                Valor: ".$valor."
                <br />
                <br />
                Link do produto:
                <br/>
                <a href='".$link."'> Clique Aqui </a>
                <br />
            </tr>";

        $mensagem .= self::getRodape();

        $to = array(self::getEmailAdmin());
        $assunto = "Cotação de Produto :: Serfer";

        if (Qmail::enviaMensagem($to, $assunto, $mensagem)) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }
    
    
    
    public static function enviaCotacaoAutomovel($tipo_pessoa, $nome, $email, $telefone, $celular, 
                $fax, $tipo_contato, $portas, $veiculo_marca, $veiculo_modelo, $combustivel, $ano, $modelo, $ja_possui, 
                $veiculo_alienacao, $veiculo_antifurto, $veiculo_opcionais, $outros, 
                $seguro, $seguro_bonus, $companhia_seguro, $vencimento_seguro, $produtoId) {

        $objProduto = ($produtoId) ? ProdutoPeer::retrieveByPK($produtoId) : 'PRODUTO NÃO ENCONTRADO';

        $link =  "http://" . $_SERVER['SERVER_NAME'] . ROOT_PATH . "/seguros/detalhes/" . $objProduto->getKey();

        $mensagem = self::getCabecalho();

        $mensagem .="
            <tr>
                <td style='font-family:Arial;font-size:16px;color:#FFFFFF;background-color:#3e69a0;padding:10px;'><strong>Cotação de Produto</strong></td>
            </tr>
            <tr>
                <td style='font-family:Arial;font-size:12px;color:#3e69a0;'>
                
                <br /><br />

                <ul>
                    <li><b>Tipo de pessoa:</b> ".utf8_decode($tipo_pessoa)."</li>
                    <li><b>Nome:</b> ".utf8_decode($nome)."</li>
                    <li><b>E-mail: </b>".$email."</li>
                    <li><b>Telefone:</b> ".$telefone."</li>
                    <li><b>Celular:</b> ".$celular."</li>
                    <li><b>Fax:</b> ".$fax."</li>
                    <li><b>Preferência de contato: </b>".$tipo_contato." </li>
                    <li><b>Veículo: Marca:</b> ".utf8_decode($veiculo_marca)."</li>
                    <li><b>Veículo: Modelo: </b>".utf8_decode($veiculo_modelo)."</li>
                    <li><b>Portas: </b>".$portas."</li>
                    <li><b>Combustível:</b> ".$combustivel."</li>
                    <li><b>Ano:</b> ".$ano."</li>
                    <li><b>Modelo:</b> ".$modelo."</li>
                    <li><b>Já possui veículo: </b>".$ja_possui."</li>
                    <li><b>Veículo com alienação financeira:</b> ".$veiculo_alienacao."</li>
                    <li><b>Possui dispositivo antifurto:</b> ".$veiculo_antifurto."</li>
                    <li><b>Opcionais que elevam o valor do veículo:</b> ".$veiculo_opcionais."</li>
                    <li><b>Outros:</b> ".utf8_decode($outros)."</li>
                    <li><b>Seguro:</b> ".$seguro."</li>
                    <li><b>Bônus atual:</b> ".$seguro_bonus."</li>
                    <li><b>Companhia de Seguro:</b> ".utf8_decode($companhia_seguro)."</li>
                    <li><b>Vencimento:</b> ".utf8_decode($vencimento_seguro)."</li>
                </ul>
                <br />
                <br />
                <b>Link do produto:</b>
                <br/>
                <a href='".$link."'> Clique Aqui </a>
                <br />
            </tr>";

        $mensagem .= self::getRodape();

        $to = array(self::getEmailAdmin());
        $assunto = "Cotação de Produto :: Serfer";

        if (Qmail::enviaMensagem($to, $assunto, $mensagem)) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }
    
    
    public static function enviaCotacaoResidencial($tipo_pessoa, $nome, $email, $telefone, 
            $celular, $fax, $tipo_contato, 
            $incendio, $dados_eletricos, $vendaval, $roubo, 
            $rc_familiar, $observacoes, $produtoId) {

        $objProduto = ($produtoId) ? ProdutoPeer::retrieveByPK($produtoId) : 'PRODUTO NÃO ENCONTRADO';

        $link =  "http://" . $_SERVER['SERVER_NAME'] . ROOT_PATH . "/seguros/detalhes/" . $objProduto->getKey();

        $mensagem = self::getCabecalho();

        $mensagem .="
            <tr>
                <td style='font-family:Arial;font-size:16px;color:#FFFFFF;background-color:#3e69a0;padding:10px;'><strong>Cotação de Produto</strong></td>
            </tr>
            <tr>
                <td style='font-family:Arial;font-size:12px;color:#3e69a0;'>
                
                <br /><br />

                <ul>
                    <li><b>Tipo de pessoa:</b> ".utf8_decode($tipo_pessoa)."</li>
                    <li><b>Nome:</b> ".utf8_decode($nome)."</li>
                    <li><b>E-mail: </b>".$email."</li>
                    <li><b>Telefone:</b> ".$telefone."</li>
                    <li><b>Celular:</b> ".$celular."</li>
                    <li><b>Fax:</b> ".$fax."</li>
                    <li><b>Preferência de contato: </b>".$tipo_contato." </li>
                    <li><b>Incêndio (valor do imóvel):</b> ".$incendio."</li>
                    <li><b>Dados Elétricos: </b>".$dados_eletricos."</li>
                    <li><b>Vendaval: </b>".$vendaval."</li>
                    <li><b>Roubo de bens:</b> ".$roubo."</li>
                    <li><b>RC Familiar:</b> ".$rc_familiar."</li>
                </ul>
                <br />
                <br />
                <b>Observações:</b> ".utf8_decode($observacoes)."
                <br />
                <br />
                <b>Link do produto:</b>
                <br/>
                <a href='".$link."'> Clique Aqui </a>
                <br />
            </tr>";

        $mensagem .= self::getRodape();

        $to = array(self::getEmailAdmin());
        $assunto = "Cotação de Produto :: Serfer";

        if (Qmail::enviaMensagem($to, $assunto, $mensagem)) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }
    
    
    public static function enviaCotacaoEmpresarial($tipo_pessoa, $nome, $email, $telefone, $celular, 
                $fax, $tipo_contato, $empresa_condominio, $ramo, $cnpj, $incendio, $danos_eletricos,
                $vendaval, $impacto_quedas, $despesas_fisicas, $perda_aluguel,
                $tumultos, $roubo_bens, $roubo_valores, $roubo_equipamentos, $equipamentos,
                $responsabilidade, $quebra_vidros, $anuncios_luminosos, $derrame_vazamento, $observacoes, $tipo, $produtoId) {

        $objProduto = ($produtoId) ? ProdutoPeer::retrieveByPK($produtoId) : 'PRODUTO NÃO ENCONTRADO';

        $link =  "http://" . $_SERVER['SERVER_NAME'] . ROOT_PATH . "/seguros/detalhes/" . $objProduto->getKey();

        $mensagem = self::getCabecalho();

        $mensagem .="
            <tr>
                <td style='font-family:Arial;font-size:16px;color:#FFFFFF;background-color:#3e69a0;padding:10px;'><strong>Cotação de Produto</strong></td>
            </tr>
            <tr>
                <td style='font-family:Arial;font-size:12px;color:#3e69a0;'>
                
                <br /><br />

                <ul>
                    <li><b>Tipo de pessoa:</b> ".utf8_decode($tipo_pessoa)."</li>
                    <li><b>Nome:</b> ".utf8_decode($nome)."</li>
                    <li><b>E-mail: </b>".$email."</li>
                    <li><b>Telefone:</b> ".$telefone."</li>
                    <li><b>Celular:</b> ".$celular."</li>
                    <li><b>Fax:</b> ".$fax."</li>
                    <li><b>Preferência de contato: </b>".$tipo_contato." </li>";
                    if ($tipo == 'empresarial') {
                        $mensagem .="<li><b>Empresa: </b>".utf8_decode($empresa_condominio)." </li>";
                    } else {
                        $mensagem .="<li><b>Condominio: </b>".utf8_decode($empresa_condominio)." </li>";
                    }
                    $mensagem .="
                    <li><b>Ramo de Atividade:</b> ".utf8_decode($ramo)."</li>
                    <li><b>CNPJ: </b>".$cnpj."</li>
                    <li><b>Incêndio, explosão e fumaça (R$): </b>".$incendio."</li>
                    <li><b>Danos elétricos (R$):</b> ".$danos_eletricos."</li>
                    <li><b>Vendaval (R$):</b> ".$vendaval."</li>
                    <li><b>Impacto de veículos / quedas de aeronave (R$):</b> ".$impacto_quedas."</li>
                    <li><b>Despeas físicas (R$): </b>".$despesas_fisicas."</li>
                    <li><b>Perda de aluguel (R$):</b> ".$perda_aluguel."</li>
                    <li><b>Tumultos (R$):</b> ".$tumultos."</li>
                    <li><b>Roubo / furto qualificado de bens (R$):</b> ".$roubo_bens."</li>
                    <li><b>Roubo / furto qualificado de valores (R$):</b> ".$roubo_valores."</li>
                    <li><b>Equipamentos eletrônicos com roubo (R$):</b> ".$roubo_equipamentos."</li>
                    <li><b>Equipamentos eletrônicos sem roubo (R$):</b> ".$equipamentos."</li>
                    <li><b>Responsabilidade civil (R$):</b> ".$responsabilidade."</li>
                    <li><b>Quebra de vidros (R$):</b> ".$quebra_vidros."</li>
                    <li><b>Anúncios luminosos (R$):</b> ".$anuncios_luminosos."</li>
                    <li><b>Derrame / Vazamento de Sprinklers (R$):</b> ".$derrame_vazamento."</li>
                </ul>
                <br />
                <br />
                <b>Observações:</b> ".utf8_decode($observacoes)."
                <br />
                <br />
                <b>Link do produto:</b>
                <br/>
                <a href='".$link."'> Clique Aqui </a>
                <br />
            </tr>";

        $mensagem .= self::getRodape();

        $to = array(self::getEmailAdmin());
        $assunto = "Cotação de Produto :: Serfer";

        if (Qmail::enviaMensagem($to, $assunto, $mensagem)) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }
    
    
    public static function enviaCotacaoFianca($tipo_pessoa, $nome, $email, $telefone, $celular, 
                $fax, $tipo_contato, $transporte, $previdencia,
                $notebook, $consorcio, $seguro_fianca, $saude, 
                $acidentes, $riscos, $outros, $observacoes, $produtoId) {

        $objProduto = ($produtoId) ? ProdutoPeer::retrieveByPK($produtoId) : 'PRODUTO NÃO ENCONTRADO';

        $link =  "http://" . $_SERVER['SERVER_NAME'] . ROOT_PATH . "/seguros/detalhes/" . $objProduto->getKey();

        $mensagem = self::getCabecalho();

        $mensagem .="
            <tr>
                <td style='font-family:Arial;font-size:16px;color:#FFFFFF;background-color:#3e69a0;padding:10px;'><strong>Cotação de Produto</strong></td>
            </tr>
            <tr>
                <td style='font-family:Arial;font-size:12px;color:#3e69a0;'>
                
                <br /><br />

                <ul>
                    <li><b>Tipo de pessoa:</b> ".utf8_decode($tipo_pessoa)."</li>
                    <li><b>Nome:</b> ".utf8_decode($nome)."</li>
                    <li><b>E-mail: </b>".$email."</li>
                    <li><b>Telefone:</b> ".$telefone."</li>
                    <li><b>Celular:</b> ".$celular."</li>
                    <li><b>Fax:</b> ".$fax."</li>
                    <li><b>Preferência de contato: </b>".$tipo_contato." </li>
                </ul>
                <p><b>Modalidades de Seguro:</b></p>
                <ul>
                    <li><b>Transporte Nacional e Internacional:</b> ".$transporte."</li>
                    <li><b>Previdência:</b> ".$previdencia."</li>
                    <li><b>Notebook: </b>".$notebook."</li>
                    <li><b>Consórcio:</b> ".$consorcio."</li>
                    <li><b>Seguro Fiança:</b> ".$seguro_fianca."</li>
                    <li><b>Saúde pequenas e médias empresas:</b> ".$saude."</li>
                    <li><b>Acidentes pessoais: </b>".$acidentes."</li>
                    <li><b>Riscos de engenharia:</b> ".$riscos."</li>
                    <li><b>Outros:</b> ".$outros."</li>
                </ul>
                <br />
                <br />
                <b>Observações:</b> ".utf8_decode($observacoes)."
                <br />
                <br />
                <b>Link do produto:</b>
                <br/>
                <a href='".$link."'> Clique Aqui </a>
                <br />
            </tr>";

        $mensagem .= self::getRodape();

        $to = array(self::getEmailAdmin());
        $assunto = "Cotação de Produto :: Serfer";

        if (Qmail::enviaMensagem($to, $assunto, $mensagem)) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }
    
    public static function enviaCotacaoVida($tipo_pessoa, $nome, $email, $telefone, 
                    $celular, $fax, $tipo_contato, $arr_participantes, $observacoes, $produtoId) {

        $objProduto = ($produtoId) ? ProdutoPeer::retrieveByPK($produtoId) : 'PRODUTO NÃO ENCONTRADO';

        $link =  "http://" . $_SERVER['SERVER_NAME'] . ROOT_PATH . "/seguros/detalhes/" . $objProduto->getKey();

        $mensagem = self::getCabecalho();

        $mensagem .="
            <tr>
                <td style='font-family:Arial;font-size:16px;color:#FFFFFF;background-color:#3e69a0;padding:10px;'><strong>Cotação de Produto</strong></td>
            </tr>
            <tr>
                <td style='font-family:Arial;font-size:12px;color:#3e69a0;'>
                
                <br /><br />

                <ul>
                    <li><b>Tipo de pessoa:</b> ".utf8_decode($tipo_pessoa)."</li>
                    <li><b>Nome:</b> ".utf8_decode($nome)."</li>
                    <li><b>E-mail: </b>".$email."</li>
                    <li><b>Telefone:</b> ".$telefone."</li>
                    <li><b>Celular:</b> ".$celular."</li>
                    <li><b>Fax:</b> ".$fax."</li>
                    <li><b>Preferência de contato: </b>".$tipo_contato." </li>
                </ul>
                <p><b>Participantes:</b></p>
                <ul>
                ";
                foreach ($arr_participantes as $participante) {
        $mensagem .="
                <li><b>Nome:</b> ".$participante['nome']."</li>
                <li><b>Ano do Nascimento:</b> ".$participante['ano']."</li>
                <li></li>";
                }
        $mensagem .="
                </ul>
                <br />
                <br />
                <b>Observações:</b> ".utf8_decode($observacoes)."
                <br />
                <br />
                <b>Link do produto:</b>
                <br/>
                <a href='".$link."'> Clique Aqui </a>
                <br />
            </tr>";

        $mensagem .= self::getRodape();

        $to = array(self::getEmailAdmin());
        $assunto = "Cotação de Produto :: Serfer";

        if (Qmail::enviaMensagem($to, $assunto, $mensagem)) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }
    

     public static function enviaAgendamento($array) {
        $nome          = utf8_decode($array['nome']);
        $telefone      = $array['telefone'];
        $email         = $array['email'];
        $data          = $array['data'];

        $mensagem = self::getCabecalho();

        $mensagem .="
            <tr>
                <td style='font-family:Arial;font-size:16px;color:#FFFFFF;background-color:#3e69a0;padding:10px;'><strong>Agendamento de Seguro</strong></td>
            </tr>
            <tr>
                <ul>
                    <li>Nome: ".$nome."</li>
                    <li>Telefone: ".$telefone."</li>
                    <li>Email: ".$email."</li>
                    <li>Data: ".$data."</li>
                </ul>
            </tr>";

        $mensagem .= self::getRodape();

        $to = array(self::getEmailAdmin());
        $assunto = "Agendamento de seguro :: Serfer";

        if (Qmail::enviaMensagem($to, $assunto, $mensagem)) {
            $result = true;
        } else {
            $result = false;
        }

        return $result;
    }
}