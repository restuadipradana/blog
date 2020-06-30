<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form</title>
      </head>
    <body>
        <h1>Buat Akun Baru!</h1>
        <h2>Sign Up Form</h2>

        <form id="form1" action="/welcome" method="POST"> 
            @csrf 
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname"><br>
            
            <br>

            <label for="gender">Gender:</label></br>
            <input type="radio" id="male" name="gender" value="Male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="Female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="Other">
            <label for="other">Other</label><br>

            <br>

            <label for="nationality">Nationality:</label><br>
            <select id="nationality" name="nationalism">
              <option value="Indonesia">Indonesian</option>
              <option value="Other">Others</option>
            </select><br>

            <br>

            <label for="lang">Language Spoken:</label><br>
            <input type="checkbox" id="id" name="language" value="Bahasa Indonesia">
            <label for="id"> Bahasa Indonesia</label><br>
            <input type="checkbox" id="en" name="language" value="English">
            <label for="en"> English</label><br>
            <input type="checkbox" id="ot" name="language" value="Other">
            <label for="ot"> Other</label><br>
            
            <br>
            
            <label for="bio"> Bio:</label><br>
            <textarea name="bio" rows="10" cols="30"></textarea>
            <br><br>
            <input type="submit" value="Sign Up">


        </form> 
    </body>
</html>