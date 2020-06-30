<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <fieldset>
    <legend><b>Sign Up Form</b></legend><br>
    <form action="/welcome1" method="post">
    @csrf
        <label for="ndepan">First Name :</label><br><br>
        <input type="text" name="ndepan" id="ndepan" required><br><br>
        <label for="nbelakang">Last Name :</label><br><br>  
        <input type="text" name="nbelakang" id="nbelakang" required><br><br>  
        <label for="kelamin">Gender :</label><br><br>  
        <input type="radio" id="pria" name="kelamin" value="male" required>
        <label for="pria">Male</label><br>
        <input type="radio" id="wanita" name="kelamin" value="female" required>
        <label for="wanita">Female</label><br>
        <input type="radio" id="lain" name="kelamin" value="pria" required>
        <label for="lain">Other</label><br><br>
        <label>Nationality :</label><br><br>
        <select name="nationality" required>
            <option value="Indonesian">Indonesian</option>
            <option value="Singaporean">Singaporean</option>
            <option value="Malaysian">Malaysian</option>
            <option value="Australian">Australian</option>
        </select>    
        <br><br>
        <label for="language">Language Spoken :</label><br><br>
        <input type="checkbox" id="Indonesia" name="language" value="Indonesia">
        <label for="Indonesia">Bahasa Indonesia</label><br>
        <input type="checkbox" id="English" name="language" value="English">
        <label for="English">English</label><br>
        <input type="checkbox" id="lainnya" name="Indonesia" value="lainnya">
        <label for="lainnya">Other</label><br>
        <br><br>
        <label>Bio :</label><br><br>
        <textarea name="bio" rows="10" cols="30"></textarea><br><br>
        <input type="submit" value="Sign Up"> 
    </form>
    </fieldset> 
</body>
</html>