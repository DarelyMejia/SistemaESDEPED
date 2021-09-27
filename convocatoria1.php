<?php

require 'conexion.php';

$where = "";

if (!empty($_POST)) {
    $valor = $_POST['campo'];
    if (!empty($valor)) {
        $where = "WHERE periodo LIKE '%$valor%' AND convocatoria.idInstrumento = instrumento.idInstrumento";
    }
}
$sql = "SELECT * FROM convocatoria NATURAL JOIN instrumento $where";
$resultado = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html class="nojs html" lang="es-ES">

<head>

    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="generator" content="2017.0.0.363" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



    <script type="text/javascript">
        // Update the 'nojs'/'js' class on the html node
        document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

        // Check that all required assets are uploaded and up-to-date
        if (typeof Muse == "undefined") window.Muse = {};
        window.Muse.assets = {
            "required": ["museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "convocatoria.css"],
            "outOfDate": []
        };
    </script>

    <title>Convocatoria</title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=3968863445" />
    <link rel="stylesheet" type="text/css" href="css/master_master-secretaria.css?crc=451118867" />
    <link rel="stylesheet" type="text/css" href="css/convocatoria.css?crc=266780662" id="pagesheet" />
</head>

<body>

    <div class="clearfix" id="page">
        <!-- column -->
        <div class="position_content" id="page_position_content">
            <div class="browser_width colelem" id="u153-bw">
                <div id="u153">
                    <!-- group -->
                    <div class="clearfix" id="u153_align_to_page">
                        <div class="clip_frame grpelem" id="u159">
                            <!-- image -->
                            <img class="block" id="u159_img" src="images/nuevo%20logo.png?crc=4260889103" alt="" width="77" height="77" />
                        </div>
                        <div class="clearfix grpelem" id="u162-4">
                            <!-- content -->
                            <p>Universidad Autónoma de Tlaxcala</p>
                        </div>
                        <a class="nonblock nontext clearfix grpelem" id="u161-4" href="inicio-secretaria.html">
                            <!-- content -->
                            <p>ESDEPED</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="browser_width colelem" id="u3679-bw">
                <div id="u3679">
                    <!-- group -->
                    <div class="clearfix" id="u3679_align_to_page">
                        <a class="nonblock nontext clearfix grpelem" id="u191-4" href="perfil.html">
                            <!-- content -->
                            <p>Perfil</p>
                        </a>
                        <div class="clearfix grpelem" id="u236-4">
                            <!-- content -->
                            <p>Convocatorias</p>
                        </div>
                        <a class="nonblock nontext clearfix grpelem" id="u239-4" href="asignacion-de-cambio-de-evaluador.html">
                            <!-- content -->
                            <p>Asignación</p>
                        </a>
                        <a class="nonblock nontext clearfix grpelem" id="u242-4" href="estatus-del-postulante.html">
                            <!-- content -->
                            <p>Gestión de estatus</p>
                        </a>
                        <div class="clearfix grpelem" id="u192-4">
                            <!-- content -->
                            <p>Secretaría Académica</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="browser_width colelem" id="u3682-bw">
                <div id="u3682">
                    <!-- group -->
                    <div class="clearfix" id="u3682_align_to_page">
                        <div class="clearfix grpelem" id="u4459-4">
                            <!-- content -->
                            <p>Registro de convocatorias</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix colelem" id="u4461-4">
                <!-- content -->
                <p>Nueva convocatoria</p>
            </div>
            <script>
                function valida() {

                    var periodo = document.getElementById("periodo");
                    //alert(" Periodo: " + periodo.value);
                    if (periodo.value == "") {
                        alert("Ingresa el valor");
                    } else if (fechaFin.value < fechaInicio.value) {
                        alert("La fecha fin no debe de ser menor a la fecha inicio");
                    } else {
                        // alert(" Periodo: " + periodo.value);
                        document.form.submit();
                    }
                }
            </script>
            <form class="form-horizontal" action="guardar_Convocatoria.php" method="POST" enctype="multipart/form-data" autocomplete="on" name="form">

                <div class="clearfix colelem" id="pu4485-4">
                    <!-- group -->
                    <div class="clearfix grpelem" id="u4485-4">
                        <!-- content -->
                        <p>Nombre</p>
                    </div>
                    <div class="clearfix grpelem" id="u4495-4">
                        <!-- content -->
                        <p>Fecha de inicio</p>
                    </div>
                    <div class="clearfix grpelem" id="u4499-4">
                        <!-- content -->
                        <p>Fecha fin de convocatoria</p>
                    </div>
                </div>
                <div class="clearfix colelem" id="pu4480">
                    <!-- group -->
                    <div class="grpelem" id="u4480">
                        <!-- custom html -->




                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="periodo" name="periodo" required>
                            </div>
                        </div>


                    </div>
                    <div class="grpelem" id="u4488">
                        <!-- custom html -->
                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="fechaInicio" name="fechaInicio" required>
                            </div>
                        </div>

                    </div>
                    <div class="grpelem" id="u4498">
                        <!-- custom html -->
                        <div class="form-group">
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="fechaFin" name="fechaFin" required>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="clearfix colelem" id="pu4506">
                    <!-- group -->
                    <div class="grpelem" id="u4506">
                        <!-- custom html -->
                        <div class="grpelem" id="u3660">
                            <!-- custom html -->
                            <label for="fileField">Documento (pdf de la convocatoria):</label>
                            <input type="file" class="form-control" name="documentoConvocatoria" id="fileField" required>

                        </div>

                    </div>
                    <div class="clearfix grpelem" id="pu4777-4">
                        <!-- column -->
                        <div class="clearfix colelem" id="u4777-4">
                            <!-- content -->
                            <p>Instrumento</p>
                        </div>
                        <div class="colelem" id="u4770">
                            <!-- custom html -->
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="nombre_Instrumento" name="nombre_Instrumento" required>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="clearfix colelem" id="pu4792">
                    <!-- group -->
                    <div class="grpelem" id="u4792">
                        <!-- custom html -->
                        <input type=button class="btn btn-danger" value=Guardar onclick="valida();">
                    </div>
            </form>
            <div class="grpelem" id="u4788">
                <!-- custom html -->
                <div style="text-align: right;">
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                        <b></b><input type="text" class="form-control" id="campo" name="campo" />
                        <button type="submit" align="center" class="btn btn-info"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                            </svg> Buscar
                    </form>
                </div>

            </div>
        </div>
        <div class="colelem" id="u4796">
            <!-- custom html -->
            <div class="row table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Folio</th>
                            <th>Periodo</th>
                            <th>Fecha de Inicio</th>
                            <th>Fecha de Fin</th>
                            <th>Instrumento</th>
                            <th> </th>
                            <th>Niveles</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
                            <tr>
                                <td><?php echo $row['idConvocatoria']; ?></td>
                                <td><?php echo $row['periodo']; ?></td>
                                <td><?php echo $row['fechaInicio']; ?></td>
                                <td><?php echo $row['fechaFin']; ?></td>
                                <td><?php echo $row['nombre_Instrumento']; ?></td>
                                <td><a href="instrumentoseguimiento.php?id=<?php echo $row['idInstrumento']; ?>" class="btn btn-outline-info"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-folder-plus" viewBox="0 0 16 16">
                                            <path d="m.5 3 .04.87a1.99 1.99 0 0 0-.342 1.311l.637 7A2 2 0 0 0 2.826 14H9v-1H2.826a1 1 0 0 1-.995-.91l-.637-7A1 1 0 0 1 2.19 4h11.62a1 1 0 0 1 .996 1.09L14.54 8h1.005l.256-2.819A2 2 0 0 0 13.81 3H9.828a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 6.172 1H2.5a2 2 0 0 0-2 2zm5.672-1a1 1 0 0 1 .707.293L7.586 3H2.19c-.24 0-.47.042-.683.12L1.5 2.98a1 1 0 0 1 1-.98h3.672z" />
                                            <path d="M13.5 10a.5.5 0 0 1 .5.5V12h1.5a.5.5 0 1 1 0 1H14v1.5a.5.5 0 1 1-1 0V13h-1.5a.5.5 0 0 1 0-1H13v-1.5a.5.5 0 0 1 .5-.5z" />
                                        </svg></td>
                                <td>Niveles</td>
                                <td><a href="#" class="btn btn-outline-info"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-up-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M1.5 13A1.5 1.5 0 0 0 3 14.5h8a1.5 1.5 0 0 0 1.5-1.5V9a.5.5 0 0 0-1 0v4a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 0 0-1H3A1.5 1.5 0 0 0 1.5 5v8zm7-11a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-1 0V2.5H9a.5.5 0 0 1-.5-.5z" />
                                            <path fill-rule="evenodd" d="M14.354 1.646a.5.5 0 0 1 0 .708l-8 8a.5.5 0 0 1-.708-.708l8-8a.5.5 0 0 1 .708 0z" />
                                        </svg></span></a>
                                    <a href="#" data-toggle="modal" data-target="#confirm-delete" class="btn btn-outline-danger"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                            <path fill-rule="evenodd" d="M3.5 8a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.5-.5z" />
                                        </svg></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
        <div class="clearfix colelem" id="u3685">
            <!-- group -->
            <div class="clip_frame grpelem" id="u204">
                <!-- image -->
                <img class="block" id="u204_img" src="images/escudo_uat.png?crc=497133022" alt="" width="38" height="58" />
            </div>
            <div class="clearfix grpelem" id="u206-7">
                <!-- content -->
                <p id="u206-2">2013 - 2020</p>
                <p id="u206-4">Universidad Autónoma de Tlaxcala</p>
                <p>&nbsp;</p>
            </div>
        </div>
    </div>
    </div>
    <!-- Other scripts -->
    <script type="text/javascript">
        window.Muse.assets.check = function(d) {
            if (!window.Muse.assets.checked) {
                window.Muse.assets.checked = !0;
                var b = {},
                    c = function(a, b) {
                        if (window.getComputedStyle) {
                            var c = window.getComputedStyle(a, null);
                            return c && c.getPropertyValue(b) || c && c[b] || ""
                        }
                        if (document.documentElement.currentStyle) return (c = a.currentStyle) && c[b] || a.style && a.style[b] || "";
                        return ""
                    },
                    a = function(a) {
                        if (a.match(/^rgb/)) return a = a.replace(/\s+/g, "").match(/([\d\,]+)/gi)[0].split(","), (parseInt(a[0]) << 16) + (parseInt(a[1]) << 8) + parseInt(a[2]);
                        if (a.match(/^\#/)) return parseInt(a.substr(1),
                            16);
                        return 0
                    },
                    g = function(g) {
                        for (var f = document.getElementsByTagName("link"), h = 0; h < f.length; h++)
                            if ("text/css" == f[h].type) {
                                var i = (f[h].href || "").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);
                                if (!i || !i[1] || !i[2]) break;
                                b[i[1]] = i[2]
                            } f = document.createElement("div");
                        f.className = "version";
                        f.style.cssText = "display:none; width:1px; height:1px;";
                        document.getElementsByTagName("body")[0].appendChild(f);
                        for (h = 0; h < Muse.assets.required.length;) {
                            var i = Muse.assets.required[h],
                                l = i.match(/([\w\-\.]+)\.(\w+)$/),
                                k = l && l[1] ?
                                l[1] : null,
                                l = l && l[2] ? l[2] : null;
                            switch (l.toLowerCase()) {
                                case "css":
                                    k = k.replace(/\W/gi, "_").replace(/^([^a-z])/gi, "_$1");
                                    f.className += " " + k;
                                    k = a(c(f, "color"));
                                    l = a(c(f, "backgroundColor"));
                                    k != 0 || l != 0 ? (Muse.assets.required.splice(h, 1), "undefined" != typeof b[i] && (k != b[i] >>> 24 || l != (b[i] & 16777215)) && Muse.assets.outOfDate.push(i)) : h++;
                                    f.className = "version";
                                    break;
                                case "js":
                                    h++;
                                    break;
                                default:
                                    throw Error("Unsupported file type: " + l);
                            }
                        }
                        d ? d().jquery != "1.8.3" && Muse.assets.outOfDate.push("jquery-1.8.3.min.js") : Muse.assets.required.push("jquery-1.8.3.min.js");
                        f.parentNode.removeChild(f);
                        if (Muse.assets.outOfDate.length || Muse.assets.required.length) f = "Puede que determinados archivos falten en el servidor o sean incorrectos. Limpie la cache del navegador e inténtelo de nuevo. Si el problema persiste, póngase en contacto con el administrador del sitio web.", g && Muse.assets.outOfDate.length && (f += "\nOut of date: " + Muse.assets.outOfDate.join(",")), g && Muse.assets.required.length && (f += "\nMissing: " + Muse.assets.required.join(",")), alert(f)
                    };
                location && location.search && location.search.match && location.search.match(/muse_debug/gi) ? setTimeout(function() {
                    g(!0)
                }, 5E3) : g()
            }
        };
        var muse_init = function() {
            require.config({
                baseUrl: ""
            });
            require(["jquery", "museutils", "whatinput", "jquery.watch"], function(d) {
                var $ = d;
                $(document).ready(function() {
                    try {
                        window.Muse.assets.check($); /* body */
                        Muse.Utils.transformMarkupToFixBrowserProblemsPreInit(); /* body */
                        Muse.Utils.prepHyperlinks(true); /* body */
                        Muse.Utils.resizeHeight('.browser_width'); /* resize height */
                        Muse.Utils.requestAnimationFrame(function() {
                            $('body').addClass('initialized');
                        }); /* mark body as initialized */
                        Muse.Utils.showWidgetsWhenReady(); /* body */
                        Muse.Utils.transformMarkupToFixBrowserProblems(); /* body */
                    } catch (b) {
                        if (b && "function" == typeof b.notify ? b.notify() : Muse.Assert.fail("Error calling selector function: " + b), false) throw b;
                    }
                })
            })
        };
    </script>
    <!-- RequireJS script -->
    <script src="scripts/require.js?crc=244322403" type="text/javascript" async data-main="scripts/museconfig.js?crc=168988563" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
</body>

</html>