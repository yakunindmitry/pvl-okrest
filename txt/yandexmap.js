/*<script type="text/javascript">*/

// <![CDATA[
ymaps.ready(init);
        var myMap, 
            myPlacemark1
;

        function init(){ 
            myMap = new ymaps.Map ("map", {
                center: [55.873, 43.087],
                zoom: 12
            }); 
           myMap.controls
           // ������ ��������� ��������.
           .add('zoomControl', { left: 5, top: 5 })
           // ������ ����� �����
           .add('typeSelector')
           // ����������� ����� ������
           .add('mapTools', { left: 35, top: 5 });        

            myPlacemark1 = new ymaps.Placemark([55.873, 43.087], {
              balloonContentHeader: '������� � ��������',
              balloonContentBody:' <a href="index.php/ozera/provaly-u-cherneeva" > ���� ����</a>',
              balloonContentFooter: ' ',
              hintContent: '������� � ��������'
            });
            myMap.geoObjects.add(myPlacemark1);
        }
// ]]></script>

/*<script>  */