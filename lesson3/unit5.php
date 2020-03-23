<?php

function spaceRepl($str) {
    return str_replace(" ", "_", $str);
}

echo spaceRepl($m_str);
?>