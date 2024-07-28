var chart = KblChart.makeChart("chartdiv", {
  "type": "pie",
  "colors": ["#8B0000", "#B22222", "#DC143C", "#CD5C5C", "#FF0000", "#F08080", "#684D4D", "#B0A5A5", "#E9967A", "#2F0B0B", "#770F51"],
  "startDuration": 1,
   "theme": "light",
  "addClassNames": true,
 "legend":{
   	"position":"right",
    "marginRight":300,
    "autoMargins":false
  },
  "innerRadius": "80%",
  "defs": {
    "filter": [{
      "id": "shadow",
      "width": "200%",
      "height": "200%",
      "feOffset": {
        "result": "offOut",
        "in": "SourceAlpha",
        "dx": 0,
        "dy": 0
      },
      "feGaussianBlur": {
        "result": "blurOut",
        "in": "offOut",
        "stdDeviation": 5
      },
      "feBlend": {
        "in": "SourceGraphic",
        "in2": "blurOut",
        "mode": "normal"
      }
    }]
  },
  "dataProvider": [{
    "vtype": "Killed",
    "num": 13
  }, {
    "vtype": "Injured",
    "num": 43
  }, {
    "vtype": "Beaten",
    "num": 56
  }, {
    "vtype": "Threatended",
    "num": 78
  }, {
    "vtype": "Misbehavior",
    "num": 139
  }, {
    "vtype": "Dismissal of Duty",
    "num": 128
  }, {
    "vtype": "Arrest",
    "num": 99
  },  {
    "vtype": "kidnapped",
    "num": 50
  }],
  "valueField": "num",
  "titleField": "vtype",
  "export": {
    "enabled": true
  }
});

chart.addListener("init", handleInit);

chart.addListener("rollOverSlice", function(e) {
  handleRollOver(e);
});

function handleInit(){
  chart.legend.addListener("rollOverItem", handleRollOver);
}

function handleRollOver(e){
  var wedge = e.dataItem.wedge.node;
  wedge.parentNode.appendChild(wedge);  
}