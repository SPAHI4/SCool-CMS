<?php
/* Класс для тега [spoiler] */
class Xbb_My_Spoiler extends bbcode
{
    public $behaviour = 'div'; 
 
    /* Описываем конвертацию в HTML */
    function get_html() {
        if (isset($this->attrib['spoiler']) && $this->attrib['spoiler']) {
            $title = htmlspecialchars($this->attrib['spoiler']);
        } else {
            $title = 'скрытый текст';
        }
        $result = '<div class="bbSpoiler">'
                . '<div class="bbSpoilerTitle">'
                . '<a href="#" onclick="return xbbSpoiler(this)">'
                . '<span><strong>[+] ' . $title . '</strong></span>'
                . '<span style="display:none">'
                . '<strong>[-] ' .$title . '</strong>'
                . '</span>'
                . '</a>'
                . '</div>'
                . '<div class="bbSpoilerText" style="display:none">'
                . parent::get_html($this->tree)
                . '</div>'
                . '</div>';
        return $result;
    }
}
?>