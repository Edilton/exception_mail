<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>    
    <h2> Relatório de Erros</h2>
   
    <table>
    <thead>
        <tr>
            <th>Error</th>
            <th>Session</th>
            <th>Request</th>
            <th>Header</th>
        </tr>
    </thead>
    <body>
        <tr>
            <td>
                <p> {{d($data['e']->getMessage())}} </p>
                <p><pre>Arquivo</pre> {{d($data['e']->getFile())}} </p>
                <p><pre>Linha</pre> {{d($data['e']->getLine())}} </p>
            </td>
            <td>
                <pre>Session</pre>
                {{d($data['session'])}}
                <pre>User</pre>
                {{d($data['user'])}}
            </td>
            <td>
                <pre>Request</pre>
                {{d($data['request'])}}
            </td>
            <td>
                <pre>Header</pre>
                {{d($data['header'])}}
            </td>
        </tr>
    </body>
    </table>
</body>
</html>



