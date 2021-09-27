<?php
require 'conexion.php';

//p para buscar los datos de una tabla y mostrarlos
$where = "";
if (!empty($_POST)) {
    $valor = $_POST['campo'];
    if (!empty($valor)) {
        $where = "WHERE nombreExpediente LIKE '%$valor%' AND idExpediente ='$idExpediente '";
    }
}
$sql = "SELECT * FROM expediente $where";
$resultado4 = $mysqli->query($sql);


?>
<!DOCTYPE html>
<html class="nojs html" lang="es-ES">

<head>
    <meta http-equiv="Expires" content="0">

    <meta http-equiv="Last-Modified" content="0">

    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">

    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <meta http-equiv="Last-Modified" content="0">

    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">

    <meta http-equiv="Pragma" content="no-cache">


    <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
    <meta name="generator" content="2017.0.0.363" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />



    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=3968863445" />
    <link rel="stylesheet" type="text/css" href="css/master_master-postulante.css?crc=4125145744" />
    <link rel="stylesheet" type="text/css" href="css/expediente-postulante.css?crc=4089912799" id="pagesheet" />


    <script type="text/javascript">
        // Update the 'nojs'/'js' class on the html node
        document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

        // Check that all required assets are uploaded and up-to-date
        if (typeof Muse == "undefined") window.Muse = {};
        window.Muse.assets = {
            "required": ["museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "expediente-postulante.css"],
            "outOfDate": []
        };
    </script>

    <title>Expediente Postulante</title>

</head>

<body>

    <div class="clearfix" id="page">
        <!-- column -->
        <div class="browser_width colelem" id="u3024-bw">
            <div id="u3024">
                <!-- group -->
                <div class="clearfix" id="u3024_align_to_page">
                    <div class="clip_frame grpelem" id="u3025">
                        <!-- image -->
                        <img class="block" id="u3025_img" src="images/nuevo%20logo.png?crc=4260889103" alt="" width="77" height="77" />
                    </div>
                    <div class="clearfix grpelem" id="u3028-4">
                        <!-- content -->
                        <p>Universidad Autónoma de Tlaxcala</p>
                    </div>
                    <div class="clearfix grpelem" id="u3027-4">
                        <!-- content -->
                        <p>ESDEPED</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="browser_width colelem" id="u3688-bw">
            <div id="u3688">
                <!-- group -->
                <div class="clearfix" id="u3688_align_to_page">
                    <div class="clearfix grpelem" id="u3030-4">
                        <!-- content -->
                        <p>Perfil</p>
                    </div>
                    <a class="nonblock nontext MuseLinkActive clearfix grpelem" id="u3036-4" href="expediente-postulante.php">
                        <!-- content -->
                        <p>Expediente</p>
                    </a>
                    <a class="nonblock nontext clearfix grpelem" id="u3071-4" href="solicitudes-postulante.html">
                        <!-- content -->
                        <p>Solicitudes</p>
                    </a>
                    <div class="clearfix grpelem" id="u3031-4">
                        <!-- content -->
                        <p>Brenda Viridiana Ortiz</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="browser_width colelem" id="u3691-bw">
            <div id="u3691">
                <!-- group -->
                <div class="clearfix" id="u3691_align_to_page">
                    <div class="clearfix grpelem" id="u3486-4">
                        <!-- content -->
                        <p>Lista de Expedientes</p>
                    </div>
                </div>
            </div>
        </div>
        <form class="form-horizontal" action="guardar_expediente-postulante.php" method="POST" enctype="multipart/form-data" autocomplete="on" name="form">

            <div class="colelem" id="u3037">
                <!-- content -->
            </div>
            <div class="clearfix colelem" id="u5001-4">
                <!-- content -->
                <p>Nombre del documento</p>
            </div>
            <div class="clearfix colelem" id="u5044-4">
                <!-- content -->
                <div class="form-group">
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombreExpediente" name="nombreExpediente" required>
                    </div>
                </div>
            </div>
            <input type="hidden" id="idExpediente" name="idExpediente" value="<?php echo $row['idExpediente']; ?>" />

            <div class="clearfix colelem" id="pu5008">
                <!-- group -->
                <div class="grpelem" id="u5008">
                    <!-- custom html -->
                    <div class="grpelem" id="u3660">
                        <!-- custom html -->
                        <label for="fileField">Documento (pdf de Expediente):</label>
                        <input type="file" class="form-control" name="documentoExpediente" id="fileField" accept="application/pdf" required>

                    </div>

                </div>
                <div class="Button rounded-corners clearfix grpelem" id="buttonu5013">
                    <button type="submit" class="Button rounded-corners clearfix colelem">
                        <!-- container box -->
                        <div class="clearfix grpelem" id="u5014-4">
                            <!-- content -->
                            <p>Agregar</p>
                        </div>
                    </button>
                </div>
            </div>
        </form>
        <div class="colelem" id="u3493">
            <!-- custom html -->
            <div class="row table-responsive">
                <table class="table table-striped" width="852" height="100">
                    <thead>
                        <tr>
                            <th>Folio</th>
                            <!--  <th>id Usuario</th> -->
                            <th>nombreExpediente</th>
                            <th>Ver</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = $resultado4->fetch_array(MYSQLI_ASSOC)) { ?>
                            <tr>
                                <td><?php echo $row['idExpediente']; ?></td>
                                <!--    <td><? //php// echo $row['Usuarios_idUsuarios']; 
                                            ?></td> -->
                                <td><?php echo $row['nombreExpediente']; ?></td>
                                <td> <a href="mostrarVer.php?id=<?php echo $row['idExpediente']; ?>" class="btn btn-outline-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark" viewBox="0 0 16 16">
                                            <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z" />
                                        </svg></span></a>
                                </td>
                                </td>
                                <td><a href="modificaciondocumento.php?id=<?php echo $row['idExpediente']; ?>" class="btn btn-outline-info"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                        </svg></span></a>
                                    <a href="borrar.php?id=<?php echo $row['idExpediente']; ?>" class="btn btn-outline-danger"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-dash-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
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
        <a class="nonblock nontext Button rounded-corners clearfix colelem" id="buttonu3490" href="inicio-secretaria.html">
            <!-- container box -->
            <div class="clearfix grpelem" id="u3491-4">
                <!-- content -->
                <p>Regresar</p>
            </div>
        </a>
        <div class="browser_width colelem" id="u3694-bw">
            <div id="u3694">
                <!-- group -->
                <div class="clearfix" id="u3694_align_to_page">
                    <div class="clip_frame grpelem" id="u3033">
                        <!-- image -->
                        <img class="block" id="u3033_img" src="images/escudo_uat.png?crc=497133022" alt="" width="38" height="58" />
                    </div>
                    <div class="clearfix grpelem" id="u3035-7">
                        <!-- content -->
                        <p id="u3035-2">2013 - 2020</p>
                        <p id="u3035-4">Universidad Autónoma de Tlaxcala</p>
                        <p>&nbsp;</p>
                    </div>
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