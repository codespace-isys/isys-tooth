<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }
        .wrapper {
            margin: 0 -20px 0;
            padding: 0 15px;
        }
        .middle {
            text-align: center;
        }
        .title {
            font-size: 35px;
        }
        .pb-10 {
            padding-bottom: 10px;
        }
        .pb-5 {
            padding-bottom: 5px;
        }
        .head-content {
            padding-bottom: 4px;
            border-style: none none ridge none;
            font-size: 18px;
        }
        thead {
            display: table-header-group;
        }
        tfoot {
            display: table-row-group;
        }
        tr {
            page-break-inside: avoid;
        }
        table.table {
            font-size: 13px;
            border-collapse: collapse;
        }
        .page-break {
            page-break-after: always;
            page-break-inside: avoid;
        }
        tr.even {
            background-color: #eff0f1;
        }
        table .left {
            text-align: left;
        }
        table .right {
            text-align: right;
        }
        table .bold {
            font-weight: 600;
        }
        .bg-black {
            background-color: #000;
        }
        .f-white {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="wrapper">
        <div class="pb-5">
            <div class="middle pb-10 title">
                Report Tables
            </div>
            <div class="head-content">
                <table cellpadding="0" cellspacing="0" width="100%" border="0">
                    <tr>
                        <td><span style="color:#808080;"></span>TABLE SICKNESS</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="content">
            <table width="100%" class="table">
                <thead>
                    <tr>
                        <th class="left">Sickness Name</th>
                        <th class="left">Sickness Description</th>
                        <th class="left">Sickness Solution</th>
                        <th class="left">Medicine</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sicknesses as $sickness)
                    <tr>
                        <td>
                            {{ $sickness->sickness_name }}
                        </td>
                        <td>
                            {!! $sickness->sickness_description !!}
                        </td>
                        <td>
                            {!! $sickness->sickness_solution !!}
                        </td>
                        <td>
                            {{$sickness->medicine->medicine_name }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
