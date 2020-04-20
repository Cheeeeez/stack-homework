<?php
function isRightBrackets($str)
{
    $stack = new stack_homework\Stack();
    for ($i = 0; $i < strlen($str); $i++) {
        switch ($str[$i]) {
            case '(':
                $stack->push('(');
                break;
            case ')':
                if ($stack->top() == '(') {
                    $stack->pop();
                    break;
                } elseif ($stack->isEmpty()) {
                    $stack->push(')');
                    break;
                } else {
                    break;
                }
            case '[':
                $stack->push('[');
                break;
            case ']':
                if ($stack->top() == '[') {
                    $stack->pop();
                    break;
                } elseif ($stack->isEmpty()) {
                    $stack->push(']');
                    break;
                } else {
                    break;
                }
            case '{':
                $stack->push('{');
                break;
            case '}':
                if ($stack->top() == '{') {
                    $stack->pop();
                    break;
                } elseif ($stack->isEmpty()) {
                    $stack->push('}');
                    break;
                } else {
                    break;
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