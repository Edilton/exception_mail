<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <pre>Mensagem de erro</pre>
    <p> {{d($e->getMessage())}} </p>
    <p><pre>Arquivo</pre> {{d($e->getFile())}} </p>
    <p><pre>Linha</pre> {{d($e->getLine())}} </p>
    <pre>Session</pre>
    {{d($session)}}
</body>
</html>



