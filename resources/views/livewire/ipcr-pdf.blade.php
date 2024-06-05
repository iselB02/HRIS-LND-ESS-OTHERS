<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IPCR PDF</title>
    <style>
        *{font-size: 15px }
        h1 { display: flex; text-align: center; font-weight: 600}
        #input-para { display: inline-flex; margin-left:60%; flex-direction: row; column-gap: 150px;}
        #under-para{ display: inline-flex; margin-left:63%; flex-direction: row; column-gap: 210px; margin-bottom: 20px;}

        body { font-family: DejaVu Sans, sans-serif; }
        table { width: 100%; border-collapse: collapse; border: 2px solid black; }
        th, td { border: 2px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .section-title { font-weight: bold; background-color: #f2f2f2; }
        #main-table, #secondary-table {margin-bottom: 30px}
        #main-para u, #input-para u { text-decoration: underline; }
    </style>
</head>
<body>
    <div class="main_ipcr-pdf">
        <h1>INDIVIDUAL PERFORMANCE COMMITMENT FORM (IPCR) PERFORMANCE MEASURES</h1>
        <div id="para">
            <p id="main-para">
                I, <u>{{ $ipcrs->employee_name }}</u>, <u>{{ $ipcrs->position }}</u>, <u>{{ $department->department_name }}</u> of <u>{{ $college->Title }}</u> commit to deliver
                and agree to be rated on the attainment of the following targets in accordance with the measures
                for the period of <u>{{ $ipcrs->start_period }}</u> to <u>{{ $ipcrs->end_period }}</u>.
            </p>
            <p id="input-para">
                <span><u>{{ $ipcrs->employee_name }}</u></span> <span><u>{{ $ipcrs->date_of_filling }}</u></span>
            </p>
            <p id="under-para">
                <span>{{ $ipcrs->position }}</span> <span>DATE</span>
            </p>
        </div>
        <div id="grading-basis">
            <h2>5-Outstanding, 4-Very Satisfactory, 3-Satisfactory, 2-Unsatisfactory, 1-Poor</h2>
        </div>
        <div id="table">
            <table id="main-table">
                <thead>
                    <tr>
                        <th id="num">#</th>
                        <th>OUTPUT</th>
                        <th>SUCCESS INDICATORS (TARGETS + MEASURES)</th>
                        <th>ACTUAL ACCOMPLISHMENTS</th>
                        <th colspan="4">RATING</th>
                    </tr>
                    <tr>
                        <th colspan="4"></th>
                        <th>Q</th>
                        <th>E</th>
                        <th>T</th>
                        <th>A</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="8" class="section-title">I. CORE FUNCTIONS 80%</td>
                    </tr>
                    @php $counter = 1; @endphp
                    @foreach($core_func as $core)
                        <tr>
                            <td>{{ $counter }}</td>
                            <td>{{ $core->output }}</td>
                            <td>{{ $core->success_indicators }}</td>
                            <td>{{ $core->actual_accomplishments }}</td>
                            <td>{{ $core->q }}</td>
                            <td>{{ $core->e }}</td>
                            <td>{{ $core->t }}</td>
                            <td>{{ $core->a }}</td>
                        </tr>
                        @php $counter++; @endphp
                    @endforeach
                    <tr>
                        <td colspan="8" class="section-title">II. SUPPORT TO FUNCTIONS 20%</td>
                    </tr>
                    @php $counter = 1; @endphp
                    @foreach($sup_func as $sup)
                        <tr>
                            <td>{{ $counter }}</td>
                            <td>{{ $sup->output }}</td>
                            <td>{{ $sup->success_indicators }}</td>
                            <td>{{ $sup->actual_accomplishments }}</td>
                            <td>{{ $sup->q }}</td>
                            <td>{{ $sup->e }}</td>
                            <td>{{ $sup->t }}</td>
                            <td>{{ $sup->a }}</td>
                        </tr>
                        @php $counter++; @endphp
                    @endforeach
                    <tr>
                        <td colspan="3" class="section-title">FINAL AVERAGE RATING</td>
                        <td>
                            @php
                                $coreA = 0;
                                $supA = 0;
                                $totalCore = count($core_func);
                                $totalSup = count($sup_func);
                                $rating = '';

                                foreach ($core_func as $core) {
                                    $coreA += $core->a;
                                }

                                foreach ($sup_func as $sup) {
                                    $supA += $sup->a;
                                }

                                $averageCore = $totalCore > 0 ? ($coreA / $totalCore) * 0.80 : 0;
                                $averageSup = $totalSup > 0 ? ($supA / $totalSup) * 0.20 : 0;
                                $total = $averageCore + $averageSup;

                                if ($total >= 4.5) {
                                    $rating = 'Outstanding';
                                } elseif ($total >= 3.5) {
                                    $rating = 'Very Satisfactory';
                                } elseif ($total >= 2.5) {
                                    $rating = 'Satisfactory';
                                } elseif ($total >= 1.5) {
                                    $rating = 'Unsatisfactory';
                                } else {
                                    $rating = 'Poor';
                                }
                            @endphp
                            {{ $rating }} 
                        </td>
                        <td  colspan="4">{{ $total }}</td>
                    </tr>
                </tbody>
            </table>
            <table id="secondary-table">
                <thead>
                    <tr>
                        <th>PREPARED BY:</th>
                        <th>DATE:</th>
                        <th>CERTIFIED BY:</th>
                        <th>DATE:</th>
                        <th>FINAL RATING:</th>
                        <th>APPROVED BY:</th>
                        <th>DATE:</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td id="employee_name"><span><u>{{ $ipcrs->employee_name }}</u></span> <span>{{ $ipcrs->position }}</span></td>
                        <td>{{ $ipcrs->date_of_filling }}</td>
                        <td id="cert_by"><span>I certify that I discussed my assessment of the performance with the employee</span>
                        <span><u>Supervisor</u></span><span>Signature Over Printed Name of Immediate Supervisor</span></td>
                        <td>date </td>
                        <td>{{ $total }}</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @push('styles')
    <link rel="stylesheet" href="{{ asset('css/ipcrpdf.css') }}">
    @endpush
</body>
</html>
