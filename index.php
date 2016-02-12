<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Liste hero MGS</title>
    </head>
    <body>
        <div>
            <h1>Select your fighter</h1>
            <div id="choix">
                <select onchange="change(this.value)">
                    <option value="">Selectionnez un hero</option>
                    <option value="1">Solid Snake</option>
                    <option value="2">Otacon</option>
                </select>
            </div>
        </div>
    <center><div id="reponse"></div></center>
    
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>