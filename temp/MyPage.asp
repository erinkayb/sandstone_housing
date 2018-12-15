<%
Validated = "OK"
if Request.Cookies("ValidUser") <> Validated then
'Construct the URL for the current page.
    dim s
    s = "http://"
    s = s & Request.ServerVariables("HTTP_HOST")
    s = s & Request.ServerVariables("URL")
    if Request.QueryString.Count > 0 THEN
    s = s & "?" & Request.QueryString 
    end if
    'Redirect unauthorized users to the logon page.
    Response.Redirect "Logon.asp?from=" &Server.URLEncode(s)
End if
%>
<html>
	<head>
		<title>My Protected Page</title>
	</head>
	<body>
		<p align="center">This is my secret information<br>
		You cannot see it unless you<br>
		are properly logged on!</p>
	</body>
</html>