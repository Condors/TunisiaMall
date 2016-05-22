$(function(){
    $('#mall-map3').vectorMap({
        map: 'map3',
        backgroundColor: 'transport',
        series: {
            regions: [{
                values: {
                    L301: 'PIZZA HUT',
                    L302: 'TERRASSE',
                    L303: 'FOOD COURT',
                    L304: 'ERIC KAYSER',
                    L305: 'OPTICIEN',
                    L306: 'S.P.I',
                    L307: 'ESPRIT SUSHI',
                    L308: 'LOUNGE',
                    L309: 'ZEN',
                    L310: 'ZEN',
                    L311: 'ZEN',
                    L312: 'AA',
                    L313: 'TABAC/JOURNAUX',
                    L314: 'IN VOGUE',
                    L315: 'NIKE STORE',
                    L316: 'MANEKEN',
                    L317: 'AMARANTE',
                    L318: 'DIVA',
                    L319: 'DAB',
                    L320: 'CASA DEL CAFE',
                    L321: 'POMME DE PAIN',
                    L322: 'SAN BURG',
                    L323: 'BAB EL HOUMA',
                    L324: 'FOOD +',
                    L325: 'AROO S LEBANON',
                    L326: 'FATBURGER',
                    L327: 'ESPACE KOUNOUZ',
                    L328: 'TONIC JUICE'

                },
                scale: {
                    "PIZZA HUT": "#F68239",
                    "LOUNGE": "#F68239",
                    "ERIC KAYSER": "#F68239",
                    "ESPRIT SUSHI": "#F68239",
                    "CASA DEL CAFE": "#F68239",
                    "TONIC JUICE": "#F68239",
                    "MANEKEN": "#F68239",
                    "POMME DE PAIN": "#F68239",
                    "SAN BURG": "#F68239",
                    "BAB EL HOUMA": "#F68239",
                    "FOOD +": "#F68239",
                    "AROO S LEBANON": "#F68239",
                    "FATBURGER": "#F68239",
                    //
                    "TERRASSE": "#33354E",
                    "FOOD COURT": "#33354E",
                    ///
                    "OPTICIEN": "#ACBED6",
                    //
                    "S.P.I": "#C01923",
                    "ZEN": "#C01923",
                    "IN VOGUE": "#C01923",
                    "NIKE STORE": "#C01923",
                    //
                    "AMARANTE": "#E98C87",
                    "DIVA": "#E98C87",
                    //
                    "TABAC/JOURNAUX": "#143980",
                    "ESPACE KOUNOUZ": "#143980",
                    //
                    "DAB": "#0F588D",
                    "EVATEK": "#007C88",
                    "LOCCITANE": "#4BC0AE"




                }
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
            myWindow.document.write("<a href='aaa.html'>aaa</a>");

        }

    });
});
