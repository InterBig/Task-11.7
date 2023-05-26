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
    <header>
        <div>
            <h1>Модуль 11. Старт в PHP</h1>
            <h2>11.7. Практическая работа</h2>
        </div>
    </header>
    <div>
        <section class="Task"> 
            <article>
                <p>Таблицы истинности и сравнения.
                </p>
            </article>
        </section>
    </div>

    <section>
        <table>
            <thead>
                <tr >
                    <th colspan="6">Задание 1. Таблица истинности PHP</th>
                </tr>
                <tr>
                    <th><strong>A</strong></th>
                    <th><strong>B</strong></th>
                    <th><strong>!A</strong></th>
                    <th><strong>A || B</strong></th>
                    <th><strong>A &amp;&amp; B</strong></th> 
                    <th><strong>A xor B</strong></th>
                </tr>
            </thead>
            <tr> 
                <?php
                    /*переменные первой строки*/
                    $a=0;
                    $b=0;
                ?>
                <td><?=$a;?></td>
                <td><?=$b;?></td>
                <td><?=(int)!$a;?></td> 
                <td><?=(int)($a || $b);?></td>
                <td><?=(int)($a && $b);?></td>
                <td><?=(int)($a xor $b);?></td>
            </tr>
            <tr> 
                <?php
                    /*переменные второйй строки*/
                    $a=0;
                    $b=1;
                ?>
                <td><?=$a;?></td>
                <td><?=$b;?></td>
                <td><?=(int)!$a;?></td> 
                <td><?=(int)($a || $b);?></td>
                <td><?=(int)($a && $b);?></td>
                <td><?=(int)($a xor $b);?></td>
            </tr>
            <tr> 
                <?php
                    /*переменные третей строки*/
                    $a=1;
                    $b=0;
                ?>
                <td><?=$a;?></td>
                <td><?=$b;?></td>
                <td><?=(int)!$a;?></td> 
                <td><?=(int)($a || $b);?></td>
                <td><?=(int)($a && $b);?></td>
                <td><?=(int)($a xor $b);?></td>
            </tr>
            <tr> 
                <?php
                    /*переменные четвертой строки*/
                  $a=1;
                    $b=1;
                ?>
                <td><?=$a;?></td>
                <td><?=$b;?></td>
                <td><?=(int)!$a;?></td> 
                <td><?=(int)($a || $b);?></td>
                <td><?=(int)($a && $b);?></td>
                <td><?=(int)($a xor $b);?></td>
            </tr>

        </table>
    </section>

    <br>

    <section>
        <table>
            <thead>
                <tr >
                    <th colspan="9">Задание 2. Гибкое сравнение == в PHP</th>
                </tr>
                <tr>
                    <th> </th>
                    <th><strong>true</strong></th>
                    <th><strong>false</strong></th>
                    <th><strong>1</strong></th>
                    <th><strong>0</strong></th>
                    <th><strong>-1</strong></th> 
                    <th><strong>"1"</strong></th>
                    <th><strong>null</strong></th>
                    <th><strong>"php"</strong></th>
                </tr>
            </thead>

            <tr> 
                <?php
                    /*переменные первой строки*/
                    $a=true;
                ?>
                <td><strong><?=var_export($a);?></strong></td>
                <td><?=var_export($a==true);?></td>
                <td><?=var_export($a==false);?></td> 
                <td><?=var_export($a==1);?></td>
                <td><?=var_export($a==0);?></td>
                <td><?=var_export($a==-1);?></td>
                <td><?=var_export($a=="1");?></td>
                <td><?=var_export($a==null);?></td>
                <td><?=var_export($a=="php");?></td>
            </tr>
            <tr> 
                <?php
                    /*переменные 2 строки*/
                    $a=false;
                ?>
                <td><strong><?=var_export($a);?></strong></td>
                <td><?=var_export($a==true);?></td>
                <td><?=var_export($a==false);?></td> 
                <td><?=var_export($a==1);?></td>
                <td><?=var_export($a==0);?></td>
                <td><?=var_export($a==-1);?></td>
                <td><?=var_export($a=="1");?></td>
                <td><?=var_export($a==null);?></td>
                <td><?=var_export($a=="php");?></td>
            </tr>
            <tr> 
                <?php
                    /*переменные 3 строки*/
                    $a=1;
                ?>
                <td><strong><?=var_export($a);?></strong></td>
                <td><?=var_export($a==true);?></td>
                <td><?=var_export($a==false);?></td> 
                <td><?=var_export($a==1);?></td>
                <td><?=var_export($a==0);?></td>
                <td><?=var_export($a==-1);?></td>
                <td><?=var_export($a=="1");?></td>
                <td><?=var_export($a==null);?></td>
                <td><?=var_export($a=="php");?></td>
            </tr>
            <tr> 
                <?php
                    /*переменные 4 строки*/
                    $a=0;
                ?>
                <td><strong><?=var_export($a);?></strong></td>
                <td><?=var_export($a==true);?></td>
                <td><?=var_export($a==false);?></td> 
                <td><?=var_export($a==1);?></td>
                <td><?=var_export($a==0);?></td>
                <td><?=var_export($a==-1);?></td>
                <td><?=var_export($a=="1");?></td>
                <td><?=var_export($a==null);?></td>
                <td><?=var_export($a=="php");?></td>
            </tr>
            <tr> 
                <?php
                    /*переменные 5 строки*/
                    $a=-1;
                ?>
                <td><strong><?=var_export($a);?></strong></td>
                <td><?=var_export($a==true);?></td>
                <td><?=var_export($a==false);?></td> 
                <td><?=var_export($a==1);?></td>
                <td><?=var_export($a==0);?></td>
                <td><?=var_export($a==-1);?></td>
                <td><?=var_export($a=="1");?></td>
                <td><?=var_export($a==null);?></td>
                <td><?=var_export($a=="php");?></td>
            </tr>
            <tr> 
                <?php
                    /*переменные 6 строки*/
                    $a="1";
                ?>
                <td><strong><?=var_export($a);?></strong></td>
                <td><?=var_export($a==true);?></td>
                <td><?=var_export($a==false);?></td> 
                <td><?=var_export($a==1);?></td>
                <td><?=var_export($a==0);?></td>
                <td><?=var_export($a==-1);?></td>
                <td><?=var_export($a=="1");?></td>
                <td><?=var_export($a==null);?></td>
                <td><?=var_export($a=="php");?></td>
            </tr>
            <tr> 
                <?php
                    /*переменные 7 строки*/
                    $a=null;
                ?>
                <td><strong><?=var_export($a);?></strong></td>
                <td><?=var_export($a==true);?></td>
                <td><?=var_export($a==false);?></td> 
                <td><?=var_export($a==1);?></td>
                <td><?=var_export($a==0);?></td>
                <td><?=var_export($a==-1);?></td>
                <td><?=var_export($a=="1");?></td>
                <td><?=var_export($a==null);?></td>
                <td><?=var_export($a=="php");?></td>
            </tr>
            <tr> 
                <?php
                /*переменные 8 строки*/
                 $a="php";
                ?>
                <td><strong><?=var_export($a);?></strong></td>
                <td><?=var_export($a==true);?></td>
                <td><?=var_export($a==false);?></td> 
                <td><?=var_export($a==1);?></td>
                <td><?=var_export($a==0);?></td>
                <td><?=var_export($a==-1);?></td>
                <td><?=var_export($a=="1");?></td>
                <td><?=var_export($a==null);?></td>
                <td><?=var_export($a=="php");?></td>
            </tr>
        </table>
    </section>

    <br>

    <section>
        <table>
            <thead>
                <tr >
                    <th colspan="9">Задание 3. Жесткое сравнение === в PHP</th>
                </tr>
                <tr>
                    <th> </th>
                    <th><strong>true</strong></th>
                    <th><strong>false</strong></th>
                    <th><strong>1</strong></th>
                    <th><strong>0</strong></th>
                    <th><strong>-1</strong></th> 
                    <th><strong>"1"</strong></th>
                    <th><strong>null</strong></th>
                    <th><strong>"php"</strong></th>
                </tr>
            </thead>

            <tr> 
                <?php
                    /*переменные первой строки*/
                    $a=true;
                ?>
                <td><strong><?=var_export($a);?></strong></td>
                <td><?=var_export($a===true);?></td>
                <td><?=var_export($a===false);?></td> 
                <td><?=var_export($a===1);?></td>
                <td><?=var_export($a===0);?></td>
                <td><?=var_export($a===-1);?></td>
                <td><?=var_export($a==="1");?></td>
                <td><?=var_export($a===null);?></td>
                <td><?=var_export($a==="php");?></td>
            </tr>
            <tr> 
                <?php
                    /*переменные 2 строки*/
                    $a=false;
                ?>
                <td><strong><?=var_export($a);?></strong></td>
                <td><?=var_export($a===true);?></td>
                <td><?=var_export($a===false);?></td> 
                <td><?=var_export($a===1);?></td>
                <td><?=var_export($a===0);?></td>
                <td><?=var_export($a===-1);?></td>
                <td><?=var_export($a==="1");?></td>
                <td><?=var_export($a===null);?></td>
                <td><?=var_export($a==="php");?></td>
            </tr>
            <tr> 
                <?php
                    /*переменные 3 строки*/
                    $a=1;
                ?>
                <td><strong><?=var_export($a);?></strong></td>
                <td><?=var_export($a===true);?></td>
                <td><?=var_export($a===false);?></td> 
                <td><?=var_export($a===1);?></td>
                <td><?=var_export($a===0);?></td>
                <td><?=var_export($a===-1);?></td>
                <td><?=var_export($a==="1");?></td>
                <td><?=var_export($a===null);?></td>
                <td><?=var_export($a==="php");?></td>
            </tr>
            <tr> 
                <?php
                    /*переменные 4 строки*/
                    $a=0;
                ?>
                <td><strong><?=var_export($a);?></strong></td>
                <td><?=var_export($a===true);?></td>
                <td><?=var_export($a===false);?></td> 
                <td><?=var_export($a===1);?></td>
                <td><?=var_export($a===0);?></td>
                <td><?=var_export($a===-1);?></td>
                <td><?=var_export($a==="1");?></td>
                <td><?=var_export($a===null);?></td>
                <td><?=var_export($a==="php");?></td>
            </tr>
            <tr> 
                <?php
                    /*переменные 5 строки*/
                    $a=-1;
                ?>
                <td><strong><?=var_export($a);?></strong></td>
                <td><?=var_export($a===true);?></td>
                <td><?=var_export($a===false);?></td> 
                <td><?=var_export($a===1);?></td>
                <td><?=var_export($a===0);?></td>
                <td><?=var_export($a===-1);?></td>
                <td><?=var_export($a==="1");?></td>
                <td><?=var_export($a===null);?></td>
                <td><?=var_export($a==="php");?></td>
            </tr>
            <tr> 
                <?php
                    /*переменные 6 строки*/
                    $a="1";
                ?>
                <td><strong><?=var_export($a);?></strong></td>
                <td><?=var_export($a===true);?></td>
                <td><?=var_export($a===false);?></td> 
                <td><?=var_export($a===1);?></td>
                <td><?=var_export($a===0);?></td>
                <td><?=var_export($a===-1);?></td>
                <td><?=var_export($a==="1");?></td>
                <td><?=var_export($a===null);?></td>
                <td><?=var_export($a==="php");?></td>
            </tr>
            <tr> 
                <?php
                    /*переменные 7 строки*/
                    $a=null;
                ?>
                <td><strong><?=var_export($a);?></strong></td>
                <td><?=var_export($a===true);?></td>
                <td><?=var_export($a===false);?></td> 
                <td><?=var_export($a===1);?></td>
                <td><?=var_export($a===0);?></td>
                <td><?=var_export($a===-1);?></td>
                <td><?=var_export($a==="1");?></td>
                <td><?=var_export($a===null);?></td>
                <td><?=var_export($a==="php");?></td>
            </tr>
            <tr> 
                <?php
                    /*переменные 8 строки*/
                    $a="php";
                ?>
                <td><strong><?=var_export($a);?></strong></td>
                <td><?=var_export($a===true);?></td>
                <td><?=var_export($a===false);?></td> 
                <td><?=var_export($a===1);?></td>
                <td><?=var_export($a===0);?></td>
                <td><?=var_export($a===-1);?></td>
                <td><?=var_export($a==="1");?></td>
                <td><?=var_export($a===null);?></td>
                <td><?=var_export($a==="php");?></td>
            </tr>
        

        </table>
    </section>

    <section>
    <div>
      <h2><strong> Вывод о сравнении в PHP:</strong></h2>
      <p>1) При гибком сравнении, значения сравниваются без учёта их типа</p>
      <p>
        2) При жёстком сравнении, сравниваются не только значения, но и их тип
      </p>
    </div>
    </section>   
</body>
</html>