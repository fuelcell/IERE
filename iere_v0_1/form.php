<!--Form originally generated by <a href="http://www.phpform.org">pForm</a>-->
<?PHP include('temp_header.php');?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Create an Event</title>
<link rel="stylesheet" type="text/css" href="./style/view.css" media="all">
<script type="text/javascript" src="./style/view.js"></script>
<script type="text/javascript" src="./style/calendar.js"></script>
<script language="javascript" type="text/javascript">
     function DropDownTextToBox(objDropdown, strTextboxId) {
        document.getElementById(strTextboxId).value = objDropdown.options[objDropdown.selectedIndex].value;
        DropDownIndexClear(objDropdown.id);
        document.getElementById(strTextboxId).focus();
    }
    function DropDownIndexClear(strDropdownId) {
        if (document.getElementById(strDropdownId) != null) {
            document.getElementById(strDropdownId).selectedIndex = -1;
        }
    }
</script>
</head>
<body id="main_body" >
	<img id="top" src="./style/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Create an Event</a></h1>
		<form id="form_194272" class="appnitro" enctype="multipart/form-data" method="post" action="form_process.php">
					<div class="form_description">
			<h2>Create an Event</h2>
			<p>Be sure to fill all required fields</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Event Title</label>
		<div>
			<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Event Type</label>
		<div style="position: relative;">
		    <!--[if lte IE 6.5]><div class="select-free" id="dd3"><div class="bd" ><![endif]-->
		    <input class="element" name="element_2" type="text" maxlength="50" id="element_2" tabindex="2" onchange="DropDownIndexClear('element_2_2');" style="width: 242px; position: absolute; top: 0px; left: 0px; z-index: 2;" />
		    <!--[if lte IE 6.5]><iframe></iframe></div></div><![endif]-->
		    <select class="element medium" name="element_2_2" id="element_2_2" tabindex="1000" onchange="DropDownTextToBox(this,'element_2');" style="position: absolute; top: 0px; left: 0px; z-index: 1; width: 265px;">
		        <option value="Item 1" title="Title for Item 1">Item 1</option>
		        <option value="Item 2" title="Title for Item 2">Item 2</option>
		        <option value="Item 3" title="Title for Item 3">Item 3</option>
		    </select>
		    <script language="javascript" type="text/javascript">
	//Since the first <option> will be preselected the IndexClear function must fire once to clear that out.
		        DropDownIndexClear("element_2_2");
		    </script>
		<br /><br /></div>
		</li><li id="li_3" >
		<label class="description" for="element_3">Start Date</label>
		<span>
			<input id="element_3_1" name="element_3_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_3_1">MM</label>
		</span>
		<span>
			<input id="element_3_2" name="element_3_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_3_2">DD</label>
		</span>
		<span>
	 		<input id="element_3_3" name="element_3_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_3_3">YYYY</label>
		</span>
	
		<span id="calendar_3">
			<img id="cal_img_3" class="datepicker" src="./style/calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_3_3",
			baseField    : "element_3",
			displayArea  : "calendar_3",
			button		 : "cal_img_3",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Start Time</label>
		<span>
			<input id="element_4_1" name="element_4_1" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="element_4_2" name="element_4_2" class="element text " size="2" type="text" maxlength="2" value=""/> 
			<label>MM</label>
		</span>
		<span>
			<select class="element select" style="width:4em" id="element_4_4" name="element_4_4">
				<option value="AM" >AM</option>
				<option value="PM" >PM</option>
			</select>
			<label>AM/PM</label>
		</span> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">End Date</label>
		<span>
			<input id="element_5_1" name="element_5_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_5_1">MM</label>
		</span>
		<span>
			<input id="element_5_2" name="element_5_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_5_2">DD</label>
		</span>
		<span>
	 		<input id="element_5_3" name="element_5_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_5_3">YYYY</label>
		</span>
	
		<span id="calendar_5">
			<img id="cal_img_5" class="datepicker" src="./style/calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_5_3",
			baseField    : "element_5",
			displayArea  : "calendar_5",
			button		 : "cal_img_5",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">End Time</label>
		<span>
			<input id="element_6_1" name="element_6_1" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="element_6_2" name="element_6_2" class="element text " size="2" type="text" maxlength="2" value=""/>
			<label>MM</label>
		</span>
		<span>
			<select class="element select" style="width:4em" id="element_6_4" name="element_6_4">
				<option value="AM" >AM</option>
				<option value="PM" >PM</option>
			</select>
			<label>AM/PM</label>
		</span> 
		</li>		<li class="section_break">
			<h3>Venue Information</h3>
			<p></p>
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Venue Name</label>
		<div>
			<input id="element_7" name="element_7" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Venue Address</label>
		
		<div>
			<input id="element_8_1" name="element_8_1" class="element text large" value="" type="text">
			<label for="element_8_1">Street Address</label>
		</div>
	
		<div>
			<input id="element_8_2" name="element_8_2" class="element text large" value="" type="text">
			<label for="element_8_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="element_8_3" name="element_8_3" class="element text medium" value="" type="text">
			<label for="element_8_3">City</label>
		</div>
	
		<div class="right">
			<input id="element_8_4" name="element_8_4" class="element text medium" value="" type="text">
			<label for="element_8_4">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="element_8_5" name="element_8_5" class="element text medium" maxlength="15" value="" type="text">
			<label for="element_8_5">Postal / Zip Code</label>
		</div>
	
		<div class="right">
			<select class="element select medium" id="element_8_6" name="element_8_6"> 
			<option value="" selected="selected"></option>
<option value="Afghanistan" >Afghanistan</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="Andorra" >Andorra</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option>
<option value="Australia" >Australia</option>
<option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="Brazil" >Brazil</option>
<option value="Brunei" >Brunei</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Canada" >Canada</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Congo" >Congo</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="Côte d'Ivoire" >Côte d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="France" >France</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="Guinea-Bissau" >Guinea-Bissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="India" >India</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="New Zealand" >New Zealand</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="United States" >United States</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option>
	
			</select>
		<label for="element_8_6">Country</label>
	</div> 
		</li>		<li class="section_break">
			<h3>Event Information</h3>
			<p></p>
		</li>		<li id="li_9" >
		<label class="description" for="element_9">Admission</label>
		<span class="symbol">$</span>
		<span>
			<input id="element_9_1" name="element_9_1" class="element text currency" size="10" value="" type="text" /> .		
			<label for="element_9_1">Dollars</label>
		</span>
		<span>
			<input id="element_9_2" name="element_9_2" class="element text" size="2" maxlength="2" value="" type="text" />
			<label for="element_9_2">Cents</label>
		</span>
		 
		</li>		<li id="li_10" >
		<label class="description" for="element_10">DJs</label>
		<div>
			<textarea id="element_10" name="element_10" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_11" >
		<label class="description" for="element_11">Artists</label>
		<div>
			<textarea id="element_11" name="element_11" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_23" >
		<label class="description" for="element_23">Type(s) of Music</label>
		<span>
			<input id="element_23_1" name="element_23_1" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_23_1">1</label>
<input id="element_23_2" name="element_23_2" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_23_2">2</label>
<input id="element_23_3" name="element_23_3" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_23_3">3</label>
<input id="element_23_4" name="element_23_4" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_23_4">4</label>
<input id="element_23_5" name="element_23_5" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_23_5">5</label>
<input id="element_23_6" name="element_23_6" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_23_6">6</label>
<input id="element_23_7" name="element_23_7" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_23_7">7</label>
<input id="element_23_8" name="element_23_8" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_23_8">8</label>
<input id="element_23_9" name="element_23_9" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_23_9">9</label>
<input id="element_23_10" name="element_23_10" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_23_10">10</label>
<input id="element_23_11" name="element_23_11" class="element checkbox" type="checkbox" value="1" />
<label class="choice" for="element_23_11">11</label>

		</span> 
		</li>		<li id="li_24" >
		<label class="description" for="element_24">Age Group</label>
		<div style="position: relative;">
		    <!--[if lte IE 6.5]><div class="select-free" id="dd3"><div class="bd" ><![endif]-->
		    <input class="element" name="element_24" type="text" maxlength="50" id="element_24" tabindex="2" onchange="DropDownIndexClear('element_24_2');" style="width: 242px; position: absolute; top: 0px; left: 0px; z-index: 2;" />
		    <!--[if lte IE 6.5]><iframe></iframe></div></div><![endif]-->
		    <select class="element medium" name="element_24_2" id="element_24_2" tabindex="1000" onchange="DropDownTextToBox(this,'element_24');" style="position: absolute; top: 0px; left: 0px; z-index: 1; width: 265px;">
		        <option value="Item 1" title="Title for Item 1">Item 1</option>
		        <option value="Item 2" title="Title for Item 2">Item 2</option>
		        <option value="Item 3" title="Title for Item 3">Item 3</option>
		    </select>
		    <script language="javascript" type="text/javascript">
	//Since the first <option> will be preselected the IndexClear function must fire once to clear that out.
		        DropDownIndexClear("element_24_2");
		    </script>
		<br /><br /></div> 
		</li><li id="li_25" >
		<label class="description" for="element_25">Dress Code</label>
		<div style="position: relative;">
		    <!--[if lte IE 6.5]><div class="select-free" id="dd3"><div class="bd" ><![endif]-->
		    <input class="element" name="element_25" type="text" maxlength="50" id="element_25" tabindex="2" onchange="DropDownIndexClear('element_25_2');" style="width: 242px; position: absolute; top: 0px; left: 0px; z-index: 2;" />
		    <!--[if lte IE 6.5]><iframe></iframe></div></div><![endif]-->
		    <select class="element medium" name="element_25_2" id="element_25_2" tabindex="1000" onchange="DropDownTextToBox(this,'element_25');" style="position: absolute; top: 0px; left: 0px; z-index: 1; width: 265px;">
		        <option value="Item 1" title="Title for Item 1">Item 1</option>
		        <option value="Item 2" title="Title for Item 2">Item 2</option>
		        <option value="Item 3" title="Title for Item 3">Item 3</option>
		    </select>
		    <script language="javascript" type="text/javascript">
	//Since the first <option> will be preselected the IndexClear function must fire once to clear that out.
		        DropDownIndexClear("element_25_2");
		    </script>
		<br /><br /></div> 
		</li><li class="section_break">
			<h3>Flyer</h3>
			<p></p>
		</li>		<li id="li_12" >
		<label class="description" for="element_12">Front of Flyer</label>
		<div>
			<input id="element_12" name="element_12" class="element file" type="file"/> 
		</div>  
		</li>		<li id="li_13" >
		<label class="description" for="element_13">Back of Flyer</label>
		<div>
			<input id="element_13" name="element_13" class="element file" type="file"/> 
		</div>  
		</li>		<li class="section_break">
			<h3>For More Information</h3>
			<p></p>
		</li>		<li id="li_18" >
		<label class="description" for="element_18">Phone Number</label>
		<div>
			<input id="element_18" name="element_18" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_19" >
		<label class="description" for="element_19">Email Address</label>
		<div>
			<input id="element_19" name="element_19" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_20" >
		<label class="description" for="element_20">Web Site</label>
		<div>
			<input id="element_20" name="element_20" class="element text medium" type="text" maxlength="255" value="http://"/> 
		</div> 
		</li>		<li class="section_break">
			<h3>Additional Information</h3>
			<p></p>
		</li>		<li id="li_22" >
		<label class="description" for="element_22">Additional Event Information</label>
		<div>
			<textarea id="element_22" name="element_22" class="element textarea medium"></textarea> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="event_id" value="<?PHP echo $GLOBALS['event_id'];?>" />
                <input type="hidden" name="promoter_id" value="<?PHP echo $GLOBALS['promoter_id'];?>" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
	</div>
	<img id="bottom" src="./style/bottom.png" alt="">
	</body>
</html>