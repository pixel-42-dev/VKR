// function init() {
//     let map = new ymaps.Map('map', {
//         center: [53.249236, 34.342387],
//         zoom: 17,
//     });
// }
//
// ymaps.ready(init)

ymaps.ready(init);

function init() {
    var map = new ymaps.Map('map', {
        center: [53.249236, 34.342387],
        zoom: 17
    });

    var placemark;

    map.events.add('click', function (e) {
        var coords = e.get('coords');

        if (placemark) {
            placemark.geometry.setCoordinates(coords);
        } else {
            placemark = createPlacemark(coords);
            map.geoObjects.add(placemark);
        }

        getAddress(coords);
    });

    function createPlacemark(coords) {
        return new ymaps.Placemark(coords, {
            iconCaption: 'поиск...'
        }, {
            preset: 'islands#violetDotIconWithCaption',
            draggable: true
        });
    }

    function getAddress(coords) {
        placemark.properties.set('iconCaption', 'поиск...');
        ymaps.geocode(coords).then(function (res) {
            var firstGeoObject = res.geoObjects.get(0);
            var address = firstGeoObject.getAddressLine();
            placemark.properties.set({
                iconCaption: address,
                balloonContent: address
            });
            document.getElementById('inputAddress').value = address;
        });
    }
}
