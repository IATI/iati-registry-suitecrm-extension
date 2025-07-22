<?php
class ToolButtonsHook{
    function addButtons($focus, $event, $args){
        $focus->iati_tool_buttons = "<button onclick='document.location = \"https://validator.iatistandard.org/report/" . $focus->iati_short_name . "\"' type='button'>Validator</button><button onclick='document.location = \"https://dashboard.iatistandard.org/\"' type='button'>Dashboard</button>";
    }
}
