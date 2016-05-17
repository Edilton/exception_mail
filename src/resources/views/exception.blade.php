<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
        table {
            width: 100%;
        }
        table, tr, td {
            text-align: left;
            border-collapse: collapse; 
            border: solid 1px #ccc;
        }
        table tr:first-child {
            background: #eee;
        }
        h4 {
            text-align: center;
        }
    </style>
</head>
<body>    
    <h2>Relatório de Erros</h2>

    {{-- Table Error --}}
    <table>
        <tr>
            <td colspan="2">
                <h4>Error</h4>
            </td>
        </tr>
        <tr>
            <td>{{ d('Message') }}</td>
            <td>{{ d($data['e']->getMessage()) }}</td>
        </tr>
        <tr>
            <td>{{ d('File') }}</td>
            <td>{{ d($data['e']->getFile()) }}</td>
        </tr>
        <tr>
            <td>{{ d('Line') }}</td>
            <td>{{ d($data['e']->getLine()) }}</td>
        </tr>
    </table>

    {{-- Table Session --}}
    <table>
        <tr>
            <td colspan="2">
                <h4>Session</h4>
            </td>
        </tr>
        <tr>
            <td>{{ d('User') }}</td>
            <td>{{ d($data['user']) }}</td>
        </tr>
        @foreach($data['session'] as $index => $session)
            <tr>
                <td>
                    {{ d($index) }}
                </td>
                <td>
                    {{ d($session) }}
                </td>
            </tr>
        @endforeach
    </table>

    {{-- Table Request --}}
    <table>
        <tr>
            <td colspan="2">
                <h4>Request</h4>
            </td>
        </tr>
        @foreach($data['request'] as $index => $request)
            <tr>
                <td>
                    {{ d($index) }}
                </td>
                <td>
                    {{ d($request) }}
                </td>
            </tr>
        @endforeach
    </table>

    {{-- Table Header --}}
    <table>
        <tr>
            <td colspan="2">
                <h4>Header</h4>
            </td>
        </tr>
        @foreach($data['header']['header'] as $index => $header)
            <tr>
                <td>
                    {{ d($index) }}
                </td>
                <td>                 
                    {{ d($header) }}
                </td>
            </tr>
        @endforeach
        <tr>
            <td>
                {{ d('url') }}
            </td>
            <td>                 
                {{ d($data['header']['url']) }}
            </td>
        </tr>
        <tr>
            <td>
                {{ d('ip') }}
            </td>
            <td>                 
                {{ d($data['header']['ip']) }}
            </td>
        </tr>
    </table>
</body>
</html>
