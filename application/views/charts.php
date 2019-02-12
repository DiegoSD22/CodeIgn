
<div id="highcharts-44f78b28-59ef-46d7-bb59-2df3d3cc11fa"></div><script>
(function(){ var files = ["https://code.highcharts.com/stock/highstock.js","https://code.highcharts.com/highcharts-more.js","https://code.highcharts.com/highcharts-3d.js","https://code.highcharts.com/modules/data.js","https://code.highcharts.com/modules/exporting.js","https://code.highcharts.com/modules/funnel.js","https://code.highcharts.com/modules/annotations.js","https://code.highcharts.com/modules/solid-gauge.js"],loaded = 0; if (typeof window["HighchartsEditor"] === "undefined") {window.HighchartsEditor = {ondone: [cl],hasWrapped: false,hasLoaded: false};include(files[0]);} else {if (window.HighchartsEditor.hasLoaded) {cl();} else {window.HighchartsEditor.ondone.push(cl);}}function isScriptAlreadyIncluded(src){var scripts = document.getElementsByTagName("script");for (var i = 0; i < scripts.length; i++) {if (scripts[i].hasAttribute("src")) {if ((scripts[i].getAttribute("src") || "").indexOf(src) >= 0 || (scripts[i].getAttribute("src") === "http://code.highcharts.com/highcharts.js" && src === "https://code.highcharts.com/stock/highstock.js")) {return true;}}}return false;}function check() {if (loaded === files.length) {for (var i = 0; i < window.HighchartsEditor.ondone.length; i++) {try {window.HighchartsEditor.ondone[i]();} catch(e) {console.error(e);}}window.HighchartsEditor.hasLoaded = true;}}function include(script) {function next() {++loaded;if (loaded < files.length) {include(files[loaded]);}check();}if (isScriptAlreadyIncluded(script)) {return next();}var sc=document.createElement("script");sc.src = script;sc.type="text/javascript";sc.onload=function() { next(); };document.head.appendChild(sc);}function each(a, fn){if (typeof a.forEach !== "undefined"){a.forEach(fn);}else{for (var i = 0; i < a.length; i++){if (fn) {fn(a[i]);}}}}var inc = {},incl=[]; each(document.querySelectorAll("script"), function(t) {inc[t.src.substr(0, t.src.indexOf("?"))] = 1; }); function cl() {if(typeof window["Highcharts"] !== "undefined"){var options={"title":{"text":"Solar Employment Growth by Sector, 2010-2016"},"subtitle":{"text":"Source: thesolarfoundation.com"},"exporting":{},"yAxis":[{"title":{"text":"Number of Employees"}}],"legend":{"layout":"vertical","align":"right","verticalAlign":"middle"},"plotOptions":{"series":{"label":{"connectorAllowed":false},"pointStart":2010,"animation":false}},"series":[{"name":"Installation"},{"name":"Manufacturing"},{"name":"Sales &amp; Distribution"},{"name":"Project Development"},{"name":"Other"}],"responsive":{"rules":[{"condition":{"maxWidth":500},"chartOptions":{"legend":{"layout":"horizontal","align":"center","verticalAlign":"bottom"}},"_id":"highcharts-kxgximo-45"}]},"chart":{},"data":{"csv":"\"Category\";\"Installation\";\"Manufacturing\";\"Sales &amp; Distribution\";\"Project Development\";\"Other\"\n2010;43934;24916;11744;;12908\n2011;52503;24064;17722;;5948\n2012;57177;29742;16005;7988;8105\n2013;69658;29851;19771;12169;11248\n2014;97031;32490;20185;15112;8989\n2015;119931;30282;24377;22452;11816\n2016;137133;38121;32147;34400;18274\n2017;154175;40434;39387;34227;18111","googleSpreadsheetKey":false,"googleSpreadsheetWorksheet":false}};/*
// Sample of extending options:
Highcharts.merge(true, options, {
    chart: {
        backgroundColor: "#bada55"
    },
    plotOptions: {
        series: {
            cursor: "pointer",
            events: {
                click: function(event) {
                    alert(this.name + " clicked\n" +
                          "Alt: " + event.altKey + "\n" +
                          "Control: " + event.ctrlKey + "\n" +
                          "Shift: " + event.shiftKey + "\n");
                }
            }
        }
    }
});
*/new Highcharts.Chart("highcharts-44f78b28-59ef-46d7-bb59-2df3d3cc11fa", options);}}})();
</script>