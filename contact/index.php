<?php

$page = "contact";
$title = "Contact - TorFights";
$desc = "Contact us about how to join or with questions.";
include("../inc/header.php");

?>

<h1>Contact</h1>

<p>Intro text.</p>

<p>Contact form here.</p>

<div id=contactform>

<form id="emf-form" enctype="multipart/form-data" method="post" action="http://www.emailmeform.com/builder/form/aU4b9wfLe7" name="emf-form">
  <table style="text-align:left;" cellpadding="2" cellspacing="0" border="0" bgcolor="transparent">
    <tr>
      <td style="" colspan="2">
        <br />
      </td>
    </tr>
    <tr valign="top">
      <td id="td_element_label_0" style="" align="">
        <font face="Verdana" size="2" color="#000000"><b>Legacy Name:</b></font> <span style="color:red;"><small>*</small></span>
      </td>
    </tr>
    <tr>
      <td id="td_element_field_0" style="">
        <input id="element_0" name="element_0" value="" size="100" class="validate[required]" type="text" />
        <div style="padding-bottom:8px;color:#000000;"></div>
      </td>
    </tr>
    <tr valign="top">
      <td id="td_element_label_1" style="" align="">
        <font face="Verdana" size="2" color="#000000"><b>Character Name:</b></font> <span style="color:red;"><small>*</small></span>
      </td>
    </tr>
    <tr>
      <td id="td_element_field_1" style="">
        <input id="element_1" name="element_1" value="" size="100" class="validate[required]" type="text" />
        <div style="padding-bottom:8px;color:#000000;"></div>
      </td>
    </tr>
    <tr valign="top">
      <td id="td_element_label_2" style="" align="">
        <font face="Verdana" size="2" color="#000000"><b>Companion Name:</b></font> <span style="color:red;"><small>*</small></span>
      </td>
    </tr>
    <tr>
      <td id="td_element_field_2" style="">
        <input id="element_2" name="element_2" value="" size="100" class="validate[required]" type="text" />
        <div style="padding-bottom:8px;color:#000000;"></div>
      </td>
    </tr>
    <tr valign="top">
      <td id="td_element_label_3" style="" align="">
        <font face="Verdana" size="2" color="#000000"><b>Email:</b></font> <span style="color:red;"><small>*</small></span>
      </td>
    </tr>
    <tr>
      <td id="td_element_field_3" style="">
        <input id="element_3" name="element_3" class="validate[required,custom[email]]" value="" size="50" type="text" />
        <div style="padding-bottom:8px;color:#000000;"></div>
      </td>
    </tr>
    <tr valign="top">
      <td style="" align="">
        <font face="Verdana" size="2" color="#000000"><b>Confirm Email:</b></font> <span style="color:red;"><small>*</small></span>
      </td>
    </tr>
    <tr>
      <td style="">
        <input id="element_3_confirm" class="validate[confirm[element_3]]" value="" size="100" type="text" onpaste="return false;" />
      </td>
    </tr>
    <tr valign="top">
      <td id="td_element_label_4" style="" align="">
        <font face="Verdana" size="2" color="#000000"><b>Tournament desired:</b></font>
      </td>
    </tr>
    <tr>
      <td id="td_element_field_4" style="">
        <div style="width:100%;padding-bottom:5px;">
          <input id="element_4_0" name="element_4" value="Bumfights (Companion vs Companion)" class="validate[optional]" type="radio" /><font face="Verdana" size="2" color="#000000">&nbsp;Bumfights
          (Companion vs Companion)&nbsp;</font>
        </div>
        <div style="width:100%;padding-bottom:5px;">
          <input id="element_4_1" name="element_4" value="1v1 Regular PVP" class="validate[optional]" type="radio" /><font face="Verdana" size="2" color="#000000">&nbsp;1v1 Regular PVP&nbsp;</font>
        </div>
        <div style="width:100%;padding-bottom:5px;">
          <input id="element_4_2" name="element_4" value="2v2 (Player &amp; Companion vs. Player &amp; Companion)" class="validate[optional]" type="radio" /><font face="Verdana" size="2" color=
          "#000000">&nbsp;2v2 (Player &amp; Companion vs. Player &amp; Companion)&nbsp;</font>
        </div>
        <div style="width:100%;padding-bottom:5px;">
          <input id="element_4_3" name="element_4" value="1v1 Street fights" class="validate[optional]" type="radio" /><font face="Verdana" size="2" color="#000000">&nbsp;1v1 Street
          fights&nbsp;</font>
        </div>
        <div style="width:100%;padding-bottom:5px;">
          <input id="element_4_4" name="element_4" value="Other" class="validate[optional]" type="radio" /><font face="Verdana" size="2" color="#000000">&nbsp;Other&nbsp;</font><br />
          <input style="margin-left:20px;" type="text" onclick="document.getElementById('element_4_4').checked = 'checked';" onchange="document.getElementById('element_4_4').value = this.value;"
          name="element_4_other" value="" />
        </div>
        <div style="clear:both;"></div>
        <div style="padding-bottom:8px;color:#000000;"></div>
      </td>
    </tr>
    <tr valign="top">
      <td id="td_element_label_5" style="" align="">
        <font face="Verdana" size="2" color="#000000"><b>Subject:</b></font> <span style="color:red;"><small>*</small></span>
      </td>
    </tr>
    <tr>
      <td id="td_element_field_5" style="">
        <input id="element_5" name="element_5" value="" size="100" class="validate[required]" type="text" />
        <div style="padding-bottom:8px;color:#000000;"></div>
      </td>
    </tr>
    <tr valign="top">
      <td id="td_element_label_6" style="" align="">
        <font face="Verdana" size="2" color="#000000"><b>Message:</b></font> <span style="color:red;"><small>*</small></span>
      </td>
    </tr>
    <tr>
      <td id="td_element_field_6" style="">
        <textarea id="element_6" name="element_6" cols="100" rows="15" class="validate[required]">
</textarea>
        <div style="padding-bottom:8px;color:#000000;"></div>
      </td>
    </tr>
    <tr>
      <td colspan="2">
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
      </td>
    </tr>
    <tr>
      <td colspan="2" align="left">
        <input name="element_counts" value="7" type="hidden" /> <input name="embed" value="forms" type="hidden" /><input value="Submit" type="submit" /><input value="Clear" type="reset" />
      </td>
    </tr>
  </table>
</form>

</div>


<?php include("../inc/footer.php"); ?>
