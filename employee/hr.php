<?php
	require_once('auth.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Employee Sandstonehousing</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="robots" content="noindex">
		<link rel="icon" type="image/png" href="http://sandstonehousing.com/images/favicon.ico">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:Condensed" />
		<link rel="stylesheet" type="text/css" href="http://sandstonehousing.com/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="http://sandstonehousing.com/css/styles.css" />
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://sandstonehousing.com/js/smoothscroll.js"></script>
	</head>
	<body>
		<a class="link" name="top"></a>
		<div id="head">
			<div id="top_inner">
				<img src="http://sandstonehousing.com/images/logo.png" />
				<h1>Sandstone Housing</h1>
				<div id="menu_emp">
					<p class="menu_button"><a href="http://employee.sandstonehousing.com/employee.php">Employee Home</a></p>
					<p class="menu_button"><a href="http://employee.sandstonehousing.com/calendar.php">Calendar</a></p>
					<p class="menu_button"><a href="http://employee.sandstonehousing.com/job.php">Job Opportunities</a></p>
					<p class="menu_button"><a href="http://employee.sandstonehousing.com/hr.php">HR</a></p>
					<p class="menu_button"><a href="http://employee.sandstonehousing.com/ap_onesite.php">AP/OneSite</a></p>
					<p class="menu_button"><a href="http://employee.sandstonehousing.com/tenant.php">Tenant</a></p>
					<p class="menu_button"><a href="index.php">logout</a></p>
				</div>
			</div>
		</div>
		<div id="content">
			<div id="inner">
				<div class="floatleft">
					<h2>Human Resources</h2>
					<p>Welcome to the Human Resources Department.  Here you will find all policies and forms relating to this department.  Sandstone Housing is an equal opportunity employer and provider</p>
					<div id="emp_buttons">
					<a href="#"><div class="emp_button"><p class="emp">Handbook</p></div></a>
					<a href="#payroll" class="smoothScroll"><div class="emp_button"><p class="emp">Payroll</p></div></a>
					<a href="#hire_termination" class="smoothScroll"><div class="emp_button"><p class="emp">Hire/Termination</p></div></a>
					<a href="#workers_compensation" class="smoothScroll"><div class="emp_button"><p class="emp">Workers' Compensation</p></div></a>
					<a href="#heathandsafety" class="smoothScroll"><div class="emp_button"><p class="emp">Health & Safety</p></div></a>
					<a href="#evaluation" class="smoothScroll"><div class="emp_button"><p class="emp">Evaluation</p></div></a>
					<a href="#"><div class="emp_button"><p class="emp">Insurance (coming soon)</p></div></a>
					</div>
				</div>
				<div class="floatright">
					<h3>Leave Request Form:</h3>
					<p class="medium">Leave Requests be filled out here. Please remember that a sick leave of more than three days still requires a Doctor's note.</p>
					<div id="leaverequest">
						<form method="post" action="http://sandstonehousing.com/leaverequest.php">
							<label class="leave" for="Name">*Name:</label>
							<input type="text" name="Name" id="Name" />
				
							<label class="leave" for="Email">*Email:</label>
							<input type="text" name="Email" id="Email" />
							
							<p>*Location:
							<select name="location">
								<option value="clear">---</option>
								<option value="chilchinbeto">Chilchinbeto</option>
								<option value="churchrock">Church Rock</option>
								<option value="kayenta">Kayenta</option>
								<option value="redlake">Red Lake</option>
								<option value="riopuerco">Rio Puerco</option>
								<option value="shiprock">Shiprock</option>
								<option value="tsaile">Tsaile</option>
								<option value="dineh">Dineh</option>
								<option value="corporate">Corporate</option>
							</select>
							</p>

							<label class="leave" for="todaydate">*Today's Date:</label>
							<input type="text" name="todaydate" id="todaydate" />

							<label class="leave" for="dateleave">*Date of Leave:</label>
							<input type="text" name="dateleave" id="dateleave" />

							<label class="leave" for="datereturn">*Return Date:</label>
							<input type="text" name="datereturn" id="datereturn" />

							<p>*Using vacation or sick time?: 
							<select name="reason">
								<option value="Vacation">Vacation</option>
								<option value="Sick Leave">Sick Leave</option>
							</select>
							</p>

							<label class="leave" for="Explanation">*Explanation:</label><br />
							<textarea name="Explanation" rows="20" cols="20" id="explanation"></textarea>

							<input type="submit" name="submit" value="Submit" class="submit-button" />
						</form>
					</div>
				</div>
				<hr class="hundred" />
				<div class="hr">
					<div id="left">
						<a class="link" name="payroll"><h3>Payroll</h3></a>
						<p>To download copies of the forms to your computer, click on the title of the form.</p>
						<a href="http://sandstonehousing.com/employee/hrfiles/payroll/payroll_policy.pdf"><h4>Payroll Policy</h4></a>
						<p>The purpose of the Payroll Policy is to ensure that Sandstone Housing employees are paid correctly and timely. See the defintions below:</p>
						<ol>
							<li>Timecard: The timecard is an excel worksheet that calculates time worked, sick hours, overtime, and vacation time.</li>
							<li>Time in/time out sheet: This is the sheet that the employee fills in daily to track hours worked.</li>
							<li>Overtime log: The overtime log is an excel worksheet that calculates work done over 40 hours. Overtime must be pre-approved and the reason for overtime must be documented on this log sheet.</li>
							<li>ADP: ADP is the company Sandstone Housing uses to support the payroll process.</li>
						</ol>
						<h5>Policy:</h5>
						<p>
							Timecards, time in/time out sheets, approved overtime logs, and leave requests are due every second Friday at four in the afternoon, and employees are paid the Wednesday thereafter. Timecards must be signed by the employee and their direct supervisor. Overtime logs and leave requests must have a note of approval. Payment will be based on the employee’s approved timecard. Paychecks are directly deposited into employee’s checking or savings account, or sent through FedEx to the employee’s home office.
						</p>
						<div class="scrollTop"><a href="#top" class="smoothScroll"><img src="http://sandstonehousing.com/images/scrolltop.png" /></a></div>

						<a class="link" name="hire_termination"><h3>Hire & Termination</h3></a>
						<p>To download copies of the procedures to your computer, click on the title of the procedure.</p>
						<a href="http://sandstonehousing.com/employee/hrfiles/hire_termination/hiring_procedure.pdf"><h4>Hiring Procedure</h4></a>
						<ul>
							<li>Property Manager has employment applicant fill out the Sandstone Housing application, the employee information form of the hire packet, and obtains the applicants resume, if available.</li>
							<li>Property Manager has applicant sign the release forms for background screening.</li>
							<li>Property Manager conducts interview.</li>
							<li>Once a hiring decision is made, Property Manager sends the application forms, request for background screening, and signed releases to the Human Resource Manager.</li>
							<li>When the screening results are available the Human Resource Manager will make a decision to either, approve or deny the applicant.</li>
							<li>When the decision is made to hire the applicant, the Property Manager will have the applicant fill out the remaining forms in the application packet, i.e. the W-4, the I-9, a copy of identification (examples listed on back of I-9) and the direct deposit agreement, and send them to the Human Resource Manager. (If working in Arizona, an AZ withholding form needs to be filled out also).</li>
							<li>HR will draft a hire letter for the new employee. The Human Resources Manager will then send the letter to the Property Manager to give to the new employee.</li>
							<li>Human Resource Manager will mail the Sandstone Housing Policy and Procedure Manual to the property with the new employee. Property Manager will review the Manual with the new employee. Once the manager has completely reviewed the Policy and Procedure Manual with the new employee, the new employee has to sign off the acknowledgment page, and send to Human Resource Manager.</li>
						</ul>
						<a href="http://sandstonehousing.com/employee/hrfiles/hire_termination/termination_procedure.pdf"><h4>Termination Procedure</h4></a>
						<ul>
							<li>Once employee has resigned or been asked to separate from Sandstone Housing, the Property Manager fills out a “Termination Notice”.</li>
							<li>The Property Manager and employee sign and date the notice. Property Manager will send the “Termination Notice” to the Human Resource Manager.</li>
							<li>The Property Manager will give an “Exit Interview Questionnaire” to employee to fill out.</li>
							<li>Property Manager will email the questionnaire to Human Resource Manager.</li>
							<li>The Property Manager fills out a timesheet for terminated employee with payroll hours that are due to the terminated employee and emails it to Human Resource Manager to be paid within 72 hours.</li>
							<li>If it is a voluntary quit, the employee will be paid at the next regular pay cycle.</li>
							<li>Employees that quit without a two week notice will not receive any accrued vacation time, per the Sandstone Housing Policies and Procedure Manual.</li>
						</ul>
						<a href="http://sandstonehousing.com/employee/hrfiles/hire_termination/background_screening_procedure"><h4>Background Screening Procedure</h4></a>
						<ul>
							<li>Property managers scan and email the screening request along with the three signed forms. (1. Request for Personal Consumer Report and Background Check, 2. Applicant Release Authorization Form, 3. Applicant Discloser Form)</li>
							<li>Human Resource Manager will run the checks in ADP Screening and Selection Services.</li>
							<li>When the background screenings come back from ADP they will be forwarded to the Compliance Manager for review.</li>
							<li>The Compliance Manager will determine acceptance or denial and email those results to the Property Manager and to the Human Resources Manager.</li>
							<li>No background screening results will be forwarded to the properties.</li>
						</ul>
						<div class="scrollTop"><a href="#top" class="smoothScroll"><img src="http://sandstonehousing.com/images/scrolltop.png" /></a></div>

						<a class="link" name="workers_compensation"><h3>Workers' Compensation</h3></a>
						<p>To download copies of the forms to your computer, click on the title of the form.</p>
						<a href="http://sandstonehousing.com/employee/hrfiles/workers_compensation/workers_compensation.pdf"><h4>Workers' Compensation</h4></a>
						<ul>
							<li>When an employee is injured on the job, the employee shall seek medical care as needed. The employee may choose the health care provider.</li>
							<li>The employee must fill out the “Notice of Accident Form” and the “Employee Accident Report” form. The Property Manager must sign and date the forms and give a copy to the employee.</li>
							<li>The Property Manager investigates the accident and fills out an “Employer Accident Report”.</li>
							<li>The Property Manager notifies the Human Resource Manager of the injury immediately and sends a copy of the reports.</li>
							<li>The Human Resources Manager notifies insurer of the injury/accident. A claim number will be assigned to the employee.</li>
							<li>If the employee requires follow up medical care, they must provide the claim number to the health care provider.</li>
						</ul>
						<div class="scrollTop"><a href="#top" class="smoothScroll"><img src="http://sandstonehousing.com/images/scrolltop.png" /></a></div>

						<a class="link" name="heathandsafety"><h3>Health and Safetey</h3></a>
						<p>To download copies of the forms to your computer, click on the title of the form.</p>
						<a href="http://sandstonehousing.com/employee/hrfiles/heathandsafety/safety_program.pdf"><h4>Safety Program</h4></a>
						<ul>
							<li>It is Sandstone Housing’s Safety Policy to focus on accident prevention. We will do this by supplying employees with safety training and awareness.</li>
							<li>It is each Property Manager’s responsibility to ensure that every new employee receives safety training via safety videos. It is every employee’s responsibility to report safety hazards and dangerous and/or questionable practices.</li>
							<li>It is each property’s Maintenance Supervisor’s responsibility to keep a record of hazardous materials in a MSDS binder, which is readily available for all employees.</li>
							<li>It is each property’s Maintenance Supervisor’s responsibility to inform employees of the location and proper use of PPE.</li>
							<li>It is each Property Manager’s responsibility to be aware of and follow the Sandstone Housing “Worker’s Compensation Policy and Procedure” when an employee is injured.</li>
							<li>It is each Property Manager’s responsibility to keep and make each employee aware of the first aid kit in case of minor injuries.</li>
							<li>It is each Property Manager’s responsibility to make each employee aware of medical emergency healthcare facilities. Each Property Manager needs to develop a procedure for transporting an injured employee to the healthcare provider.</li>
							<li>As stated in Sandstone Housing’s “Worker’s Compensation Policy and Procedure”, Employees, Managers, and the Human Resource Manager are responsible for carrying out the steps stated in the “Worker’s Compensation Policy and Procedure.”</li>
							<li>It is the responsibility of each Property Manager to ensure that each employee receives a copy of “Safety Tips for Employees.”</li>
							<li>Studies suggest that 85 percent of all work-related injuries could have been prevented by either the injured individual or a co-worker. Each employee must take responsibility for his or her individual safety and should encourage co-workers to do the same. This is achieved by training and being an example. Employers and managers must take the lead in setting a personal example of safety awareness and good safety habits. Your employees will adopt the attitude you set.</li>
						</ul>
						<div class="scrollTop"><a href="#top" class="smoothScroll"><img src="http://sandstonehousing.com/images/scrolltop.png" /></a></div>

						<a class="link" name="evaluation"><h3>Evaluation</h3></a>
						<p>To download copies of the forms to your computer, click on the title of the form.</p>
						<a href="http://sandstonehousing.com/employee/hrfiles/evaluation/employee_evaluation.pdf"><h4>Employee Evaluation</h4></a>
						<ul>
							<li>coming soon</li>
						</ul>
						<div class="scrollTop"><a href="#top" class="smoothScroll"><img src="http://sandstonehousing.com/images/scrolltop.png" /></a></div>
					</div>
					<div class="sidebar">
						<div class="form">
							<h4>Workers' Compensation Forms</h4>
							<hr class="seven" />
							<ul>
								<li><a href="http://sandstonehousing.com/employee/hrfiles/payroll/out_of_the_office_policy.pdf">Out of the Office Policy</a></li>
							</ul>
						</div>

						<div class="white_space" style="height:580px;"></div>

						<div class="form">
							<h4>Hire & Termination Forms</h4>
							<hr class="seven" />
							<ul>
								<li><a href="http://sandstonehousing.com/employee/hrfiles/hire_termination/background_check_authorization.pdf">Background Check Authorization</a></li>
								<li><a href="http://sandstonehousing.com/employee/hrfiles/hire_termination/company_shirt_signoff.pdf">Company Shirt Signoff</a></li>
								<li><a href="http://sandstonehousing.com/employee/hrfiles/hire_termination/criminal_background_check.pdf">Criminal Background Check</a></li>
								<li><a href="http://sandstonehousing.com/employee/hrfiles/hire_termination/direct_deposit_form.pdf">Direct Deposit Form</a></li>
								<li><a href="http://sandstonehousing.com/employee/hrfiles/hire_termination/employee_information.pdf">Employee Information</a></li>
								<li><a href="http://sandstonehousing.com/employee/hrfiles/hire_termination/employment_application.pdf">Employment Application</a></li>
								<li><a href="http://sandstonehousing.com/employee/hrfiles/hire_termination/exit_interview.pdf">Exit Interview</a></li>
								<li><a href="http://sandstonehousing.com/employee/hrfiles/hire_termination/i9_form.pdf">I-9 Form</a></li>
								<li><a href="http://sandstonehousing.com/employee/hrfiles/hire_termination/interviewing.pdf">Interviewing</a></li>
								<li><a href="http://sandstonehousing.com/employee/hrfiles/hire_termination/termination_checklist.pdf">Termination Checklist</a></li>
								<li><a href="http://sandstonehousing.com/employee/hrfiles/hire_termination/training_checklist.pdf">Training Checklist</a></li> 
								<li><a href="http://sandstonehousing.com/employee/hrfiles/hire_termination/w4_form.pdf">W-4 Form</a></li>
							</ul>
						</div>

						<div class="white_space" style="height:875px;"></div>

						<div class="form">
							<h4>Workers' Compensation Forms</h4>
							<hr class="seven" />
							<ul>
								<li><a href="http://sandstonehousing.com/employee/hrfiles/workers_compensation/employee_accident_report.pdf">Employee Accident Report</a></li>
								<li><a href="http://sandstonehousing.com/employee/hrfiles/workers_compensation/notice_of_accident_form.pdf">Notice of Accident Form</a></li>
							</ul>
						</div>

						<div class="white_space" style="height:375px;"></div>

						<div class="form">
							<h4>Health and Safety forms</h4>
							<hr class="seven" />
							<ul>
								<li><a href="http://sandstonehousing.com/employee/hrfiles/heathandsafety/safety_tips_for_employees.pdf">Safety tips for Employees</a></li>
								<li><a href="http://sandstonehousing.com/employee/hrfiles/heathandsafety/OSHA_policy_and_procedures_for_MSDS.pdf">OSHA Policy and Procedures for MSDS</a></li>
							</ul>
						</div>

						<div class="white_space" style="height:830px;"></div>
					</div>
				</div>
			</div>
		</div>	
		<div id="footer">
			<div id="innerfooter">
				<p>&copy; 2014 by Sandstone Housing. **This institution is an equal opportunity employer and provider**</p>
				<img class="about" src="http://sandstonehousing.com/images/wheelchair.gif" />
				<img class="about" src="http://sandstonehousing.com/images/opportunity.png" />
			</div>
		</div>
	</body>
</html>