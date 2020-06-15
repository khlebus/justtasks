# justtasks
Задания
Напишите аналог функции array_flip на JavaScript (ключи и значения меняются местами).

Есть страница http://a.ru/1.php, которая содержит textarea с идентификатором id1. Напишите для этой страницы JavaScript-код, который по клику на эту textarea вставляет в нее содержимое страницы http://a.ru/1.txt. Можно использовать jquery-функции.

Напишите html+css+js страницу, содержащую поле ввода типа textarea, которое “убегает” от мышки, то есть перемещается в любое другое место при наведении на него курсора мыши. Можно использовать jquery-функции.

Есть php-класс A, напишите его функцию f($a), которая вызывает другую его функцию, название которой передано в виде строкового аргумента $a, а если такой функции в классе нет - выводит слово “error”.

Напишите код на php, который выводит содержимое таблицы БД в виде HTML-таблицы. В примере можно использовать любой тип СУБД и любые известные библиотеки и фреймворки для обращения к БД.

Доработайте код предыдущего примера, чтобы отображалось объединение двух таблиц (набор столбцов в результате объединения полей таблиц), связанных внешними ключами.

Напишите код html-страницы, на которую можно drag-and-drop-нуть json-файл. Сразу после drag-and-drop-а этот json файл должен быть отправлен на сервер, там средствами PHP разобран, и на его основе должен быть создан вложенный html-список, который должен быть отправлен обратно и вставлен в качестве содержимого страницы.

Тест для проверки владения control-ами (кнопки, закладки, диалоговые окна, разделители).
Требуется написать html+css+js код страницы, разделенной на три части (div-а): слева панель на всю высоту страницы и 30% ширины, справа две горизонтальные части на 70% ширины и 50% высоты.
Пользователю должна быть доступна возможность изменения ширины левой части и высоты верхней/нижней путем перетаскивания границ вправо/влево и вверх/вниз соответственно (использовать control splitter).
На всю ширину и высоту нижней части должен быть развернут контрол с двумя закладками (использовать control tabs) с названиями “один”, “два”).
При переключении на закладку “один” должен открываться элемент textarea, редактирование которого приводит к изменению содержимого div-а левой части.
При переключении на закладку “два” должен открываться элемент textarea, редактирование которого приводит к изменению содержимого div-а верхней части страницы.
Допустимо использовать jquery-ui или любые другие известные JS-библиотеки, реализующие splitter-ы и tabber-ы.
