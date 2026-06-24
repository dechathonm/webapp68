<html>
<body>
<form name="frm-register" action="result.php" method="POST">

NAME: <input type="text" name="member_name"><br>

TEL: <input type="text" name="member_tel"><br>

E-MAIL: <input type="email" name="member_email"><br>

USERNAME: <input type="text" name="member_username"><br>

PASSWORD: <input type="password" name="member_password"><br>

GENDER:
<input type="radio" name="member_gender" value="1"> MALE
<input type="radio" name="member_gender" value="2"> FEMALE
<br>

MAJOR:
<select name="member_major">
    <option value="1">Computer Science</option>
    <option value="2">Information Technology</option>
    <option value="3">Software Engineering</option>
    <option value="4">Information System</option>
</select>
<br>

<input type="submit" value="OK">
<input type="reset" value="CANCEL">

</form>
</body>
</html>