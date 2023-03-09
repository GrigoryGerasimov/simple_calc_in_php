<?php
declare(strict_types=1);

function performCount(int $firstOperand, int $secondOperand, string $oper): int | float | string | null {
    $operSet = array(
        "plus" => $firstOperand + $secondOperand,
        "minus" => $firstOperand - $secondOperand,
        "mult" => $firstOperand * $secondOperand,
        "div" => $firstOperand / $secondOperand,
        "exp" => $firstOperand ** $secondOperand,
        "remain" => $firstOperand % $secondOperand,
        "and" => $firstOperand & $secondOperand,
        "or" => $firstOperand | $secondOperand,
        "xor" => $firstOperand ^ $secondOperand
    );
    return isset($operSet) ? (is_infinite($operSet[$oper]) || is_nan($operSet[$oper])) ? "Unable to be counted by this calculator" : $operSet[$oper] : NULL;
}
?>