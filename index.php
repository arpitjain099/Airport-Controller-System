<!DOCTYPE html>
<html>
<head>
    <!-- Mobirise Free Bootstrap Template, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v2.6.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon"  type="image/x-icon">
  <meta name="description" content="Free Bootstrap Template">
  <title>ACS | Airport Controller System.</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/mobirise/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
<script src="listofairports.json"></script>  

<style type="text/css">
#chartdiv {
  width : 100%;
  height  : 500px;
}                                 
</style>
 <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="https://www.amcharts.com/lib/3/serial.js"></script>
<script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
<style type="text/css">
body{
  background-color: transparent;
}

.jf-form{
  margin-top: 28px;
}

.jf-option-box{
  display: none;
  margin-left: 8px;
}

.jf-hide{
  display: none;
}

.jf-disabled {
    background-color: #eeeeee;
    opacity: 0.6;
    pointer-events: none;
}

/* 
overwrite bootstrap default margin-left, because the <label> doesn't contain the <input> element.
*/
.checkbox input[type=checkbox], .checkbox-inline input[type=checkbox], .radio input[type=radio], .radio-inline input[type=radio] {
  position: absolute;
  margin-top: 4px \9;
  margin-left: 0px;
}

div.form-group{
  padding: 8px 8px 4px 8px;
}

.mainDescription{
  margin-bottom: 10px;
}
.responsive img{
  width: 100%;
}

p.error, p.validation-error{
  padding: 5px;
}

p.error{
  margin-top: 10px;
  color:#a94442;
}

p.server-error{
  font-weight: bold;
}

div.thumbnail{
  position: relative;
  text-align: center;
}

div.thumbnail.selected p{
  color: #ffffff;
}

div.thumbnail .glyphicon-ok-circle{
  position: absolute;
  top: 16px;
  left: 16px;
  color: #ffffff;
  font-size: 32px;
}

.jf-copyright{color: #888888; display: inline-block; margin: 16px;display:none;}

.form-group.required .control-label:after {
    color: #dd0000;
    content: "*";
    margin-left: 6px;
}

.submit .btn.disabled, .submit .btn[disabled]{
  background: transparent;
  opacity: 0.75;
}

/* for image option with span text */
.checkbox label > span, .radio label > span{
  display: block;
}

.form-group.inline .control-label,
.form-group.col-1 .control-label,
.form-group.col-2 .control-label,
.form-group.col-3 .control-label
{
  display: block;
}

.form-group.inline div.radio,
.form-group.inline div.checkbox{
  display: inline-block;
}

.form-group.col-1 div.radio,
.form-group.col-1 div.checkbox{
  display: block;
}

.form-group.col-2 div.radio,
.form-group.col-2 div.checkbox{
  display: inline-block;
  width: 48%;
}

.form-group.col-3 div.radio,
.form-group.col-3 div.checkbox{
  display: inline-block;
  width: 30%;
}

</style>
</head>
<body>

<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--relative mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-20">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="#">ACS - Airport Control System</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                          <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active" id="navigation">
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#contact">About</a></li> 
                            <li class="mbr-navbar__item"><a class="mbr-buttons__link btn text-white" href="#contact">Contact</a></li>
                           

                          </ul></div>
                
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="content-2 simple col-1 col-undefined mbr-parallax-background mbr-after-navbar" id="content5-92" style="background-image: url();">
    <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(0, 0, 0);"></div>
    <div class="container">
        <div class="row">
            <div>
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Choose Flight</h3>

                
                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">



<div class="form-group c99 " data-cid="c99">
  <label class="control-label" for="c99"><font color="white">Flight number</font></label>

 <div id="flightcodediv">

</div>
  
</div>
<div class="mbr-buttons  mbr-buttons--left"><center><a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-warning" id="search">Search</a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mbr-section" id="header3-109">
    <div class="mbr-section__container container mbr-section__container--first">
        <div class="mbr-header mbr-header--wysiwyg row" id="output">
           
             <div id="chartdiv" style="display:none"></div>    
             <div id="addnewdata" style="display:none">

<div class="form-group c85  inline" data-cid="c85">
  <label class="control-label" for="c85">Type of entry</label>

<div class="radio">
    <input  id="c85_1" name="c85" checked type="radio" value="individual"  >
    <label  for="c85_1">
      Departure
    </label>
  </div>

  <div class="radio">
    <input  id="c85_2" name="c85"  type="radio" value="vcfirm"  >
    <label  for="c85_2">
      Arrival
    </label>
  </div>

  
</div>



<div class="form-group c99 " data-cid="c99">
  <label class="control-label" for="c99">Departing Airport</label>


<div id="departingairport"></div>
</div>

<div class="form-group c99 " data-cid="c99">
  <label class="control-label" for="c99">Arrival Airport</label>


<div id="arrivalairport"></div>
</div>

<div class="form-group c99 " data-cid="c99">
  <label class="control-label" for="c99">Choose date and time</label>



                <div class='input-group date' id='datetimepicker1'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            
</div>


<div class="form-group c99 " data-cid="c99">
  <label class="control-label" for="c99">Select lane</label>

  <select class="form-control" id="c97" name="97">
    
      <option value="1">Lane  1</option>
      <option value="2">Lane  2</option>
      <option value="3">Lane  3</option>
      <option value="4">Lane  4</option>
      <option value="5">Lane  5</option>
      <option value="6">Lane  6</option>
    </select>

                
</div>


<div class="form-group c2 required" data-cid="c2">
  <label class="control-label" for="c2" id="duration_event_label">Duration of event (in minutes)</label>

<div class="input-group"><span class="input-group-addon left"><i class="glyphicon glyphicon-phone"></i> </span>
<input type="number" class="form-control" id="c2" name="c2" value="" placeholder="Ex: 30 min" />
</div>
  
</div>

<div class="form-group c99 " data-cid="c59">
  <label class="control-label" id="selectcontrollerlabel"for="c59">Select controller(s)</label>
  <div id="selectcontroller"></div>
  

                
</div>
<div id="submitbuttonresponse"></div>
<div class="mbr-buttons  mbr-buttons--left"><center><a class="mbr-buttons__btn btn btn-lg animated fadeInUp delay btn-warning" id="submit">Submit</a></center>
                    </div>



             </div>
             

        </div>
    </div>
</section>





<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contact" style="background-color: rgb(239, 239, 239);">
    
    <div class="mbr-section__container container" >
        <div class="mbr-contacts mbr-contacts--wysiwyg row">
            <div class="col-sm-6">
                 <p class="mbr-contacts__text"><strong>Reach out</strong><br>
E-mail - <a href="mailto:arpitjain099@gmail.com">arpitjain099@gmail.com</a><br>
LinkedIn - <a href="https://in.linkedin.com/in/arpitjain099">https://in.linkedin.com/in/arpitjain099</a><br>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                       
                    </div>
                 
                   

                </div>
            </div>

        </div>
 <center><p class="mbr-contacts__text">Made with <span class="glyphicon glyphicon-heart-empty"></span> in Bangalore!</p>
</center>

    </div>
</section>



      <div class="modal fade" id="flightdetails" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><center>Flight Details</center></h4>
      </div>
        <div class="modal-body" id="flightdetailsmodalcontent">
              
                  
        </div>
       
      </div>
      
    </div>
  </div>




  <script src="assets/jquery/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/SmoothScroll.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/mobirise/js/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>  
<script src="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/src/js/bootstrap-datetimepicker.js"></script>  
  <link rel="stylesheet" href="https://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/a549aa8780dbda16f6cff545aeabc3d71073911e/build/css/bootstrap-datetimepicker.css">

  <script type="text/javascript">
  $( document ).ready(function() {
    $.post('server/getflightlist.php', { 

}) 
.done(function( data ) {
  data=JSON.parse(data);
  var flightlist=data;
    var sts='<select class="form-control" id="c99" name="c99">';
 
 
 
    for (var i=0;i<flightlist.length;i++)
      sts=sts+'  <option  value="'+flightlist[i]['flightcode']+'">'+flightlist[i]['flightcode']+' - '+flightlist[i]['carriername']+'</option>';
    sts=sts+' </select>';
    document.getElementById("flightcodediv").innerHTML  =sts;
});

$.post('server/getcontrollerlist.php', { 

}) 
.done(function( data ) {
  data=JSON.parse(data);
  var controllerlist=data;
    var sts='<select multiple class="form-control" id="controller" name="c99">';
 
 
 
    for (var i=0;i<controllerlist.length;i++)
      sts=sts+'  <option  value="'+controllerlist[i]['controllerid']+'">'+controllerlist[i]['controllerid']+' - '+controllerlist[i]['controllername']+'</option>';
    sts=sts+' </select>';
    document.getElementById("selectcontroller").innerHTML  =sts;
});

 });


$( "#search" ).click(function() {
   $.post('server/getflightdata.php', { 
flightcode:document.getElementById("c99").value
}) 
.done(function( data ) {
  data=JSON.parse(data);
  data2=data;
 if(data2.length==0)
  { document.getElementById("chartdiv").style.display="block";
    document.getElementById("addnewdata").style.display="block";
    flightcode:document.getElementById("chartdiv").innerHTML="<center>No past data found for this flight. Don't worry, you can still add new arrival/departure info for this flight. Don't worry, you can still add new event data for this flight. Just keep scrolling below!</center>";
  }
else{
document.getElementById("chartdiv").style.display="block";
    document.getElementById("addnewdata").style.display="block";
var chartData = [];
       
       arr= [];
    for(var i=0;i<data2.length;i++)
    { var temp=new Date(Date.parse(data2[i].date));
    
       chartData.push({
            date: data2[i].date,
            visits: temp.getHours()
        });
    }

var chart = AmCharts.makeChart("chartdiv", {
    "type": "serial",
    "theme": "light",
    "marginRight": 80,
    "autoMarginOffset": 20,
    "marginTop": 7,
    "dataProvider": chartData,
    "valueAxes": [{
        "axisAlpha": 0.2,
        "dashLength": 1,
        "position": "left",
        "title": "Time of day"
    }],
    "mouseWheelZoomEnabled": true,
    "graphs": [{
        "id": "g1",
        "balloonText": "[[value]]",
        "bullet": "round",
        "bulletBorderAlpha": 1,
        "bulletColor": "#FFFFFF",
        "hideBulletsCount": 50,
        "title": "Date",
        "valueField": "visits",
        "useLineColorForBulletBorder": true,
        "balloon":{
            "drop":true
        }
    }],
    "chartScrollbar": {
        "autoGridCount": true,
        "graph": "g1",
        "scrollbarHeight": 40
    },
    "chartCursor": {
       "limitToGraph":"g1"
    },
    "categoryField": "date",
    "categoryAxis": {
        "parseDates": true,
        "axisColor": "#DADADA",
        "dashLength": 1,
        "minorGridEnabled": true
    },
    "export": {
        "enabled": true
    }
});

chart.addListener("rendered", zoomChart);
zoomChart();
chart.addListener("clickGraphItem", function (event) {



  for(var i=0;i<data2.length;i++)
    {
      var temp=new Date(Date.parse(data2[i].date));
      temp=temp.getHours();
      if(temp==event.item.dataContext.visits && data2[i].date==event.item.dataContext.date)
        {
          //{"flightcode":"AC10","date":"Sat Apr 02 2016 18:12:17 GMT+0530 (India Standard Time)","from_location":"Peru","to_location":"ABC","controlllerid":"['controller']","lane":"2","type":"Arrival"}
          var temporary_var=data2[i];

//flight code
//Event type
//From
//To
//Controllers assigned
//Lane
//Time of event
//carrier name


              var sts="";
          sts=sts.concat('<table class="table table-striped" border="0.1">');
        if(temporary_var['type']=="Arrival"){
          sts=sts+'<tr><td><center>Flight Code</center></td><td><center>'+temporary_var['flightcode']+'</center></td></tr>'+'<tr><td><center>Event Type</center></td><td><center>'+temporary_var['type']+'</center></td></tr>'+'<tr><td><center>From</center></td><td><center>'+temporary_var['from_location']+'</center></td></tr>'+'<tr><td><center>To</center></td><td><center>'+temporary_var['to_location']+'</center></td></tr>'+'<tr><td><center>Lane Assigned</center></td><td><center>'+temporary_var['lane']+'</center></td></tr>'+'<tr><td><center>Time of Arrival</center></td><td><center>'+temporary_var['date']+'</center></td></tr>'+'<tr><td><center>Controller(s) Assigned</center></td><td><center>'+temporary_var['controlllerid']+'</center></td></tr>';
        }
        else {
           sts=sts+'<tr><td><center>Flight Code</center></td><td><center>'+temporary_var['flightcode']+'</center></td></tr>'+'<tr><td><center>Event Type</center></td><td><center>'+temporary_var['type']+'</center></td></tr>'+'<tr><td><center>From</center></td><td><center>'+temporary_var['from_location']+'</center></td></tr>'+'<tr><td><center>To</center></td><td><center>'+temporary_var['to_location']+'</center></td></tr>'+'<tr><td><center>Lane Assigned</center></td><td><center>'+temporary_var['lane']+'</center></td></tr>'+'<tr><td><center>Time of Departure</center></td><td><center>'+temporary_var['date']+'</center></td></tr>'+'<tr><td><center>Controller(s) Assigned</center></td><td><center>'+temporary_var['controlllerid']+'</center></td></tr>';
        }

        sts=sts.concat("</table>");
        
        document.getElementById("flightdetailsmodalcontent").innerHTML=sts;
  $('#flightdetails').modal('toggle');
    //return sts;

    

        }
    }
       
});
// this method is called when chart is first inited as we listen for "rendered" event
function zoomChart() {
    // different zoom methods can be used - zoomToIndexes, zoomToDates, zoomToCategoryValues
    chart.zoomToIndexes(chartData.length - 40, chartData.length - 1);
}
}


});
});


  </script>

  <script type="text/javascript">
  //document.getElementById("addnewdata").style.display="block";
 var sts='<select class="form-control" id="arr_airport" name="c99">';
    for(var i=0;i<airportlist.length;i++)
      sts=sts+'<option  value="'+airportlist[i]['IATA']+'">'+airportlist[i]['Airport Name']+' - '+ airportlist[i]['IATA']+'</option>';
    sts=sts+'</select>';
document.getElementById("arrivalairport").innerHTML=sts;

var sts='<select class="form-control" id="dep_airport" name="c98"><option value="Pinochio" disabled> Pinochio Airport</option></select>';
document.getElementById("departingairport").innerHTML=sts;

$( "#c85_1" ).change(function() {//departure
if ( ($("#c85_1").is(':checked') ))
  {
    var sts='<select class="form-control" id="arr_airport" name="c99">';
    for(var i=0;i<airportlist.length;i++)
      sts=sts+'<option  value="'+airportlist[i]['IATA']+'">'+airportlist[i]['Airport Name']+' - '+ airportlist[i]['IATA']+'</option>';
    sts=sts+'</select>';
    document.getElementById("arrivalairport").innerHTML=sts;

var sts='<select class="form-control" id="dep_airport" name="c98"><option value="Pinochio" disabled> Pinochio Airport</option></select>';
document.getElementById("departingairport").innerHTML=sts;
}


});


  $( "#c85_2" ).change(function() {//arrival
if ( ($("#c85_2").is(':checked') ))
  {

    var sts='<select class="form-control" id="dep_airport" name="c98">';
    for(var i=0;i<airportlist.length;i++)
      sts=sts+'<option  value="'+airportlist[i]['IATA']+'">'+airportlist[i]['Airport Name']+' - '+ airportlist[i]['IATA']+'</option>';
    sts=sts+'</select>';

document.getElementById("departingairport").innerHTML=sts;

var sts='<select class="form-control" id="arr_airport" name="c99"><option value="Pinochio" disabled> Pinochio Airport</option></select>';
document.getElementById("arrivalairport").innerHTML=sts;

}
});


$('#datetimepicker1').datetimepicker({
  minDate: moment()
});

$( "#submit" ).click(function() {
var typeofevent;
if (document.getElementById('c85_1').checked) {
  typeofevent = "Departure";
}
else typeofevent="Arrival";

var departingairportval=document.getElementById('dep_airport').value;
var arrivalairportval=document.getElementById('arr_airport').value;
var lane=document.getElementById('c97').value;
var duration=document.getElementById('c2').value;
var datetimepicker_val=$("#datetimepicker1").data("DateTimePicker").date()['_d']
var controller = []; 
$('#controller :selected').each(function(i, selected){ 
  controller[i] = $(selected).text(); 
});

var controller_str="";
for(var i=0;i<controller.length;i++){
  var temp=controller[i].split("-")[0];
  temp=temp.replace(" ","");
  if(i!=controller.length-1)
    controller_str=controller_str+ temp+",";
  else controller_str=controller_str+temp;
}

  //controller_str=controller_str+","
var response_text="<center>";
var flag=0;
if(duration=="")
{
   response_text=response_text+"Please enter the duration of the event.<br>";
   document.getElementById("duration_event_label").style.backgroundColor = '#FF0044';
   flag=1;
}
if(controller.length==0){
   response_text=response_text+"Please select atleast one controller.<br>";
   document.getElementById("selectcontrollerlabel").style.backgroundColor = '#FF0044';
   flag=1;
}


if(flag==1){
  response_text=response_text+"</center>";
document.getElementById("submitbuttonresponse").innerHTML=response_text;
document.getElementById("submitbuttonresponse").style.color = 'red';
}
  else{
    document.getElementById("submitbuttonresponse").style.display="none";
  document.getElementById("duration_event_label").style.backgroundColor = '#FFFFFF';
  document.getElementById("selectcontrollerlabel").style.backgroundColor = '#FFFFFF';
       $.post('server/newevent.php', { 
flightcode:document.getElementById("c99").value,
datetimepicker_val:datetimepicker_val.toString(),
typeofevent:typeofevent.toString(),
departingairportval:departingairportval,
arrivalairportval:arrivalairportval,
lane:lane,
duration:duration,
controller:controller_str,
unixtimestamp:Date.parse(datetimepicker_val)
}) 
.done(function( data ) {
  console.log(document.getElementById("c99").value);
console.log(data);
document.getElementById("submitbuttonresponse").style.display="block";
document.getElementById("submitbuttonresponse").innerHTML="<center>"+data+"</center>";

});
  }



});


  </script>
   
</body>
</html>