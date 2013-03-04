<?php

/**
 * Skeleton subclass for representing a row from the 'cliente' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class Cliente extends BaseCliente {

    const SENHA_SALT = 'm~72zbc-703$1^L#Z7';

    //senha original não criptografada
    private $senhaOriginal = null;

    /**
     * Valida os dados do objeto.
     * @param array &$erros Array de strings onde será adicionado as possiveis mensagens de erro.
     * @param      mixed $columns Será passado para o validate do parent.
     * @return bool true se os dados do objeto são validos, false senão.
     */
    public function myValidate(&$erros, $columns = null) {
        parent::myValidate($erros, $columns);

        if ($this->senhaOriginal !== null) {
            if (strlen($this->senhaOriginal) < 6) {
                $erros[] = 'A senha deve possuir pelo menos 6 caracteres';
            } else if (strlen($this->senhaOriginal) > 20) {
                $erros[] = 'A senha deve possuir ao máximo 20 caracteres';
            }
        }

        return (count($erros) == 0);
    }

    /**
     *
     * Seta a senha do usuario com a criptografia md5();
     *
     * @param string $senha  A senha a ser definida na instancia do usuario
     */
    public function setSenha($senha) {

        if ($senha != '') {
            $this->senhaOriginal = $senha;
            parent::setSenha(md5($senha . self::SENHA_SALT));
        }
    }

    /**
     * Faz login do usuario na session
     */
    public function makeLogin() {
        UsuarioPeer::setUsuarioLogado($this);

        $this->updatePermissoes();
    }

    /**
     *  Atualiza a session com as permissões que o usuario possui
     */
    public function updatePermissoes() {
        $permissoes = array();

        $c = new Criteria();
        $c->addAscendingOrderByColumn(PermissaoPeer::CD_AREA);
        foreach ($this->getPermissaos($c) as $permissao) {
            $permissoes[] = $permissao->getArea();
        }

        UsuarioPeer::setPermissoes($permissoes);
    }

    /**
     *
     * Envia email com link para usuario criar uma nova senha
     *
     * @return boolean True se enviou o email false senao
     */
    public function enviaEmailRenovarSenha() {

        $mensagem =
                "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>
      <html>
      <head>
        <title></title>
        <style type='text/css'>
        body {margin: 20px;padding: 0px;font-family: Tahoma;font-size: 12px;}
        #topo {padding-bottom: 10px;border-bottom: 1p solid #003366;}
        h1 {font-size: 16px;color: #003366;}
        </style>
      </head>
      <body>
      <div id='conteudo'>
        <h1>Solicitação de Senha</h1>
        <p>Recebemos uma solicitação de recuperação de senha para o e-mail <b>" . $this->ds_email . "</b>, para gerar uma nova senha clique no link indicado ou
        copie e cole a URL em seu navegador.
        <br />
        Caso não tenha feito esta solicitação, apenas desconsidere esta mensagem.</p>
        <ul>
          <li><b>E-mail:</b> " . $this->ds_email . "</li>
          <li><b>Login:</b> " . $this->ds_login . "</li>
          <li>Para gerar uma nova senha
            <a href='http://" . $_SERVER['SERVER_NAME'] . ROOT_PATH . "/admin/home/gera_senha.php?token=" . UsuarioPeer::codificaId($this->cd_usuario) . "' >clique aqui</a>
            <br />
            ou acesse: http://" . $_SERVER['SERVER_NAME'] . ROOT_PATH . "/admin/home/gera_senha.php?token=" . UsuarioPeer::codificaId($this->cd_usuario) . "
          </li>
        </ul>
        <p>Q.CMS - Sistema de Administração de Conteúdo Quality Press.</p>
      </div>

      </body>
      </html>";

        return Qmail::enviaMensagem($this->ds_email, 'Q.CMS :: Recuperação de Senha', $mensagem);
    }

    /**
     *
     * Envia uma senha para o email do usuario
     *
     * @param string $senha A senha a ser enviada
     * @return boolean se enviou email ou nao
     */
    public function enviaSenhaEmail($senha) {
        $mensagem =
                "<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN'>
      <html>
      <head>
        <title></title>
        <style type='text/css'>
        body {margin: 20px;padding: 0px;font-family: Tahoma;font-size: 12px;}
        #topo {padding-bottom: 10px;border-bottom: 1p solid #003366;}
        h1 {font-size: 16px;color: #003366;}
        </style>
      </head>
      <body>
      <div id='conteudo'>
        <h1>Solicitação de Senha</h1>
        <p>Recebemos uma solicitação de geração de nova senha para o e-mail <b>" . $this->ds_email . "</b></p>
        <ul>
          <li><b>E-mail:</b> " . $this->ds_email . "</li>
          <li><b>Login:</b> " . $this->ds_login . "</li>
          <li><b>Senha:</b> " . $senha . "</li>
        </ul>
        <p>Q.CMS - Sistema de Administração de Conteúdo Quality Press.</p>
      </div>

      </body>
      </html>";

        return Qmail::enviaMensagem($this->ds_email, 'Q.CMS :: Nova senha', $mensagem);
    }

    /**
     *
     * Gera uma nova senha para o usuario e envia a nova senha para seu email
     *
     * @return boolean True se enviou o email com a nova senha ou false senao
     */
    public function geraEnviaSenha() {
        $novaSenha = UsuarioPeer::geraSenha();

        $this->setSenha($novaSenha);

        if ($this->save()) {
            if ($this->enviaSenhaEmail($novaSenha)) {
                return true;
            }
        }

        return false;
    }

    public function addPermissoes(array $areaIds = array()) {
        foreach ($areaIds as $areaId) {
            $permissao = new Permissao();
            $permissao->setArea($areaId);
            $this->addPermissao($permissao);
        }
    }

    public function incErrosLogin($save = true, PropelPDO $con = null) {
        $this->setErrosLogin($this->getErrosLogin() + 1);

        if ($save) {
            $this->save($con);
        }
    }

    public function resetErrosLogin($save = true, PropelPDO $con = null) {
        $this->setErrosLogin(0);

        if ($save) {
            $this->save($con);
        }
    }

    public function getNomeCliente() {
        if ($this->getTipo() == 'J') {
            return $this->getNome();
        } else {
            return $this->getNomeFantasia();
        }
    }

    public function getTipoCliente() {
        if ($this->getTipo() == 'J') {
            return "Jurídico";
        } else {
            return "Físico";
        }
    }

    public function getCpfCnpj() {
        if ($this->getTipo() == 'J') {
            return $this->getCnpj();
        } else {
            return $this->getCpf();
        }
    }

    public function getTelefone() {
        $telefone = TelefoneQuery::create()->filterByDescricao("Principal")->filterByClienteId($this->getId())->findOne();
        if ($telefone) {
            return $telefone;
        } else {
            return "Nenhum telefone cadastrado";
        }
    }

    public function getSituacao() {
        if ($this->getAtivo() == 'S') {
            return "Habilitado";
        } else {
            return "Desabilitado";
        }
    }

}

// Cliente
