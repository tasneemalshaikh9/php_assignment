
<!DOCTYPE html>
<html>
<head>
    <title>Students System</title>
</head>
<body style="background-color: rgb(185, 195, 204);">
    <header>
        <div>
            <h1> Students System</h1>
        </div>
    </header>
    <main>
        <section class="forms">
            <form action="./insert.php" method="POST">
                <div>
                    <label for="fullname"> Student Name:</label><br>
                    <input type="text" name="name" id="fullname"><br>
                </div>
                <br>
                <br>
                <div>
                    <label for="dob">Date of birth:</label>
                    <input type="date" id="dob" name="dob" value="1999-09-25" min="1940-01-01" max="2010-12-31">
                </div>
                <br>
                <br>
                <div>
                    <label for="weight">Weight</label>
                    <input type="number" id="weight" name="weight">
                </div>
                <br>
                <br>
                <div>
                    <p>Select your gender:</p>
                    <label for="male">Male</label>
                    <input type="radio" id="male" value="male" name="gender" checked required>
                </div>
                <div>
                    <label for="female">Female</label>
                    <input type="radio" id="female" value="female" name="gender" checked>
                </div>
                <br>
                <br>
                <div>
                    <label for="email">Enter your Email:</label>
                    <input type="email" id="email" name="email" required minlength="20" maxlength="900" size="40">
                </div>
                <br>
                <br>
                <div>
                    <label for="phone">Enter your phone number:</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                <br>
                <br>
                <div>
                    <label name="city" for="live">Where do you live:</label>
                    <select name="city" id="live">
                        <option value="">--Please choose an option--</option>
                        <option value="Amman">Amman</option>
                        <option value="Zarqa">Zarqa</option>
                        <option value="Ajloon">Ajloon</option>
                        <option value="Aqaba">Aqaba</option>
                        <option value="Mafraq">Mafraq</option>
                        <option value="Irbid">Irbid</option>
                        <option value="salt">Salt</option>
                    </select>
                </div>
                <div>
                    <p>Choose your favorite colors:</p>
                    <div>
                        <input type="color" id="head" name="color" value="#e66465">
                        <label for="head">color</label>
                    </div>
                </div>
                <br>
                <br>
                <div>
                    <label for="cv">Upload your CV:</label>
                    <input type="file" id="cv" name="cv" accept="image/png, image/jpeg">
                </div>
                <br>
                <br>
                <div>
                    <input type="checkbox" id="chekbox" name="chekbox" value="chekbox">
                    <label for="chekbox">If we can contact the student through Email...</label><br>
                </div>
                <br>
                <br>
                <div>
                    <button type="submit" name="submit" value="Submit">Submit</button>
                </div>
        </section>
        </body>
        </html>
