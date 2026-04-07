<?php

function render_content($entry) {
    $render = '';
    foreach($entry as $el){
        $content = '';
        $class = '';
        $link = '';

        if(is_array($el['entry'])){
            $content = render_content($el['entry']);
        }  else {
            $content = $el['entry'];
        }

        if(($el['tag'] ?? null) === 'a'){
            $url = $el['url']  ?? '#';
            $link = "href='{$url}'";
        }

        if(($el['tag'] ?? null) === 'img'){
            $render .= sprintf('<%1$s src="%2$s" alt="%3$s" class="%4$s" />', $el['tag'], $el['entry'], $el['alt'] ?? '', $el['class'] ?? $class);
            continue;
        }

        $render .= sprintf('<%1$s %4$s class="%2$s">%3$s</%1$s>', $el['tag'] ?? 'p', $el['class'] ?? $class, $content, $link);
    }

    return $render;
} 