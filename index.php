<!DOCTYPE html>
<html>
<head>
    <title>Archery scrorepad</title>

    <link rel="stylesheet" href="css/default.css">

    <script src="js/jquery-2.1.4.min.js"></script>
</head>
<body>
    <h1>Archery scorepad</h1>
    <hr>
    <form>
        <table>
            <tr>
                <td>
                    <label for="name">Naam:</label>
                </td>
                <td>
                    <input type="text" id="name" class="name" name="name">
                </td>
            </tr>
            <tr>
                <td><label for="datum">Datum:</label></td>
                <td><input type="date" name="date" id="datum"></td>
            </tr>
            <tr>
                <td>
                    <label for="leeftijdsklasse">Leeftijdsklasse:</label>
                </td>
                <td>
                    <select id="leeftijdsklasse" name="age">
                        <option value="Aspirant">Aspirant</option>
                        <option value="Junior">Junior</option>
                        <option value="Senior">Senior</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="boogtype">Boogtype:</label></td>
                <td>
                    <select id="boogtype" name="bowtype">
                        <option value="Recurve">Recurve</option>
                        <option value="Compound">Compound</option>
                        <option value="Barebow">Barebow</option>
                        <option value="Traditioneel/hout">Traditioneel/hout</option>
                    </select>
                </td>
            </tr>
        </table>
        <hr>
        <table id="scorepad">
            <thead>
            <tr>
                <td></td>
                <td class="col1">1</td>
                <td class="col2">2</td>
                <td class="col3">3</td>
                <td class="col4">Serie</td>
                <td class="col5">Sub-totaal</td>
            </tr>
            </thead>
            <tbody>
            <tr class="a">
                <td>3</td>
                <td class="a1"><input type="text" class="a1" name="a1"></td>
                <td class="a2"><input type="text" class="a2" name="a2"></td>
                <td class="a3"><input type="text" class="a3" name="a3"></td>
                <td class="a4 ser1 ser"><input type="text" class="a4" name="ser1"></td>
                <td class="a5 sub1 sub"><input type="text" class="a5" name="sub1"></td>
            </tr>

            <tr class="totals">
                <td colspan="4"><label for="total">Totaal:</label></td>
                <td class="total" colspan="2"><input id="total" type="text" class="total" name="total"></td>
            </tr>
            </tbody>
        </table>
    </form>
    <button onclick="calcSubs()">Bereken Subtotaal</button>

    <script src="js/arrays.js"></script>
    <script src="js/default.js"></script>

</body>
</html>