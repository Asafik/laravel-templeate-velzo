(()=>{var e=function(e){if(null!==document.getElementById(e)){var r=document.getElementById(e).getAttribute("data-colors");return(r=JSON.parse(r)).map((function(e){var r=e.replace(" ","");if(-1===r.indexOf(",")){var t=getComputedStyle(document.documentElement).getPropertyValue(r);return t||r}var o=e.split(",");if(2==o.length){var a=getComputedStyle(document.documentElement).getPropertyValue(o[0]);return a="rgba("+a+","+o[1]+")"}return r}))}}("basic_polar_area");if(e){var r={series:[14,23,21,17,15,10,12,17,21],chart:{type:"polarArea",width:400},labels:["Series A","Series B","Series C","Series D","Series E","Series F","Series G","Series H","Series I"],stroke:{colors:["#fff"]},fill:{opacity:.8},legend:{position:"bottom"},colors:e};new ApexCharts(document.querySelector("#basic_polar_area"),r).render()}r={series:[42,47,52,58,65],chart:{width:400,type:"polarArea"},labels:["Rose A","Rose B","Rose C","Rose D","Rose E"],fill:{opacity:1},stroke:{width:1,colors:void 0},yaxis:{show:!1},legend:{position:"bottom"},plotOptions:{polarArea:{rings:{strokeWidth:0},spokes:{strokeWidth:0}}},theme:{mode:"light",palette:"palette1",monochrome:{enabled:!0,shadeTo:"light",color:"#405189",shadeIntensity:.6}}};document.querySelector("#monochrome_polar_area")&&new ApexCharts(document.querySelector("#monochrome_polar_area"),r).render()})();