$(function(){
    $('#mall-map1').vectorMap({
        map: 'map0',
        backgroundColor: 'transport',
        series: {
            regions: [{
                values: {
                    t72: 'CARREFOUR MARKET',
                    t73: 'CAPRICE',
                    t3: 'I STORE',
                    t4: 'MASSIMO DUTTI',
                    t71: 'ZARA',
                    t6: 'OYSHO',
                    t7: 'PARFOIS',
                    t8: 'GIFT STORY',
                    t9: 'MODA VINCI',
                    t74: 'AMEN BANK',
                    t11: 'ROSA CLARA',
                    t12: 'RAYRA',
                    t13: 'TEMPUS',
                    t14: 'ZIPPY',
                    t15: 'escalator',
                    t16: 'escalator',
                    t17: 'enter',
                    t18: 'enter'
                },
                scale: {
                    "CARREFOUR MARKET": "#B0A18C",
                    "CAPRICE": "#C01923",
                    "MASSIMO DUTTI": "#C01923",
                    "ZARA": "#C01923",
                    "OYSHO": "#C01923",
                    "MODA VINCI": "#C01923",
                    "ROSA CLARA": "#C01923",
                    "ZIPPY": "#C01923",
                    "RAYRA": "#E98C87",
                    "TEMPUS": "#E98C87",
                    "PARFOIS": "#E98C87",
                    "GIFT STORY": "#E98C87",
                    "I STORE": "#007C88",
                    "AMEN BANK": "#007C88",
                    "enter": "#1A2133",
                    "escalator": "#1A2133"}
            }]
        },

        onRegionClick: function(element, code) //Click sur un pays
        {
            element.preventDefault();

            var x= code.substr(1,2);
            var redirect = "./storedetail/" +x ; //renvoie vers la page du pays sélectionné
            return $(location).attr('href',redirect);
        },

        onLabelShow: function(e, label, code) //affichage du label
        {
            label.html(''+label.text()+'<br/>'+ //nom du pays (déclaré dans le fichier js)
                labelPerso[code]); // + la liste des voyages (défini dans le controller)
        }


    });
});

