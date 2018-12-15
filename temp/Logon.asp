<html>
    <head>
        <title>Logon Form</title>
        <%
            Username="Administrator"
            Password="Admin"
            Validated = "OK"
            if Strcomp(Request.Form("User"),Username,1)=0 AND Request.Form("password") = Password then
            'Set the validation cookie and redirect the user to the original page.
            Response.Cookies("ValidUser") = Validated
            'Check where the users are coming from within the application.
            If (Request.QueryString("from")<>"") then
            Response.Redirect Request.QueryString("from")
            else
	       'If the first page that the user accessed is the Logon page,
            'direct them to the default page.
            Response.Redirect "MyPage.asp"
            End if    
            Else
            'Only present the failure message if the user typed in something.
            If Request.Form("User") <> "" then
            Response.Write "<h3>Authorization Failed.</h3>" & "<br>" & _
            "Please try again.<br>&#xa0;<br>"
            End if
            End if
        %>
    </head>
    <body bgcolor="#FFFFFF">
        <FORM ACTION=<%Response.Write "Logon.asp?"&Request.QueryString%> method="post">
            <h3>Logon Page for MyPage.asp</h3>
            <p>	
                Username: 
                <INPUT TYPE="text" NAME="User" VALUE='' size="20"></INPUT>
                Password: 
                <INPUT TYPE="password" NAME="password" VALUE='' size="20"></INPUT>
                <INPUT TYPE="submit" VALUE="Logon"></INPUT>
            </p>
        </FORM>
    </body>
</html>