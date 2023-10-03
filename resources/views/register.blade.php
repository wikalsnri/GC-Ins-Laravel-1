<!DOCTYPE html>
<html>
<head>
    <title>Register ~ WikaSITE</title>
</head>
<body>
    <h1>Register di Sini ya!</h1>
    <form method="POST" action="/welcome">
        @csrf
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" required><br>
        <br>
        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" required><br>
        <br><br>
        <label>Gender :</label>
        <br><br>
        <input type="radio">Male<br>
        <input type="radio">Female<br>
        <input type="radio">Other<br><br>
        <label for="pilih-negara">Nationality :</label><br><br>
        <select id="pilih-negara">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Vietnam">Vietnam</option>
            <option value="Singapore">Singapore</option>
        </select><br><br>
        <label>Language Spoken :</label><br><br>
        <input type="checkbox">Bahasa Indonesia<br>
        <input type="checkbox">English<br>
        <input type="checkbox">Other<br><br>

        <label>Bio :</label><br><br>
        <textarea name="message" id="" cols="30" rows="10"></textarea><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html> 