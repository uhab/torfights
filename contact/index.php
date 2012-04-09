<?php

$page = "contact";
$title = "Contact - TorFights";
$desc = "Contact us about how to join or with questions.";
include("../inc/header.php");

?>

<h1>Contact</h1>

<p>Intro text.</p>

<p>Contact form here.</p>

<link rel="stylesheet" type="text/css" href="http://www.emailmeform.com/builder/styles/dynamic.php?t=post" />
<link rel="stylesheet" type="text/css" href="http://www.emailmeform.com/builder/theme_css/aU4b9wfLe7" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript">
if (typeof jQuery == 'undefined'){
    document.write(unescape("%3Cscript src='http://www.emailmeform.com/builder/js/jquery-1.4.4.min.js' type='text/javascript'%3E%3C/script%3E"));
}
</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script type="text/javascript">
if (typeof $.ui == 'undefined'){
    document.write(unescape("%3Cscript src='http://www.emailmeform.com/builder/js/jquery-ui-1.7.2.custom.min.js' type='text/javascript'%3E%3C/script%3E"));
}
</script>
<script type="text/javascript" src="http://www.emailmeform.com/builder/js/dynamic.php?t=post&t2=0&use_CDN=true"></script>
<div id="emf-container-outer">
  <div id="emf-container" style="width:805px">
    <div id="emf-logo">
      <a>EmailMeForm</a>
    </div>
    <form id="emf-form" class="topLabel" enctype="multipart/form-data" method="post" action="http://www.emailmeform.com/builder/form/aU4b9wfLe7" name="emf-form">
      <ul>
        <li id="emf-li-0" class="emf-li-field emf-field-text data_container" style="text-align:left">
          <label class="emf-label-desc" for="element_0">Legacy Name: <span>*</span></label>
          <div class="emf-div-field">
            <input id="element_0" name="element_0" value="" size="50" type="text" class="validate[required]" />
          </div>
          <div class="emf-clear"></div>
        </li>
        <li id="emf-li-1" class="emf-li-field emf-field-text data_container" style="text-align:left">
          <label class="emf-label-desc" for="element_1">Character Name: <span>*</span></label>
          <div class="emf-div-field">
            <input id="element_1" name="element_1" value="" size="50" type="text" class="validate[required]" />
          </div>
          <div class="emf-clear"></div>
        </li>
        <li id="emf-li-2" class="emf-li-field emf-field-text data_container" style="text-align:left">
          <label class="emf-label-desc" for="element_2">Companion Name: <span>*</span></label>
          <div class="emf-div-field">
            <input id="element_2" name="element_2" value="" size="50" type="text" class="validate[required]" />
          </div>
          <div class="emf-clear"></div>
        </li>
        <li id="emf-li-3" class="emf-li-field emf-field-email data_container" style="text-align:left">
          <label class="emf-label-desc" for="element_3">Email: <span>*</span></label>
          <div class="emf-div-field">
            <input id="element_3" name="element_3" class="validate[required,custom[email]]" value="" size="50" type="text" />
          </div>
          <div class="emf-clear"></div>
          <div class="emf-fake-li-wrapper">
            <label class="emf-label-desc" for="element_3_confirm">Confirm Email:</label>
            <div class="emf-div-field">
              <input id="element_3_confirm" class="validate[[confirm[element_3]]" value="" size="50" type="text" onpaste="return false;" />
            </div>
            <div class="emf-clear"></div>
          </div>
        </li>
        <li id="emf-li-4" class="emf-li-field emf-field-radio data_container" style="text-align:left">
          <label class="emf-label-desc" for="element_4">Tournament desired:</label>
          <div class="emf-div-field">
            <div class="one_column">
              <input id="element_4_0" name="element_4" value="Bumfights (Companion vs Companion)" class="validate[optional]" type="radio" /><label class="padleft-w5" for="element_4_0">Bumfights
              (Companion vs Companion)</label>
            </div>
            <div class="one_column">
              <input id="element_4_1" name="element_4" value="1v1 Regular PVP" class="validate[optional]" type="radio" /><label class="padleft-w5" for="element_4_1">1v1 Regular PVP</label>
            </div>
            <div class="one_column">
              <input id="element_4_2" name="element_4" value="2v2 (Player &amp; Companion vs. Player &amp; Companion)" class="validate[optional]" type="radio" /><label class="padleft-w5" for=
              "element_4_2">2v2 (Player &amp; Companion vs. Player &amp; Companion)</label>
            </div>
            <div class="one_column">
              <input id="element_4_3" name="element_4" value="1v1 Street fights" class="validate[optional]" type="radio" /><label class="padleft-w5" for="element_4_3">1v1 Street fights</label>
            </div>
            <div class="one_column">
              <input id="element_4_4" name="element_4" value="Other" class="validate[optional]" type="radio" /><label class="padleft-w5" for="element_4_4">Other</label>
              <div class="emf-allow-other">
                <input type="text" onclick="document.getElementById('element_4_4').checked = 'checked';" onchange="document.getElementById('element_4_4').value = this.value;" name="element_4_other"
                value="" />
              </div>
            </div>
            <div class="emf-clear"></div>
          </div>
          <div class="emf-clear"></div>
        </li>
        <li id="emf-li-5" class="emf-li-field emf-field-text data_container" style="text-align:left">
          <label class="emf-label-desc" for="element_5">Subject: <span>*</span></label>
          <div class="emf-div-field">
            <input id="element_5" name="element_5" value="" size="50" type="text" class="validate[required]" />
          </div>
          <div class="emf-clear"></div>
        </li>
        <li id="emf-li-6" class="emf-li-field emf-field-textarea data_container" style="text-align:left">
          <label class="emf-label-desc" for="element_6">Message: <span>*</span></label>
          <div class="emf-div-field">
            <textarea id="element_6" name="element_6" cols="100" rows="15" class="validate[required]">
</textarea>
          </div>
          <div class="emf-clear"></div>
        </li>
        <li id="emf-li-recaptcha">
          <script type="text/javascript">
//<![CDATA[
                                        
                                $(function(){
                                        $('#recaptcha_response_field').addClass('validate[required]');
                                });
          //]]>
          </script>
          <div>
            <script type="text/javascript">
//<![CDATA[
            var RecaptchaOptions = {
                theme: 'clean',
                custom_theme_widget: 'emf-recaptcha_widget'
                };
            //]]>
            </script> <script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LchicQSAAAAAGksQmNaDZMw3aQITPqZEsX77lT9">
</script> <noscript><iframe src="https://www.google.com/recaptcha/api/noscript?k=6LchicQSAAAAAGksQmNaDZMw3aQITPqZEsX77lT9" height="300" width="500" frameborder="0"></iframe><br />
            <textarea name="recaptcha_challenge_field" rows="3" cols="40">
</textarea> <input type="hidden" name="recaptcha_response_field" value="manual_challenge" /></noscript>
          </div>
        </li>
        <li id="emf-li-post-button" class="left">
          <input value="Submit" type="submit" onmouseover="return true;" />
        </li>
      </ul><input name="element_counts" value="7" type="hidden" /> <input name="embed" value="forms" type="hidden" />
    </form>
  </div>
</div><br />
<div style="text-align:center">
  <font face="Verdana" size="2" color="#000000">Powered by</font><span style="position: relative; padding-left: 3px; bottom: -5px;"><img src=
  "http://www.emailmeform.com/builder/images/footer-logo.png" /></span><font face="Verdana" size="2" color="#000000">EMF</font> <a style="text-decoration:none;" href="http://www.emailmeform.com/"
  target="_blank"><font face="Verdana" size="2" color="#000000">Online Form</font></a><br />
  <a style="line-height:20px;font-size:70%;text-decoration:none;" href="http://www.emailmeform.com/report-abuse.html?http://www.emailmeform.com/builder/form/aU4b9wfLe7" target="_blank"><font face=
  "Verdana" size="2" color="#000000">Report Abuse</font></a>
</div><script type="text/javascript">
//<![CDATA[
EMF_jQuery(function(){
        EMF_jQuery("#emf-form").validationEngine({
                validationEventTriggers:"blur",
                scroll:true
        });



        EMF_jQuery("#emf-form ul li").mousedown(highlight_field_on_mousedown);
        EMF_jQuery("#emf-form ul li input, #emf-form ul li textarea, #emf-form ul li select").focus(highlight_field_on_focus);

        var form_obj=EMF_jQuery("#emf-container form");
        if(form_obj.length>0 && form_obj.attr('action').indexOf('#')==-1){
                form_obj.attr('action', form_obj.attr('action')+document.location.hash);
        }

        init_rules();
});

EMF_jQuery(window).load(function(){
        post_message_for_frame_height();
        
});



var emf_widgets={text : 
                        function(index){
                                return $("#element_"+index).val();
                        }
                ,number : 
                        function(index){
                                return $("#element_"+index).val();
                        }
                ,textarea : 
                        function(index){
                                return $("#element_"+index).val();
                        }
                ,checkbox : 
                        function(index){
                                var arr=new Array();
                                $("input[name='element_"+index+"[]']:checked").each(function(){
                                        arr[arr.length]=this.value;                             
                                });
                                var result=arr.join(", ");
                                return result;
                        }
                ,radio : 
                        function(index){
                                var result="";
                                $("input[name=element_"+index+"]:checked").each(function(){
                                        result=this.value;                              
                                });
                                return result;
                        }
                ,select : 
                        function(index){
                                return $("#element_"+index).val();
                        }
                ,email : 
                        function(index){
                                return $("#element_"+index).val();
                        }
                ,phone : 
                        function(index){
                                var arr=new Array();
                                $("input[id^=element_"+index+"_]").each(function(){
                                        arr[arr.length]=this.value;
                                });
                                
                                var result="";
                                if(arr.length>0){
                                        result=arr.join("-");
                                }else{
                                        result=$("#element_"+index).val();
                                }
                                return result;
                        }
                ,datetime : 
                        function(index){
                                var result="";
                                
                                var date_part="";
                                if($("#element_"+index+"_year").length==1){
                                        date_part=$("#element_"+index+"_year-mm").val()+"/"+$("#element_"+index+"_year-dd").val()+"/"+$("#element_"+index+"_year").val();
                                }

                                var time_part="";
                                if($("#element_"+index+"_hour").length==1){
                                        time_part=$("#element_"+index+"_hour").val()+":"+$("#element_"+index+"_minute").val()+" "+$("#element_"+index+"_ampm").val();
                                }
                                
                                if(date_part && time_part){
                                        result=date_part+" "+time_part;
                                }else{
                                        result=date_part ? date_part : time_part;
                                }
                                
                                return result;
                        }
                ,url : 
                        function(index){
                                return $("#element_"+index).val();
                        }
                ,file : 
                        function(index){
                                return $("#element_"+index).val();
                        }
                ,select_multiple : 
                        function(index){
                                return $("#element_"+index).val();
                        }
                ,price : 
                        function(index){
                                var result="";
                                var arr=new Array();
                                $("input[id^=element_"+index+"_]").each(function(){
                                        arr[arr.length]=this.value;
                                });
                                result=arr.join(".");
                                return result;
                        }
                ,hidden : 
                        function(index){
                                return $("#element_"+index).val();
                        }
                ,section_break : 
                        function(index){
                                return "";
                        }
                ,page_break : 
                        function(index){
                                return "";
                        }
                ,deprecated : 
                        function(index){
                                return $("#element_"+index).val();
                        }
                ,address : 
                        function(index){
                                var result="";
                                var element_arr=$("input,select").filter("[name='element_"+index+"[]']").toArray();
                                result=element_arr[0].value+" "+element_arr[1].value+"\n"
                                        +element_arr[2].value+","+element_arr[3].value+" "+element_arr[4].value+"\n"
                                        +element_arr[5].value
                                return result;
                        }
                ,name : 
                        function(index){
                                var arr=new Array();
                                $("input[id^=element_"+index+"_]").each(function(){
                                        arr[arr.length]=this.value;
                                });
                                var result=arr.join(" ");
                                return result;
                        }
                };

var emf_condition_id_to_js_map={1 : 
                        function(field_value, value){
                                return field_value.indexOf(value)>-1;
                        }
                ,2 : 
                        function(field_value, value){
                                return field_value.indexOf(value)==-1;
                        }
                ,3 : 
                        function(field_value, value){
                                return field_value.indexOf(value)==0;
                        }
                        ,4 : 
                        function(field_value, value){
                                return field_value.indexOf(value)==field_value.length-value.length;
                        }
                ,5 : 
                        function(field_value, value){
                                return field_value==value;
                        }
                ,6 : 
                        function(field_value, value){
                                return field_value!=value;
                        }
                ,7 : 
                        function(field_value, value){
                                return field_value==value;
                        }
                ,8 : 
                        function(field_value, value){
                                return field_value>value;
                        }
                ,9 : 
                        function(field_value, value){
                                return field_value<value;
                        }
                ,10 : 
                        function(field_value, value){
                                var date_for_field_value=Date.parse(field_value);
                                var date_for_value=Date.parse(value);
                                if(date_for_field_value && date_for_value){
                                        return date_for_field_value == date_for_value;
                                }
                                return false;
                        }
                ,11 : 
                        function(field_value, value){
                                var date_for_field_value=Date.parse(field_value);
                                var date_for_value=Date.parse(value);
                                if(date_for_field_value && date_for_value){
                                        return date_for_field_value < date_for_value;
                                }
                                return false;
                        }
                ,12 : 
                        function(field_value, value){
                                var date_for_field_value=Date.parse(field_value);
                                var date_for_value=Date.parse(value);
                                if(date_for_field_value && date_for_value){
                                        return date_for_field_value > date_for_value;
                                }
                                return false;
                        }
                };
var emf_group_to_field_rules_map=[];
var emf_group_to_page_rules_for_confirmation_map=[];


//]]>
</script>


<?php include("../inc/footer.php"); ?>
