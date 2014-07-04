<p>
<script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&amp;lang=ru-RU"></script>
<script type="text/javascript" src="http://yandex.st/jquery/1.6.4/jquery.min.js"></script>
<script type="text/javascript">// <![CDATA[
ymaps.ready(init);
        var myMap, 
            myPlacemark1,
            myPlacemark2,
            myPlacemark3,
            myPlacemark4,
            myPlacemark5,
            myPlacemark6,
            myPlacemark7,
            myPlacemark8,
            myPlacemark9,
            myPlacemark10,
            myPlacemark11,
            myPlacemark12,
            myPlacemark13,
            myPlacemark14
;

        function init(){ 
            myMap = new ymaps.Map ("map", {
                center: [55.895, 43.08],
                zoom: 12
            }); 
           myMap.controls
           // Кнопка изменения масштаба.
           .add('zoomControl', { left: 5, top: 5 })
           // Список типов карты
           .add('typeSelector')
           // Стандартный набор кнопок
           .add('mapTools', { left: 35, top: 5 });        

            myPlacemark1 = new ymaps.Placemark([55.913, 43.084], {
              balloonContentHeader: 'Лаптево',
              balloonContentBody:' <a href="index.php/yug-pavlova/laptevo" > Фото Лаптево и окрестностей</a>',
              balloonContentFooter: ' ',
              hintContent: 'Лаптево'
            });
            myPlacemark2 = new ymaps.Placemark([55.899, 43.138], {
              balloonContentHeader: 'Ярымово',
              balloonContentBody:' <a href="index.php/yug-pavlova/yarymovo-zima" > Фото Ярымово и окрестностей</a>',
              balloonContentFooter: ' ',
              hintContent: 'Ярымово'
            });
            myPlacemark3 = new ymaps.Placemark([55.964, 43.055], {
              balloonContentHeader: 'Берег Оки',
              balloonContentBody:' <a href="index.php/pavlovo/pavlovo-razliv" > Фото Павлово (разлив)</a>',
              balloonContentFooter: ' ',
              hintContent: 'Берег Оки'
            });
            myPlacemark4 = new ymaps.Placemark([55.902, 43.054], {
              balloonContentHeader: 'Детково',
              balloonContentBody:' <a href="index.php/yug-pavlova/laptevo/detkovo" > Фото Детково</a>',
              balloonContentFooter: ' ',
              hintContent: 'Детково'
            });
            myPlacemark5 = new ymaps.Placemark([55.8962, 43.0826], {
              balloonContentHeader: 'Родник "Рябинки"',
              balloonContentBody:' <a href="index.php/yug-pavlova/rodnik-u-laptevo" > Фото родника</a>',
              balloonContentFooter: ' ',
              hintContent: 'Родник "Рябинки"'
            });
            myPlacemark6 = new ymaps.Placemark([55.9747, 42.9213], {
              balloonContentHeader: 'Ока у Щербинина',
              balloonContentBody:' <a href="index.php/sever-pavlova/oka-u-shcherbinina" > Фото Ока у Щербинина</a>',
              balloonContentFooter: ' ',
              hintContent: 'Ока у Щербинина'
            });
            myPlacemark7 = new ymaps.Placemark([56.005, 42.919], {
              balloonContentHeader: 'Лес у о.Кусторка',
              balloonContentBody:' <a href="index.php/sever-pavlova/les-u-o-kustorka" > Фото леса</a>',
              balloonContentFooter: ' ',
              hintContent: 'Лес у о.Кусторка'
            });
            myPlacemark8 = new ymaps.Placemark([55.873, 43.087], {
              balloonContentHeader: 'Провалы у Чернеева',
              balloonContentBody:' <a href="index.php/ozera/provaly-u-cherneeva" > Фото озер</a>',
              balloonContentFooter: ' ',
              hintContent: 'Провалы у Чернеева'
            });
            myPlacemark9 = new ymaps.Placemark([55.9906, 43.2934], {
              balloonContentHeader: 'Острово-Езерский монастырь',
              balloonContentBody:' <a href="index.php/24-ostrovo-ezerskij-monastyr" > Фото монастыря</a>',
              balloonContentFooter: ' ',
              hintContent: 'Острово-Езерский монастырь'
            });
            myPlacemark10 = new ymaps.Placemark([56.016, 42.932], {
              balloonContentHeader: 'Лес у о.Свято',
              balloonContentBody:' <a href="index.php/sever-pavlova/les-u-o-svyato" > Фото леса</a>',
              balloonContentFooter: ' ',
              hintContent: 'Лес у о.Свято'
            });
            myPlacemark11 = new ymaps.Placemark([56.019, 42.962], {
              balloonContentHeader: 'озеро Свято',
              balloonContentBody:' <a href="index.php/ozera/ozero-svyato-tumbotinskoe" > Фото озера</a>',
              balloonContentFooter: ' ',
              hintContent: 'озеро Свято'
            });
            myPlacemark12 = new ymaps.Placemark([55.569, 43.125], {
              balloonContentHeader: 'лес у Залесья',
              balloonContentBody:' <a href="index.php/yug-pavlova/les-zalese" > Фото леса</a>',
              balloonContentFooter: ' ',
              hintContent: 'лес у Залесья'
            });
            myPlacemark13 = new ymaps.Placemark([55.756, 42.937], {
              balloonContentHeader: 'лес у Панина',
              balloonContentBody:' <a href="index.php/yug-pavlova/les-panino" > Фото леса</a>',
              balloonContentFooter: ' ',
              hintContent: 'лес у Панина'
            });
            myPlacemark14 = new ymaps.Placemark([55.963, 43.052], {
              balloonContentHeader: 'Дальняя круча',
              balloonContentBody:' <a href="index.php/pavlovo/dalnyaya-krucha" > Фото Оки</a>',
              balloonContentFooter: ' ',
              hintContent: 'Дальняя круча'
            });
            
            myMap.geoObjects.add(myPlacemark1);
            myMap.geoObjects.add(myPlacemark2);
            myMap.geoObjects.add(myPlacemark3);
            myMap.geoObjects.add(myPlacemark4);
            myMap.geoObjects.add(myPlacemark5);
            myMap.geoObjects.add(myPlacemark6);
            myMap.geoObjects.add(myPlacemark7);
            myMap.geoObjects.add(myPlacemark8);
            myMap.geoObjects.add(myPlacemark9);
            myMap.geoObjects.add(myPlacemark10);
            myMap.geoObjects.add(myPlacemark11);
            myMap.geoObjects.add(myPlacemark12);
            myMap.geoObjects.add(myPlacemark13);
            myMap.geoObjects.add(myPlacemark14);
        }
// ]]></script>

<div id="map" style="width: 710px; height: 700px;"> </div>          


          