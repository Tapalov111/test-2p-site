@extends('layouts.capp')

@section('content')

<!DOCTYPE html>
<html> 
<head>
<script type="text/javascript" src="http://www.wisdomweb.ru/jqueryui/js/jquery-1.6.2.min.js"></script>
<title> Тест </title>
<!-- Syntax Highlighter -->
<script type="text/javascript">
(function() {
    var script = document.createElement('script'); script.type = 'text/javascript'; script.async = true;
    script.src = 'http://www.wisdomweb.ru/gcp/prettify.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(script, s);
})();
</script>
<!-- /Syntax Highlighter -->
<link rel="icon" type="image/png" href="http://www.wisdomweb.ru/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<style type="text/css">
body
{

background-color:#edeef0;
font-family: Calibri;
margin:0px; 
padding:0px;
min-height:700px;
}

p,ul,h1,h2,h3,h4,h5,h6
{
font-family:"Calibri";
}
.bodysiteall {
    background-color: #edeef0;
    margin: 0px auto 20px auto;
    padding: 50px 0px 0px 0px;
    height: 500px;
    width: 820px;
    box-shadow: 0px 0px 10px 3px #a6a6a6;
    -webkit-box-shadow: 0px 0px 10px 3px #a6a6a6;
}
hr 
{
opacity:0.6;
filter:Alpha(opacity=60);
}




/* Оформление тестирования */
#startlearn
{
  font-family: Calibri;
  font-size:20px;
  color:white;
  height:40px;
  text-align: center;
  width:350px;
  background-color: #ed21b1;
  opacity:0.6;
  filter:Alpha(opacity=60);
  box-shadow: 0px 0px 15px 2px white;
-webkit-box-shadow: 0px 0px 15px 2px white;
  cursor:pointer;
  margin-top:20px;
  margin-bottom:20px;
  margin-left:220px;
}
#endtest
{
  clear:both;
  font-size:1em;
  color:white;
  padding-left:20px;
  padding-top:8px;
  height:27px;
  width:134px;
  background-color: #ed21b1;
  border-radius:5px;
  -moz-border-radius:5px; 
  opacity:0.6;
  filter:Alpha(opacity=60);
  box-shadow: 0px 0px 15px 2px white;
  -webkit-box-shadow: 0px 0px 15px 2px white;
  cursor:pointer;
}
#time
{
  padding-top:20px;
  position:relative;
  margin-right:10px;
  text-decoration:underline;
}
#exwrap
{
  margin-top:15px;
  margin-bottom:15px;
  margin-left:15px;
  width:300px;
  height:70px;
  border:1px solid;
  padding:10px;
}

#prevquest
{
  float:left;
  font-family:"Calibri";
  display:inline;
  padding:4px;
  padding-left:10px;
  padding-right:10px;
  margin-top:15px;
  margin-right:15px;
  margin-bottom:25px;
  width:380px;
  height:50px;
  color:white;
  text-align: center;
  font-size: 22px;
  align-items: center;
  background-color: #ed21b1;
  outline-style:none;
  opacity:0.7;
  filter:Alpha(opacity=70);
  box-shadow: 0px 0px 15px 2px white;
  -webkit-box-shadow: 0px 0px 15px 2px white;
  cursor:pointer;
}
#nextquest
{
  float:left;
  font-family:"Calibri";
  display:inline;
  padding:4px;
  font-size: 22px;
  padding-left:10px;
  padding-right:10px;
  margin-top:15px;
  width:380px;
  align-items: center;
  height:50px;
  text-align: center;
  margin-bottom:13px;
  color:white;
  background-color: #ed21b1;
  outline-style:none;
  opacity:0.7;
  filter:Alpha(opacity=70);
  box-shadow: 0px 0px 15px 2px white;
  -webkit-box-shadow: 0px 0px 15px 2px white;
  cursor:pointer;
}
#again
{
clear:both;
font-family:"Calibri";
display:inline;
padding:4px;
padding-left:10px;
padding-right:10px;
margin-top:15px;
width:145px;
border:2px #013637 solid;
margin-bottom:13px;
color:white;
background-image:url('http://www.wisdomweb.ru/images/exbutton.png');
outline-style:none;
border-radius:5px;
-moz-border-radius:5px;
opacity:0.7;
filter:Alpha(opacity=70);
box-shadow: 0px 0px 15px 2px white;
-webkit-box-shadow: 0px 0px 15px 2px white;
cursor:pointer;
margin-top:10px;
}
#question{
    font-weight:bold;
    font-size: 32px;
}
#content{
    font-size: 22px;
    font-weight:middle;
}
#testform{
    margin-left:25px;
}
/* /Оформление тестирования */
.qvbutton
{
float:left;
padding:4px;
border:2px #013637 solid;
margin-bottom:13px;
margin-left:20px;
padding-left:0px;
padding-right:0px;
text-decoration:none;
color:white;
background-image:url('http://www.wisdomweb.ru/images/exbutton.png');
border-radius:5px;
-moz-border-radius:5px;
opacity:0.7;
filter:Alpha(opacity=70);
outline-style:none;
box-shadow: 0px 0px 15px 2px white;
-webkit-box-shadow: 0px 0px 15px 2px white;
width:220px;
font-weight:bold;
text-align:center; 
}
#firsthead{
  margin-top: -20px;
     text-align: center;
    }
#wrap p {
font-size: 20px;
}


</style>


<style>

#wraplefttest span {
  cursor:pointer !important;
}

#wraplefttest span:hover {
  text-decoration:underline;
}

</style>
<script type='text/javascript'>
function hideAll()
{
   $("#wrapq1,#wrapq2,#wrapq3,#wrapq4,#wrapq5,#wrapq6,#wrapq7,#wrapq8,#wrapq9,#wrapq10,#wrapq11,#wrapq12,#wrapq13,#wrapq14,#wrapq15,#wrapq16,#wrapq17,#wrapq18,#wrapq19,#wrapq20,#wrapq21,#wrapq22,#wrapq23,#wrapq24,#wrapq25,#wrapq26,#wrapq27,#wrapq28,#wrapq29,#wrapq30,#wrapq31,#wrapq32,#wrapq33,#wrapq34,#wrapq35,#wrapq36,#wrapq37,#wrapq38,#wrapq39,#wrapq40,#wrapq41,#wrapq42,#wrapq43,#wrapq44,#wrapq45,#wrapq46,#wrapq47,#wrapq48,#wrapq49,#wrapq50,#wrapq51,#wrapq52,#wrapq53,#wrapq54,#wrapq55,#wrapq56,#wrapq57,#wrapq58,#wrapq59,#wrapq60,#wrapq61,#wrapq62,#wrapq63,#wrapq64,#wrapq65,#wrapq66,#wrapq67,#wrapq68,#wrapq69,#wrapq70").css('display','none');
}

function startTime(){
   if ($("#second").html()!=0) {
      $("#second").html(Number($("#second").html())-1);
   }
   else {
      $("#minute").html(Number($("#minute").html())-1);
      $("#second").html(59);
   }
  if ($("#second").html()<10) $("#zero").css('display','inline');
   else $("#zero").css('display','none');

  if ($("#minute").html()==0 && $("#second").html()==0) {
     alert("Время вышло. Сейчас форма будет автоматически отправлена на сервер.");
     clearInterval(window.timer);
     document.getElementById('testform').submit();
  }
}
var x=1;
$(document).ready(function(){ 
document.getElementById('testform').reset();

   $("#prevquest, #nextquest, #again").mouseover(function(){
      $(this).css('opacity','1');
   });
   $("#prevquest, #nextquest, #again").mouseout(function(){
      $(this).css('opacity','0.7');
   });

   $("#startlearn,#endtest").mouseover(function(){$(this).css('opacity','1')});
   $("#startlearn,#endtest").mouseout(function(){$(this).css('opacity','0.6')});

   $("#endtest").click(function(){
      document.getElementById('testform').submit();
   });
   $("#startlearn").click(function(){
      $("#wrap").css('display','none');
      $("#tryagain").css("display","none"); 
      $("#wrapq"+x).css("display","block");
      $("#wraplefttest").css('display','block');
      $("#prevquest").css("display","block");
      $("#nextquest").css("display","block");
      $("#again").css("display","block");
     
      document.getElementById('testform').reset();
      
   });

   $("#prevquest").click(function(){
      if (window.x>1) {
         hideAll();
         window.x--;
         $("#wrapq"+x).css("display","block");
      }
      else {
         hideAll();
         window.x=70;
         $("#wrapq"+x).css("display","block");
      }
   });

    $("#nextquest").click(function(){
       if (window.x<70){
          hideAll();
          window.x++;
          $("#wrapq"+x).css("display","block");
       }
       else {
          hideAll();
          window.x=1;
          $("#wrapq"+x).css("display","block");
       }
   });

   $("#que1").click(function(){
      hideAll();
      window.x=1;
      $("#wrapq1").css("display","block");     
    });
   $("#que2").click(function(){
      hideAll();
      window.x=2;
      $("#wrapq2").css("display","block");            
   });
   $("#que3").click(function(){
      hideAll();
      window.x=3;  
      $("#wrapq"+x).css("display","block");           
   });
   $("#que4").click(function(){
      hideAll();
      window.x=4; 
      $("#wrapq"+x).css("display","block");             
   });
   $("#que5").click(function(){
      hideAll();
      window.x=5; 
      $("#wrapq"+x).css("display","block");           
   });
   $("#que6").click(function(){
      hideAll();
      window.x=6;  
      $("#wrapq"+x).css("display","block");           
   });
   $("#que7").click(function(){
      hideAll();
      window.x=7; 
      $("#wrapq"+x).css("display","block");            
   });
   $("#que8").click(function(){
      hideAll();
      window.x=8;  
      $("#wrapq"+x).css("display","block");           
   });
   $("#que9").click(function(){
      hideAll();
      window.x=9; 
      $("#wrapq"+x).css("display","block");            
   });
   $("#que10").click(function(){
      hideAll();
      window.x=10;    
      $("#wrapq"+x).css("display","block");         
   });
   $("#que11").click(function(){
      hideAll();
      window.x=11;   
      $("#wrapq"+x).css("display","block");        
   });
   $("#que12").click(function(){
      hideAll();
      window.x=12;  
      $("#wrapq"+x).css("display","block");          
   });
   $("#que13").click(function(){
      hideAll();
      window.x=13; 
      $("#wrapq"+x).css("display","block");            
   });
   $("#que14").click(function(){
      hideAll();
      window.x=14;  
      $("#wrapq"+x).css("display","block");          
   });
   $("#que15").click(function(){
      hideAll();
      window.x=15;   
      $("#wrapq"+x).css("display","block");         
   });

   $("#que16").click(function(){
      hideAll();
      window.x=16;   
      $("#wrapq"+x).css("display","block");         
   });

   $("#que17").click(function(){
      hideAll();
      window.x=17;   
      $("#wrapq"+x).css("display","block");         
   });

   $("#que18").click(function(){
      hideAll();
      window.x=18;   
      $("#wrapq"+x).css("display","block");         
   });

   $("#que19").click(function(){
      hideAll();
      window.x=19;   
      $("#wrapq"+x).css("display","block");         
   });

   $("#que20").click(function(){
      hideAll();
      window.x=20;   
      $("#wrapq"+x).css("display","block");         
   });

   $("#que21").click(function(){
      hideAll();
      window.x=21;   
      $("#wrapq"+x).css("display","block");         
   });

   $("#que22").click(function(){
      hideAll();
      window.x=22;   
      $("#wrapq"+x).css("display","block");         
   });

   $("#que23").click(function(){
      hideAll();
      window.x=23;   
      $("#wrapq"+x).css("display","block");         
   });

   $("#que24").click(function(){
      hideAll();
      window.x=24;   
      $("#wrapq"+x).css("display","block");         
   });

   $("#que25").click(function(){
      hideAll();
      window.x=25;   
      $("#wrapq"+x).css("display","block");         
   });

   $("#que26").click(function(){
      hideAll();
      window.x=26;   
      $("#wrapq"+x).css("display","block");         
   });

   $("#que27").click(function(){
      hideAll();
      window.x=27;   
      $("#wrapq"+x).css("display","block");         
   });

   $("#que28").click(function(){
      hideAll();
      window.x=28;   
      $("#wrapq"+x).css("display","block");         
   });

  $("#que29").click(function(){
      hideAll();
      window.x=29;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que30").click(function(){
      hideAll();
      window.x=30;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que31").click(function(){
      hideAll();
      window.x=31;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que32").click(function(){
      hideAll();
      window.x=32;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que33").click(function(){
      hideAll();
      window.x=33;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que34").click(function(){
      hideAll();
      window.x=34;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que35").click(function(){
      hideAll();
      window.x=35;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que36").click(function(){
      hideAll();
      window.x=36;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que37").click(function(){
      hideAll();
      window.x=37;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que38").click(function(){
      hideAll();
      window.x=38;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que39").click(function(){
      hideAll();
      window.x=39;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que40").click(function(){
      hideAll();
      window.x=40;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que41").click(function(){
      hideAll();
      window.x=41;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que42").click(function(){
      hideAll();
      window.x=42;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que43").click(function(){
      hideAll();
      window.x=43;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que44").click(function(){
      hideAll();
      window.x=44;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que45").click(function(){
      hideAll();
      window.x=45;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que46").click(function(){
      hideAll();
      window.x=46;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que47").click(function(){
      hideAll();
      window.x=47;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que48").click(function(){
      hideAll();
      window.x=48;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que49").click(function(){
      hideAll();
      window.x=49;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que50").click(function(){
      hideAll();
      window.x=50;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que51").click(function(){
      hideAll();
      window.x=42;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que52").click(function(){
      hideAll();
      window.x=52;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que53").click(function(){
      hideAll();
      window.x=53;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que54").click(function(){
      hideAll();
      window.x=54;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que55").click(function(){
      hideAll();
      window.x=55;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que56").click(function(){
      hideAll();
      window.x=56;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que57").click(function(){
      hideAll();
      window.x=57;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que58").click(function(){
      hideAll();
      window.x=58;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que59").click(function(){
      hideAll();
      window.x=59;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que60").click(function(){
      hideAll();
      window.x=60;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que61").click(function(){
      hideAll();
      window.x=61;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que62").click(function(){
      hideAll();
      window.x=62;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que63").click(function(){
      hideAll();
      window.x=63;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que64").click(function(){
      hideAll();
      window.x=64;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que65").click(function(){
      hideAll();
      window.x=65;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que66").click(function(){
      hideAll();
      window.x=66;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que67").click(function(){
      hideAll();
      window.x=67;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que68").click(function(){
      hideAll();
      window.x=68;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que69").click(function(){
      hideAll();
      window.x=69;   
      $("#wrapq"+x).css("display","block");         
   });
  $("#que70").click(function(){
      hideAll();
      window.x=70;   
      $("#wrapq"+x).css("display","block");         
   });
   var qst=[];
   $(":radio").click(function(){
      var rnum = parseInt( $(this).attr("name").match(/(\d+)$/)[0], 10);
      $("#que" + rnum ).css("font-weight","bold");

      for (var h=1;h<=20;h++){  
         if ( $(this).attr("name")=="q"+h && qst[h]!=1 ) qst[h]=1;
      }

      if (qst[1]==1 && qst[2]==1 && qst[3]==1 && qst[4]==1 && qst[5]==1 && qst[6]==1 && qst[7]==1 && qst[8]==1 && qst[9]==1 && qst[10]==1 && qst[11]==1 && qst[12]==1 && qst[13]==1 && qst[14]==1 && qst[15]==1 && qst[16]==1 && qst[17]==1 && qst[18]==1 && qst[19]==1 && qst[20]==1) {
         $("#endtest").css("display","block");
         $("#time").css("top","-105px");
      }
   });
   $("#qbut1").click(function(){alert("Вы вызвали событие привязанное к первой кнопке.")});
   $("#qbut2").mouseover(function(){alert("Вы вызвали событие привязанное ко второй кнопке.")});
   $("#qbut3").dblclick(function(){alert("Вы вызвали событие привязанное к третьей кнопке.")});
   $("#qbut4").click(function(){ $("#qbut4-result").load("simple.php","a=24&b=3") });
    
});
   
</script>


</head>
<body onload="addStripe()">
<img src="http://www.wisdomweb.ru/editor/images/ajax-loader.gif" style="display:none" alt="AJAX загрузка" />
<header>
<div class="allneed">

<img src="http://www.wisdomweb.ru/images/homeact.png" style="display:none" alt='home' />


</div>
</header>
<div class="bodysiteall"> 
<div class="body">

<h1 id="firsthead">Тест</h1>
       @csrf

<form id='testform' method='POST' action="{{ route('test') }}">
<div id='wrap'>
<p>Опросник состоит из легких вопросов, каждый из которых имеет два ответа. <br>
Все ваши ответы равноценны, правильных или неправильных среди них нет.<br>
 </p> <hr>
<p><h2 style="margin-left: 15px;">Ваша задача:</h2><br> <p>
• прочесть каждое из утверждений вместе с двумя его возможными продолжениями; <br>
• выбрать то продолжение, которое вам свойственно в большинства жизненных ситуаций.<br>
 </p></p>
 <hr>
<p>Выбирайте вариант подолгу не задумываясь над ответами.</p><br>
<div type='button' id='startlearn'>Приступить к выполнению теста</div><br>
</div>

<!--Questions-->

<div id='wrapq1' style='display:none'>
<div id='question'><b>Вопрос 1</b>. В компании (на вечеринке) Вы</div>
<div id='content'><label><input name='q1' type="radio" value="E" required />  общаетесь со многими, включая и незнакомцев<br /></label><br>
<label>
<input name='q1' type="radio" value="I" required />  общаетесь с немногими - Вашими знакомыми<br />
</label></div> 
</div>

<div id='wrapq2' style='display:none'>
<div id='question'><b>Вопрос 2</b>. Вы человек скорее</div>
<div id='content'><label><input name='q2' type="radio" value="S" required> реалистичный, чем склонный теоретизировать<br /></label><br>
<label><input name='q2' type="radio" value="N" required> склонный теоретизировать, чем реалистичный<br /></label>
</div>
</div>

<div id='wrapq3' style='display:none'>
<div id='question'><b>Вопрос 3</b>. Как, по-вашему, что хуже:</div>
<div id='content'><label><input name='q3' type="radio" value="S" required>  витать в облаках<br /></label><br>
<label><input name='q3' type="radio" value="N" required> придерживаться проторенной дорожки<br /></label>
</div>
</div>
 
<div id='wrapq4' style='display:none'>
<div id='question'><b>Вопрос 4</b>. Вы более подвержены влиянию</div>
<div id='content'><label><input name='q4' type="radio" value="T" required>  принципов, законов<br /></label><br><label>
<input name='q4' type="radio" value="F" required>  эмоций, чувств <br /></label>
</div>
</div>

<div id='wrapq5' style='display:none'>
<div id='question'><b>Вопрос 5</b>. Вы более склонны </div>
<div id='content'><label><input name='q5' type="radio" value="T" required>  убеждать <br /></label><br><label>
<input name='q5' type="radio" value="F" required>  затрагивать чувства<br /></label>
</div>
</div>

<div id='wrapq6' style='display:none'>
<div id='question'><b>Вопрос 6</b>. Вы предпочитаете работать </div>
<div id='content'><label><input name='q6' type="radio" value="J" required>выполняя все точно в срок <br /></label><br><label>
<input name='q6' type="radio" value="P" required>не связывая себя определенными сроками<br /></label>
</div>
</div>

<div id='wrapq7' style='display:none'>
<div id='question'><b>Вопрос 7</b>. Вы склонны делать выбор  </div>
<div id='content'><label><input name='q7' type="radio" value="J" required> довольно осторожно <br /></label><br><label>
<input name='q7' type="radio" value="P" required>внезапно, импульсивно<br /></label>
</div>
</div>

<div id='wrapq8' style='display:none'>
<div id='question'><b>Вопрос 8</b>.В компании (на вечеринке) Вы  </div>
<div id='content'><label><input name='q8' type="radio" value="E" required>остаетесь допоздна, не чувствуя усталости <br /></label><br><label>
<input name='q8' type="radio" value="I" required>быстро утомляетесь и предпочитаете пораньше уйти<br /></label>
</div>
</div>

<div id='wrapq9' style='display:none'>
<div id='question'><b>Вопрос 9</b>. Вас более привлекают  </div>
<div id='content'><label><input name='q9' type="radio" value="S" required> здравомыслящие люди <br /></label><br><label>
<input name='q9' type="radio" value="N" required> люди с богатым воображением<br /></label>
</div>
</div>

<div id='wrapq10' style='display:none'>
<div id='question'><b>Вопрос 10</b>. Вам интереснее   </div>
<div id='content'><label><input name='q10' type="radio" value="S" required> то, что происходит в действительности <br /></label><br><label>
<input name='q10' type="radio" value="N" required> те события, которые могут произойти<br /></label>
</div>
</div>

<div id='wrapq11' style='display:none'>
<div id='question'><b>Вопрос 11</b>. Оценивая поступки людей, Вы больше учитываете   </div>
<div id='content'><label><input name='q11' type="radio" value="T" required> требования закона, чем обстоятельств <br /></label><br><label>
<input name='q11' type="radio" value="F" required> обстоятельства, чем требования закона<br /></label>
</div>
</div>
                                        
 <div id='wrapq12' style='display:none'>
<div id='question'><b>Вопрос 12</b>. Общаясь с другими, Вы склонны    </div>
<div id='content'>
    <label><input name='q12' type="radio" value="T" required> соблюдать формальности этикет <br /></label><br>
    <label><input name='q12' type="radio" value="F" required> проявлять свои личные, индивидуальные качества <br /></label>
</div>
</div>    

 <div id='wrapq13' style='display:none'>
<div id='question'><b>Вопрос 13</b>. Вы человек скорее    </div>
<div id='content'>
    <label><input name='q13' type="radio" value="J" required> точный, пунктуальный <br /></label><br>
    <label><input name='q13' type="radio" value="P" required> неторопливый, медлительный <br /></label>
</div>
</div>     

<div id='wrapq14' style='display:none'>
<div id='question'><b>Вопрос 14</b>. Вас больше беспокоит необходимость  </div>
<div id='content'>
    <label><input name='q14' type="radio" value="J" required> оставлять дела незаконченными <br /></label><br>
    <label><input name='q14' type="radio" value="P" required> непременно доводить дела до конца <br /></label>
</div>
</div>        

<div id='wrapq15' style='display:none'>
<div id='question'><b>Вопрос 15</b>. В кругу знакомых Вы, как правило  </div>
<div id='content'>
    <label><input name='q15' type="radio" value="E" required> в курсе происходящих там событий <br /></label><br>
    <label><input name='q15' type="radio" value="I" required> узнаете о новостях с опозданием <br /></label>
</div>
</div> 

<div id='wrapq16' style='display:none'>
<div id='question'><b>Вопрос 16</b>. Повседневные дела Вам нравится делать  </div>
<div id='content'>
    <label><input name='q16' type="radio" value="S" required> общепринятым способом <br /></label><br>
    <label><input name='q16' type="radio" value="N" required> своим оригинальным способом <br /></label>
</div>
</div> 

<div id='wrapq17' style='display:none'>
<div id='question'><b>Вопрос 17</b>. Предпочитаю таких писателей, которые  </div>
<div id='content'>
    <label><input name='q17' type="radio" value="S" required> выражаются буквально, напрямую <br /></label><br>
    <label><input name='q17' type="radio" value="N" required> пользуются аналогиями, иносказаниями <br /></label>
</div>
</div>    

<div id='wrapq18' style='display:none'>
<div id='question'><b>Вопрос 18</b>. Что Вас больше привлекает  </div>
<div id='content'>
    <label><input name='q18' type="radio" value="T" required> стройность мысли <br /></label><br>
    <label><input name='q18' type="radio" value="F" required> гармония человеческих отношений <br /></label>
</div>
</div>  

<div id='wrapq19' style='display:none'>
<div id='question'><b>Вопрос 19</b>. Вы чувствуете себя увереннее  </div>
<div id='content'>
    <label><input name='q19' type="radio" value="T" required> в логических умозаключениях <br /></label><br>
    <label><input name='q19' type="radio" value="F" required> в практических оценках ситуации <br /></label>
</div>
</div> 

<div id='wrapq20' style='display:none'>
<div id='question'><b>Вопрос 20</b>. Вы предпочитаете, когда дела  </div>
<div id='content'>
    <label><input name='q20' type="radio" value="J" required> решены и устроены <br /></label><br>
    <label><input name='q20' type="radio" value="P" required> не решены и пока не улажены <br /></label>
</div>
</div> 

<div id='wrapq21' style='display:none'>
<div id='question'><b>Вопрос 21</b>. Как по-вашему, Вы человек скорее  </div>
<div id='content'>
    <label><input name='q21' type="radio" value="J" required> серьезный, определенный <br /></label><br>
    <label><input name='q21' type="radio" value="P" required> беззаботный, беспечный  <br /></label>
</div>
</div> 

<div id='wrapq22' style='display:none'>
<div id='question'><b>Вопрос 22</b>. При телефонных разговорах Вы </div>
<div id='content'>
    <label><input name='q22' type="radio" value="E" required> заранее не продумываете все, что нужно сказать <br /></label><br>
    <label><input name='q22' type="radio" value="I" required> мысленно репетируете то, что будет сказано <br /></label>
</div>
</div> 

<div id='wrapq23' style='display:none'>
<div id='question'><b>Вопрос 23</b>. Как Вы считаете, факты </div>
<div id='content'>
    <label><input name='q23' type="radio" value="S" required> важны сами по себе <br /></label><br>
    <label><input name='q23' type="radio" value="N" required> есть проявления общих закономерностей <br /></label>
</div>
</div> 

<div id='wrapq24' style='display:none'>
<div id='question'><b>Вопрос 24</b>. Фантазеры, мечтатели обычно </div>
<div id='content'>
    <label><input name='q24' type="radio" value="T" required> раздражают Вас <br /></label><br>
    <label><input name='q24' type="radio" value="F" required> довольно симпатичны Вам <br /></label>
</div>
</div> 

<div id='wrapq25' style='display:none'>
<div id='question'><b>Вопрос 25</b>. Вы чаще действуете как человек </div>
<div id='content'>
    <label><input name='q25' type="radio" value="T" required> хладнокровный <br /></label><br>
    <label><input name='q25' type="radio" value="F" required> вспыльчивый, горячий<br /></label>
</div>
</div> 

<div id='wrapq26' style='display:none'>
<div id='question'><b>Вопрос 26</b>. Как, по-вашему, хуже быть </div>
<div id='content'>
    <label><input name='q26' type="radio" value="T" required> несправедливым <br /></label><br>
    <label><input name='q26' type="radio" value="F" required> беспощадным<br /></label>
</div>
</div> 

<div id='wrapq27' style='display:none'>
<div id='question'><b>Вопрос 27</b>. Обычно Вы предпочитаете действовать </div>
<div id='content'>
    <label><input name='q27' type="radio" value="J" required> тщательно оценив все возможности <br /></label><br>
    <label><input name='q27' type="radio" value="P" required> полагаясь на волю случая<br /></label>
</div>

</div> 
<div id='wrapq28' style='display:none'>
<div id='question'><b>Вопрос 28</b>. Вам приятнее  </div>
<div id='content'>
    <label><input name='q28' type="radio" value="J" required> покупать что-либо <br /></label><br>
    <label><input name='q28' type="radio" value="P" required> иметь возможность купить<br /></label>
</div>
</div> 

<div id='wrapq29' style='display:none'>
<div id='question'><b>Вопрос 29</b>. В компании Вы, как правило, </div>
<div id='content'>
    <label><input name='q29' type="radio" value="E" required> первым заводите беседу <br /></label><br>
    <label><input name='q29' type="radio" value="I" required> ждете, когда с Вами заговорят<br /></label>
</div>
</div> 

<div id='wrapq30' style='display:none'>
<div id='question'><b>Вопрос 30</b>. Здравый смысл </div>
<div id='content'>
    <label><input name='q30' type="radio" value="S" required> редко приводит к ошибкам <br /></label><br>
    <label><input name='q30' type="radio" value="N" required> часто заводит впросак<br /></label>
</div>
</div> 

<div id='wrapq31' style='display:none'>
<div id='question'><b>Вопрос 31</b>. Детям часто не хватает </div>
<div id='content'>
    <label> <input name='q31' type="radio" value="S" required>практичности <br /></label><br>
    <label><input name='q31' type="radio" value="N" required>воображения<br /></label>
</div>
</div> 

<div id='wrapq32' style='display:none'>
<div id='question'><b>Вопрос 32</b>. В принятии решений Вы руководствуетесь скорее </div>
<div id='content'>
    <label> <input name='q32' type="radio" value="T" required> принятыми нормами <br /></label><br>
    <label><input name='q32' type="radio" value="F" required> своими чувствами, ощущениями <br /></label>
</div>
</div> 

<div id='wrapq33' style='display:none'>
<div id='question'><b>Вопрос 33</b>. Вы человек скорее </div>
<div id='content'>
    <label> <input name='q33' type="radio" value="T" required> твердый, чем мягкий<br /></label><br>
    <label><input name='q33' type="radio" value="F" required> мягкий, чем твердый <br /></label>
</div>
</div> 

<div id='wrapq34' style='display:none'>
<div id='question'><b>Вопрос 34</b>. Что, по-вашему, больше впечатляет </div>
<div id='content'>
    <label> <input name='q34' type="radio" value="J" required> умение методично организовывать<br /></label><br>
    <label><input name='q34' type="radio" value="P" required> умение приспосабливаться и довольствоваться достигнутым<br /></label>
</div>
</div> 

<div id='wrapq35' style='display:none'>
<div id='question'><b>Вопрос 35</b>. Вы больше цените </div>
<div id='content'>
    <label> <input name='q35' type="radio" value="J" required>определенность, законченность <br /></label><br>
    <label><input name='q35' type="radio" value="P" required>открытость, многогранность<br /></label>
</div>
</div> 

<div id='wrapq36' style='display:none'>
<div id='question'><b>Вопрос 36</b>. Новые и нестандартные отношения с людьми </div>
<div id='content'>
    <label> <input name='q36' type="radio" value="E" required>стимулируют, придают Вам энергию <br /></label><br>
    <label><input name='q36' type="radio" value="I" required>утомляют Вас<br /></label>
</div>
</div> 

<div id='wrapq37' style='display:none'>
<div id='question'><b>Вопрос 37</b>. Вы чаще действуете как </div>
<div id='content'>
    <label> <input name='q37' type="radio" value="S" required> человек практического склада <br /></label><br>
    <label><input name='q37' type="radio" value="N" required> человек оригинальный, необычный<br /></label>
</div>
</div> 

<div id='wrapq38' style='display:none'>
<div id='question'><b>Вопрос 38</b>. Вы более склонны </div>
<div id='content'>
    <label> <input name='q38' type="radio" value="S" required> находить пользу в отношениях с людьми <br /></label><br>
    <label><input name='q38' type="radio" value="N" required> понимать мысли и чувства других<br /></label>
</div>
</div> 

<div id='wrapq39' style='display:none'>
<div id='question'><b>Вопрос 39</b>. Что приносит Вам большее удовлетворение </div>
<div id='content'>
    <label> <input name='q39' type="radio" value="T" required> всестороннее обсуждение спорного вопроса <br /></label><br>
    <label><input name='q39' type="radio" value="F" required> достижение соглашения по спорному вопросу<br /></label>
</div>
</div>

<div id='wrapq40' style='display:none'>
<div id='question'><b>Вопрос 40</b>.  Вы руководствуетесь более </div>
<div id='content'>
    <label> <input name='q40' type="radio" value="T" required> рассудком <br /></label><br>
    <label><input name='q40' type="radio" value="F" required> велением сердца<br /></label>
</div>
</div>  

<div id='wrapq41' style='display:none'>
<div id='question'><b>Вопрос 41</b>.  Вам удобнее выполнять работу </div>
<div id='content'>
    <label> <input name='q41' type="radio" value="J" required> по предварительной договоренности <br /></label><br>
    <label><input name='q41' type="radio" value="P" required> которая подвернулась случайно<br /></label>
</div>
</div>  

<div id='wrapq42' style='display:none'>
<div id='question'><b>Вопрос 42</b>.  Вы обычно полагаетесь  </div>
<div id='content'>
    <label> <input name='q42' type="radio" value="J" required> на организованность, порядок<br /></label><br>
    <label><input name='q42' type="radio" value="P" required> на случайность, неожиданность<br /></label>
</div>
</div>  
             
 <div id='wrapq43' style='display:none'>
<div id='question'><b>Вопрос 43</b>.  Вы предпочитаете иметь  </div>
<div id='content'>
    <label> <input name='q43' type="radio" value="E" required>много друзей<br /></label><br>
    <label><input name='q43' type="radio" value="I" required>несколько друзей<br /></label>
</div>
</div> 

<div id='wrapq44' style='display:none'>
<div id='question'><b>Вопрос 44</b>.  Вы руководствуетесь в большей степени  </div>
<div id='content'>
    <label> <input name='q44' type="radio" value="S" required> фактами, обстоятельствами<br /></label><br>
    <label><input name='q44' type="radio" value="N" required> общими положениями, принципами<br /></label>
</div>
</div>   

<div id='wrapq45' style='display:none'>
<div id='question'><b>Вопрос 45</b>.  Вас больше интересуют  </div>
<div id='content'>
    <label> <input name='q45' type="radio" value="S" required> производство и сбыт продукции<br /></label><br>
    <label><input name='q45' type="radio" value="N" required> проектирование и исследование<br /></label>
</div>
</div>   

<div id='wrapq46' style='display:none'>
<div id='question'><b>Вопрос 46</b>.  Что Вы скорее сочтете за комплимент  </div>
<div id='content'>
    <label><input name='q46' type="radio" value="T" required> Вы очень логичный человек<br /></label><br>
    <label><input name='q46' type="radio" value="F" required> Вы тонко чувствующий человек<br /></label>
</div>
</div>  

<div id='wrapq47' style='display:none'>
<div id='question'><b>Вопрос 47</b>.  Вы более цените в себе  </div>
<div id='content'>
    <label><input name='q47' type="radio" value="T" required> невозмутимость<br /></label><br>
    <label><input name='q47' type="radio" value="F" required> увлеченность<br /></label>
</div>
</div>

<div id='wrapq48' style='display:none'>
<div id='question'><b>Вопрос 48</b>. Вы предпочитаете высказывать  </div>
<div id='content'>
    <label><input name='q48' type="radio" value="J" required> окончательные утверждения<br /></label><br>
    <label><input name='q48' type="radio" value="P" required> предварительные и неоднозначные утверждения<br /></label>
</div>
</div>

<div id='wrapq49' style='display:none'>
<div id='question'><b>Вопрос 49</b>. Вы лучше чувствуете себя  </div>
<div id='content'>
    <label><input name='q49' type="radio" value="J" required> после принятия решения <br /></label><br>
    <label><input name='q49' type="radio" value="P" required> не ограничивая себя решениями<br /></label>
</div>
</div>

<div id='wrapq50' style='display:none'>
<div id='question'><b>Вопрос 50</b>. Общаясь с незнакомыми, Вы  </div>
<div id='content'>
    <label><input name='q50' type="radio" value="E" required> легко заводите  беседы <br /></label><br>
    <label><input name='q50' type="radio" value="I" required> не всегда находите общие темы для разговора<br /></label>
</div>
</div>
        
        <div id='wrapq51' style='display:none'>
<div id='question'><b>Вопрос 51</b>. Вы больше доверяете  </div>
<div id='content'>
    <label><input name='q51' type="radio" value="S" required> своему опыту <br /></label><br>
    <label><input name='q51' type="radio" value="N" required> своим предчувствиям<br /></label>
</div>
</div>  

 <div id='wrapq52' style='display:none'>
<div id='question'><b>Вопрос 52</b>. Вы чувствуете себя человеком  </div>
<div id='content'>
    <label><input name='q52' type="radio" value="S" required> более практичным <br /></label><br>
    <label><input name='q52' type="radio" value="N" required> более изобретательным, практичным<br /></label>
</div>
</div>  
          
           <div id='wrapq53' style='display:none'>
<div id='question'><b>Вопрос 53</b>. Кто заслуживает большего одобрения  </div>
<div id='content'>
    <label><input name='q53' type="radio" value="T" required> рассудительный, здравомыслящий человек <br /></label><br>
    <label><input name='q53' type="radio" value="F" required> человек глубоко переживающий<br /></label>
</div>
</div>   

 <div id='wrapq54' style='display:none'>
<div id='question'><b>Вопрос 54</b>. Вы более склонны  </div>
<div id='content'>
    <label><input name='q54' type="radio" value="T" required> быть прямым и беспристрастным <br /></label><br>
    <label><input name='q54' type="radio" value="F" required> сочувствовать людям<br /></label>
</div>
</div>  

<div id='wrapq55' style='display:none'>
<div id='question'><b>Вопрос 55</b>. Что, по-вашему, предпочтительней </div>
<div id='content'>
    <label><input name='q55' type="radio" value="J" required> удостовериться что все подготовлено и улажено <br /></label><br>
    <label><input name='q55' type="radio" value="P" required> предоставить событиям идти своим чередом<br /></label>
</div>
</div>   

<div id='wrapq56' style='display:none'>
<div id='question'><b>Вопрос 56</b>. Отношения между людьми должны строиться </div>
<div id='content'>
    <label><input name='q56' type="radio" value="J" required> на предварительной взаимной договоренности <br /></label><br>
    <label><input name='q56' type="radio" value="P" required> в зависимости от обстоятельств<br /></label>
</div>
</div>   

<div id='wrapq57' style='display:none'>
<div id='question'><b>Вопрос 57</b>. Когда звонит телефон, Вы </div>
<div id='content'>
    <label><input name='q57' type="radio" value="E" required> торопитесь подойти первым <br /></label><br>
    <label><input name='q57' type="radio" value="I" required> надеетесь, что подойдет кто-нибудь еще<br /></label>
</div>
</div>         
            
            <div id='wrapq58' style='display:none'>
<div id='question'><b>Вопрос 58</b>. Что Вы цените в себе больше </div>
<div id='content'>
    <label><input name='q58' type="radio" value="S" required> развитое чувство реальности <br /></label><br>
    <label><input name='q58' type="radio" value="N" required> пылкое воображение<br /></label>
</div>
</div>   

<div id='wrapq59' style='display:none'>
<div id='question'><b>Вопрос 59</b>. Вы больше придаете значения </div>
<div id='content'>
    <label><input name='q59' type="radio" value="S" required> тому, что сказано <br /></label><br>
    <label><input name='q59' type="radio" value="N" required> тому, как сказано<br /></label>
</div>
</div>   

<div id='wrapq60' style='display:none'>
<div id='question'><b>Вопрос 60</b>. Что выглядит большим заблуждением </div>
<div id='content'>
    <label><input name='q60' type="radio" value="T" required> излишняя пылкость, горячность <br /></label><br>
    <label><input name='q60' type="radio" value="F" required> чрезмерная объективность, беспристрастность<br /></label>
</div>
</div>  

<div id='wrapq61' style='display:none'>
<div id='question'><b>Вопрос 61</b>. Вы в основном считаете себя  </div>
<div id='content'>
    <label><input name='q61' type="radio" value="T" required> трезвым и практичным <br /></label><br>
    <label><input name='q61' type="radio" value="F" required> сердечным и отзывчивым<br /></label>
</div>
</div> 

<div id='wrapq62' style='display:none'>
<div id='question'><b>Вопрос 62</b>. Какие ситуации привлекают Вас больше  </div>
<div id='content'>
    <label><input name='q62' type="radio" value="J" required> регламентированные и упорядоченные <br /></label><br>
    <label><input name='q62' type="radio" value="P" required> неупорядоченные и нерегламентированные<br /></label>
</div>
</div> 

<div id='wrapq63' style='display:none'>
<div id='question'><b>Вопрос 63</b>. Вы человек скорее  </div>
<div id='content'>
    <label><input name='q63' type="radio" value="J" required> педантичный, чем капризный <br /></label><br>
    <label><input name='q63' type="radio" value="P" required> капризный, чем педантичный<br /></label>
</div>
</div> 

<div id='wrapq64' style='display:none'>
<div id='question'><b>Вопрос 64</b>. Вы чаще склонны  </div>
<div id='content'>
    <label><input name='q64' type="radio" value="E" required> быть открытым, доступным людям <br /></label><br>
    <label><input name='q64' type="radio" value="I" required> быть сдержанным, скрытным<br /></label>
</div>
</div> 
         
         <div id='wrapq65' style='display:none'>
<div id='question'><b>Вопрос 65</b>. В литературных произведениях Вы предпочитаете </div>
<div id='content'>
    <label><input name='q65' type="radio" value="S" required> буквальность, конкретность <br /></label><br>
    <label><input name='q65' type="radio" value="N" required> образность, переносный смысл<br /></label>
</div>
</div>      

 <div id='wrapq66' style='display:none'>
<div id='question'><b>Вопрос 66</b>. Что для Вас труднее </div>
<div id='content'>
    <label><input name='q66' type="radio" value="S" required> находить общий язык с другими <br /></label><br>
    <label><input name='q66' type="radio" value="N" required> использовать других в своих интересах<br /></label>
</div>
</div>  

<div id='wrapq67' style='display:none'>
<div id='question'><b>Вопрос 67</b>. Чего бы Вы себе больше пожелали </div>
<div id='content'>
    <label><input name='q67' type="radio" value="T" required> ясность размышлений <br /></label><br>
    <label><input name='q67' type="radio" value="F" required> умение сочувствовать<br /></label>
</div>
</div>   

<div id='wrapq68' style='display:none'>
<div id='question'><b>Вопрос 68</b>. Что хуже </div>
<div id='content'>
    <label><input name='q68' type="radio" value="T" required> быть неприхотливым <br /></label><br>
    <label><input name='q68' type="radio" value="F" required> быть излишне привередливым<br /></label>
</div>
</div>     

<div id='wrapq69' style='display:none'>
<div id='question'><b>Вопрос 69</b>. Вы предпочитаете </div>
<div id='content'>
    <label><input name='q69' type="radio" value="J" required> запланированные события <br /></label><br>
    <label><input name='q69' type="radio" value="P" required> незапланированные события<br /></label>
</div>
</div>  

<div id='wrapq70' style='display:none'>
<div id='question'><b>Вопрос 70</b>. Вы склонны поступать скорее </div>
<div id='content'>
    <label><input name='q70' type="radio" value="J" required> обдуманно, чем импульсивно <br /></label><br>
    <label><input name='q70' type="radio" value="P" required> импульсивно, чем обдуманно<br /></label>
</div>
</div>
            
          
                  



<div id='prevquest' style='display:none;'>Предыдущий вопрос</div> <div id='nextquest' style='display:none'>Следующий вопрос</div>
<div id='endtest' style='display:none;'>Завершить тест</div> 


<span style='clear:both;'></span>
</form>


<script type="text/javascript">prettyPrint();</script>





</div>

</div>

</div>
</p>
</div>
</div>
</div>
<script type="text/javascript" src="http://www.wisdomweb.ru/allscript.js"></script>


 
</body>
</html>



@endsection