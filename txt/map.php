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
           // ������ ��������� ��������.
           .add('zoomControl', { left: 5, top: 5 })
           // ������ ����� �����
           .add('typeSelector')
           // ����������� ����� ������
           .add('mapTools', { left: 35, top: 5 });        

            myPlacemark1 = new ymaps.Placemark([55.913, 43.084], {
              balloonContentHeader: '�������',
              balloonContentBody:' <a href="index.php/yug-pavlova/laptevo" > ���� ������� � ������������</a>',
              balloonContentFooter: ' ',
              hintContent: '�������'
            });
            myPlacemark2 = new ymaps.Placemark([55.899, 43.138], {
              balloonContentHeader: '�������',
              balloonContentBody:' <a href="index.php/yug-pavlova/yarymovo-zima" > ���� ������� � ������������</a>',
              balloonContentFooter: ' ',
              hintContent: '�������'
            });
            myPlacemark3 = new ymaps.Placemark([55.964, 43.055], {
              balloonContentHeader: '����� ���',
              balloonContentBody:' <a href="index.php/pavlovo/pavlovo-razliv" > ���� ������� (������)</a>',
              balloonContentFooter: ' ',
              hintContent: '����� ���'
            });
            myPlacemark4 = new ymaps.Placemark([55.902, 43.054], {
              balloonContentHeader: '�������',
              balloonContentBody:' <a href="index.php/yug-pavlova/laptevo/detkovo" > ���� �������</a>',
              balloonContentFooter: ' ',
              hintContent: '�������'
            });
            myPlacemark5 = new ymaps.Placemark([55.8962, 43.0826], {
              balloonContentHeader: '������ "�������"',
              balloonContentBody:' <a href="index.php/yug-pavlova/rodnik-u-laptevo" > ���� �������</a>',
              balloonContentFooter: ' ',
              hintContent: '������ "�������"'
            });
            myPlacemark6 = new ymaps.Placemark([55.9747, 42.9213], {
              balloonContentHeader: '��� � ���������',
              balloonContentBody:' <a href="index.php/sever-pavlova/oka-u-shcherbinina" > ���� ��� � ���������</a>',
              balloonContentFooter: ' ',
              hintContent: '��� � ���������'
            });
            myPlacemark7 = new ymaps.Placemark([56.005, 42.919], {
              balloonContentHeader: '��� � �.��������',
              balloonContentBody:' <a href="index.php/sever-pavlova/les-u-o-kustorka" > ���� ����</a>',
              balloonContentFooter: ' ',
              hintContent: '��� � �.��������'
            });
            myPlacemark8 = new ymaps.Placemark([55.873, 43.087], {
              balloonContentHeader: '������� � ��������',
              balloonContentBody:' <a href="index.php/ozera/provaly-u-cherneeva" > ���� ����</a>',
              balloonContentFooter: ' ',
              hintContent: '������� � ��������'
            });
            myPlacemark9 = new ymaps.Placemark([55.9906, 43.2934], {
              balloonContentHeader: '�������-�������� ���������',
              balloonContentBody:' <a href="index.php/24-ostrovo-ezerskij-monastyr" > ���� ���������</a>',
              balloonContentFooter: ' ',
              hintContent: '�������-�������� ���������'
            });
            myPlacemark10 = new ymaps.Placemark([56.016, 42.932], {
              balloonContentHeader: '��� � �.�����',
              balloonContentBody:' <a href="index.php/sever-pavlova/les-u-o-svyato" > ���� ����</a>',
              balloonContentFooter: ' ',
              hintContent: '��� � �.�����'
            });
            myPlacemark11 = new ymaps.Placemark([56.019, 42.962], {
              balloonContentHeader: '����� �����',
              balloonContentBody:' <a href="index.php/ozera/ozero-svyato-tumbotinskoe" > ���� �����</a>',
              balloonContentFooter: ' ',
              hintContent: '����� �����'
            });
            myPlacemark12 = new ymaps.Placemark([55.569, 43.125], {
              balloonContentHeader: '��� � �������',
              balloonContentBody:' <a href="index.php/yug-pavlova/les-zalese" > ���� ����</a>',
              balloonContentFooter: ' ',
              hintContent: '��� � �������'
            });
            myPlacemark13 = new ymaps.Placemark([55.756, 42.937], {
              balloonContentHeader: '��� � ������',
              balloonContentBody:' <a href="index.php/yug-pavlova/les-panino" > ���� ����</a>',
              balloonContentFooter: ' ',
              hintContent: '��� � ������'
            });
            myPlacemark14 = new ymaps.Placemark([55.963, 43.052], {
              balloonContentHeader: '������� �����',
              balloonContentBody:' <a href="index.php/pavlovo/dalnyaya-krucha" > ���� ���</a>',
              balloonContentFooter: ' ',
              hintContent: '������� �����'
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


          