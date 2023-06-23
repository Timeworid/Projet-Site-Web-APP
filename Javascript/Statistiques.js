

function turnOnLED(){
    var xmlhttp;
    if (window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
    } else {
        if (window.ActiveXObject){
            try {
                xmlhttp2=new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    console.log(e);
                }
            }
        }
    }
    xmlhttp.open("GET","http://projets-tomcat.isep.fr:8080/appService",true);
    xmlhttp.setRequestHeader("Access-Control-Allow-Origin","*");
    xmlhttp.send("ACTION=COMMAND&TEAM=G01e&TRAME=1006D2a01BLUE000000%22");
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            console.log("Envoi de trame réussi ! Alummage de la LED en cours ...")
        }
    }
}




function recupStat(type){

    if (window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
    } else {
        if (window.ActiveXObject){
            try {
                xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    console.log(e);
                }
            }
        }
    }
    xmlhttp.open("POST","routeur.php",true);
    xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xmlhttp.send("action=getTrames");
    xmlhttp.onreadystatechange=function(){
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
            var reponse = JSON.parse(xmlhttp.response);
            xmlhttp.open("POST","routeur.php",true);
            xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            var tab_Date = new Array()
            var tab_Values = new Array()
            var tab_Types = new Array()

            console.log(JSON.parse(reponse[0]))
            for(var i = 0; i < reponse.length; i++){
                tab_Date.push(Math.floor(new Date(JSON.parse(reponse[i])[8], JSON.parse(reponse[i])[9], JSON.parse(reponse[i])[10], JSON.parse(reponse[i])[11], JSON.parse(reponse[i])[12], JSON.parse(reponse[i])[13]).getTime() / 1000));
                tab_Values.push(JSON.parse(reponse[i])[5])
                tab_Types.push(JSON.parse(reponse[i])[3])
            }
            console.log(reponse);
            
            //console.log(JSON.stringify(tab_Date));
            console.log(JSON.stringify(tab_Values));
            
            xmlhttp.send("action=EnvoiStats&dateStat="+ JSON.stringify(tab_Date)+"&valStat="+JSON.stringify(tab_Values)+"&typeStat="+JSON.stringify(tab_Types));
            xmlhttp.onreadystatechange=function(){
                if (xmlhttp.readyState==4 && xmlhttp.status==200){
                    console.log("Envoi de Stat réussi")
                    tab_data = new Array();
                    var xmlhttp2;
                    if (window.XMLHttpRequest) {
                        xmlhttp2=new XMLHttpRequest();
                    } else {
                        if (window.ActiveXObject){
                            try {
                                xmlhttp2=new ActiveXObject("Msxml2.XMLHTTP");
                            } catch (e) {
                                try {
                                    xmlhttp2=new ActiveXObject("Microsoft.XMLHTTP");
                                } catch (e) {
                                    console.log(e);
                                }
                            }
                        }
                    }
                    xmlhttp2.open("POST","routeur.php",true);
                    xmlhttp2.setRequestHeader("Content-type","application/x-www-form-urlencoded");
                    xmlhttp2.send("action=RecupStats&type="+type);
                    xmlhttp2.onreadystatechange=function(){
                        if (xmlhttp2.readyState==4 && xmlhttp.status==200){
                            console.log("Recup de Stat réussi")
                            console.log(JSON.parse(xmlhttp2.response));
                            tab_data = JSON.parse(xmlhttp2.response)
                            google.charts.load('current', {'packages':['corechart']});
                            google.charts.setOnLoadCallback(function () {drawChart(type)});
                        }
                    }
                }
                
            }
        }
    }
}
            
      

function drawChart(type) {
    if(type == "Température"){
        var data_Temp = new google.visualization.DataTable();
        for (var i = 1; i < tab_data.length; i++) {
            tab_data[i]["dateStat"] = new Date(Date.parse(tab_data[i]["dateStat"]));
        }
        console.log(tab_data[1]);
        
        var daySelected;
        if(!document.getElementById("myDateTemp").value){
            document.getElementById("myDateTemp").value = new Date().toISOString().slice(0, 10);
        }
        daySelected = new Date(document.getElementById("myDateTemp").value)
        console.log(daySelected);
        
        data_Temp.addColumn('date', "Heure");            // <-- x-axis - string
        data_Temp.addColumn('number', "Température"); 
        if(daySelected != null){ 
            // <-- y-axis - number
            for (var i = 1; i < tab_data.length; i++) {
                if(tab_data[i]["dateStat"].getDate() == daySelected.getDate() && tab_data[i]["dateStat"].getMonth() == daySelected.getMonth()){
                    data_Temp.addRow([tab_data[i]["dateStat"], parseInt(tab_data[i]["valStat"], 16)]);
                }
            }
        }
        

        var options_Temp = {
            title: 'Evolution de la température pendant la journée',
            width: 1200,
            height: 400,
            legend: { position: 'bottom' },
            chartArea: {
            left:55,
            top:50,
            height:300,
            width:1400,
            backgroundColor: {
            fill: '	#FFFFFF',
            fillOpacity: 0.8,
            }
        
            },
        }

        var chart_Temp = new google.visualization.LineChart(document.getElementById('Temp_Graph'));

        chart_Temp.draw(data_Temp, options_Temp);
    }

    var data_Card = google.visualization.arrayToDataTable([
        ['Heure', 'Température'],
        ['00h',  2],
        ['01h',  3],
        ['02h',  3],
        ['03h',  4],
        ['04h',  5],
        ['05h',  5],
        ['06h',  5],
        ['07h',  6],
        ['08h',  6],
        ['09h',  7],
        ['10h',  7],
        ['11h',  8],
        ['12h',  9],
        ['13h',  9],
        ['14h',  8],
        ['15h',  8],
        ['16h',  7],
        ['17h',  6],
        ['18h',  5],
        ['19h',  4],
        ['20h',  4],
        ['21h',  3],
        ['22h',  2],
        ['23h',  1],
        ['24h',  1]
    ]);

    var options_Card = {
        title: 'Evolution de la température pendant la journée',
        curveType: 'function',
        width: 1200,
        height: 400,
        legend: { position: 'bottom' },
        chartArea: {
        left:55,
        top:50,
        height:300,
        width:1400,
        backgroundColor: {
        fill: '	#FFFFFF',
        fillOpacity: 0.8,
        }
        },
    }

    var chart_Card = new google.visualization.LineChart(document.getElementById('Card_Graph'));

    chart_Card.draw(data_Card, options_Card);

    var data_C02 = google.visualization.arrayToDataTable([
        ['Heure', 'Température'],
        ['00h',  2],
        ['01h',  3],
        ['02h',  3],
        ['03h',  4],
        ['04h',  5],
        ['05h',  5],
        ['06h',  5],
        ['07h',  6],
        ['08h',  6],
        ['09h',  7],
        ['10h',  7],
        ['11h',  8],
        ['12h',  9],
        ['13h',  9],
        ['14h',  8],
        ['15h',  8],
        ['16h',  7],
        ['17h',  6],
        ['18h',  5],
        ['19h',  4],
        ['20h',  4],
        ['21h',  3],
        ['22h',  2],
        ['23h',  1],
        ['24h',  1]
    ]);

    var options_C02 = {
        title: 'Evolution de la température pendant la journée',
        curveType: 'function',
        width: 1200,
        height: 400,
        legend: { position: 'bottom' },
        chartArea: {
        left:55,
        top:50,
        height:300,
        width:1400,
        backgroundColor: {
        fill: '	#FFFFFF',
        fillOpacity: 0.8,
        }
        },
    }

    var chart_C02 = new google.visualization.LineChart(document.getElementById('C02_Graph'));

    chart_C02.draw(data_C02, options_C02);

    if(type == "Son"){
        var data_son = new google.visualization.DataTable();
        for (var i = 1; i < tab_data.length; i++) {
            tab_data[i]["dateStat"] = new Date(Date.parse(tab_data[i]["dateStat"]));
        }
        var daySelected;
        if(!document.getElementById("myDateSon").value){
            document.getElementById("myDateSon").value = new Date().toISOString().slice(0, 10);
        }
        daySelected = new Date(document.getElementById("myDateSon").value)
        console.log(daySelected);
        
        data_son.addColumn('date', "Heure");            // <-- x-axis - string
        data_son.addColumn('number', "Son"); 
        if(daySelected != null){ 
            // <-- y-axis - number
            console.log("dans le son")
            for (var i = 1; i < tab_data.length; i++) {
                if(tab_data[i]["dateStat"].getDate() == daySelected.getDate() && tab_data[i]["dateStat"].getMonth() == daySelected.getMonth()){
                    data_son.addRow([tab_data[i]["dateStat"], parseInt(tab_data[i]["valStat"], 16)]);
                }
            }
        }

        var options_Sonore = {
            title: 'Variation du son pendant la journée',
            width: 1200,
            height: 400,
            legend: { position: 'bottom' },
            chartArea: {
            left:55,
            top:50,
            height:300,
            width:1400,
            backgroundColor: {
            fill: '	#FFFFFF',
            fillOpacity: 0.8,
            },
            explorer: {
                actions: ['dragToZoom', 'rightClickToReset'],
                axis: 'horizontal',
                keepInBounds: true,
                maxZoomIn: 4.0
            },
            },
        }

        var chart_Sonore = new google.visualization.LineChart(document.getElementById('Sonore_Graph'));
        chart_Sonore.draw(data_son, options_Sonore);
    }
}