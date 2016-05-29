<html lang="ru">
<!--<php
ini_set('display_errors', 1);
error_reporting(E_ALL);

echo basename(__FILE__)."<br><br>";
echo '<a href = "index.php">На главную</a>';    
-->
<head>
	<meta charset="utf-8">
        <link rel = "stylesheet" href = "css/main_style.css" >
        <link rel = "stylesheet" href = "css/cookbook.css" >
	<title>Кулинарная книга</title>    
</head>
<body>
    <div id = "wrap">
    <div id = "header">
        <div id = "topline">
            <div id = "logo"></div>
            <div id = "search"><input class="text" type="text" value="Введите слово"><input class = "button" type = "submit" value ="ПОИСК"></div>
                 <div id = "title">ДОМОВОЙ</div>
        </div>
    </div>
        <!-- Из базы должны браться названия групп продуктов,
        а затем должен формироваться список со ссылками в меню
        -->
    <div id = "leftMenu"> 
        <ul>
            <li>
                <a href = "#" class = "menuItem">Холодные закуски</a>
            </li>
            <li>
                <a href = "#" class = "menuItem">Горячие закуски</a>
            </li>
            <li>
                <a href = "#" class = "menuItem">Салаты</a>
            </li>
            <li>
                <a href = "#" class = "menuItem">Супы</a>
            </li>            
            <li>
                <a href = "#" class = "menuItem">Основные блюда</a>
            </li>                        
            <li>
                <a href = "#" class = "menuItem">Гарниры</a>
            </li>            
            <li>
                <a href = "#" class = "menuItem">Соусы и топпинги</a>
            </li>            
            <li>
                <a href = "#" class = "menuItem">Мучное и выпечка</a>
            </li>            
            <li>
                <a href = "#" class = "menuItem">Десерты</a>
            </li>            
            <li>
                <a href = "#" class = "menuItem">Безалкогольные напитки</a>
            </li>                                
        </ul>
    </div>
    
    <div id = "content">
        <div class = "recipeShort">
            <h3><a href = "#" class = "recipeName">Запечёные баклажаны</a></h3>
                <div class = "components">
                    <table>
                        <tr class = "headingRow">
                            <th class = "ingredientsCell">Ингредиенты</th>
                            <th class = "count">Количество</th>
                            <th class = "count">ККал / 100 гр</th>
                            <th class = "count">Наличие</th>                        
                        </tr>
                        <tr>
                            <td><a href = "#" class = "ingredients">Ингредиент 1</a></td>
                            <td class = "count">1000 гр</td>
                            <td class = "count">400</td>
                            <td class = "count">Нет</td>                        
                        </tr>
                        <tr>
                            <td><a href = "#" class = "ingredients">Ингредиент 2</a></td>
                            <td class = "count">700 гр</td>
                            <td class = "count">209</td>
                            <td class = "count">Есть</td>                        
                        </tr>
                        <tr>
                            <td><a href = "#" class = "ingredients">Ингредиент 3</a></td>
                            <td class = "count">500 гр</td>
                            <td class = "count">120</td>
                            <td class = "count">Есть</td>                        
                        </tr>
                        <tr>
                            <td><a href = "#" class = "ingredients">Ингредиент 4</a></td>
                            <td class = "count">300 гр</td>
                            <td class = "count">60</td>
                            <td class = "count">Есть</td>
                        </tr>
                        <tr>
                            <td><a href = "#" class = "ingredients">Ингредиент 5</a></td>
                            <td class = "count">200 гр</td>
                            <td class = "count">20</td>
                            <td class = "count">Нет</td>
                        </tr> 
                        <tr>
                            <td>Итого</td>
                            <td class = "count">1400 гр</td>
                            <td class = "count">120</td>
                            <td class = "count">3/5</td>                        
                        </tr>
                        <tr class="headingRow">
                            <th colspan = "4">Из указанного количества получается:</th>
                        </tr>
                        <tr>
                            <td>Масса порции:</td> 
                            <td colspan = "3">450 гр</td>
                        </tr>
                        <tr>
                            <td>Калорийность порции:</td>
                            <td colspan = "3">450 ККал</td>
                        </tr>
                        <tr>
                            <td>Количество порций:</td>
                            <td colspan = "3">5 шт</td>
                        </tr>
                    </table>   
                </div>
                <div class = "decription">
                    <ol>
                        <li class = "steps">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </li>
                        <li class = "steps">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </li>
                        <li class = "steps">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </li>
                    </ol>
                </div>
                <div class = "controlPanel">
                    <input class ="recipeButton" type = "submit" value = "Пополнить список"/>
                    <input class ="recipeButton" type = "submit" value = "Добавить в меню"/>
                    <input class ="recipeButton" type = "submit" value = "Читать весь рецепт"/>
                </div>
        </div>
        <div class = "recipeShort">
                <h3><a href = "#" class = "recipeName">Фаршированные баклажаны</a></h3>
                <div class = "components">
                    <table>
                        <tr class = "headingRow">
                            <th class = "ingredientsCell">Ингредиенты</th>
                            <th class = "count">Количество</th>
                            <th class = "count">ККал / 100 гр</th>
                            <th class = "count">Наличие</th>                        
                        </tr>
                        <tr>
                            <td><a href = "#" class = "ingredients">Ингредиент 1</a></td>
                            <td class = "count">1000 гр</td>
                            <td class = "count">400</td>
                            <td class = "count">Нет</td>                        
                        </tr>
                        <tr>
                            <td><a href = "#" class = "ingredients">Ингредиент 2</a></td>
                            <td class = "count">700 гр</td>
                            <td class = "count">209</td>
                            <td class = "count">Есть</td>                        
                        </tr>
                        <tr>
                            <td><a href = "#" class = "ingredients">Ингредиент 3</a></td>
                            <td class = "count">500 гр</td>
                            <td class = "count">120</td>
                            <td class = "count">Есть</td>                        
                        </tr>
                        <tr>
                            <td><a href = "#" class = "ingredients">Ингредиент 4</a></td>
                            <td class = "count">300 гр</td>
                            <td class = "count">60</td>
                            <td class = "count">Есть</td>
                        </tr>
                        <tr>
                            <td><a href = "#" class = "ingredients">Ингредиент 5</a></td>
                            <td class = "count">200 гр</td>
                            <td class = "count">20</td>
                            <td class = "count">Нет</td>
                        </tr> 
                        <tr>
                            <td>Итого</td>
                            <td class = "count">1400 гр</td>
                            <td class = "count">120</td>
                            <td class = "count">3/5</td>                        
                        </tr>
                        <tr class="headingRow">
                            <th colspan = "4">Из указанного количества получается:</th>
                        </tr>
                        <tr>
                            <td>Масса порции:</td> 
                            <td colspan = "3">450 гр</td>
                        </tr>
                        <tr>
                            <td>Калорийность порции:</td>
                            <td colspan = "3">450 ККал</td>
                        </tr>
                        <tr>
                            <td>Количество порций:</td>
                            <td colspan = "3">5 шт</td>
                        </tr>
                    </table>   
                </div>
                <div class = "decription">
                    <ol>
                        <li class = "steps">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </li>
                        <li class = "steps">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </li>
                        <li class = "steps">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </li>
                    </ol>
                </div>
                <div class = "controlPanel">
                    <input class ="recipeButton" type = "submit" value = "Пополнить список"/>
                    <input class ="recipeButton" type = "submit" value = "Добавить в меню"/>
                    <input class ="recipeButton" type = "submit" value = "Читать весь рецепт"/>
                </div>
        </div>
        <div class = "recipeShort">
                <h3><a href = "#" class = "recipeName">Сырники</a></h3>
                <div class = "components">
                    <table>
                        <tr class = "headingRow">
                            <th class = "ingredientsCell">Ингредиенты</th>
                            <th class = "count">Количество</th>
                            <th class = "count">ККал / 100 гр</th>
                            <th class = "count">Наличие</th>                        
                        </tr>
                        <tr>
                            <td><a href = "#" class = "ingredients">Ингредиент 1</a></td>
                            <td class = "count">1000 гр</td>
                            <td class = "count">400</td>
                            <td class = "count">Нет</td>                        
                        </tr>
                        <tr>
                            <td><a href = "#" class = "ingredients">Ингредиент 2</a></td>
                            <td class = "count">700 гр</td>
                            <td class = "count">209</td>
                            <td class = "count">Есть</td>                        
                        </tr>
                        <tr>
                            <td><a href = "#" class = "ingredients">Ингредиент 3</a></td>
                            <td class = "count">500 гр</td>
                            <td class = "count">120</td>
                            <td class = "count">Есть</td>                        
                        </tr>
                        <tr>
                            <td><a href = "#" class = "ingredients">Ингредиент 4</a></td>
                            <td class = "count">300 гр</td>
                            <td class = "count">60</td>
                            <td class = "count">Есть</td>
                        </tr>
                        <tr>
                            <td><a href = "#" class = "ingredients">Ингредиент 5</a></td>
                            <td class = "count">200 гр</td>
                            <td class = "count">20</td>
                            <td class = "count">Нет</td>
                        </tr> 
                        <tr>
                            <td>Итого</td>
                            <td class = "count">1400 гр</td>
                            <td class = "count">120</td>
                            <td class = "count">3/5</td>                        
                        </tr>
                        <tr class="headingRow">
                            <th colspan = "4">Из указанного количества получается:</th>
                        </tr>
                        <tr>
                            <td>Масса порции:</td> 
                            <td colspan = "3">450 гр</td>
                        </tr>
                        <tr>
                            <td>Калорийность порции:</td>
                            <td colspan = "3">450 ККал</td>
                        </tr>
                        <tr>
                            <td>Количество порций:</td>
                            <td colspan = "3">5 шт</td>
                        </tr>
                    </table>   
                </div>
                <div class = "decription">
                    <ol>
                        <li class = "steps">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </li>
                        <li class = "steps">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </li>
                        <li class = "steps">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                        </li>
                    </ol>
                </div>
                <div class = "controlPanel">
                    <input class ="recipeButton" type = "submit" value = "Пополнить список"/>
                    <input class ="recipeButton" type = "submit" value = "Добавить в меню"/>
                    <input class ="recipeButton" type = "submit" value = "Читать весь рецепт"/>
                </div>
        </div>

        
<!--            
                <h3><a href = "#" class = "recipeName">Горячие бутерброды с сыром и авокадо</a></h3>

                <h3><a href = "#"class = "recipeName">Жюльен с грибами</a></h3>
                <h3><a href = "#" class = "recipeName">Жюльен с курицей</a></h3>
                <h3><a href = "#" class = "recipeName">Рулеты из бекона</a></h3>
                <h3><a href = "#" class = "recipeName">Фалафели</a></h3>
                <h3><a href = "#" class = "recipeName">Запечёные груши</a></h3>
                <h3><a href = "#" class = "recipeName">Сырные гренки</a></h3>
-->
    </div>
        
        
        
    </div>
</body>        
</html>
