<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>my site</title>
    <style>
        body{
            background-color: #32ff7e;
            font-family: sans-serif;
            color: #4b4b4b;
            font-size: 18px;
        }
        input{
            padding: 10px;
            font-weight: 700;
            color: #2d3436;
            box-sizing: border-box;
            width: 150px;
        }
        .container{
            width: 500px;
            margin: auto;
            text-align: center;
        }
        p{
            font-size: 15px;
            font-weight: 700;
            margin-top: 50px;
        }
        b, strong{
            display: inline-block;
            margin: 20px 0;
            color: #ff4d4d;
            font-size: 25px;
        }
        img{
            display: block;
            width: 90px;
            margin: 20px auto;
        }
        label{
            display: block;
            margin: auto;
        }
    </style>
</head>
<body>
    
        <form>
            <label>Введите год рождения: </label><br>
            <input type="text" name="date1">
            
            <input type="submit" value="вводик ">
            <input type="submit" value="возврат "><a href="https://chinesse.herokuapp.com"></a>
        </form>
        <p>
        <?php
            $name=$_GET["date1"];
            
           if (!isset($name) ||  $_GET["date1"]===""){
               echo "ну введи ты чо нить";
           }
           elseif (!is_numeric($name) ){
            echo "число";
            
            }
            else{
                $date = $name % 12 ;
            
                switch($date){
                    case (0):
                        echo '<img src="https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/10/01/0.png">
                        <br> По восточному календарю Ваше животное Обезьяна';
                        break;
                    case (1):
                        echo '<img src="https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/10/01/1.png">
                        <br> По восточному календарю Ваше животное Петух';
                        break;
                    case (2):
                        echo '<img src="https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/10/01/2.png">
                        <br> По восточному календарю Ваше животное 	Собака';
                    case (3):
                        echo '<img src="https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/10/01/3.png">
                        <br> По восточному календарю Ваше животное Свинья';
                        break;
                    case (4):
                        echo '<img src="https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/10/01/4.png">
                        <br> По восточному календарю Ваше животное  Крыса';
                        break;
                    case (5):
                        echo '<img src="https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/10/01/5.png">
                        <br> По восточному календарю Ваше животное Бык';
                        break;
                    case (6):
                        echo '<img src="https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/10/01/6.png">
                        <br> По восточному календарю Ваше животное Тигр';
                        break;
                    case (7):
                        echo '<img src="https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/10/01/7.png">
                        <br> По восточному календарю Ваше животное Кролик';
                        break;
                    case (8):
                        echo '<img src="https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/10/01/8.png">
                        <br> По восточному календарю Ваше животное Дракон';
                        break;
                    case (9):
                        echo '<img src="https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/10/01/9.png">
                        <br> По восточному календарю Ваше животное Змея';
                        break;
                    case (10):
                        echo '<img src="https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/10/01/10.png">
                        <br> По восточному календарю Ваше животное Лошадь';
                        break;
                    case (11):
                        echo '<img src="https://my.informatics.ru/media/ck_uploads/abkadirov_rr/2019/10/01/11.png">
                        <br>  По восточному календарю Ваше животное Овца';
                        break;
                    default:
                    echo " ti kto?";
                }
            }
            
            
            
            
        ?>
        
        </p>
    
</body>
</html>
