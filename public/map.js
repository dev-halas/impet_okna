let map;

function initMap() {
    const centerMap = { lat: 51.68590926424119, lng: 17.468438128835892 };
    const map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,
        center: centerMap,
        disableDefaultUI: true,
        styles: [
            {
                featureType: 'administrative',
                elementType: 'all',
                stylers: [
                    {
                        saturation: '-100',
                    },
                ],
            },
            {
                featureType: 'administrative.province',
                elementType: 'all',
                stylers: [
                    {
                        visibility: 'off',
                    },
                ],
            },
            {
                featureType: 'landscape',
                elementType: 'all',
                stylers: [
                    {
                        saturation: -100,
                    },
                    {
                        lightness: 65,
                    },
                    {
                        visibility: 'on',
                    },
                ],
            },
            {
                featureType: 'poi',
                elementType: 'all',
                stylers: [
                    {
                        saturation: -100,
                    },
                    {
                        lightness: '50',
                    },
                    {
                        visibility: 'simplified',
                    },
                ],
            },
            {
                featureType: 'road',
                elementType: 'all',
                stylers: [
                    {
                        saturation: '-100',
                    },
                ],
            },
            {
                featureType: 'road.highway',
                elementType: 'all',
                stylers: [
                    {
                        visibility: 'simplified',
                    },
                ],
            },
            {
                featureType: 'road.arterial',
                elementType: 'all',
                stylers: [
                    {
                        lightness: '30',
                    },
                ],
            },
            {
                featureType: 'road.local',
                elementType: 'all',
                stylers: [
                    {
                        lightness: '40',
                    },
                ],
            },
            {
                featureType: 'transit',
                elementType: 'all',
                stylers: [
                    {
                        saturation: -100,
                    },
                    {
                        visibility: 'simplified',
                    },
                ],
            },
            {
                featureType: 'water',
                elementType: 'geometry',
                stylers: [
                    {
                        hue: '#ffff00',
                    },
                    {
                        lightness: -25,
                    },
                    {
                        saturation: -97,
                    },
                ],
            },
            {
                featureType: 'water',
                elementType: 'labels',
                stylers: [
                    {
                        lightness: -25,
                    },
                    {
                        saturation: -100,
                    },
                ],
            },
        ],
    });
    const contentString =
        '<div id="mapContent" style="text-align: center">' + '<span>Grupa IMPET</span>' + '<br>' + '63-700 KROTOSZYN' + '<br>' + 'ul. Ostrowska 104' + '</div>';

    const contentString2 =
        '<div id="mapContent" style="text-align: center">' + '<span>Grupa IMPET</span>' + '<br>' + '56-300 MILICZ' + '<br>' + 'T.Kościuszki 15' + '</div>';

    const infowindow = new google.maps.InfoWindow({
        content: contentString,
        maxWidth: 300,
    });

    const infowindow2 = new google.maps.InfoWindow({
        content: contentString2,
        maxWidth: 300,
    });

    const icon = {
        path: 'M89.529,0A25.558,25.558,0,0,0,64,25.529c0,18.834,23.554,41.219,24.557,42.164a1.42,1.42,0,0,0,1.945,0c1-.945,24.557-23.33,24.557-42.164A25.558,25.558,0,0,0,89.529,0Zm0,39.712a14.183,14.183,0,1,1,14.183-14.183A14.2,14.2,0,0,1,89.529,39.712Z',
        fillColor: '#2d2d2d',
        strokeWeight: 0,
        fillOpacity: 1,
        anchor: new google.maps.Point(90, 72),
    };

    const geo1 = { lat: 51.68590926424119, lng: 17.468438128835892 };
    const geo2 = { lat: 51.5265688245562, lng: 17.277998244179454 };

    const marker = new google.maps.Marker({
        position: geo1,
        map,
        icon: icon,
        title: 'Impet',
    });

    const marker2 = new google.maps.Marker({
        position: geo2,
        map,
        icon: icon,
        title: 'Impet',
    });

    marker.addListener('click', () => {
        infowindow.open({
            anchor: marker,
            map,
            shouldFocus: false,
        });
    });

    marker2.addListener('click', () => {
        infowindow2.open({
            anchor: marker2,
            map,
            shouldFocus: false,
        });
    });
}
