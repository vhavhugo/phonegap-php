# phonegap-php
PhoneGap  com PHP

# instalar node.js
nodejs.org

# abrir teminal nodejs e instalar phonegap
npm install -g phonegap

# criando um template em branco
phonegap create Exemplo1 --template blank

# iniciando servidor
phonegap app

# chave google
ID DA APLICAÇÃO
W4r8LqBYHJbFMbliC3et

L86LvgA82pcDNxMe5vT9Jf8oE8fsRc5pgUBn6P5dNkQ	28 de fevereiro de 2020	ativado

# mapa
var map;
    function initMap() {
        var uluru = {lat: -34.397, lng: 150.644};
        map = new google.maps.Map(document.getElementById('map'), {
            center: uluru,
            zoom: 8
        });
        var marker = new google.maps.Marker({
            position: urulu,
            map: map
        });
        
# Instalar pluguim da camera do cordova
# utilizar camera
phonegap plugin add cordova-plugin-camera

# obter informações do dispositivo
phonegap plugin add cordova-plugin-device
# informações da rede
phonegap plugin add cordova-plugin-network-information
# informações da bateria
phonegap plugin add cordova-plugin-batery-status

# não precisa mais instalar é para o acelerometro
phonegap plugin add cordova-plugin-device-motion

phonegap plugin add cordova-plugin-vibration
phonegap plugin add cordova-plugin-dialogs

phonegap plugin add cordova-plugin-media-capture
phonegap plugin add cordova-plugin-file
phonegap plugin add cordova-plugin-geolocation
phonegap plugin add cordova-plugin-globalization

phonegap plugin add cordova-plugin-whitelist