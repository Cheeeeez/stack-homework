<?php
include_once "Stack.php";

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
    return $stack->getStack();
}

function checkBrackets($str)
{
    if (isRightBrackets($str) == null) {
        echo "<b>$str</b> là biểu thức đúng";
    } else {
        echo "<b>$str</b> là biểu thức sai";
    }
}

checkBrackets('8 * 2 / ( 9 - 2)');
echo "<br>";
checkBrackets('7 - 3 / 5 * ( 6 +4 ))');
echo "<br>";
checkBrackets('({ (4 - 6) * 7)');
echo "<br>";
checkBrackets('(8 * 2 / 9 - 2');


