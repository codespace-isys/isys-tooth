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
                        <td><span style="color:#808080;"></span>TABLE ROLES </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="content">
            <table width="100%" class="table">
                <thead>
                    <tr>
                        <th class="left">Role</th>
                        <th class="left">created_at</th>
                        <th class="left">updated_at</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $role)
                    <tr>
                        <td>
                            {{ $role->role }}
                        </td>
                        <td>
                            {{ $role->created_at }}
                        </td>
                        <td>
                            {{ $role->updated_at }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
