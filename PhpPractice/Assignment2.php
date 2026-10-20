<?php

// ===============================
// QUESTION 1
// One Dimensional Array
// ===============================

$array1 = [5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9];

$total = array_sum($array1);

$evenTotal = 0;
$oddTotal = 0;

foreach ($array1 as $value) {
    if ($value % 2 == 0) {
        $evenTotal += $value;
    } else {
        $oddTotal += $value;
    }
}

$minValue = min($array1);
$maxValue = max($array1);

$minPositions = [];
$maxPositions = [];

foreach ($array1 as $index => $value) {

    if ($value == $minValue) {
        $minPositions[] = $index + 1;
    }

    if ($value == $maxValue) {
        $maxPositions[] = $index + 1;
    }
}


// ===============================
// QUESTION 2
// Associative Two Dimensional Array
// ===============================

$colors = [

    "Light" => [
        "Red" => "Light Red",
        "Green" => "Light Green",
        "Blue" => "Light Blue"
    ],

    "Normal" => [
        "Red" => "Normal Red",
        "Green" => "Normal Green",
        "Blue" => "Normal Blue"
    ],

    "Dark" => [
        "Red" => "Dark Red",
        "Green" => "Dark Green",
        "Blue" => "Dark Blue"
    ]

];


// ===============================
// QUESTION 3
// Square Array
// ===============================

$square = [

    [2, -6, 8],
    [-6, 1, 6],
    [7, 8, -6]

];

$squareOddTotal = 0;
$squareEvenTotal = 0;

$rowTotals = [];
$columnTotals = [0, 0, 0];

$mainDiagonalTotal = 0;
$secondaryDiagonalTotal = 0;

$squareTotal = 0;

foreach ($square as $i => $row) {

    $rowTotals[$i] = 0;

    foreach ($row as $j => $value) {

        $squareTotal += $value;

        $rowTotals[$i] += $value;

        $columnTotals[$j] += $value;

        if ($value % 2 == 0) {
            $squareEvenTotal += $value;
        } else {
            $squareOddTotal += $value;
        }

        // Main diagonal
        if ($i == $j) {
            $mainDiagonalTotal += $value;
        }

        // Secondary diagonal
        if ($i + $j == 2) {
            $secondaryDiagonalTotal += $value;
        }
    }
}

$squareMin = $square[0][0];
$squareMax = $square[0][0];

$squareMinPositions = [];
$squareMaxPositions = [];

foreach ($square as $i => $row) {

    foreach ($row as $j => $value) {

        if ($value < $squareMin) {
            $squareMin = $value;
        }

        if ($value > $squareMax) {
            $squareMax = $value;
        }
    }
}

foreach ($square as $i => $row) {

    foreach ($row as $j => $value) {

        if ($value == $squareMin) {
            $squareMinPositions[] =
                "Row " . ($i + 1) . ", Column " . ($j + 1);
        }

        if ($value == $squareMax) {
            $squareMaxPositions[] =
                "Row " . ($i + 1) . ", Column " . ($j + 1);
        }
    }
}


$students = [

    "CA221" => [
        "Name" => "Mohamed Ahmed Ali",
        "Phone" => "0648440403",
        "Address" => "Laba Dhagax, Wardhiigley"
    ],

    "CA223" => [
        "Name" => "Ahmed Abdi Jama",
        "Phone" => "0647223201",
        "Address" => "Taleex, Hodan"
    ],

    "CA221-2" => [
        "Name" => "Amina Nur Adan",
        "Phone" => "0646990276",
        "Address" => "Macmacaanka, Dharkeynley"
    ]

];



$transcript = [

    "Semester 1" => [

        [
            "Course" => "subject1",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],

        [
            "Course" => "subject2",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],

        [
            "Course" => "subject3",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ]

    ],

    "Semester 2" => [

        [
            "Course" => "subject1",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 0,
            "Total" => 45,
            "Status" => "Fail"
        ],

        [
            "Course" => "subject2",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ],

        [
            "Course" => "subject3",
            "CW1" => 9,
            "MidTerm" => 26,
            "CW2" => 10,
            "Final" => 40,
            "Total" => 85,
            "Status" => "Pass"
        ]

    ]

];

?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8">

    <title>PHP Assignment 2</title>

    <style>

        * {
            box-sizing: border-box;
        }

        body {

            margin: 0;

            font-family: Arial, sans-serif;

            background:
                linear-gradient(
                    135deg,
                    #eef2ff,
                    #f8fafc
                );

            color: #172033;

        }

        .container {

            width: 94%;

            max-width: 1150px;

            margin: 30px auto;

        }




        header {

            background:
                linear-gradient(
                    135deg,
                    #312e81,
                    #4f46e5,
                    #7c3aed
                );

            color: white;

            padding: 32px;

            border-radius: 18px;

            margin-bottom: 25px;

            box-shadow:
                0 12px 30px
                rgba(49, 46, 129, .25);

        }

        header h1 {

            margin: 0 0 8px;

            font-size: 32px;

        }

        header p {

            margin: 0;

            opacity: .9;

        }


        .section {

            background: white;

            padding: 24px;

            margin: 20px 0;

            border-radius: 16px;

            border-left:
                6px solid #4f46e5;

            box-shadow:
                0 6px 20px
                rgba(15, 23, 42, .08);

        }

        h2 {

            color: #312e81;

            margin-top: 0;

        }

        h3 {

            color: #475569;

        }


       

        .array-box {

            display: flex;

            flex-wrap: wrap;

            gap: 8px;

            margin: 15px 0;

        }

        .number {

            min-width: 48px;

            padding: 10px;

            text-align: center;

            border-radius: 9px;

            background: #eef2ff;

            color: #3730a3;

            font-weight: bold;

            border:
                1px solid #c7d2fe;

        }


       

        .stats {

            display: grid;

            grid-template-columns:
                repeat(
                    auto-fit,
                    minmax(160px, 1fr)
                );

            gap: 12px;

            margin-top: 18px;

        }

        .card {

            padding: 16px;

            border-radius: 12px;

            background: #f8fafc;

            border:
                1px solid #e2e8f0;

        }

        .card strong {

            display: block;

            color: #64748b;

            font-size: 13px;

            margin-bottom: 6px;

        }

        .card span {

            font-size: 21px;

            font-weight: bold;

            color: #111827;

        }


        
        table {

            width: 100%;

            border-collapse: collapse;

            margin-top: 15px;

        }

        th {

            background: #4f46e5;

            color: white;

            padding: 13px;

            text-align: left;

        }

        td {

            padding: 12px;

            border-bottom:
                1px solid #e5e7eb;

        }

        tr:nth-child(even) td {

            background: #f8fafc;

        }

        tr:hover td {

            background: #eef2ff;

        }


       

        .light-row td {

            background: #fff7ed;

        }

        .normal-row td {

            background: #f0fdf4;

        }

        .dark-row td {

            background: #eff6ff;

        }


      

        .pass {

            color: #15803d;

            font-weight: bold;

        }

        .fail {

            color: #dc2626;

            font-weight: bold;

        }


       

        .pill {

            display: inline-block;

            padding: 7px 10px;

            border-radius: 999px;

            background: #ede9fe;

            color: #5b21b6;

            margin: 3px;

            font-size: 13px;

        }


       

        .note {

            background: #fffbeb;

            border:
                1px solid #fde68a;

            padding: 12px 15px;

            border-radius: 10px;

            color: #92400e;

            margin-top: 15px;

        }


        footer {

            text-align: center;

            color: #64748b;

            margin: 30px 0;

        }


       

        @media (max-width: 700px) {

            header h1 {

                font-size: 25px;

            }

            .section {

                padding: 17px;

                overflow-x: auto;

            }

            table {

                min-width: 650px;

            }

        }

    </style>

</head>


<body>


<div class="container">



<header>

    <h1>PHP Assignment 2</h1>

    <p>
        PHP & MySQL — Arrays,
        Tables and Student Transcript
    </p>

</header>




<section class="section">

    <h2>
        Question 1 — One Dimensional Array
    </h2>

    <h3>All Elements</h3>

    <div class="array-box">

        <?php foreach ($array1 as $value): ?>

            <span class="number">

                <?= $value ?>

            </span>

        <?php endforeach; ?>

    </div>


    <div class="stats">


        <div class="card">

            <strong>
                Total of all elements
            </strong>

            <span>
                <?= $total ?>
            </span>

        </div>


        <div class="card">

            <strong>
                Total of even elements
            </strong>

            <span>
                <?= $evenTotal ?>
            </span>

        </div>


        <div class="card">

            <strong>
                Total of odd elements
            </strong>

            <span>
                <?= $oddTotal ?>
            </span>

        </div>


        <div class="card">

            <strong>
                Minimum
            </strong>

            <span>
                <?= $minValue ?>
            </span>

        </div>


        <div class="card">

            <strong>
                Minimum Positions
            </strong>

            <span>
                <?= implode(", ", $minPositions) ?>
            </span>

        </div>


        <div class="card">

            <strong>
                Maximum
            </strong>

            <span>
                <?= $maxValue ?>
            </span>

        </div>


        <div class="card">

            <strong>
                Maximum Positions
            </strong>

            <span>
                <?= implode(", ", $maxPositions) ?>
            </span>

        </div>


    </div>

</section>





<section class="section">

    <h2>
        Question 2 — Associative
        Two Dimensional Array
    </h2>


    <table>

        <tr>

            <th>Row</th>

            <th>Red</th>

            <th>Green</th>

            <th>Blue</th>

        </tr>


        <?php foreach ($colors as $rowName => $columns): ?>

        <tr class="<?= strtolower($rowName) ?>-row">

            <td>
                <strong>
                    <?= $rowName ?>
                </strong>
            </td>


            <?php foreach ($columns as $value): ?>

            <td>
                <?= $value ?>
            </td>

            <?php endforeach; ?>

        </tr>

        <?php endforeach; ?>

    </table>

</section>





<section class="section">

    <h2>
        Question 3 — Square Array
    </h2>


    <table>

        <tr>

            <th></th>

            <th>Column 1</th>

            <th>Column 2</th>

            <th>Column 3</th>

        </tr>


        <?php foreach ($square as $i => $row): ?>

        <tr>

            <th>
                Row <?= $i + 1 ?>
            </th>


            <?php foreach ($row as $value): ?>

            <td>
                <?= $value ?>
            </td>

            <?php endforeach; ?>

        </tr>

        <?php endforeach; ?>

    </table>


    <div class="stats">


        <div class="card">

            <strong>
                Total Odd Elements
            </strong>

            <span>
                <?= $squareOddTotal ?>
            </span>

        </div>


        <div class="card">

            <strong>
                Total Even Elements
            </strong>

            <span>
                <?= $squareEvenTotal ?>
            </span>

        </div>


        <div class="card">

            <strong>
                Total All Elements
            </strong>

            <span>
                <?= $squareTotal ?>
            </span>

        </div>


        <div class="card">

            <strong>
                Main Diagonal
            </strong>

            <span>
                <?= $mainDiagonalTotal ?>
            </span>

        </div>


        <div class="card">

            <strong>
                Secondary Diagonal
            </strong>

            <span>
                <?= $secondaryDiagonalTotal ?>
            </span>

        </div>


    </div>


    <h3>Row Totals</h3>


    <div class="array-box">

        <?php foreach ($rowTotals as $i => $value): ?>

            <span class="pill">

                Row <?= $i + 1 ?>

                =

                <?= $value ?>

            </span>

        <?php endforeach; ?>

    </div>


    <h3>Column Totals</h3>


    <div class="array-box">

        <?php foreach ($columnTotals as $i => $value): ?>

            <span class="pill">

                Column <?= $i + 1 ?>

                =

                <?= $value ?>

            </span>

        <?php endforeach; ?>

    </div>


    <div class="stats">


        <div class="card">

            <strong>
                Minimum
            </strong>

            <span>
                <?= $squareMin ?>
            </span>

        </div>


        <div class="card">

            <strong>
                Minimum Positions
            </strong>

            <span>

                <?= implode(
                    " | ",
                    $squareMinPositions
                ) ?>

            </span>

        </div>


        <div class="card">

            <strong>
                Maximum
            </strong>

            <span>
                <?= $squareMax ?>
            </span>

        </div>


        <div class="card">

            <strong>
                Maximum Positions
            </strong>

            <span>

                <?= implode(
                    " | ",
                    $squareMaxPositions
                ) ?>

            </span>

        </div>


    </div>

</section>





<section class="section">

    <h2>
        Question 4 — Student Information
    </h2>


    <table>

        <tr>

            <th>ID</th>

            <th>Name</th>

            <th>Phone</th>

            <th>Address</th>

        </tr>


        <?php foreach ($students as $id => $student): ?>

        <tr>

            <td>
                <strong>
                    <?= $id ?>
                </strong>
            </td>

            <td>
                <?= $student["Name"] ?>
            </td>

            <td>
                <?= $student["Phone"] ?>
            </td>

            <td>
                <?= $student["Address"] ?>
            </td>

        </tr>

        <?php endforeach; ?>

    </table>


    <div class="note">

        Student information is displayed
        using an associative two-dimensional
        PHP array.

    </div>

</section>





<section class="section">

    <h2>
        Question 5 — Student Transcript
    </h2>


    <?php foreach ($transcript as $semester => $courses): ?>


        <h3>
            <?= $semester ?>
        </h3>


        <table>

            <tr>

                <th>Course</th>

                <th>CW1</th>

                <th>MidTerm</th>

                <th>CW2</th>

                <th>Final</th>

                <th>Total</th>

                <th>Status</th>

            </tr>


            <?php foreach ($courses as $course): ?>

            <tr>

                <td>
                    <?= $course["Course"] ?>
                </td>

                <td>
                    <?= $course["CW1"] ?>
                </td>

                <td>
                    <?= $course["MidTerm"] ?>
                </td>

                <td>
                    <?= $course["CW2"] ?>
                </td>

                <td>
                    <?= $course["Final"] ?>
                </td>

                <td>

                    <strong>
                        <?= $course["Total"] ?>
                    </strong>

                </td>

                <td class="<?= strtolower($course["Status"]) ?>">

                    <?= $course["Status"] ?>

                </td>

            </tr>

            <?php endforeach; ?>


        </table>


    <?php endforeach; ?>

</section>



<footer>

    PHP Assignment 2

</footer>


</div>

</body>

</html>