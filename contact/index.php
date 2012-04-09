<?php

$page = "contact";
$title = "Contact - TorFights";
$desc = "Contact us about how to join or with questions.";
include("../inc/header.php");

?>

<h1>Contact</h1>

<p>Intro text.</p>

<p>Contact form here.</p>

<body>

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
        <li id="emf-li-post-button" cla