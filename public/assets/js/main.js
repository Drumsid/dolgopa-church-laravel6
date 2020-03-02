//отключаем зум колёсиком мышки
myMap.behaviors.disable('scrollZoom');

//на мобильных устройствах... (проверяем по userAgent браузера)
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
    //... отключаем перетаскивание карты
    myMap.behaviors.disable('drag');
}