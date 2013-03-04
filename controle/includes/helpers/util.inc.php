<?php

/**
 * Remove todos os caracteres que não são digitos da string.
 * @param <type> $string
 * @return <type> String contendo apenas digitos.
 */
function only_digits($string) {
    return preg_replace('/[^0-9]/', "", $string);
}

function isset_or_null(&$v) {
    return isset_or($v, null);
}

function isset_or(&$v, $a = '') {
    return ((isset($v)) ? $v : $a);
}

/**
 * Retorna o ultimo dia de um mês.
 *
 * @param mixed $mes Inteiro indicando o mês ou null para o mês atual.
 * @param mixed $ano Inteiro indicando o ano ou null para o ano atual.
 *
 * @return int Ultimo dia do mes.
 */
function get_ultimo_dia_mes($mes = null, $ano = null) {
    if($mes === null){
        $mes = date('m');
    }
    if($ano === null){
        $ano = date('Y');
    }
    return (int) date('t', mktime(0, 0, 0, $mes, 1, $ano));
}

function formata_cnpj($v) {
    $v = only_digits($v);

    $ret = substr($v, 0, 2);
    $sub = substr($v, 2, 3);
    if($sub){
        $ret .= '.'.$sub;

        $sub = substr($v, 5, 3);
        if($sub){
            $ret .= '.'.$sub;

            $sub = substr($v, 8, 4);
            if($sub){
                $ret .= '/'.$sub;

                $sub = substr($v, 12, 2);
                if($sub){
                    $ret .= '-'.$sub;
                }
            }
        }
    }

    return $ret;
}

function formata_cpf($v) {
    $v = only_digits($v);

    $ret = substr($v, 0, 3);
    $sub = substr($v, 3, 3);
    if($sub){
        $ret .= '.'.$sub;

        $sub = substr($v, 6, 3);
        if($sub){
            $ret .= '.'.$sub;

            $sub = substr($v, 9, 2);
            if($sub){
                $ret .= '-'.$sub;
            }
        }
    }

    return $ret;
}

function formata_cep($v) {
    $v = only_digits($v);
    if(((int) $v) == 0){
        return '';
    }

    $ret = substr($v, 0, 5);
    $sub = substr($v, 5, 3);
    if($sub){
        $ret .= '-'.$sub;
    }
    return $ret;
}

function valida_data($strData) {
    $arrPartes = preg_split('![/-]!', $strData);
    return (count($arrPartes) == 3 && checkdate($arrPartes[1], $arrPartes[0], $arrPartes[2]));
}

function valida_horario($strHorario) {
    $ret = false;

    $arrPartes = explode(':', $strHorario);
    if(count($arrPartes) == 2 && is_numeric($arrPartes[0]) && is_numeric($arrPartes[1])){
        $intHora = (int) $arrPartes[0];
        $intMinuto = (int) $arrPartes[1];
        $ret = ($intHora >= 0 && $intHora < 24) && ($intMinuto >= 0 && $intMinuto < 60);
    }

    return $ret;
}

function data_mysql($strData, $boolValidar = true) {
    $strRet = '';
    $arrPartes = preg_split('![/-]!', $strData);
    if(count($arrPartes) == 3){
        if(!$boolValidar || checkdate($arrPartes[1], $arrPartes[0], $arrPartes[2])){
            $strRet = sprintf('%s-%s-%s', $arrPartes[2], $arrPartes[1], $arrPartes[0]);
        }
    }
    return $strRet;
}

function data_mysqlAsTimestamp($strData, $boolValidar = true) {
    $strData = data_mysql($strData, $boolValidar);
    if($strData){
        $arrPartes = explode('-', $strData);
        if(count($arrPartes) == 3){
            return mktime(0, 0, 0, $arrPartes[1], $arrPartes[2], $arrPartes[0]);
        }
    }
    return false;
}

function substituiCaracteresAcentuados($str) {
    $str = preg_replace('/[áàãâä]/', 'a', $str);
    $str = preg_replace('/[ÁÀÃÂÄ]/', 'A', $str);
    $str = preg_replace('/[éèêë]/', 'e', $str);
    $str = preg_replace('/[ÉÈÊË]/', 'E', $str);
    $str = preg_replace('/[íìîï]/', 'i', $str);
    $str = preg_replace('/[ÍÌÎÏ]/', 'I', $str);
    $str = preg_replace('/[óòõÔÖ]/', 'o', $str);
    $str = preg_replace('/[ÓÒÕÔÖ]/', 'O', $str);
    $str = preg_replace('/[úùûü]/', 'u', $str);
    $str = preg_replace('/[ÚÙÛÜ]/', 'U', $str);
    return $str;
}

function valorPorExtenso($valor=0) {
    $singular = array("centavo", "real", "mil", "milhão", "bilhão", "trilhão", "quatrilhão");
    $plural = array("centavos", "reais", "mil", "milhões", "bilhões", "trilhões", "quatrilhões");

    $rt = '';

    $c = array("", "cem", "duzentos", "trezentos", "quatrocentos", "quinhentos", "seiscentos", "setecentos", "oitocentos", "novecentos");
    $d = array("", "dez", "vinte", "trinta", "quarenta", "cinquenta", "sessenta", "setenta", "oitenta", "noventa");
    $d10 = array("dez", "onze", "doze", "treze", "quatorze", "quinze", "dezesseis", "dezesete", "dezoito", "dezenove");
    $u = array("", "um", "dois", "três", "quatro", "cinco", "seis", "sete", "oito", "nove");

    $z = 0;

    $valor = number_format($valor, 2, ".", ".");
    $inteiro = explode(".", $valor);
    for($i = 0; $i < count($inteiro); $i++)
        for($ii = strlen($inteiro[$i]); $ii < 3; $ii++)
            $inteiro[$i] = "0".$inteiro[$i];

    // $fim identifica onde que deve se dar junção de centenas por "e" ou por "," ;)
    $fim = count($inteiro) - ($inteiro[count($inteiro) - 1] > 0 ? 1 : 2);
    for($i = 0; $i < count($inteiro); $i++){
        $valor = $inteiro[$i];
        $rc = (($valor > 100) && ($valor < 200)) ? "cento" : $c[$valor[0]];
        $rd = ($valor[1] < 2) ? "" : $d[$valor[1]];
        $ru = ($valor > 0) ? (($valor[1] == 1) ? $d10[$valor[2]] : $u[$valor[2]]) : "";

        $r = $rc.(($rc && ($rd || $ru)) ? " e " : "").$rd.(($rd && $ru) ? " e " : "").$ru;
        $t = count($inteiro) - 1 - $i;
        $r .= $r ? " ".($valor > 1 ? $plural[$t] : $singular[$t]) : "";
        if($valor == "000")
            $z++; elseif($z > 0)
            $z--;
        if(($t == 1) && ($z > 0) && ($inteiro[0] > 0))
            $r .= ( ($z > 1) ? " de " : "").$plural[$t];
        if($r)
            $rt = $rt.((($i > 0) && ($i <= $fim) && ($inteiro[0] > 0) && ($z < 1)) ? ( ($i < $fim) ? ", " : " e ") : " ").$r;
    }

    return($rt ? $rt : "zero");
}

/**
 * Calculates a date lying a given number of months in the future of a given date.
 * The results resemble the logic used in MySQL where '2009-01-31 +1 month' is '2009-02-28' rather than '2009-03-03' (like in PHP's strtotime).
 *
 * @author akniep
 * @since 2009-02-03
 * @param $base_time long, The timestamp used to calculate the returned value .
 * @param $months int, The number of months to jump to the future of the given $base_time.
 * @return long, The timestamp of the day $months months in the future of $base_time
 */
function get_x_months_to_the_future($base_time = null, $months = 1) {
    if(is_null($base_time))
        $base_time = time();

    $x_months_to_the_future = strtotime("+".$months." months", $base_time);

    $month_before = (int) date("m", $base_time) + 12 * (int) date("Y", $base_time);
    $month_after = (int) date("m", $x_months_to_the_future) + 12 * (int) date("Y", $x_months_to_the_future);

    if($month_after > $months + $month_before)
        $x_months_to_the_future = strtotime(date("Ym01His", $x_months_to_the_future)." -1 day");

    return $x_months_to_the_future;
}

//get_x_months_to_the_future()

function escape($str) {
    return htmlspecialchars($str, ENT_QUOTES);
}

function get_contents($_filename, $_args = array()){
  if (is_file($_filename)):
    ob_start();
    extract($_args, EXTR_PREFIX_ALL, 'var');
    include $_filename;
    $_contents = ob_get_contents();
    ob_end_clean();
    return $_contents;
  else:
    throw new Exception(sprintf('Unable to locate file "%s"', $_filename));
  endif;
}

?>
