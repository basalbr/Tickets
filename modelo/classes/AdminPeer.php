<?php



/**
 * Skeleton subclass for performing query and update operations on the 'admin' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class AdminPeer extends BaseAdminPeer {

     const LINGUAGEM_INGLES = 'ING';
    const LINGUAGEM_PORTUGUES = 'POR';

    const PERMISSOES = 'PERMISSOES';
    const USUARIO_LOGADO = 'USUARIO_LOGADO'; //Se modificado deve ser atualizado em 'web/admin/tiny_mce/plugins/tinybrowser/config_tinybrowser.php'

    /**
     *
     * Retorna usuario do banco de dados de acordo com login e senha de parametros
     *
     * @param string $login O login do usuario
     * @param string $senha a senha do usuario, sera usada função md5() nesse parametro
     * @return Usuario instancia de usuario se existir, null senao
     */
    public static function retrieveByLoginSenha($login, $senha) {
        $c = new Criteria();
        $c->add(self::DS_LOGIN, $login);
        $c->add(self::DS_SENHA, md5($senha.Usuario::SENHA_SALT));

        return self::doSelectOne($c);
    }

    /**
     *
     * Indica se tem algum usuario logado no sistema
     *
     * @return boolean
     */
    public static function isAuthenticad() {
        return self::getUsuarioLogado() instanceof Usuario;
    }

    /**
     *
     * Coloca usuario de parametro como usuario logado no sistema
     *
     * @param Usuario $usuario
     */
    public static function setUsuarioLogado(Usuario $usuario) {
        $_SESSION[self::USUARIO_LOGADO] = serialize($usuario);
    }

    /**
     *
     * Retorna usuario logado no sistema
     *
     * @return mixed Usuario logado se tiver, null senao
     */
    public static function getUsuarioLogado() {
        return unserialize($_SESSION[self::USUARIO_LOGADO]);
    }

    /**
     *
     * Seta permissoes do usuario
     *
     * @param array $permissoes Um array com as permissoes do usuario
     */
    public static function setPermissoes(array $permissoes) {
        $_SESSION[self::PERMISSOES] = $permissoes;
    }

    /**
     *
     * Retorna permissoes do usuario
     *
     * @return array Um array com as permissoes do usuario
     */
    public static function getPermissoes() {
        return $_SESSION[self::PERMISSOES];
    }

    /**
     *
     * Faz logout do usuario na sessão
     *
     */
    public static function logout() {
        unset($_SESSION[self::USUARIO_LOGADO]);
    }

    /**
     *
     * Retorna instancia de usuario buscando pelo email passado ou null senao
     *
     * @param string $email
     * @return Usuario
     */
    public static function getUsuarioByEmail($email) {
        $c = new Criteria();
        $c->add(UsuarioPeer::DS_EMAIL, $email);

        return self::doSelectOne($c);
    }

    /**
     *
     * Gera uma nova senha com quantidade de caracteres definidos por $qtdCaracteres
     *
     * @param integer $qtdCaracteres
     * @return string
     */
    public static function geraSenha($qtdCaracteres = 6) {
        return substr(md5(time()), 0, $qtdCaracteres);
    }

    /**
     *
     * Codifica uma string (id)
     *
     * @param string $id
     * @return string codificada
     */
    public static function codificaId($id) {
        return base64_encode($id);
    }

    /**
     *
     * Decodifica uma string (id)
     *
     * @param string $id
     * @return string decodificada
     */
    public static function decodificaId($id) {
        return base64_decode($id);
    }

    
} // AdminPeer
