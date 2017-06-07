
/**
* Theme: Uplon Admin Template
* Author: Coderthemes
* Dashboard
*/

!function($) {
    "use strict";

    var Dashboard = function() {};

    //creates Stacked chart
    Dashboard.prototype.createStackedChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            stacked: true,
            labels: labels,
            hideHover: 'auto',
            barSizeRatio: 0.4,
            resize: true, //defaulted to true
            gridLineColor: '#eeeeee',
            barColors: lineColors
        });
    },


    Dashboard.prototype.init = function() {

        //creating Stacked chart
        var $stckedData  = [
            { y: 'JAN', a: 45, b: 180 },
            { y: 'FEV', a: 75,  b: 65 },
            { y: 'MAR', a: 100, b: 90 },
            { y: 'ABR', a: 75,  b: 65 },
            { y: 'JUN', a: 100, b: 90 },
            { y: 'JUL', a: 75,  b: 65 },
            { y: 'AGO', a: 50,  b: 40 },
            { y: 'SET', a: 75,  b: 65 },
            { y: 'OUT', a: 50,  b: 40 },
            { y: 'NOV', a: 75,  b: 65 },
            { y: 'DEZ', a: 100, b: 90 }
        ];
        this.createStackedChart('morris-bar-stacked', $stckedData, 'y', ['a', 'b' ,'c'], ['Carros', 'Auditórios'], ['#3db9dc','#1bb99a']);

    },
    //init
    $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.Dashboard.init();
}(window.jQuery);
