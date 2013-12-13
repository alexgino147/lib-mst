
<html>

    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{literal}
    <link href="templates/css/bootstrap.min.css" rel="stylesheet" media="screen">

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="templates/js/bootstrap.min.js"></script>
{/literal}


       <table class="table table-striped">
    
        <tr>
            <th>N</th>
            <th>Codigo Tramite</th>
            <th>Nombre Tramite</th>
            <th>Fecha Registro</th>
            <th>Area</th>
            <th>Estado Tramite</th>
        </tr>
  {section name=numloop loop=$idtramite}
        <tr>
            <td>{$idtramite[numloop]}</td>
            <td>{$codigotramite[numloop]}</td>
            <td>{$nombretramite[numloop]}</td>
            <td>{$fecharegistro[numloop]}</td>
            <td>{$estadotramite[numloop]}</td>
            <td>{$idarea[numloop]}</td>
            <td>{$fecharegistro[numloop]}</td>
            <td>{$fecharegistro[numloop]}</td>
        </tr>
       {/section}
</table>

</html>
