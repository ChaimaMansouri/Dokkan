/**
 * Created by Ghaith on 26/04/2017.
 */
// Déclaration de la map
var MyMap = L.map('accueilmap').setView([34.0002968, 10.0803333], 7);
// Définition de la map
L.tileLayer ('https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZ2hhaXRodHJvdWRpIiwiYSI6ImNpem53d3huMDAwMW8yd255NW1yZ3J6b3IifQ.QaWzY5Cf3vKeqs24ADmRyw',
    {
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> Développé par TunisiaNow, Imagery © <a href="http://mapbox.com">Mapbox</a>',
        maxZoom: 18
    }
).addTo(MyMap);

// Ajout Logo TunisiaNow
L.Control.Watermark = L.Control.extend({
    onAdd: function(map) {
        var img = L.DomUtil.create('img');

        img.src = '/storage/dokkan.png';
        img.style.paddingBottom = '10px';
        img.style.align = 'right';
        img.style.width = '200px';

        return img;
    },

    onRemove: function(map) {
        // Nothing to do here
    }
});

L.control.watermark = function(opts) {
    return new L.Control.Watermark(opts);
}

L.control.watermark({ position: 'bottomleft' }).addTo(MyMap);