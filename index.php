<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="qestion-1">
        <caption><h3>Задание 1</h3></caption>
        <table>
            <colgroup>
                <col span="2" style="background:#95b1cc">
            </colgroup>
            <thead style="background:#95b1cc">
                <tr>
                    <td>A</td>
                    <td>B</td>
                    <td>!A</td>
                    <td>A || B</td>
                    <td>A && B</td>
                    <td>A xor B</td>
                </tr>
            </thead>
            <tr>
                <td>0</td>
                <td>0</td>
                <td>
                    <?php 
                        echo !$a = 0; // 0 это false, с оператором не будет true, это 1
                    ?>
                </td>
                <td>
                    <?php $a = 0; $b = 0;
                        echo $a || $b; // а = 0 и b = 0, вернет = 0, а 0 это false или пустая строка
                    ?>
                </td>
                <td>
                    <?php $a = 0; $b = 0;
                        echo $a && $b; // т.к. а = 0 и b = 0, вернет = 0, а 0 это false или пустая строка
                    ?>
                </td>
                <td>
                    <?php $a = 0; $b = 0;
                        echo $a xor $b; // т.к. а = 0 и b = 0, вернет = 0, а 0 это false или пустая строка
                    ?>
                </td>
            </tr>
            <tr>
                <td>0</td>
                <td>1</td>
                <td>
                    <?php
                        echo !$a = 0; // 0 это false, с оператором не будет true, это 1
                    ?>
                </td>
                <td>
                    <?php $a = 0; $b = 1;
                        echo $a || $b; // а = 0 и b = 1, вернет = 1 если хоть 1 true
                    ?>
                </td>
                <td>
                    <?php $a = 0; $b = 1;
                        echo $a && $b; // 0 == false, если будет хоть 1 false, то вернет false
                    ?>
                </td>
                <td>
                <?php $a = 0; $b = 1;
                        echo $a xor $b; // вернет 1 если есть 1 true, но не оба вместе true
                    ?>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>0</td>
                <td>
                    <?php
                        echo !$a = 1; // 1 == true, не true  это false, пустая строка
                    ?>
                </td>
                <td>
                    <?php
                        $a = 1; $b = 0; echo ($a || $b); // а = 1 и b = 0, вернет = 1 если хоть 1 true
                    ?>
                </td>
                <td>
                    <?php
                        $a = 1; $b = 0; echo ($a && $b); // 0 == false, если будет хоть 1 false, то вернет false
                    ?>
                </td>
                <td>
                    <?php
                        $a = 1; $b = 0; echo ($a xor $b); // вернет 1 если есть 1 true, но не оба вместе true
                    ?>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>1</td>
                <td>
                    <?php
                        echo !$a = 1; // 1 == true, не true  это false, пустая строка
                    ?>
                </td>
                <td>
                    <?php
                        $a = 1; $b = 1; echo ($a || $b); // а = 1 и b = 1, вернет = 1 если хоть 1 true
                    ?>
                </td>
                <td>
                    <?php
                        $a = 1; $b = 1; echo ($a && $b); // вернет = 1, потому что оба true
                    ?>
                </td>
                <td>
                    <?php
                        $a = 1; $b = 1; echo ($a xor $b); // вернет пустую строку(false), т.к. оба true
                    ?>
                </td>
            </tr>
        </table>
    </div>

    <div class="qustion-2">
        
        <caption><h3>Гибкое сравнение в PHP</h3></caption>
        <table>
            <colgroup>
                <col span="1" style="background:Khaki">
            </colgroup>
            <thead style="background:Khaki">
                <tr>
                    <td></td>
                    <td>true</td>
                    <td>false</td>
                    <td>1</td>
                    <td>0</td>
                    <td>-1</td>
                    <td>"1"</td>
                    <td>null</td>
                    <td>"php"</td>
                </tr>
            </thead>
            
            <tr>
                <td>true</td>
                <td>
                    <?php echo true == true; ?>
                </td>
                <td>
                    <?php echo true == false; ?>
                </td>
                <td>
                    <?php  echo true == 1; ?>
                </td>
                <td>
                    <?php echo true == 0; ?>
                </td>
                <td>
                    <?php echo true == -1; ?>
                </td>
                <td>
                    <?php echo true == "1"; ?>
                </td>
                <td>
                    <?php echo true == null; ?>
                </td>
                <td>
                    <?php echo true == "php"; ?>
                </td>
            </tr>
            <tr>
                <td>false</td>
                <td>
                    <?php echo false == true; ?>
                </td>
                <td>
                    <?php echo false == false; ?>
                </td>
                <td>
                    <?php echo false == 1; ?>
                </td>
                <td>
                    <?php echo false == 0; ?>
                </td>
                <td>
                    <?php echo false == -1; ?>
                </td>
                <td>
                    <?php echo false == "1"; ?>
                </td>
                <td>
                    <?php echo false == null; ?>
                </td>
                <td>
                    <?php echo false == "php"; ?>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <?php echo 1 == true; ?>
                </td>
                <td>
                    <?php echo 1 == false; ?>
                </td>
                <td>
                    <?php echo 1 == 1; ?>
                </td>
                <td>
                    <?php echo 1 == 0; ?>
                </td>
                <td>
                    <?php echo 1 == -1; ?>
                </td>
                <td>
                    <?php echo 1 == "1"; ?>
                </td>
                <td>
                    <?php echo 1 == null; ?>
                </td>
                <td>
                    <?php echo 1 == "php"; ?>
                </td>
            </tr>
            <tr>
                <td>0</td>
                <td>
                    <?php echo 0 == true; ?>
                </td>
                <td>
                    <?php echo 0 == false; ?>
                </td>
                <td>
                    <?php echo 0 == 1; ?>
                </td>
                <td>
                    <?php echo 0 == 0; ?>
                </td>
                <td>
                    <?php echo 0 == -1; ?>
                </td>
                <td>
                    <?php echo 0 == "1"; ?>
                </td>
                <td>
                    <?php echo 0 == null; ?>
                </td>
                <td>
                    <?php echo 0 == "php"; ?>
                </td>
            </tr>
            <tr>
                <td>-1</td>
                <td>
                    <?php echo -1 == true; ?>
                </td>
                <td>
                    <?php echo -1 == false; ?>
                </td>
                <td>
                    <?php echo -1 == 1; ?>
                </td>
                <td>
                    <?php echo -1 == 0; ?>
                </td>
                <td>
                    <?php echo -1 == -1; ?>
                </td>
                <td>
                    <?php echo -1 == "1"; ?>
                </td>
                <td>
                    <?php echo -1 == null; ?>
                </td>
                <td>
                    <?php echo -1 == "php"; ?>
                </td>
            </tr>
            <tr>
                <td>"1"</td>
                <td>
                    <?php echo "1" == true; ?>
                </td>
                <td>
                    <?php echo "1" == false; ?>
                </td>
                <td>
                    <?php echo "1" == 1; ?>
                </td>
                <td>
                    <?php echo "1" == 0; ?>
                </td>
                <td>
                    <?php echo "1" == -1; ?>
                </td>
                <td>
                    <?php echo "1" == "1"; ?>
                </td>
                <td>
                    <?php echo "1" == null; ?>
                </td>
                <td>
                    <?php echo "1" == "php"; ?>
                </td>
            </tr>
            <tr>
                <td>null</td>
                <td>
                    <?php echo null == true; ?>
                </td>
                <td>
                    <?php echo null == false; ?>
                </td>
                <td>
                    <?php echo null == 1; ?>
                </td>
                <td>
                    <?php echo null == 0; ?>
                </td>
                <td>
                    <?php echo null == -1; ?>
                </td>
                <td>
                    <?php echo null == "1"; ?>
                </td>
                <td>
                    <?php echo null == null; ?>
                </td>
                <td>
                    <?php echo null == "php"; ?>
                </td>
            </tr>
            <tr>
                <td>"php"</td>
                <td>
                    <?php echo "php" == true; ?>
                </td>
                <td>
                    <?php echo "php" == false; ?>
                </td>
                <td>
                    <?php echo "php" == 1; ?>
                </td>
                <td>
                    <?php echo "php" == 0; ?>
                </td>
                <td>
                    <?php echo "php" == -1; ?>
                </td>
                <td>
                    <?php echo "php" == "1"; ?>
                </td>
                <td>
                    <?php echo "php" == null; ?>
                </td>
                <td>
                    <?php echo "php" == "php"; ?>
                </td>
            </tr>
        </table>
        
        <caption><h3>Жёсткое  сравнение в PHP</h3></caption>
        <table>
            <colgroup>
                <col span="1" style="background:Khaki">
            </colgroup>
            <thead style="background:Khaki">
                <tr>
                    <td></td>
                    <td>true</td>
                    <td>false</td>
                    <td>1</td>
                    <td>0</td>
                    <td>-1</td>
                    <td>"1"</td>
                    <td>null</td>
                    <td>"php"</td>
                </tr>
            </thead>
            
            <tr>
                <td>true</td>
                <td>
                    <?php echo true === true; ?>
                </td>
                <td>
                    <?php echo true === false; ?>
                </td>
                <td>
                    <?php  echo true === 1; ?>
                </td>
                <td>
                    <?php echo true === 0; ?>
                </td>
                <td>
                    <?php echo true === -1; ?>
                </td>
                <td>
                    <?php echo true === "1"; ?>
                </td>
                <td>
                    <?php echo true === null; ?>
                </td>
                <td>
                    <?php echo true === "php"; ?>
                </td>
            </tr>
            <tr>
                <td>false</td>
                <td>
                    <?php echo false === true; ?>
                </td>
                <td>
                    <?php echo false === false; ?>
                </td>
                <td>
                    <?php echo false === 1; ?>
                </td>
                <td>
                    <?php echo false === 0; ?>
                </td>
                <td>
                    <?php echo false === -1; ?>
                </td>
                <td>
                    <?php echo false === "1"; ?>
                </td>
                <td>
                    <?php echo false === null; ?>
                </td>
                <td>
                    <?php echo false === "php"; ?>
                </td>
            </tr>
            <tr>
                <td>1</td>
                <td>
                    <?php echo 1 === true; ?>
                </td>
                <td>
                    <?php echo 1 === false; ?>
                </td>
                <td>
                    <?php echo 1 === 1; ?>
                </td>
                <td>
                    <?php echo 1 === 0; ?>
                </td>
                <td>
                    <?php echo 1 === -1; ?>
                </td>
                <td>
                    <?php echo 1 === "1"; ?>
                </td>
                <td>
                    <?php echo 1 === null; ?>
                </td>
                <td>
                    <?php echo 1 === "php"; ?>
                </td>
            </tr>
            <tr>
                <td>0</td>
                <td>
                    <?php echo 0 === true; ?>
                </td>
                <td>
                    <?php echo 0 === false; ?>
                </td>
                <td>
                    <?php echo 0 === 1; ?>
                </td>
                <td>
                    <?php echo 0 === 0; ?>
                </td>
                <td>
                    <?php echo 0 === -1; ?>
                </td>
                <td>
                    <?php echo 0 === "1"; ?>
                </td>
                <td>
                    <?php echo 0 === null; ?>
                </td>
                <td>
                    <?php echo 0 === "php"; ?>
                </td>
            </tr>
            <tr>
                <td>-1</td>
                <td>
                    <?php echo -1 === true; ?>
                </td>
                <td>
                    <?php echo -1 === false; ?>
                </td>
                <td>
                    <?php echo -1 === 1; ?>
                </td>
                <td>
                    <?php echo -1 === 0; ?>
                </td>
                <td>
                    <?php echo -1 === -1; ?>
                </td>
                <td>
                    <?php echo -1 === "1"; ?>
                </td>
                <td>
                    <?php echo -1 === null; ?>
                </td>
                <td>
                    <?php echo -1 === "php"; ?>
                </td>
            </tr>
            <tr>
                <td>"1"</td>
                <td>
                    <?php echo "1" === true; ?>
                </td>
                <td>
                    <?php echo "1" === false; ?>
                </td>
                <td>
                    <?php echo "1" === 1; ?>
                </td>
                <td>
                    <?php echo "1" === 0; ?>
                </td>
                <td>
                    <?php echo "1" === -1; ?>
                </td>
                <td>
                    <?php echo "1" === "1"; ?>
                </td>
                <td>
                    <?php echo "1" === null; ?>
                </td>
                <td>
                    <?php echo "1" === "php"; ?>
                </td>
            </tr>
            <tr>
                <td>null</td>
                <td>
                    <?php echo null === true; ?>
                </td>
                <td>
                    <?php echo null === false; ?>
                </td>
                <td>
                    <?php echo null === 1; ?>
                </td>
                <td>
                    <?php echo null === 0; ?>
                </td>
                <td>
                    <?php echo null === -1; ?>
                </td>
                <td>
                    <?php echo null === "1"; ?>
                </td>
                <td>
                    <?php echo null === null; ?>
                </td>
                <td>
                    <?php echo null === "php"; ?>
                </td>
            </tr>
            <tr>
                <td>"php"</td>
                <td>
                    <?php echo "php" === true; ?>
                </td>
                <td>
                    <?php echo "php" === false; ?>
                </td>
                <td>
                    <?php echo "php" === 1; ?>
                </td>
                <td>
                    <?php echo "php" === 0; ?>
                </td>
                <td>
                    <?php echo "php" === -1; ?>
                </td>
                <td>
                    <?php echo "php" === "1"; ?>
                </td>
                <td>
                    <?php echo "php" === null; ?>
                </td>
                <td>
                    <?php echo "php" === "php"; ?>
                </td>
            </tr>
        </table>
    </div>

    <div class="conclusion">
        <span>
            При гибком сравнение, значения пытаются преобразоваться к одному типу и тогда например строка "1" будет равна числу 1 или булевому true, также как false равно 0 или null. 
        </span>
        <span>
            При жестком сравнении, сравнение идет сначала по типу потом уже по их значению.
        </span>
    </div>

</body>
</html>