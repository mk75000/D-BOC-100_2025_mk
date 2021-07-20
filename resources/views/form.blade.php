<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>meet</title>

    <style>
@import url();
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background-image: url();
  background-color: #F94E96;
  
}

.container {
  max-width: 400px;
  width: 100%;
  margin: 0 auto;
  position: relative;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 150px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  margin: 0 0 10px;
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact textarea {
  width: 100%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
}

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #F03878;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #F03878;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}

p{
    text-align: center;
    color: white;
    font-size: 30px;
}
    </style>

    
</head>
<body>
   <br><p><b> Veuillez remplir ce formulaire pour continuer sur le site<b><p>
<div class="container">  
  <b><form id="contact" action="submit" method="post">
  @csrf
    <h3><b>Informations personnelles<b></h3>
    <h4></h4>
    <fieldset>
      <input placeholder="Nom" name="nom" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="adresse e-mail" name="email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Numéro télephone" name="tel" type="tel" tabindex="3" required>
    </fieldset>
    <fieldset>
    <label for="age"> Age (16-70):</label>

<input placeholder="age" type="number" id="age" name="age" required
       min="16" max="70">

    </fieldset>
    <fieldset>
    <label for="genre-select">Genre:</label>

<select name="genre" id="genre-select" required>
    <option value="selectionner">Selectionner</option>
    <option value="men">Homme</option>
    <option value="femal">Femme</option>
    <option value="other">Autre</option>
    
  
</select>

<br>
<label for="pet-select">Selectionnez votre Ville</label>

<select name="ville" id="lieu" required>
    <option value="Par-defaut">Par defaut</option>
    <option value="Paris">Paris</option>
    <option value="Lyon">Lyon</option>
    <option value="Marseille">Marseille</option>
    <option value="Toulouse">Toulouse</option>
    <option value="Bordeaux">Bordeaux</option>
    <option value="Nice">Nice</option>
    <option value="Rennes">Rennes</option>
</select>
    </fieldset>
    <fieldset>
      <button  name="submit" type="submit"  id="contact-submit" href="home" data-submit="...Sending">Submit </button>
    </fieldset>
    
  </form><b>
</div>
  </body>
</html>

</body>
</html>