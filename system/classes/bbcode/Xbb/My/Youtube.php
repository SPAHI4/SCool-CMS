<?php
// Класс для тега [youtube]
class Xbb_My_Youtube extends bbcode
{
    public $behaviour = 'img';

    function get_html($tree = null)
    {
        $param = htmlspecialchars(parent::get_html($tree));
        $html = '<object width="480" height="270" style="padding: 5px;">'
              . '<param name="movie" value="http://www.youtube.com/v/' . $param
              . '&amp;rel=1"></param>'
              . '<param name="wmode" value="transparent"></param>'
              . '<embed allowfullscreen="true" src="http://www.youtube.com/v/' . $param . '&amp;rel=1&amp;fs=1&amp;color2=336AFB&color1=FFFF66&amp;hd=1" '
              . 'type="application/x-shockwave-flash" wmode="transparent" width="360" '
              . 'height="230"></embed>'
              . '</object>';
        return $html;
    }
}
?>