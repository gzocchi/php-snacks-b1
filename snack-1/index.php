<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php
function gamePoints($nMin = 65, $nMax = 105){
    $points = [];
    while (count($points) < 2) {
        $number = rand($nMin, $nMax);
        if (!in_array($number, $points)) {
            $points[] = $number;
        }
    }
    return $points;
};

$team = [
    "cantu" => [
        "nome" => "Acqua S.Bernardo Cantù",
        "colori_sociali" => ["bianco", "blu"],
        "impianto" => "PalaBancoDesio"
    ],
    "trieste" => [
        "nome" => "Allianz Pallacanestro Trieste",
        "colori_sociali" => ["bianco", "rosso"],
        "impianto" => "Allianz Dome"
    ],
    "milano" => [
        "nome" => "A|X Armani Exchange Milano",
        "colori_sociali" => ["bianco", "rosso"],
        "impianto" => "Mediolanum Forum"
    ],
    "sassari" => [
        "nome" => "Banco di Sardegna Sassari",
        "colori_sociali" => ["bianco", "blu"],
        "impianto" => "PalaSerradimigni"
    ],
    "pesaro" => [
        "nome" => "Carpegna Prosciutto Pesaro",
        "colori_sociali" => ["bianco", "rosso"],
        "impianto" => "Vitrifrigo Arena"
    ],
    "treviso" => [
        "nome" => "De'Longhi Treviso",
        "colori_sociali" => ["bianco", "azzurro"],
        "impianto" => "Palaverde"
    ],
    "trento" => [
        "nome" => "Dolomiti Energia Trentino",
        "colori_sociali" => ["bianco", "nero"],
        "impianto" => "BLM Group Arena"
    ],
    "bologna_fortitudo" => [
        "nome" => "Fortitudo Lavoropiù Bologna",
        "colori_sociali" => ["bianco", "blu"],
        "impianto" => "Unipol Arena"
    ],
    "brescia" => [
        "nome" => "Germani Brescia",
        "colori_sociali" => ["bianco", "blu"],
        "impianto" => "Palaleonessa A2A"
    ],
    "brindisi" => [
        "nome" => "Happy Casa Brindisi",
        "colori_sociali" => ["bianco", "blu royal"],
        "impianto" => "PalaPentassuglia"
    ],
    "varese" => [
        "nome" => "Openjobmetis Varese",
        "colori_sociali" => ["bianco", "rosso"],
        "impianto" => "Enerxenia Arena"
    ],
    "venezia" => [
        "nome" => "Umana Reyer Venezia",
        "colori_sociali" => ["oro", "granata"],
        "impianto" => "Taliercio"
    ],
    "reggio_emilia" => [
        "nome" => "UNAHOTELS Reggio Emilia",
        "colori_sociali" => ["bianco", "rosso"],
        "impianto" => "Unipol Arena"
    ],
    "cremona" => [
        "nome" => "Vanoli Basket Cremona",
        "colori_sociali" => ["bianco", "blu"],
        "impianto" => "PalaRadi"
    ],
    "bologna_virtus" => [
        "nome" => "Virtus Segafredo Bologna",
        "colori_sociali" => ["bianco", "nero"],
        "impianto" => "Segafredo Arena"
    ],
];

$match = [
    ["treviso", "trento"],
    ["varese", "brescia"],
    ["reggio_emilia", "milano"],
    ["trieste", "cremona"],
    ["pesaro", "sassari"],
    ["bologna_virtus", "cantu"],
    ["venezia", "brindisi"],
];

$matchPlayed = [];
for ($i=0; $i < count($match); $i++) {
    $homeTeam = $match[$i][0];
    $awayTeam = $match[$i][1];
    $matchPoints = gamePoints();
    array_push($matchPlayed, ["home_team" => $homeTeam, "away_team" => $awayTeam, "points" => $matchPoints]);
};
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>

<body>
    <main>
        <h1>Calendario Risultati</h1>
        <ul>
            <?php 
            for ($i=0; $i < count($matchPlayed); $i++) { 
                $game = $matchPlayed[$i];
                // echo
                // "<li>" .
                // $team[$game["home_team"]]["impianto"] .  ": " . $team[$game["home_team"]]["nome"] . " - " . $team[$game["away_team"]]["nome"] . " | " . $game["points"][0] . "-" . $game["points"][1]
                // . "</li>";

                $location=$team[$game["home_team"]]["impianto"];
                $home=$team[$game["home_team"]]["nome"];
                $hPoint=$game["points"][0];
                $away=$team[$game["away_team"]]["nome"];
                $aPoint=$game["points"][1];

                echo "<li>" . $location .  ": " . $home . " - " . $away . " | " . $hPoint . "-" . $aPoint . "</li>";
            }
            ?>
        </ul>
    </main>
</body>

</html>