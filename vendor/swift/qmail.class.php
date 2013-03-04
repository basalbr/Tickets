<?php

/**
 * Classe para padronização de envio de emails via SMTP, utilizando biblioteca SWIFT
 *
 * @author Jaison Vargas Veneri
 * @see PHPMailer
 * @since 07/10/2009
 *
 * USO:
 *
 *
 * Qmail::enviaMensagem($to, $subject, $mensagem);
 *
 * $to        = para quem enviar a mensagem (pode ser um array de emails)
 * $subject   = titulo da mensagem
 * $mensagem  = corpo da mensagem (pode ser HMTL)
 *
 *
 */

require_once 'lib/swift_required.php';

class Qmail
{

  // dados padrões para envio de email. Configure em cada novo projeto para envio padrao

    private $host     = 'ssl://smtp.gmail.com:465'; // smtp
    private $userName = 'atendimento@serferseguros.com.br';
    private $senha    = '986532aten';
    private $from     = 'atendimento@serferseguros.com.br';
    private $use_smtp = true;
    private $body;
    private $assunto;
    private $para;
    private $timeout  = 30;
    private $fromName   = 'Serfer';
    private $reply_to   = array(0 => array('Serfer :: Atendimento', 'atendimento@serferseguros.com.br'));


  public function getBody()
  {
    return $this->body;
  }

  public function setBody($body)
  {
    $this->body = $body;
  }

  public function getAssunto()
  {
    return $this->assunto;
  }

  public function setAssunto($assunto)
  {
    $this->assunto = $assunto;
  }

  public function getPara()
  {
    return $this->para;
  }

  public function setPara($para)
  {
    $this->para = $para;
  }

  public function getHost()
  {
    return $this->host;
  }

  public function setHost($host)
  {
    $this->host = $host;
  }

  public function getUse_smtp()
  {
    return $this->use_smtp;
  }

  public function setUse_smtp($use_smtp)
  {
    $this->use_smtp = $use_smtp;
  }

  public function getUserName()
  {
    return $this->userName;
  }

  public function setUserName($userName)
  {
    $this->userName = $userName;
  }

  public function getSenha()
  {
    return $this->senha;
  }

  public function setSenha($senha)
  {
    $this->senha = $senha;
  }

  public function getFrom()
  {
    return $this->from;
  }

  public function setFrom($from)
  {
    $this->from = $from;
  }

  public function getFromName()
  {
    return $this->fromName;
  }

  public function setFromName($fromName)
  {
    $this->fromName = $fromName;
  }



  /**
   *
   * Cria instancia do Qmail com valores de configuração padrão
   *
   * @param string $host host para se conectar com servidor SMTP
   * @param boolean $smtp se é uma conexão smtp
   * @param string $userName nome do usuario para se conectar no servidor
   * @param string $senha senha do usuario para se conectar no servidor
   * @param string $from
   * @param string $fromName Nome de quem esta enviando a mensagem
   */
  public function __construct($host = '', $smtp = '', $userName = '', $senha = '', $from = '', $fromName = '')
  {
    if($host != '')
    {
      $this->host = $host;
    }

    if($smtp != '')
    {
      $this->use_smtp = $smtp;
    }

    if($userName != '')
    {
      $this->userName = $userName;
    }

    if($senha != '')
    {
      $this->senha = $senha;
    }

    if($from != '')
    {
      $this->from = $from;
    }

    if($fromName != '')
    {
      $this->fromName = $fromName;
    }
  }


  /**
   *
   * Passa os valores padroes da classe Qmail para a PhpMailer
   *
   */
  public function init()
  {
    if($this->use_smtp)
    {
      $this->IsSMTP();
    }
    $this->IsHTML(true);
    $this->Host       = $this->host;
    $this->SMTPAuth   = $this->use_smtp;
    $this->Username   = $this->userName ;  // Change this to your gmail adress
    $this->Password   = $this->senha;      // Change this to your gmail password
    $this->From       = $this->from;       // This HAVE TO be your gmail adress
    $this->FromName   = $this->fromName;   // This is the from name in the email, you can put anything you like here
    $this->Body       = $this->body;
    $this->Subject    = $this->assunto;
    $this->Timeout    = $this->timeout;
  }


  /**
   *
   * Envia um email
   *
   * @param string $assunto Assunto do email
   * @param string $mensagem A mensagem em si
   * @param string $replyTo Um array (indice 0 significa o nome para resposta e indice 1 significa o email para resposta) com emails para serem adicionados como emails para resposta.
   * @param string $fromName Nome de quem esta enviando a mensagem
   * @param string $from Email de quem esta enviando a mensagem
   * @param array $cco array para copia ocultas
   * @param array $arrAnexos array com path para arquivos em anexo
   * @return boolean true se enviou false senao
   */
  public function envia($assunto, $mensagem, $replyTo = array(), $fromName = '', $from = '', $cco = array(), $arrAnexos = array())
  {
    $from     = $from != '' ? $from : $this->from;
    $fromName = $fromName != '' ? $fromName : $this->fromName;

    //Create the Transport
    $transport = Swift_SmtpTransport::newInstance($this->host, 25)->setUsername($this->userName)->setPassword($this->senha);

    //Create the Mailer using your created Transport
    $mailer = Swift_Mailer::newInstance($transport);

    //Create a message
    $message = Swift_Message::newInstance($assunto, null, null, 'iso-8859-1')
            ->setFrom(array($from => $fromName))
            ->setTo($this->getPara())
            ->setBody($mensagem, 'text/html', 'iso-8859-1')
            ->setBcc($cco);

    foreach($replyTo as $reply)
    {
      $message->addReplyTo($reply[1], $reply[0]);
    }

    foreach($arrAnexos as $strPath)
    {
        $message->attach(Swift_Attachment::fromPath($strPath));
    }

    //Send the message
    return $mailer->send($message);
  }


  /**
   *
   * @param mixed $para Pode ser um array com email ou uma string contendo o email para quem sera enviada a mensagem
   * @param string $assunto O assunto da mensagem
   * @param string $mensagem Corpo da mensagem, padrao HTML
   * @param array $replyTo Um array (indice 0 significa o nome para resposta e indice 1 significa o email para resposta) com emails para serem adicionados como emails para resposta.
   * @param string $fromName Nome de quem esta enviando a mensagem
   * @param string $from Email de quem esta enviando a mensagem
   * @param array $cco CCO email enviado como copia oculta para essas pessoas
   * @param array $arrAnexos Um array com endereco de um arquivo no servidor que sera enviado no email como um anexo
   * @return boolean Se mensagem foi enviada ou não
   */
  public static function enviaMensagem($para, $assunto, $mensagem, $replyTo = array(), $fromName = '', $from = '', $cco = array(), $arrAnexos = array())
  {
    $email = new Qmail();
    $email->setPara($para);

    return $email->envia($assunto, $mensagem, $replyTo, $fromName, $from, $cco, $arrAnexos);
  }


}