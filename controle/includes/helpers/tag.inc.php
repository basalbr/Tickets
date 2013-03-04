<?php

/**
 *
 * Transforma um array php para atributos HTML
 *
 * @param array $attributes Um array de atributos onde indice eh o nome do atributo e valor eh o valor do atributo
 * @return string Uma string com todos os atributos
 */
function get_atributes_html(array $atributes = array())
{
  $attri = '';
  foreach($atributes as $attr => $value)
  {
    if($attr == 'name' && (! isset($atributes['id'])))// se nao foi passado um parametro id, crio ele com base no parametro nome
    {
      $attri .= 'id="' . get_id_from_name($value) . '" ';
    }
    $attri .= $attr . '="' . $value . '" ';
  }

  return $attri;
}


/**
 *
 * Substitui caracteres nao reconhecidos por alguns browsers por _ na string.
 *
 * @param string $name O nome a ser traduzido para um elemento ID
 * @return string O nome traduzido
 */
function get_id_from_name($name)
{
  return str_replace(array('[', ']'), '_', $name);
}


/**
 *
 * Retorna um tag select
 *
 * @param array $values Um array que sera transformado em option da tag select
 * @param mixed $valueSelected o valor selecionado
 * @param array $atributes array para ser tranformado em atributos HTML
 * @see get_atributes_html()
 * @return string codigo html de uma tag select contendo array como options
 */
function get_form_select(array $values, $valueSelected, array $atributes = array())
{

  $ret = '<select ' . get_atributes_html($atributes) . ' >';
  foreach($values as $key => $value)
  {
      
    $ret .= "<option value='$key'" . (($key == $valueSelected) ? "selected='selected'" : '') . ">$value</option>";
  }
  $ret .= '</select>';

  return $ret;
}


/**
 *
 * Retorna uma tag select preenchida com os objetos passados como parametros
 *
 * @param array $objects Um array de objetos
 * @param mixed $value o valor do option selecionado
 * @param string $valueMethod nome metodo a ser chamado para preencher o valor do option do select
 * @param string $textMethod nome metodo a ser chamado para preencher o text do option do select
 * @param array $atributes array para ser tranformado em atributos HTML
 * @param array $addOptions array para ser mesclado com os do objeto
 * @return string tag select
 */
function get_form_select_object($objects, $value, $valueMethod, $textMethod, array $atributes = array(), $addOptions = array())
{
  $values = array();

  foreach($addOptions as $key => $option)
  {
    $values[$key] = $option;
  }
  
  foreach ($objects as $object)
  {
    $values[$object->$valueMethod()] = $object->$textMethod();
  }

  if(count($addOptions) > 0)
  {
  // ksort($values);
  }

  return get_form_select($values, $value, $atributes);
}

function get_form_input(array $atributes = array(), $escapeValue = true){
    if (empty($atributes['type'])){
        $atributes['type'] = 'text';
    }
    if (!empty($atributes['value']) && $escapeValue){
        $atributes['value'] = escape($atributes['value']);
    }
    
    $strAtributes = '';
    foreach ($atributes as $k => $v){
        if ($k){
            $strAtributes .= sprintf('%s="%s" ', $k, $v);
        }
    }
    
    return sprintf('<input %s/>', $strAtributes);
}

function get_form_input_radio($atributes = array(), $escapeValue = true){
    $atributes['type'] = 'radio';
    return get_form_input($atributes, $escapeValue);
}

function get_form_input_checkbox($atributes = array(), $escapeValue = true){
    $atributes['type'] = 'checkbox';
    return get_form_input($atributes, $escapeValue);
}

/**
 *
 * Retorna uma tag html <img /> preparada para a criação de um thumb utilizando o arquivo de resize de imagens
 *
 * @param string $img Nome da imagem a ser redimensionada
 * @param integer $width Largura da nova imagem
 * @param integer $height Altura da nova imagem
 * @param string $atributes array de atributs html
 * @param string $pathImg Endereço que aponta para a pasta da imagem. Será adicionado na frente desse endereço a constante ROOT_PATH definida em include_propel.inc.php. Valor padrao: /arquivos/
 * @return string O html da tag <img>
 */
function get_img_thumb($img, $width, $height, $cropratio = false, $atributes = array(), $pathImg = '/arquivos/')
{
  $tagImg = '<img ' . get_atributes_html($atributes);

  $pathImg = ROOT_PATH . $pathImg;// Defino a path para img de acordo com o root dir da aplicxação. caso local seria /pryvijan/$pathImg. caso remoto seria apenas $pathImg

  $pathImgResize = ROOT_PATH . '/resize/image.php/';

  $tagImg .= " src='$pathImgResize$img?width=$width&height=$height&image=$pathImg$img" . ($cropratio ? '&cropratio=' . $cropratio : '') . "' />";

  return $tagImg;
}

/**
 *
 * @param string $texto O texto a ser resumido (cortado)
 * @param integer $qtdChars A quantidade de caracteres que o texto pode conter
 * @param string $sufix Um sufixo para ser adicionado ao final do texto default: '...'
 * @return string O texto resumido (cortado)
 */
function resumo($texto, $qtdChars, $sufix = '...')
{
  $texto = strip_tags($texto);

  if(strlen($texto) > $qtdChars)
  {
    $texto = substr($texto, 0, $qtdChars);

    $lastSpace = strripos($texto, ' ');

    return substr($texto, 0, $lastSpace) . $sufix;
  }
  else
  {
    return $texto;
  }
}

/**
 * Corta o texto para a quantidade de palavras definida.
 *
 * @param string $texto O texto a ser resumido (cortado)
 * @param integer $qtdPalavras A quantidade de palavras que o texto pode conter
 * @param string $sufix Um sufixo para ser adicionado ao final do texto default: '...'
 * @param bool $strip_tags Indica se a função strip_tags deve ser aplicada sobre o texto.
 * @return string O texto resumido (cortado)
 */
function resumo_palavras($texto, $qtdPalavras, $sufix = '...', $strip_tags = true){
    if ($qtdPalavras <= 0){
        trigger_error('Quantidade deve ser maior do que 0.');
        return '';
    }

    if ($strip_tags){
        $texto = strip_tags($texto);
    }

    if (str_word_count($texto, 0) > $qtdPalavras){

        $pos = array_keys(str_word_count($texto, 2));
        $resumo = substr($texto, 0, $pos[$qtdPalavras]);

        return $resumo.$sufix;
    }else{
        return $texto;
    }
}
/**
 *
 * @param Boolean $boolean
 * @param Int $id
 * @param String $className
 * @param String $campo 
 */
function get_desc_boolean_changestatus($boolean, $id, $className, $campo){
    if($boolean){
        $boolean = 'btnOn';
    }else{
        $boolean = 'btnOff';
    }
    return '<a href="#" rel="'.$id.'" campo="'.$campo.'" objeto="'.$className.'" class="changeStatus '.$boolean.'">&nbsp;</a>';
}
/**
 *
 * Retorna uma tag span de conteudo sim caso boolean seja true, ou tag span vermelha caso boolean seja false
 *
 * @param boolean $boolean O valor booleano
 * @return string
 */
function get_desc_boolean($boolean)
{
  $content = $boolean ? 'Sim' : 'Não';

  return get_span_color_boolean($boolean, $content);
}

/**
 *
 * * Retorna uma tag span de com a cor de acordo com o parametro boolean
 *
 * @param boolean $boolean
 * @param string $content O conteudo a ser adicionado dentro da tag span
 * @param array $arrColor Um array com as cores a serem usadas como padrao, indice 0 indica cor se caso for false o parametro boolean, indice 1 caso for true
 * @return string
 */
function get_span_color_boolean($boolean, $content, $arrColor = array(0 => 'red', 1 => 'green'))
{
  $color = $boolean ? $arrColor[1] : $arrColor[0];

  return "<span style='color:$color' >$content</span>";
}

/**
 *
 * Retorna um array com todos os estados do brasil onde chave eh estado com 2 caracteres e valor e o nome do estado
 *
 * @return array
 */
function get_estados()
{
  return array(
  'AC'      => 'Acre',
  'AL'      => 'Alagoas',
  'AM'      => 'Amazonas',
  'AP'      => 'Amapa',
  'BA'      => 'Bahia',
  'CE'      => 'Ceará',
  'DF'      => 'Distrito Federal',
  'ES'      => 'Espírito Santo',
  'GO'      => 'Goiás',
  'MA'      => 'Maranhão',
  'MS'      => 'Mato Grosso do Sul',
  'MT'      => 'Mato Grosso',
  'MG'      => 'Minas Gerais',
  'PA'      => 'Pará',
  'PB'      => 'Paraíba',
  'PR'      => 'Paraná',
  'PE'      => 'Pernambuco',
  'PI'      => 'Piauí',
  'RJ'      => 'Rio de Janeiro',
  'RN'      => 'Rio Grande do Norte',
  'RS'      => 'Rio Grande do Sul',
  'RO'      => 'Rondônia',
  'RR'      => 'Roraima',
  'SC'      => 'Santa Catarina',
  'SP'      => 'São Paulo',
  'SE'      => 'Sergipe',
  'TO'      => 'Tocantins',
  );
}