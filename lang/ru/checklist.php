﻿<?php

$string['addcomments'] = 'Добавить коментарии';

$string['additem'] = 'Добавить';
$string['additemalt'] = 'Добавить новый пункт к списку';
$string['additemhere'] = 'Вставить новый пункт после текущего';
$string['addownitems'] = 'Добавить ваши собственные пункты';
$string['addownitems-stop'] = 'Завершить добавление собственных пунктов';

$string['allowmodulelinks'] = 'Разрешить связи с модулями';

$string['anygrade'] = 'Любой';
$string['autopopulate'] = 'Показывать модули курса в контрольном списке';
$string['autopopulate_help'] = 'Это позволяет автоматически добавлять список всех ресурсов и элементов текущего курса к контрольному списку.<br />
Этот список будет обновляться в соответствии к изменениям в Вашем курсе, каждый раз, как только Вы откроете страницу \'Редактировать\' контрольного списка.<br />
Элементы в списке можна прятать, нажимая кнопку \'спрятать\' рядом с ним.<br />
Чтобы удалить автоматически добавленные элементы из списка, установите это свойство обратно в значение \'Нет\', после чего нажмите кнопку \'Удалить пункты, которые соответствуют модулю курса\' на странице \'Редактировать\'.';
$string['autoupdate'] = 'Отмечать когда модуль завершен';
$string['autoupdate_help'] = 'Это позволяет автоматически отмечать пункт Вашего контрольного списка, как только Вы выполните соответствующий элемент курса.<br />
Понятие \'Выполнено\' для элемента курса меняется в зависимости от типа элемента курса - \'просмотр\' для ресурса, \'отправить\' для теста или другого задания, \'сообщение\' для форума или \'присоединение\' для чата, и т.д.<br />
Для Moodle 2.0 отслеживание выполнения включено для разнообразных элементов курсов, что и будет использовано для отмечания пунктов в списке<br />
Для более детальной информации о том, какое состояние элемента курса рассматривается как \'выполнено\', попросите администратора Вашего сайта просмотреть содержимое файла \'mod/checklist/autoupdate.php\'<br />
Примечание: до 60 секунд может потребоваться для того, чтобы изменеия, сделанные студентом в некотором элементе курса, отобразилисьь в его контрольном списке';
$string['autoupdatenote'] = '\'Только студенты\' отметил это как автоматически обновляемое - никаких обновлений не буде показано для контрольного списка \'Преподаватели\'';

$string['autoupdatewarning_both'] = 'Пункты этого контрольного списка будут обновлены автоматически (как только студенты выполнят соответственный элемент курса). Однако, так как этот контрольный список является типом \'Студенты и преподаватели\', индикатор выполнения будет обновлен когда преподаватель подтвердит указанные оценки.';
$string['autoupdatewarning_student'] = 'Пункты этого списка будут обновлены автоматически (как только студенты выполнят соответственный элемент курса).';
$string['autoupdatewarning_teacher'] = 'Автоматическое обновление для даного контрольного списка включено, но эти отметки не будут показаны поскольку сейчас отбражаются лишь отметки \'Преподаватели\'.';

$string['canceledititem'] = 'Отменить';

$string['calendardescription'] = 'Этот пункт был добавлен контрольным списком: $a';

$string['changetextcolour'] = 'Следующий цвет текста';

$string['checkeditemsdeleted'] = 'Отмеченные пункты удалены';

$string['checklist'] = 'контрольный список';
$string['pluginadministration'] = 'Управление контрольным списком';

//TDMU: cheklist default name
$string['checklistdefaultname'] = 'Матрикул практических навыков';

$string['checklist:addinstance'] = 'Добавить новый контрольный список';
$string['checklist:edit'] = 'Создать и редактировать контрольный список';
$string['checklist:emailoncomplete'] = 'Получать е-мейл о завершении';
$string['checklist:preview'] = 'Просмотреть контрольный список';
$string['checklist:updatelocked'] = 'Обновить заблокированные контрольные отметки';
$string['checklist:updateother'] = 'Обновить контрольные отметки студентов';
$string['checklist:updateown'] = 'Обновить Ваши контрольные отметки';
$string['checklist:viewmenteereports'] = 'Просмотреть достижения подопечных (только)';
$string['checklist:viewreports'] = 'Просмотреть достижения студентов';

$string['checklistautoupdate'] = 'Позволить автоматическое обновление контрольного списка';

$string['checklistfor'] = 'Контрольный список для';

$string['checklistintro'] = 'Вступение';
$string['checklistsettings'] = 'Настройки';

$string['checks'] = 'Контрольные отметки';

//TDMU-begin classbook export strings
$string['classbookexportlnk'] = 'Експортировать журнал';
$string['classbookoredrnum'] = 'N/пр.';
$string['classbookcheckcoltitle'] = 'Дата/подпись преп.';
$string['classbooklevelmasttitle'] = 'Уровень освоения';
$string['classbookprakskilltitle'] = 'Названия практического навыка';
$string['classbookpassed'] = 'Зачёт';
$string['classbookfailed'] = 'Незачёт';
$string['classbookdoned'] = 'Выполнено';
//TDMU-end classbook export strings

$string['comments'] = 'Коментарии';

$string['completiongradehelp'] = 'Заключительная оценка не является процентом';//deprecated
$string['configallowmodulelinks'] = 'Разрешить связывать пункты контрольного спиcка с другими модулями (замедляет редактирование контрольного списка)';//deprecated

$string['completionpercentgroup'] = 'Требует проверки';
$string['completionpercent'] = 'Процент элементов, которые будут проверены:';

$string['configchecklistautoupdate'] = 'Прежде чем разрешить это, Вы должны внести некоторые изменения в код ядра Moodle. Детальные инструкции смотрите в файле mod/checklist/README.txt';
$string['configshowcompletemymoodle'] = 'Если это отключено, то выполненные контрольные списки на странице \'Мой Moodle\' будут спрятаны';
$string['configshowmymoodle'] = 'Если это отключено, то элементы курса "Контрольный список" (с индикаторами выполнения) далее не будут присутствовать на странице \'Мой Moodle\'';

$string['confirmdeleteitem'] = 'Вы действительно желаете безвозвратно удалить эти пункты контрольного списка?';

$string['deleteitem'] = 'Удалить это пункт';

$string['duedatesoncalendar'] = 'Добавить соответствующие даты в календарь';

$string['edit'] = 'Редактировать контрольный список';
$string['editchecks'] = 'Редактировать отметки';
$string['editdatesstart'] = 'Редактировать даты';
$string['editdatesstop'] = 'Закончить редактировать даты';
$string['edititem'] = 'Редактировать это пункт';

$string['emailoncomplete'] = 'Отправлять е-мейлы преподавателям когда контрольный список выполнен';
$string['emailoncomplete_help'] = 'Когда контрольный список выполнен, может быть отправлен email с подтверджениями: студентам, которые выполнили его, всем преподавателям на курсе или им обом.<br />
Администратор может управлять тем, кто будет получать эти сообщения с помощью свойства \'mod:checklist/emailoncomplete\' - по-умолчанию, все преподаватели (в том числе и без права редактрования) могут получать эти сообщения.';
$string['emailoncompletesubject'] = 'Пользователь {$a->user} выполнил контрольный список \'{$a->checklist}\'';
$string['emailoncompletesubjectown'] = 'Вы выполнили контрольный список \'{$a->checklist}\'';
$string['emailoncompletebody'] = 'Пользователь {$a->user} выполнил контрольный список \'{$a->checklist}\' в курсе \'{$a->coursename}\' 
Просмотреть контрольный список можна здесь:';
$string['emailoncompletebodyown'] = 'Вы выполнили контрольный список \'{$a->checklist}\' в курсе \'{$a->coursename}\' 
Просмотреть контрольный список можна здесь:';

$string['export'] = 'Экспортировать пункты';

$string['forceupdate'] = 'Обновить отметки для всех автоматически созданных пунктов';

$string['gradetocomplete'] = 'Оценок к завершению:';
$string['guestsno'] = 'У Вас нет прав на просмотр этого контрольного списка';

$string['headingitem'] = 'Этот пункт является заголовком и не будет иметь поля отметки впереди';

$string['import'] = 'Импортировать пункты';
$string['importfile'] = 'Выберите файл для импорта';
$string['importfromsection'] = 'Текущий раздел';
$string['importfromcourse'] = 'Весь курс';
$string['indentitem'] = 'Пункт с отступом';
$string['itemcomplete'] = 'Выполнено';
$string['items'] = 'Пункты контрольного списка';

$string['linktomodule'] = 'Связь к этому модулю';

$string['lockteachermarks'] = 'Заблокировать отметки преподавателя';
$string['lockteachermarks_help'] = 'Если этот параметр включён, как только преподаватель сохранит отметку \'Да\', он больше не сможет её изменить. Только пользователи со свойством \'mod/checklist:updatelocked\' будут иметь возможность изменить отметку.';
$string['lockteachermarkswarning'] = 'Примечание: после сохранения отметок, вы больше не сможете изменить ни одной метки \'Да\' ';

$string['modulename'] = 'Контрольный список';
$string['modulenameplural'] = 'Контрольные списки';

$string['moveitemdown'] = 'Переместить пункт вниз';
$string['moveitemup'] = 'Переместить пункт вверх';

$string['noitems'] = 'В контрольном списке нет пунктов';

$string['optionalitem'] = 'Этот пункт необязательный';
$string['optionalhide'] = 'Спрятать необязательные пункты';
$string['optionalshow'] = 'Показать необязательные пункты';

$string['percentcomplete'] = 'Обязательные пункты';
$string['percentcompleteall'] = 'Все пункты';
$string['pluginname'] = 'Контрольный список';
$string['preview'] = 'Предварительный просмотр';
$string['progress'] = 'Достижения';

$string['putchecksforvisible'] = 'Всем показанным студентам:';//@TDMU-01 title for column select control

$string['removeauto'] = 'Удалить пункты, которые соответствуют модулю курса';

$string['report'] = 'Просмотреть достижения';
$string['reporttablesummary'] = 'Таблица показывает пункты контрольного списка, выполненные каждым студентом';

$string['requireditem'] = 'Этот пункт является обязательным - он должен быть выполнен';

$string['resetchecklistprogress'] = 'Вернуть контрольный список и пользовательские пункты в начальное состояние';

$string['savechecks'] = 'Сохранить';

$string['showcompletemymoodle'] = 'Показать выполненные контрольные списки на странице \'Мій Moodle\'';
$string['showfulldetails'] = 'Показать детальную информацию';
$string['showmymoodle'] = 'Показать контрольные списки на странице \'Мій Moodle\'';
$string['showprogressbars'] = 'Показать индикатор выполнения';

$string['teachercomments'] = 'Преподаватели могут добавлять коментарии';
$string['teacherdate'] = 'Дата последнего изменения этого пункта преподавателем';

$string['teacheredit'] = 'Изменено';
$string['teacherid'] = 'Преподаватель, который последним изменял эту отметку';

$string['teachermarkundecided'] = 'Преподаватель пока не отметил это';
$string['teachermarkyes'] = 'Преподаватель утверждает, что вы завершили это';
$string['teachermarkno'] = 'Преподаватель утверждает, что вы НЕ завершили это';

$string['teachernoteditcheck'] = 'Только студенты';
$string['teacheroverwritecheck'] = 'Преподаватели';
$string['teacheralongsidecheck'] = 'Студенты и преподаватели';

//TDMU: title for teacher name field
$string['teacherwhocheckthis'] = 'Отметил';

$string['toggledates'] = 'Показать/скрыть автора и дату отметки';

$string['theme'] = 'Тема оформления контрольного списка';

$string['updatecompletescore'] = 'Сохранить окончательные отметки';
$string['unindentitem'] = 'Пункт без отступа';
$string['updateitem'] = 'Обновить';
$string['userdate'] = 'Дата последнего изменения этого пункта пользователем';
$string['useritemsallowed'] = 'Пользователь может добавлять собственные пункты';
$string['useritemsdeleted'] = 'Удален пользовательский пункт';

$string['view'] = 'Просмотреть контрольный список';
$string['viewall'] = 'Просмотреть всех студентов';
$string['viewallcancel'] = 'Отменить';
$string['viewallsave'] = 'Сохранить';

$string['viewsinglereport'] = 'Просмотреть достижения этого пользователя';
$string['viewsingleupdate'] = 'Обновить достижения этого пользователя';


$string['yesnooverride'] = 'Да, без замещения';
$string['yesoverride'] = 'Да, с замещением';

?>
