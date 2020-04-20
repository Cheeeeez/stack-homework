<?php
function isRightBrackets($str)
{
    $stack = new stack_homework\Stack();
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        switch ($char) {
            case '(':
            case '[':
            case '{':
                $stack->push($char);
                break;
            case ')':
            case ']':
            case '}':
                if ($stack->top() == '(' && $char == ')' ||
                    $stack->top() == '[' && $char == ']' ||
                    $stack->top() == '{' && $char == '}') {
                    $stack->pop();
                    break;
                } elseif ($stack->isEmpty()) {
                    return false;
                } else {
                    return false;
                }
        }
    }
    if ($stack->getStack() == null) {
        return true;
    } else {
        return false;
    }
}

function checkBrackets($str)
{
    if (isRightBrackets($str)) {
        echo "<b>$str</b> là biểu thức đúng";
    } else {
        echo "<b>$str</b> là biểu thức sai";
    }
}