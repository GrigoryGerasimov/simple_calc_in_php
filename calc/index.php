<?php declare(strict_types=1); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="simple, php, calc, calculator">
    <meta name="description" content="Simple calculator written in PHP">
    <script src="index.js" rel="text/javascript"></script>
    <link href="index.css" rel="stylesheet">
    <title>Simple Calculator</title>
</head>
<body>
    <main class="calc">
        <output class="calc__output">
            <?php
            error_reporting(E_ALL);
            require "utils/performCount.php";
            require "utils/validate_POST.php";
    
            if (validate_POST()) {
                [
                    "operand1" => $operand1,
                    "operand2" => $operand2,
                    "oper" => $operator
                ] = $_POST;

                echo performCount(intval($operand1), intval($operand2), $operator);
            }    
            ?>
        </output>
        <fieldset class="fieldframe">
            <legend>Simple Calculator</legend>
                <form name="calc" action="" method="POST" class="calc__form">
                    <div class="calc__block calc__block-input">
                        <input type="number" name="operand1" class="calc__form-item calc__input"/>
                        <input type="number" name="operand2" class="calc__form-item calc__input"/>
                    </div>
                    <div class="calc__block calc__block-oper">
                        <span>Basic</span>
                        <div class="calc__block">
                            <div class="calc__form-item">
                                <label for="plus" role="button" class="calc__radio-label">+</label>
                                <input id="plus" type="radio" name="oper" value="plus" class="calc__radio"/>
                            </div>
                            <div class="calc__form-item">
                                <label for="minus" role="button" class="calc__radio-label">-</label>
                                <input id="minus" type="radio" name="oper" value="minus" class="calc__radio"/>
                            </div>
                            <div class="calc__form-item">
                                <label for="mult" role="button" class="calc__radio-label">*</label>
                                <input id="mult" type="radio" name="oper" value="mult" class="calc__radio"/>
                            </div>
                            <div class="calc__form-item">
                                <label for="div" role="button" class="calc__radio-label">/</label>
                                <input id="div" type="radio" name="oper" value="div" class="calc__radio"/>
                            </div>
                            <div class="calc__form-item">
                                <label for="exp" role="button" class="calc__radio-label">**</label>
                                <input id="exp" type="radio" name="oper" value="exp" class="calc__radio"/>
                            </div>
                            <div class="calc__form-item">
                                <label for="remain" role="button" class="calc__radio-label">%</label>
                                <input id="remain" type="radio" name="oper" value="remain" class="calc__radio"/>
                            </div>
                        </div>
                    </div>
                    <div class="calc__block calc__block-oper">
                        <span>Bitwise</span>
                        <div class="calc__block">
                            <div class="calc__form-item">
                                <label for="and" role="button" class="calc__radio-label">&</label>
                                <input id="and" type="radio" name="oper" value="and" class="calc__radio"/>
                            </div>
                            <div class="calc__form-item">
                                <label for="or" role="button" class="calc__radio-label">|</label>
                                <input id="or" type="radio" name="oper" value="or" class="calc__radio"/>
                            </div>
                            <div class="calc__form-item">
                                <label for="xor" role="button" class="calc__radio-label">^</label>
                                <input id="xor" type="radio" name="oper" value="xor" class="calc__radio"/>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="calc__btn">=</button>
                </form>
        </fieldset>
    </main>
    <footer class="foot">
        <?php include "timestamp.php"; ?>
    </footer>
</body>
</html>