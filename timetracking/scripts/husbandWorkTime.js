/*Скрипт обслуживает форму для записи времени прихода/ухода СХ*/
var dt = new Date();
//добавляет ноль к значениям от 0 до 9
function addZeroBeforeNumber(variable)
{
    if(variable < 10)
    {
        variable = '0'+variable;
    }
    return variable;
}
// Возвращает строку с текущей датой (день, месяц, год) без обновления даты
function composeCurrentDate(date)
{
    var day = date.getDate();
    day = addZeroBeforeNumber(day);
    var month = date.getMonth()+1;
    month = addZeroBeforeNumber(month);
    var year = date.getFullYear();
    var currentDate = year+'-'+month+'-'+day;
    return currentDate;
}
// Возвращает строку с текущим временем (часы имнуты) без автообновления времени
function composeCurrentTime(time)
{
    var minutes = time.getMinutes();
    minutes = addZeroBeforeNumber(minutes);
    var hour = time.getHours();
    hour = addZeroBeforeNumber(hour);
    var currentTime = hour+':'+minutes;
    return currentTime; 
}

//Получаем нужную форму
var form = document.forms.skhWorkTime;
form.elements.startDay.value = composeCurrentDate(dt);
form.elements.endDay.value = composeCurrentDate(dt);
form.elements.startTime.value = composeCurrentTime(dt);
form.elements.endTime.value = composeCurrentTime(dt);

