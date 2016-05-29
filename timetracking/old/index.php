<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="ru">
<head>
	<meta charset="utf-8">
        <link rel = "stylesheet" href = "css/main_style.css" >
	<title>Домовой</title>    
</head>
<body>
    
<div id = "wrap">
    <div id = "header">
        <div id = "topline">
            <div id = "logo"></div>
            <!--<div id = "search"><input class="text" type="text" value="Введите слово"><input class = "button" type = "submit" value ="ПОИСК"></div>-->
                 <div id = "title">ДОМОВОЙ</div>
        </div>
    </div>
    <div id = "content">
    <div class = "blockLeft">
        <div class = "blockHeader">Запиши, что ты делала прямо сейчас</div>
        <form name = "currentWork" action = "writeWork.php" method = "post">
                <table class = "inputGrid">
                    <tr>
                        <td>
                            Начала:   
                        </td>
                        <td>
                            <input type = "time" name = "start_time" value = "08:30:00">
                        </td>                        
                    </tr>
                    <tr>
                        <td>
                            Закончила:    
                        </td>
                        <td>
                            <input type = "time" name = "end_time" value = "11:00:00">    
                        </td>                        
                    </tr>                    
                    <tr>
                        <td>
                            Сделала:  
                        </td>
                        <td>
                            <textarea name = "work">Прогулка с Никитой</textarea>    
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href = "#"> Сделано за день...</a>  
                        </td>
                        <td>
                            <input type = "submit" name ="writeWork" value = "Сохранить">    
                        </td>                        
                    </tr>                        
                </table>                    
            </form>
    </div>
      
    <div class = "blockLeft">
        <div class = "blockHeader">Запиши, когда уходит и возвращается муж</div>
        <form name = "skhWorkTime" action ="workDay.php" method = "post">
                <table class = "inputGrid">
                    <tr>
                        <td>
                            Ушёл:   
                        </td>
                        <td>
                            <input type = "date" name = "startDay">
                        </td>
                        <td>
                            <input type = "time" name = "startTime">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Вернулся:   
                        </td>                        
                        <td>
                            <input type = "date" name = "endDay" value = "2016-12-12">
                        </td>
                        <td>
                            <input type = "time" name = "endTime" value = "21:00">
                        </td>
                    </tr>                    
                    <tr>
                        <td>
                            <a href = "#"> Статистика...</a>  
                        </td>
                        <td>
                            <input type = "submit" name = "sendStartTime" value = "Сохранить">    
                        </td>                        
                    </tr>
                </table>                    
            </form>
    </div>
    <div class = "blockRight">
        <div class = "blockHeader">Меню дня</div>
        <form name = "skhWorkTime" action ="workDay.php" method = "post">
                <table class = "inputGrid">
                    <tr>
                        <td>
                            Завтрак  
                        </td>
                    </tr>
                    <tr>
                        <td>
                          Овсяная каша с орехами и вареньем
                        </td>
                    </tr>
                    <tr>
                        <td>
                           Чай
                        </td>                        
                    </tr>
                     <tr>
                        <td>
                            Ланч   
                        </td>
                    </tr>
                    <tr>
                        <td>
                           Бутерброд с курицей, соусом и зеленью
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Сельдерей
                        </td>                              
                    </tr>
                    <tr>
                        <td>
                            Томатный сок
                        </td>                         
                    </tr>
                    <tr>
                        <td>
                            Обед   
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Сливочный суп с брокколи
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Салат
                        </td>  
                    </tr>
                    <tr>
                        <td>
                            Куриная грудка с гречкой
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Чай
                        </td>                        
                    </tr>
                    <tr>
                        <td>
                            Полдник   
                        </td>
                    <tr>
                        <td>
                            Банан
                        </td>
                    </tr>
                    <tr>
                        <td>
                           Орехи
                        </td>                              
                    </tr>
                    <tr>
                        <td>
                            Ужин   
                        </td>
                    </tr>    
                    <tr>    
                        <td>
                            Запечёная рыба
                        </td>
                    </tr>    
                    <tr>    
                        <td>
                            Салат из капусты
                        </td>
                    </tr>    
                    <tr>    
                        <td>
                            Морс из ягод
                        </td>                        
                    </tr>
                </table>                    
            </form>
    </div> 
    </div>        
    <div id = "footer">
        <p>Хомякова С.М.</p>
        <p>Апрель 2016</p>
    </div>
</div>
<script src ="scripts/husbandWorkTime.js"></script>
</body>
</html>
