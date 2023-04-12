<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas laravel</title>
</head>
<body>
    <!--Membuat Form-->
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    
    <form method="POST" action="/register">
        @csrf
        <label for="first_name">First_name</label><br><br>
        <input type="text" name="first_name"><br><br>
        <label for="last_name">Last_name</label><br><br>
        <input type="text" name="last_name"><br><br>
        <label >Gender:</label> <br><br>
        <input type="radio" name="gender">Male <br>
        <input type="radio" name="gender">Female <br>
        <input type="radio" name="gender">Other <br><br>
        <label >Nationality:</label><br><br>
        <select name="nationality" >
            <option value="indonesia">Indonesia</option>
            <option value="malaysia">Malaysia</option>
            <option value="singapura">Singapura</option>
        </select> <br><br>
        <label >Language Spoken:</label><br><br>
        <input type="checkbox" name="lp">Bahasa Indonesia <br>
        <input type="checkbox" name="lp">English<br>
        <input type="checkbox" name="lp">Other<br><br>
        <label>Bio</label><br>
        <textarea name="bio" cols="30" rows="10"></textarea><br>
        <input type="submit" value="Sign Up">
    </form>

</body>
</html>