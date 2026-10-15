<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-icon" href="/resources/logo.png">
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
                <div class="table-scroll" role="region" aria-label="Study progress" tabindex="0">
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
                            <td class="even">CU75101V1</td>
                            <td class="centertable even">5</td>
                            <td class="even">Assignment</td>
                            <td class="centertable even">-</td>
                        </tr>
                        <tr>
                            <td class="odd">CU75102V1</td>
                            <td class="centertable odd">5</td>
                            <td class="odd">Assignment</td>
                            <td class="centertable odd">-</td>
                        </tr>
                        <tr>
                            <td class="even">CU75103V1</td>
                            <td class="centertable even">5</td>
                            <td class="even">Written Test</td>
                            <td class="centertable even">-</td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="odd">CU75104V1</td>
                            <td rowspan="2" class="centertable odd">5</td>
                            <td rowspan="2" class="odd">Assignment</td>
                            <td rowspan="2" class="centertable odd">-</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="centertable odd">B2</td>
                        </tr>
                        <tr>
                            <td class="even">CU75105V1</td>
                            <td class="centertable even">5</td>
                            <td class="even">Assignment</td>
                            <td class="centertable even">-</td>
                        </tr>
                        <tr>
                            <td class="odd">CU75106V1</td>
                            <td class="centertable odd">5</td>
                            <td class="odd">Portfolio</td>
                            <td class="centertable odd">-</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="centertable even">B3</td>
                            <td class="even">CU75107V1</td>
                            <td class="centertable even">5</td>
                            <td class="even">Assignment</td>
                            <td class="centertable even">-</td>
                        </tr>
                        <tr>
                            <td class="odd">CU75108V1</td>
                            <td class="centertable odd">5</td>
                            <td class="odd">Assignment</td>
                            <td class="centertable odd">-</td>
                        </tr>
                        <tr>
                            <td class="even">CU75109V1</td>
                            <td class="centertable even">5</td>
                            <td class="even">Assignment</td>
                            <td class="centertable even">-</td>
                        </tr>
                        <tr>
                            <td rowspan="3" class="centertable odd">B4</td>
                            <td class="odd">CU75110V1</td>
                            <td class="centertable odd">5</td>
                            <td class="odd">Assignment</td>
                            <td class="centertable odd">-</td>
                        </tr>
                        <tr>
                            <td class="even">CU75111V1</td>
                            <td class="centertable even">5</td>
                            <td class="even">Assignment</td>
                            <td class="centertable even">-</td>
                        </tr>
                        <tr>
                            <td class="odd">CU75112V1</td>
                            <td class="centertable odd">5</td>
                            <td class="odd">Portfolio</td>
                            <td class="centertable odd">-</td>
                        </tr>
                    </table>
                </div>
            </div>
        </main>
        <?php include __DIR__ . '/elements/footer.php'; ?>
    </body>
</html>
