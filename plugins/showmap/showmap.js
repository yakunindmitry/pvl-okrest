/*<script>  */
function on(n,c1,c2,z,desc,txt,link)
{  
	// <![CDATA[
	ymaps.ready(init);
        var myMap, 
            myPlacemark1
	;

        function init(){ 
            myMap = new ymaps.Map ("map", {
                center: [c1, c2],
                zoom: z
            }); 
           myMap.controls
           // Кнопка изменения масштаба.
           .add('zoomControl', { left: 5, top: 5 })
           // Список типов карты
           .add('typeSelector')
           // Стандартный набор кнопок
           .add('mapTools', { left: 35, top: 5 });        

            myPlacemark1 = new ymaps.Placemark([c1, c2], {
              balloonContentHeader: desc,
              balloonContentBody:' <a href="'+link+'" >'+txt+'</a>',
              balloonContentFooter: ' ',
              hintContent: desc
            });
            myMap.geoObjects.add(myPlacemark1);
        }
	// ]]></script>

	eval("document.all.text"+n+".style.display='block';");  
	eval("document.all.ontext"+n+".style.display='none';");  
	eval("document.all.offtext"+n+".style.display='inline';");  
}  

function off(n)
{  
	eval("document.all.text"+n+".style.display='none';");  
	eval("document.all.ontext"+n+".style.display='inline';");  
	eval("document.all.offtext"+n+".style.display='none';");  
}  
/*</script>*/