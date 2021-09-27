<?php
require 'conexion.php';
//Para mostrar los elementos de un select
$sql2 = "SELECT periodo FROM convocatoria";
$result = $mysqli->query($sql2);
//Para
/*$where = "";

if (!empty($_POST)) {
    $valor = $_POST['campo'];
    if (!empty($valor)) {
        $where = "WHERE periodo LIKE '%$valor%' AND idConvocatoria  = idConvocatoria";
    }
}
$sql = "SELECT * FROM convocatoria $where";
$resultado4 = $mysqli->query($sql);*/
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
            "required": ["museutils.js", "museconfig.js", "jquery.watch.js", "require.js", "solicitudes-postulante.css"],
            "outOfDate": []
        };
    </script>

    <title>Solicitudes Postulante</title>
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=3968863445" />
    <link rel="stylesheet" type="text/css" href="css/master_master-postulante.css?crc=4125145744" />
    <link rel="stylesheet" type="text/css" href="css/solicitudes-postulante.css?crc=89529071" id="pagesheet" />
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
                    <a class="nonblock nontext clearfix grpelem" id="u3036-4" href="expediente-postulante.php">
                        <!-- content -->
                        <p>Expediente</p>
                    </a>
                    <a class="nonblock nontext MuseLinkActive clearfix grpelem" id="u3071-4" href="solicitudes-postulante.php">
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
                    <div class="clearfix grpelem" id="u3101-4">
                        <!-- content -->
                        <p>Historial de Solicitudes</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix colelem" id="pu3111-4">
            <!-- group -->
            <div class="clearfix grpelem" id="u3111-4">
                <!-- content -->
                <p>Programas Disponibles</p>
            </div>

            <div class="grpelem" id="u3037">
                <!-- content -->
            </div>
        </div>

        <script type="text/javascript" src="scripts/SelecDefinida.js"> </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"> </script>

        <div class="colelem" id="u4975">
            <!-- custom html -->
            <label for="select">Periodo:</label>
            <select name="selectPeriodo" id="selectPeriodo" onchange="seleccPeriodo()" class="btn btn-danger dropdown-toggle" size="0">
                <option selected="selected">Seleccione </option>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value=" . $row["periodo"] . ">" . $row["periodo"] . "</option>";
                    }
                } else {
                    printf('No hay registros.<br />');
                }
                mysqli_free_result($result);
                ?>

            </select>

        </div>

        <div class="colelem" id="u4960">
            <!-- custom html -->
            <div class="row table-responsive">
                <table class="table table-striped" width="566" height="75">
                    <thead>
                        <tr>

                            <th width="187" scope="col">Fechas </th>
                            <th width="107" scope="col">Detalles</th>
                            <th width="106" scope="col">Acciones </th>
                        </tr>
                    <tbody id="ans">

                    </tbody>
                    </thead>
                </table>
            </div>

        </div>
        <div class="clearfix colelem" id="u4964-4">
            <!-- content -->
            <p>Historial</p>
        </div>
        <div class="colelem" id="u4967">
            <!-- custom html -->
            <table width="818" height="84" border="1">
                <tbody>
                    <tr>
                        <th width="108" scope="col">Folio</th>
                        <th width="182" scope="col">Periodo </th>
                        <th width="145" scope="col">Estatus </th>
                        <th width="131" scope="col">Instrumento</th>
                        <th width="119" scope="col">Acuse</th>
                        <th width="93" scope="col">Acciones </th>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>

        </div>
        <a class="nonblock nontext Button rounded-corners clearfix colelem" id="buttonu3118" href="inicio-secretaria.html">
            <!-- container box -->
            <div class="clearfix grpelem" id="u3119-4">
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