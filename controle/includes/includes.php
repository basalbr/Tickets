<?php
/** Arquivo para inclus�o e configura��o do Propel (framework PHP de ORM)
 *  http://propel.phpdb.org/trac/
 */

session_start();

include_once dirname(__FILE__).'/constantes.inc.php';
include_once dirname(__FILE__).'/root_path.inc.php';

// adicionando propel
// Set the include_path to include your generated OM 'classes' dir.
$rootDir = realpath( dirname(__FILE__).DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR."/modelo" );
set_include_path($rootDir . DIRECTORY_SEPARATOR . 'classes' . PATH_SEPARATOR . get_include_path());
set_include_path($rootDir . DIRECTORY_SEPARATOR . 'propel'. DIRECTORY_SEPARATOR . 'build'. DIRECTORY_SEPARATOR . 'classes' . PATH_SEPARATOR . get_include_path());

require_once __DIR__. "/../../vendor/propel/runtime/lib/Propel.php";
Propel::init($rootDir . '/build/conf/tickets-conf.php');

//// classes adicionadas para o projeto
include_once __DIR__. '/../../vendor/swift/qmail.class.php'; // enviar emails via smtp
//
//// helper adicionados
include_once __DIR__ . '/helpers/tag.inc.php';// fun��es retornam HTML
include_once __DIR__ . '/helpers/format.inc.php';// formata��o de campos
include_once __DIR__ . '/helpers/util.inc.php';// fun��es uteis gerais
include_once __DIR__ . '/helpers/funcoes.inc.php';// fun��es gerais
include_once __DIR__ . '/UploadFile.php';// classe para upload de arquivos
include_once __DIR__ . '/Mensagem.class.php';// classe para criacao de html de mensagens para email

////faz que o upload do tynymce funcione caso o usuario estiver logado.
//$tinybrowser['sessioncheck'] = UsuarioPeer::USUARIO_LOGADO;