<html>
<head>
  <title>Course Add/Drop Portal</title>

<link rel="alternate" type="application/json+oembed" href="https://www.jotform.com/oembed/?format=json&url=http%3A%2F%2Fwww.jotform.com%2Fform%2F40965069427463" title="oEmbed Form"><link rel="alternate" type="text/xml+oembed" href="https://www.jotform.com/oembed/?format=xml&url=http%3A%2F%2Fwww.jotform.com%2Fform%2F40965069427463" title="oEmbed Form">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="HandheldFriendly" content="true">
<title>Course Add/Drop Request</title>
<link href="./css/formCss.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="./css/pastel.css">
<link type="text/css" media="print" rel="stylesheet" href="./css/printForm.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="./css/jotform.js" type="text/javascript"></script><style type="text/css"></style>
<script type="text/javascript">
   JotForm.init(function(){
      $('input_5').hint('ex: myname@iitrpr.ac.in');
      $('input_10').hint('ex: 201XXXXXXXX');
      $('input_9').hint('ex: 20XX');
   });
</script>





  <script type="text/javascript">
  (function() {
    var po = document.createElement('script');
    po.type = 'text/javascript'; po.async = true;
    po.src = 'https://plus.google.com/js/client:plusone.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(po, s);
  })();
  </script>
  <!-- JavaScript specific to this application that is not related to API
     calls -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" ></script>
</head>
<body>



<div class="form-header-group">
          <h1 id="header_1" class="form-header">
            Course Add/Drop Request
          </h1>

</div>



<div id="academic" >
<form action="academic.php" method="POST">

  <input type="radio" name="addteacher" value="acadapprove" id = "acadsub"> Approve/Reject Subjects <br>
  <div id = "acadpermission"></div>
	<input type="radio" name="addteacher" value="add"> Add Teacher <br> 
	<div style="margin-left:10em; display: inline-block">Coursecode: <input type ="text" name="ccode">  </div> <br>
	<div style="margin-left:10em">Coursename: <input type ="text" name="cname">  </div>
	<div style="margin-left:10em">teachername:<input type ="text" name="cteachername"> <br> </div>
	<div style="margin-left:10em">emailid: <input type ="text" name="temail"> <br><br><br> </div>
	<input type="radio" name="addteacher" value="set">Setting Deadline for form submission <br>
	<div style="margin-left:10em">Enter date: <input type="date" name = "date"> </div><br><br><br>
	<input type="radio" name="addteacher" value="update"> Update Teacher: 
	<div style="margin-left:10em">Coursecode: <input type = "text" name="ccode1"> </div>
	<div style="margin-left:10em">Coursename: <input type = "text" name="cname1"> </div>
	<div style="margin-left:10em">New Teachername: <input type = "text" name="cteachername1"> </div>
	<div style="margin-left:10em">EMail: <input type = "text" name="temail1"> </div>
	<br>
	<input type="submit" name="submit">
	</form>
</div>






<div id = "instruct">     <!--div id for instrcuto -->
</div>



<div id = "advisor">     <!--div id for instrcuto -->
</div>

<center>
  <div id="gConnect">
    <h1> Click Below To LoGin With Google+ </h1>
	
      <span id="signinButton">
      <span
        class="g-signin"
        data-callback="signinCallback"
        data-clientid="309443142407-hb3pd0dei1qj3uru532strgag2endiuc.apps.googleusercontent.com"
        data-cookiepolicy="single_host_origin"
        data-requestvisibleactions="http://schema.org/AddAction"
        data-scope="https://www.googleapis.com/auth/plus.login email">
      </span>
    </span>
</div>
</center>
  <div id="authOps" style="display:none">
    <button style="margin-left: 85em" id="disconnect" 
    onclick="gapi.auth.signOut();" >Signout</button>
  </div>

<div id = "ask" style="display:none">
  <center>
    <h3>What do you want to do?</h3><br>
    <input type = "radio" name = "choice" id = "add">ADD/DROP Subjects
    <input type = "radio" name = "choice" id = "check">Check status
  </center>
</div>

<div id = "checkee" style="display:none">
    <center>
      Entry No.  <input type = "text" name = "student_check" id ="check_en" required><br>
      Semester   <input type = "text" id = "check_sem" required></br>
      <input type = "submit" onclick="checkstat()" value="Check">
      <div id = "result"></div>
    </center>
</div>



<div id="coursee">

<form class="jotform-form" action="write.php" method="post" name="form_40965069427463" id="40965069427463" accept-charset="utf-8" novalidate="true">
  <input type="hidden" name="formID" value="40965069427463">
  <div class="form-all">
    <ul class="form-section">

      <li class="form-line" id="id_3" >
        <label class="form-label-left" id="label_3" for="input_3"> Name <span class="form-required">*</span></label>
        <div id="cid_3" class="form-input" ><span class="form-sub-label-container"><span id ="visible_name"></span><input class="form-textbox validate[required]" type="hidden" size="10" name="FN" id="first_3">
            <label class="form-sub-label" for="first_3" id="sublabel_first"></label></span><span class="form-sub-label-container"><input class="form-textbox" type="hidden" size="10" name="MN" id="middle_3">
            <label class="form-sub-label" for="middle_3" id="sublabel_middle"></label></span><span class="form-sub-label-container"><input class="form-textbox" type="hidden" size="15" name="LN" id="last_3">
            <label class="form-sub-label" for="last_3" id="sublabel_last"> </label></span>
        </div>
      </li>
      <li class="form-line" id="id_5">
        <label class="form-label-left" id="label_5" for="input_5"> E-mail<span class="form-required">*</span> </label>
        <div id="cid_5" class="form-input">
          <span id ="visible_email"></span>
<!--           <input type="hidden" class=" form-textbox validate[required,Email]" id="input_5" name="Email" size="50" value="" placeholder="ex: myname@iitrpr.ac.in">
 -->        </div>
      </li>
      </li>
      <li class="form-line" id="id_5">
        <label class="form-label-left" id="label_5" for="input_5"> Department <span class="form-required">*</span> </label>
        <div id="cid_5" class="form-input">
      <select class = "form-textbox" name ="Department">
        <option value="CSE">Computer Science Department</option>
        <option value="EEB">Electrical Department</option>
        <option value="MEB">Mechanical Department</option>
      </select>
        </div>
      </li>
      <li class="form-line" id="id_10">
        <label class="form-label-left" id="label_10" for="input_10"> Entry Number<span class="form-required">*</span> </label>
        <div id="cid_10" class="form-input">
          <input type="email" class=" form-textbox validate[required,AlphaNumeric]" id="input_10" name="Entryno" size="30" value="" placeholder="ex: 201XXXXXXXX">
        </div>
      </li>
      <li class="form-line" id="id_9">
        <label class="form-label-left" id="label_9" for="input_9"> Batch <span class="form-required">*</span> </label>
        <div id="cid_9" class="form-input">
          <input type="email" class=" form-textbox validate[required,Numeric]" id="input_9" name="Batch" size="20" value="" placeholder="ex: 20XX">
        </div>
      </li>
      <li class="form-line" id="id_5">
        <label class="form-label-left" id="label_5" for="input_5"> Semester <span class="form-required">*</span> </label>
        <div id="cid_5" class="form-input">
      <select class = "form-textbox" name ="Semester">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
      </select>
        </div>
      </li>
      <li class="form-line" id="id_11">
        <label class="form-label-top" id="label_11" for="input_11"> Credits Earned in Previous 2 Semesters<span class="form-required">*</span> </label>

      <li class="form-line" id="id_3" >
        <label class="form-label-left" id="label_3" for="input_3"> Credits <span class="form-required">*</span></label>
        <div id="cid_3" class="form-input" ><span class="form-sub-label-container"><input class="form-textbox validate[required]" type="text" size="10" name="C1" id="first_3">
            <label class="form-sub-label" for="first_3" id="sublabel_first"> Previous </label></span><span class="form-sub-label-container"><input class="form-textbox validate[required]" type="text" size="10" name="C2" id="middle_3">
            <label class="form-sub-label" for="middle_3" id="sublabel_middle"> Previous 3 previous </label></span>
      </div>
      </li>

        
      </li>
      <li class="form-line" id="id_11">
        <label class="form-label-top" id="label_11" for="input_11"> Previous 2 Semesters' SG<span class="form-required">*</span> </label>

      <li class="form-line" id="id_3" >
        <label class="form-label-left" id="label_3" for="input_3"> SGPA <span class="form-required">*</span></label>
        <div id="cid_3" class="form-input" ><span class="form-sub-label-container"><input class="form-textbox validate[required]" type="text" size="10" name="SG1" id="first_3">
            <label class="form-sub-label" for="first_3" id="sublabel_first"> Previous </label></span><span class="form-sub-label-container"><input class="form-textbox validate[required]" type="text" size="10" name="SG2" id="middle_3">
            <label class="form-sub-label" for="middle_3" id="sublabel_middle"> Previous 3 previous </label></span>
      </div>
      </li>
      <li class="form-line" id="id_11">
        <label class="form-label-top" id="label_11" for="input_11"> Previous 2 Semesters' CG<span class="form-required">*</span> </label>

      <li class="form-line" id="id_3" >
        <label class="form-label-left" id="label_3" for="input_3"> CGPA <span class="form-required">*</span></label>
        <div id="cid_3" class="form-input" ><span class="form-sub-label-container"><input class="form-textbox validate[required]" type="text" size="10" name="CG1" id="first_3">
            <label class="form-sub-label" for="first_3" id="sublabel_first"> Previous </label></span><span class="form-sub-label-container"><input class="form-textbox validate[required]" type="text" size="10" name="CG2" id="middle_3">
            <label class="form-sub-label" for="middle_3" id="sublabel_middle"> Previous 3 previous </label></span>
      </div>
      </li>


      <li class="form-line" id="id_12">

        <label class="form-label-top" id="label_12" for="input_12"> Add Course List </label>
        <div id="cid_12" class="form-input-wide">
          <table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table" style="width: 600px;">
            <tbody><tr>
              <th style="border:none">
                &nbsp;
              </th>
              <th class="form-matrix-column-headers form-matrix-column_0">
                Course Name
              </th>
              <th class="form-matrix-column-headers form-matrix-column_1">
                Course Code
              </th>
              <th class="form-matrix-column-headers form-matrix-column_2">
                Course Instructor
              </th>
              <th class="form-matrix-column-headers form-matrix-column_3">
                Credits
              </th>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                Course 1
              </th>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="aname1">-->
                  <span class ="coursename" name = "aname1"></span>
              </td>

              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="acoursecode1">-->
                <select class = "courseopt" name = "acoursecode1"></select>
              </td>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="acourseinstructor1">
 -->              
                 <span class ="instructorname" name = "acourseinstructor1"></span>
              </td>
              <td align="center" class="form-matrix-values">
                  <span class = "creditss" name = "ac1"></span>
                  <input class ="vcreditss" type="hidden" size="5" name="ac1" value = "">
               </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                Course 2
              </th>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="aname2">
 -->                            
                  <span class ="coursename" name = "aname2" ></span>
              </td>
              <td align="center" class="form-matrix-values">
                <select class = "courseopt" name = "acoursecode2"></select>
<!--                 <input class="form-textbox" type="text" size="5" name="acoursecode2">
 -->              </td>
              <td align="center" class="form-matrix-values">
                <span class ="instructorname" name = "acourseinstructor2"></span>
<!--                 <input class="form-textbox" type="text" size="5" name="acourseinstructor2">
 -->              </td>
              <td align="center" class="form-matrix-values">
                  <span class = "creditss" name = "ac2"></span>
                  <input class ="vcreditss" type="hidden" size="5" name="ac2" value = "">
<!--                 <input class="form-textbox" type="text" size="5" name="ac2">
 -->              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                Course 3
              </th>
              <td align="center" class="form-matrix-values">
                  <span class ="coursename" name = "aname3" ></span>
<!--                 <input class="form-textbox" type="text" size="5" name="aname3">
 -->              </td>
              <td align="center" class="form-matrix-values">
                <select class = "courseopt" name = "acoursecode3"></select>              
<!--                 <input class="form-textbox" type="text" size="5" name="acoursecode3">
 -->              </td>
              <td align="center" class="form-matrix-values">
                <span class ="instructorname" name = "acourseinstructor3"></span>
<!--                 <input class="form-textbox" type="text" size="5" name="acourseinstructor3">
 -->              </td>
              <td align="center" class="form-matrix-values">
                  <span class = "creditss" name = "ac3"></span>
                  <input class ="vcreditss" type="hidden" size="5" name="ac3" value = "">
<!--                 <input class="form-textbox" type="text" size="5" name="ac3">
 -->              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                Course 4
              </th>
              <td align="center" class="form-matrix-values">
                  <span class ="coursename" name = "aname4" ></span>
<!--                 <input class="form-textbox" type="text" size="5" name="aname4">
 -->              </td>
              <td align="center" class="form-matrix-values">
                <select class = "courseopt" name = "acoursecode4"></select>
<!--                 <input class="form-textbox" type="text" size="5" name="acoursecode4">
 -->              </td>
              <td align="center" class="form-matrix-values">
                <span class ="instructorname" name = "acourseinstructor4"></span>
<!--                 <input class="form-textbox" type="text" size="5" name="acourseinstructor4">
 -->              </td>
              <td align="center" class="form-matrix-values">
                  <span class = "creditss" name = "ac4"></span>
                  <input class ="vcreditss" type="hidden" size="5" name="ac4" value = "">
<!--                 <input class="form-textbox" type="text" size="5" name="ac4">
 -->              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                Course 5
              </th>
              <td align="center" class="form-matrix-values">
                  <span class ="coursename" name = "aname5" ></span>
<!--                   <input class="form-textbox" type="text" size="5" name="aname5">
 -->          </td>
              <td align="center" class="form-matrix-values">
                <select class = "courseopt" name = "acoursecode5"></select>
<!--                 <input class="form-textbox" type="text" size="5" name="acoursecode5">
 -->              </td>
              <td align="center" class="form-matrix-values">
                <span class ="instructorname" name = "acourseinstructor5"></span>
<!--                 <input class="form-textbox" type="text" size="5" name="acourseinstructor5">
 -->              </td>
              <td align="center" class="form-matrix-values">
                  <span class = "creditss" name = "ac5"></span>
                  <input class ="vcreditss" type="hidden" size="5" name="ac5" value = "">
<!--                 <input class="form-textbox" type="text" size="5" name="ac5">
 -->              </td>
            </tr>
          </tbody></table>
        </div>
      </li>
      <li class="form-line" id="id_15">
        <label class="form-label-top" id="label_15" for="input_15"> Drop Course List </label>
        <div id="cid_15" class="form-input-wide">
          <table summary="" cellpadding="4" cellspacing="0" class="form-matrix-table" style="width: 600px;">
            <tbody><tr>
              <th style="border:none">
                &nbsp;
              </th>
              <th class="form-matrix-column-headers form-matrix-column_0">
                Course Name
              </th>
              <th class="form-matrix-column-headers form-matrix-column_1">
                Course Code
              </th>
              <th class="form-matrix-column-headers form-matrix-column_2">
                Course Instructor
              </th>
              <th class="form-matrix-column-headers form-matrix-column_3">
                Credits
              </th>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                Course 1
              </th>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dname1">
 -->                  <span class ="coursename" name = "dname1" ></span>

               </td>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dcoursecode1">
 -->               <select class = "courseopt" name = "dcoursecode1"></select>

               </td>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dcourseonstructor1">
 -->                <span class ="instructorname" name = "dcourseonstructor1"></span>
               </td>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dc1">
 -->                  <span class = "creditss" name = "dc1"></span>
                      <input class ="vcreditss" type="hidden" size="5" name="dc1" value = "">
               </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                Course 2
              </th>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dname2">
 -->              <span class ="coursename" name = "dname2" ></span>           
              </td>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dcoursecode2">
 -->              <select class = "courseopt" name = "dcoursecode2"></select>
               </td>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dcourseinstructor2">
 -->                <span class ="instructorname" name = "dcourseinstructor2"></span>
               </td>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dc2">
 -->              <span class = "creditss" name = "dc1"></span>
                  <input class ="vcreditss" type="hidden" size="5" name="dc2" value = "">
              </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                Course 3
              </th>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dname3"> -->
                  <span class ="coursename" name = "dname3" ></span>
              </td>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dcoursecode3">
 -->                <select class = "courseopt" name = "dcoursecode3"></select>
               </td>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dcourseinstructor3">
 -->                 <span class ="instructorname" name = "dcourseinstructor3"></span>
               </td>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dc3">
 -->               <span class = "creditss" name = "dc1"></span>
                  <input class ="vcreditss" type="hidden" size="5" name="dc3" value = "">

               </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                Course 4
              </th>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dname4">
 -->                 <span class ="coursename" name = "dname4" ></span>
               </td>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dcoursecode4">
 -->                <select class = "courseopt" name = "dcoursecode4"></select>
               </td>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dcourseinstructor4">
 -->                 <span class ="instructorname" name = "dcourseinstructor4"></span>
               </td>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dc4">
 -->                  <span class = "creditss" name = "dc1"></span>
                      <input class ="vcreditss" type="hidden" size="5" name="dc4" value = "">
               </td>
            </tr>
            <tr>
              <th align="left" class="form-matrix-row-headers">
                Course 5
              </th>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dname5">
 -->                  <span class ="coursename" name = "dname5" ></span>
               </td>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dcoursecode5">
 -->                  <select class = "courseopt" name = "dcoursecode5"></select>
               </td>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dcourseinstructor5">
 -->                 <span class ="instructorname" name = "dcourseinstructor5"></span>
               </td>
              <td align="center" class="form-matrix-values">
<!--                 <input class="form-textbox" type="text" size="5" name="dc5">
 -->                  <span class = "creditss" name = "dc1"></span>
                      <input class ="vcreditss" type="hidden" size="5" name="dc5" value = "">
               </td>
            </tr>
          </tbody></table>
        </div>
      </li>
      <li class="form-line" id="id_2">
        <div id="cid_2" class="form-input-wide">
          <div style="margin-left:226px" class="form-buttons-wrapper">
            <button id="input_2" type="submit" class="form-submit-button">
              Submit
            </button>
          </div>
        </div>
      </li>
      <li style="display:none">
        Should be Empty:
        <input type="text" name="website" value="">
      </li>
    </ul>
  </div>
  <input type="hidden" id="simple_spc" name="simple_spc" value="40965069427463-40965069427463">
  <script type="text/javascript">
  document.getElementById("si" + "mple" + "_spc").value = "40965069427463-40965069427463";
  </script>
  <input type="hidden" id="raamaa" value="" name="Email">
</form><img src="./css/40965069427463" style="display:none">

</div>
  <script type="text/javascript">
    (function() {
     var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
     po.src = 'https://apis.google.com/js/client:plusone.js';
     var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
   })();
  </script>

</body>

<script type="text/javascript">
  function checkstat () 
  {
    var en = $('#check_en').val();
    var sem = $('#check_sem').val();
    console.log(en);
    console.log(sem);
    // body...
    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
        document.getElementById("result").innerHTML=xmlhttp.responseText;
      }
    }
    xmlhttp.open("GET","status.php?Entryno="+en+"&sem="+sem,true);
    xmlhttp.send();
  }
</script>

<script type="text/javascript">
  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  }
  else
  {// code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function()
  {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
      document.getElementById("acadpermission").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","acad_sub.php",true);
  xmlhttp.send();
  $('#acadpermission').hide();
  $("input[name=addteacher]").change(function () {
      if ($('#acadsub').is(":checked")) 
      {
        $('#acadpermission').show();
      } 
      else 
      {
          $('#acadpermission').hide();
      }
  });
</script>

<script type = "text/javascript" src = "js/main.js"></script>
<script type = "text/javascript" src = "js/getsubs.js"></script>
</html>