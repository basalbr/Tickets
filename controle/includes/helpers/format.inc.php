<?php

/**
 *
 * Limpa um cep, retira o digito '-' e substitui por string vazia
 *
 * @param string $cep
 * @return string
 */
function clear_cep($cep)
{
    return str_replace('-', '', $cep);
}

/**
 *
 * Formata um cep, retira o digito '-' e substitui por string vazia
 *
 * @param string $cep
 * @return string
 */
function format_cep($cep)
{
    return substr($cep, 0, 5) . '-' . substr($cep, 5, 3);
}

/**
 * Retira caracteres do cpf para salvar no banco de dados
 *
 * @param string $cpf
 * @return string
 */
function clear_cpf($cpf)
{
    return str_replace(array('.', '-'), '', $cpf);
}

/**
 *
 * Formta um cpf que veio do banco de dados para apresentação
 *
 * @param string $cpf
 * @return string
 */
function format_cpf($cpf)
{
    return substr($cpf, 0, 3) . '.' . substr($cpf, 3, 3) . '.' . substr($cpf, 6, 3) . '-' . substr($cpf, 9, 2);
}

function format_number($number, $type, $decimals = 2)
{
    if($type == UsuarioPeer::LINGUAGEM_INGLES)
    {
        $number = str_replace('.', '', $number);
        $number = str_replace(',', '.', $number);
        $number = (double) $number;
    }
    switch($type)
    {
        case UsuarioPeer::LINGUAGEM_PORTUGUES   : return number_format($number, $decimals, ',', '.'); break;
        case UsuarioPeer::LINGUAGEM_INGLES      : return number_format($number, $decimals, '.', ''); break;

        default: return number_format($number, ',', '.'); break;
    }
}

function format_data($data, $type)
{
    switch($type)
    {
        case UsuarioPeer::LINGUAGEM_INGLES :
            {
                $partes  = explode('/', $data);
                $retorno = $partes[2] . '-' . $partes[1] . '-' . $partes[0];
            } break;

        case UsuarioPeer::LINGUAGEM_PORTUGUES :
            {
                $partes  = explode('-', $data);
                $retorno = $partes[0] . '-' . $partes[1] . '-' . $partes[2];
            } break;
    }

    return $retorno;
}

/**
 *
 * Retorna string da linguagem de acrodo com parametro
 *
 * @param string $linguagem
 * @return string
 */
function get_desc_linguagem($linguagem)
{
    switch ($linguagem)
    {
        case UsuarioPeer::LINGUAGEM_PORTUGUES : return 'Português'; break;
        case UsuarioPeer::LINGUAGEM_INGLES    : return 'Inglês'; break;
        case UsuarioPeer::LINGUAGEM_ESPANHOL  : return 'Espanhol'; break;

        default: return ''; break;
    }
}

/**
 *
 * Pega id do video do youtube na url
 *
 * @param string $url
 * @return string
 */
function format_url_youtube($url)
{
    $arrIdVideo = spliti("[\?&]v=", $url);
    //somente apos o paremetro
    $arrIdVideo = $arrIdVideo[1];

    //retirando '&'s
    $arrIdVideo = explode("&", $arrIdVideo);

    //isolando somente o id
    $strIdVideo = $arrIdVideo[0];

    return $strIdVideo;
}

/**
 *
 * Retorna o nome do mes em extenso
 *
 * @param integer $mes O numero do mes
 * @return string Uma string com o nome do mes
 */
function get_mes_extenso($mes)
{
    switch ($mes)
    {
        case  1: $mes  = 'Janeiro';   break;
        case  2: $mes  = 'Fevereiro'; break;
        case  3: $mes  = 'Março';     break;
        case  4: $mes  = 'Abril';     break;
        case  5: $mes  = 'Maio';      break;
        case  6: $mes  = 'Junho';     break;
        case  7: $mes  = 'Julho';     break;
        case  8: $mes  = 'Agosto';    break;
        case  9: $mes  = 'Setembro';  break;
        case  10: $mes = 'Outubro';   break;
        case  11: $mes = 'Novembro';  break;
        case  12: $mes = 'Dezembro';  break;
        default : $mes = '';          break;
    }

    return $mes;
}

/**
 * Retorna o mês abreviado.
 * @param int $mes Mês.
 * @return string Mês abreviado.
 */
function get_mes_abreviado($mes){
    $mesExtenso = get_mes_extenso((int)$mes);
    if ($mesExtenso){
        return substr($mesExtenso, 0, (($mes == 5)?4:3) );
    }else{
        trigger_error('Mês inválido');
        return '';
    }
}

function get_array_mes(){
    return array(
            '1'   => 'Janeiro',
            '2'   => 'Fevereiro',
            '3'   => 'Março',
            '4'   => 'Abril',
            '5'   => 'Maio',
            '6'   => 'Junho',
            '7'   => 'Julho',
            '8'   => 'Agosto',
            '9'   => 'Setembro',
            '10'  => 'Outubro',
            '11'  => 'Novembro',
            '12'  => 'Dezembro',
    );
}

/**
 *
 * Retorna se um email e valido ou nao
 *
 * @param string $email O email a ser validado
 * @return boolean True se for email valido false senao
 */
function isValidEmail($email){
    return preg_match("/^([a-zA-Z0-9])+([\.a-zA-Z0-9_+-])*@([a-zA-Z0-9])+(\.[a-zA-Z0-9_-]+)+$/", $email);
}


setlocale(LC_ALL, 'pt_BR.ISO-8859-1');
/**
 *
 * transforma o texto para por na url: por exemplo:
 * de: Aplicação de notícias
 * para: aplicacao-de-noticias
 * 
 * Adaptado por Diego A. Vidal
 * 
 * @link http://cubiq.org/the-perfect-php-clean-url-generator
 * 
 * @param String $str
 * @param Array() $replace
 * @param String $delimiter
 * @param String $charset
 * @return Stings 
 */
function urlSlug($str, $replace=array(), $delimiter='-', $charset='ISO-8859-1') {
    
    if( !empty($replace) ) {
    $str = str_replace((array)$replace, ' ', $str);
    }

    $clean = iconv($charset, 'ASCII//TRANSLIT', trim($str));
    $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
    $clean = strtolower(trim($clean, '-'));
    $clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

    return $clean;
}

/*
 *
 * Retorna uma string com o texto formatado Ex: Lorem <span class='sansationBold azulClaro'>Ipsum dolor sit amet</span>
 *
 * @date 12/06/2012
 * @author André Felipe de Souza
 * @param string $strTitulo O título a ser formatado
 * @param string $classes Classes quer irão ser colocadas
 * @return string
 */
function formataTitulo($strTitulo, $classes){
    $retorno = "";

    $strDividida = explode(" ", $strTitulo);

    if(count($strDividida) > 1){
        for($i=0; $i<(count($strDividida)); $i++){
            if($i == 0){
                $retorno .= $strDividida[$i] ."<span class='".$classes."'> ";
            }else{
                if(($i+1) == (count($strDividida))){
                    $retorno .= $strDividida[$i] ."</span>";
                }else{
                    $retorno .= $strDividida[$i] ." " ;
                }
            }
        }
    }else{
        $retorno = $strTitulo;
    }

    return $retorno;
}

function formataData($data){
    $retorno = "";

    $data = explode("/", $data);

    switch($data[1]){
        case 01:
            $mes = "JAN";
            break;
        case 02:
            $mes = "FEV";
            break;
        case 03:
            $mes = "MAR";
            break;
        case 04:
            $mes = "ABR";
            break;
        case 05:
            $mes = "MAI";
            break;
        case 06:
            $mes = "JUN";
            break;
        case 07:
            $mes = "JUL";
            break;
        case 08:
            $mes = "AGO";
            break;
        case 09:
            $mes = "SET";
            break;
        case 10:
            $mes = "OUT";
            break;
        case 11:
            $mes = "NOV";
            break;
        case 12:
            $mes = "DEZ";
            break;
    }

    $retorno = "".$data[0]." - ".$mes."";

    return $retorno;
}