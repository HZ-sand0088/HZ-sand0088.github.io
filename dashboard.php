<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/resources/logo.png">
    <title>Mijn dashboard | Quinten</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="js/source.js"></script>
</head>

<body>
    <?php include __DIR__ . '/elements/header.php'; ?>
    <main>
        <div class="main-content">
            <h1>Mijn Dashboard</h1>
            <hr>
            <article>
                <p>Hier houd ik mijn studievoortgang en behaalde studiepunten bij.</p>
            </article>
            <div class="table-scroll">
                <table class="progress-table">
                    <tr class="dashboard">
                        <th scope="col" class="centertable">Quarter</th>
                        <th scope="col">Course</th>
                        <th scope="col" class="centertable">EC</th>
                        <th scope="col">Exam</th>
                        <th scope="col" class="centertable">Grade</th>
                    </tr>
                    <tr>
                        <td rowspan="4" class="centertable even">B1</td>
                        <td class="even" title="Programme- & Career Orientation">CU75101V1 / PCO</td>
                        <td class="centertable even">5</td>
                        <td class="even">Assignment</td>
                        <td class="centertable even" id="PCO">-</td>
                    </tr>
                    <tr>
                        <td class="odd" title="Programming Basics">CU75102V1 / PBA</td>
                        <td class="centertable odd">5</td>
                        <td class="odd">Assignment</td>
                        <td class="centertable odd" id="PBA">-</td>
                    </tr>
                    <tr>
                        <td class="even" title="Computer Science Basics">CU75103V1 / CSB</td>
                        <td class="centertable even">5</td>
                        <td class="even">Written Test</td>
                        <td class="centertable even" id="CSB">-</td>
                    </tr>
                    <tr>
                        <td rowspan="2" class="odd" title="Object Oriented Programming">CU75104V1 / OOP</td>
                        <td rowspan="2" class="centertable odd">5</td>
                        <td rowspan="2" class="odd">Assignment</td>
                        <td rowspan="2" class="centertable odd" id="OOP">-</td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="centertable odd">B2</td>
                    </tr>
                    <tr>
                        <td class="even" title="Agile and team management">CU75105V1 / ATM</td>
                        <td class="centertable even">5</td>
                        <td class="even">Assignment</td>
                        <td class="centertable even" id="ATM">-</td>
                    </tr>
                    <tr>
                        <td class="odd" title="Project: Foundations Project">CU75106V1 / PFP</td>
                        <td class="centertable odd">5</td>
                        <td class="odd">Portfolio</td>
                        <td class="centertable odd" id="PFP">-</td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="centertable even">B3</td>
                        <td class="even" title="Software Engineering Basics">CU75107V1 / SEF</td>
                        <td class="centertable even">5</td>
                        <td class="even">Assignment</td>
                        <td class="centertable even" id="SEF">-</td>
                    </tr>
                    <tr>
                        <td class="odd" title="Foundations of Data">CU75108V1 / FOD</td>
                        <td class="centertable odd">5</td>
                        <td class="odd">Assignment</td>
                        <td class="centertable odd" id="FOD">-</td>
                    </tr>
                    <tr>
                        <td class="even" title="Requirements Modelling">CU75109V1 / RMO</td>
                        <td class="centertable even">5</td>
                        <td class="even">Assignment</td>
                        <td class="centertable even" id="RMO">-</td>
                    </tr>
                    <tr>
                        <td rowspan="3" class="centertable odd">B4</td>
                        <td class="odd" title="Web Application Development">CU75110V1 / WED</td>
                        <td class="centertable odd">5</td>
                        <td class="odd">Assignment</td>
                        <td class="centertable odd" id="WED">-</td>
                    </tr>
                    <tr>
                        <td class="even" title="Data Science Basics">CU75111V1 / DSB</td>
                        <td class="centertable even">5</td>
                        <td class="even">Assignment</td>
                        <td class="centertable even" id="DSB">-</td>
                    </tr>
                    <tr>
                        <td class="odd" title="Project: Applied Client Solutions">CU75112V1 / ACS</td>
                        <td class="centertable odd">5</td>
                        <td class="odd">Portfolio</td>
                        <td class="centertable odd" id="ACS">-</td>
                    </tr>
                </table>
            </div>
            <article class="study-progress-text">
                <p>Studievoortgang jaar 1</p>
                <p><span id="totalEC">0</span>/60 EC</p>
            </article>
            <div class="study-progress-bar">
                    <progress id="study-progress"></progress>
                </div>
        </div>
    </main>
    <?php include __DIR__ . '/elements/footer.php'; ?>
</body>

</html>