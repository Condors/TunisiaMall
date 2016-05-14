$(function(){
    $('#mall-map1').vectorMap({
        map: 'map',
        backgroundColor: 'tr',
        series: {
            regions: [{
                values: {
                    t1: 'CARREFOUR MARKET',
                    t2: 'CAPRICE',
                    t3: 'I STORE',
                    t4: 'MASSIMO DUTTI',
                    t5: 'ZARA',
                    t6: 'OYSHO',
                    t7: 'PARFOIS',
                    t8: 'GIFT STORY',
                    t9: 'MODA VINCI',
                    t10: 'AMEN BANK',
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
                    "CARREFOUR MARKET": "#73766F",
                    "CAPRICE": "#A63A3A",
                    "MASSIMO DUTTI": "#A63A3A",
                    "ZARA": "#A63A3A",
                    "OYSHO": "#A63A3A",
                    "MODA VINCI": "#A63A3A",
                    "ROSA CLARA": "#A63A3A",
                    "ZIPPY": "#A63A3A",
                    "RAYRA": "#2B6388",
                    "TEMPUS": "#2B6388",
                    "PARFOIS": "#2B6388",
                    "GIFT STORY": "#2B6388",
                    "I STORE": "#2B6388",
                    "AMEN BANK": "#2B6388",
                    "enter": "#1A2133",
                    "escalator": "#1A2133"}
            }]
        },
        onRegionTipShow: function(e, el, code){
            if (el.html() === '') {
                e.preventDefault();
            }
        },
        onRegionClick: function (event, code) {
            window.location.href = "aaa.html?regionCode="+t1
        },
        onRegionClick: function (event, code) {
            //alert("11");
            // window.location.replace("http://www.google.com");
            var myWindow = window.open("", "MsgWindow", "width=200,height=100");
            myWindow.document.write("description:<br>")

            myWindow.document.write("tel:22437084");
        }
    });
});