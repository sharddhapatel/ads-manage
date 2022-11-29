@extends('admin.header-footer')
@section('contant')

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-12">
                        <div class="card author-box">
                            <div class="card-body">
                                <div class="author-box-left">
                                    <!-- <figure class="avatar mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture" style="height: 100px; width:100px;" data-initial="f">
                                        <img src="{{URL::asset('assets/images/logo.png')}}" id="preview" class="img-thumbnail rounded-circle" width="100" height="100">
                                    </figure> -->
                                    <div class="card-body text-center">
                                        <img src="{{URL::asset('assets/images/logo1.png')}}" id="preview" class="img-thumbnail rounded-circle" width="100" height="100">
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="author-box-job">Play Store</div>
                                    <div class="badge
                                   badge-primary  badge-shadow">
                                        Not Publish </div>

                                </div>
                                <div class="author-box-details">

                                    <div class="align-left1" style="text-align: right;">


                                        <div class="row">
                                            <div class="col-lg-6"> </div>

                                            <div class="col-lg-4" style="text-align: right;">
                                                <a class="btn btn-sm btn-success" href="{{url('createapplicationsetup')}}">Edit</a>

                                                <a class="btn btn-sm btn-info" style="color: #fff;" href="{{url('sendnotification')}}">Send Notification</a>
                                            </div>

                                            <div class="col-lg-2" style="text-align: right;">
                                                <form method="post" target="_blank" action="#">

                                                    <input type="hidden" name="pkg" value="f">
                                                    <input type="hidden" name="key" value="4kDn2isjqdzGyfGL*hFp0vdj*cg=">
                                                    <a class="btn btn-sm btn-info" style="color: #fff;" href="{{url('viewsetup')}}">view app response</a>
                                                    <!-- <input type="submit" class="btn btn-sm btn-primary" value="View App Response"> -->
                                                </form>
                                            </div>



                                        </div>

                                    </div>


                                    <div class="author-box-name">
                                        <a href="#">f</a>
                                    </div>
                                    <div class="author-box-job">f </div>


                                    <div class="author-box-description">

                                        <div class="row">
                                            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                                <div>
                                                    <div class="card-body">
                                                        <div class="recent-report__chart" style="position: relative;">
                                                            <div id="chart5" style="min-height: 364px;">
                                                                <div id="apexchartsbtr6yhif" class="apexcharts-canvas apexchartsbtr6yhif zoomable" style="width: 999px; height: 350px;"><svg id="SvgjsSvg1255" width="999" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="999" height="350">
                                                <div class="apexcharts-legend center position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 10px; position: absolute;">
                                                <div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 0px 5px;">
                                                    <span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(0, 143, 251); color: rgb(0, 143, 251); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span>
                                                <span class="apexcharts-legend-text" rel="1" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-family: Helvetica, Arial, sans-serif;">App Download</span></div>
                                                <div class="apexcharts-legend-series" rel="2" data:collapsed="false" style="margin: 0px 5px;">
                                                    <span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(0, 227, 150); color: rgb(0, 227, 150); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span>
                                                    <span class="apexcharts-legend-text" rel="2" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Active Users</span></div>
                                                </div>
<style type="text/css">

.apexcharts-legend {
display: flex;
overflow: auto;
padding: 0 10px;
}

.apexcharts-legend.position-bottom, .apexcharts-legend.position-top {
flex-wrap: wrap
}
.apexcharts-legend.position-right, .apexcharts-legend.position-left {
flex-direction: column;
bottom: 0;
}

.apexcharts-legend.position-bottom.left, .apexcharts-legend.position-top.left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {
justify-content: flex-start;
}

.apexcharts-legend.position-bottom.center, .apexcharts-legend.position-top.center {
justify-content: center;
}

.apexcharts-legend.position-bottom.right, .apexcharts-legend.position-top.right {
justify-content: flex-end;
}

.apexcharts-legend-series {
cursor: pointer;
}

.apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{
display: flex;
align-items: center;
}

.apexcharts-legend-text {
position: relative;
font-size: 14px;
}

.apexcharts-legend-text *, .apexcharts-legend-marker * {
pointer-events: none;
}

.apexcharts-legend-marker {
position: relative;
display: inline-block;
cursor: pointer;
margin-right: 3px;
}

.apexcharts-legend.right .apexcharts-legend-series, .apexcharts-legend.left .apexcharts-legend-series{
display: inline-block;
}

.apexcharts-legend-series.no-click {
cursor: auto;
}

.apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
display: none !important;
}

.inactive-legend {
opacity: 0.45;
}
</style>
</foreignObject>
<g id="SvgjsG1257" class="apexcharts-inner apexcharts-graphical" transform="translate(58.95833333333333, 50)">
<defs id="SvgjsDefs1256"><clipPath id="gridRectMaskbtr6yhif"><rect id="SvgjsRect1265" width="884.75" height="235.348" x="-2" y="-2" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath><clipPath id="gridRectMarkerMaskbtr6yhif"><rect id="SvgjsRect1266" width="898.75" height="249.348" x="-9" y="-9" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect></clipPath></defs><rect id="SvgjsRect1264" width="1" height="231.348" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect><g id="SvgjsG1275" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1276" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1277" font-family="Helvetica, Arial, sans-serif" x="0" y="260.348" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1278" style="font-family: Helvetica, Arial, sans-serif;"></tspan><title></title></text><text id="SvgjsText1279" font-family="Helvetica, Arial, sans-serif" x="125.82142857142858" y="260.348" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1280" style="font-family: Helvetica, Arial, sans-serif;"></tspan><title></title></text><text id="SvgjsText1281" font-family="Helvetica, Arial, sans-serif" x="251.64285714285717" y="260.348" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1282" style="font-family: Helvetica, Arial, sans-serif;"></tspan><title></title></text><text id="SvgjsText1283" font-family="Helvetica, Arial, sans-serif" x="377.4642857142857" y="260.348" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1284" style="font-family: Helvetica, Arial, sans-serif;"></tspan><title></title></text><text id="SvgjsText1285" font-family="Helvetica, Arial, sans-serif" x="503.2857142857143" y="260.348" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1286" style="font-family: Helvetica, Arial, sans-serif;"></tspan><title></title></text><text id="SvgjsText1287" font-family="Helvetica, Arial, sans-serif" x="629.1071428571428" y="260.348" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1288" style="font-family: Helvetica, Arial, sans-serif;"></tspan><title></title></text><text id="SvgjsText1289" font-family="Helvetica, Arial, sans-serif" x="754.9285714285713" y="260.348" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1290" style="font-family: Helvetica, Arial, sans-serif;"></tspan><title></title></text><text id="SvgjsText1291" font-family="Helvetica, Arial, sans-serif" x="880.7499999999999" y="260.348" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1292" style="font-family: Helvetica, Arial, sans-serif;"></tspan><title></title></text></g><line id="SvgjsLine1293" x1="0" y1="232.348" x2="880.75" y2="232.348" stroke="#78909c" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG1314" class="apexcharts-grid"><line id="SvgjsLine1315" x1="125.82142857142857" y1="232.348" x2="125.82142857142857" y2="238.348" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1316" x1="251.64285714285714" y1="232.348" x2="251.64285714285714" y2="238.348" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1317" x1="377.4642857142857" y1="232.348" x2="377.4642857142857" y2="238.348" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1318" x1="503.2857142857143" y1="232.348" x2="503.2857142857143" y2="238.348" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1319" x1="629.1071428571429" y1="232.348" x2="629.1071428571429" y2="238.348" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1320" x1="754.9285714285714" y1="232.348" x2="754.9285714285714" y2="238.348" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1321" x1="0" y1="0" x2="880.75" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1322" x1="0" y1="46.269600000000004" x2="880.75" y2="46.269600000000004" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1323" x1="0" y1="92.53920000000001" x2="880.75" y2="92.53920000000001" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1324" x1="0" y1="138.80880000000002" x2="880.75" y2="138.80880000000002" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1325" x1="0" y1="185.07840000000002" x2="880.75" y2="185.07840000000002" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1326" x1="0" y1="231.348" x2="880.75" y2="231.348" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1328" x1="0" y1="231.348" x2="880.75" y2="231.348" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine1327" x1="0" y1="1" x2="0" y2="231.348" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1268" class="apexcharts-bar-series apexcharts-plot-series" clip-path="url(#gridRectMaskbtr6yhif)"><g id="SvgjsG1269" class="apexcharts-series App-Download" rel="1" data:realIndex="0"></g></g><g id="SvgjsG1271" class="apexcharts-line-series apexcharts-plot-series"><g id="SvgjsG1272" class="apexcharts-series Active-Users" data:longestSeries="true" rel="1" data:realIndex="1"><g id="SvgjsG1273" class="apexcharts-series-markers-wrap"></g><g id="SvgjsG1274" class="apexcharts-datalabels"></g></g></g><line id="SvgjsLine1329" x1="0" y1="0" x2="880.75" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1330" x1="0" y1="0" x2="880.75" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1331" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1332" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1333" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1334" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1335" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-selection-rect"></rect></g><text id="SvgjsText1258" font-family="Helvetica, Arial, sans-serif" x="10" y="16" text-anchor="start" dominate-baseline="central" font-size="14px" fill="#373d3f" class="apexcharts-title-text" style="font-family: Helvetica, Arial, sans-serif; opacity: 1;"></text><g id="SvgjsG1270" class="apexcharts-datalabels"></g><g id="SvgjsG1294" class="apexcharts-yaxis" rel="0" transform="translate(31.83333333333333, 0)"><g id="SvgjsG1295" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1296" font-family="Helvetica, Arial, sans-serif" x="20" y="51.5" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">5</text><text id="SvgjsText1297" font-family="Helvetica, Arial, sans-serif" x="20" y="97.8696" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">4</text><text id="SvgjsText1298" font-family="Helvetica, Arial, sans-serif" x="20" y="144.2392" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">3</text><text id="SvgjsText1299" font-family="Helvetica, Arial, sans-serif" x="20" y="190.60880000000003" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">2</text><text id="SvgjsText1300" font-family="Helvetica, Arial, sans-serif" x="20" y="236.97840000000002" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">1</text><text id="SvgjsText1301" font-family="Helvetica, Arial, sans-serif" x="20" y="283.348" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica,
Arial, sans-serif;">0</text></g>
<g id="SvgjsG1302" class="apexcharts-yaxis-title">
<text id="SvgjsText1303" font-family="Helvetica, Arial, sans-serif" x="34.281280517578125" y="165.674" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#373d3f" class="apexcharts-yaxis-title-text apexcharts-yaxis-title" style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-90 -1.999969482421875 161.6739959716797)">App Download</text></g></g><g id="SvgjsG1304" class="apexcharts-yaxis" rel="1" transform="translate(982.7083333333334, 0)"><g id="SvgjsG1305" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1306" font-family="Helvetica, Arial, sans-serif" x="-20" y="51.5" text-anchor="start" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">5</text><text id="SvgjsText1307" font-family="Helvetica, Arial, sans-serif" x="-20" y="97.8696" text-anchor="start" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">4</text><text id="SvgjsText1308" font-family="Helvetica, Arial, sans-serif" x="-20" y="144.2392" text-anchor="start" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">3</text><text id="SvgjsText1309" font-family="Helvetica, Arial, sans-serif" x="-20" y="190.60880000000003" text-anchor="start" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">2</text><text id="SvgjsText1310" font-family="Helvetica, Arial, sans-serif" x="-20" y="236.97840000000002" text-anchor="start" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">1</text><text id="SvgjsText1311" font-family="Helvetica, Arial, sans-serif" x="-20" y="283.348" text-anchor="start" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">0</text></g><g id="SvgjsG1312" class="apexcharts-yaxis-title"><text id="SvgjsText1313" font-family="Helvetica, Arial, sans-serif" x="33.61767578125" y="165.674" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#373d3f" class="apexcharts-yaxis-title-text apexcharts-yaxis-title" style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(90 2.4853515625 161.6739959716797)">Active Users</text></g></g></svg>
                                                                    <div class="apexcharts-tooltip light">
                                                                        <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                                                        <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span>
                                                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 227, 150);"></span>
                                                                            <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                                <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                                                                <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom">
                                                                        <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                                                    </div>
                                                                    <div class="apexcharts-toolbar">
                                                                        <div class="apexcharts-zoom-in-icon" title="Zoom In"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
<path d="M0 0h24v24H0z" fill="none"></path>
<path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
</svg>
                                                                        </div>
                                                                        <div class="apexcharts-zoom-out-icon" title="Zoom Out"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
<path d="M0 0h24v24H0z" fill="none"></path>
<path d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
</svg>
                                                                        </div>
                                                                        <div class="apexcharts-zoom-icon selected" title="Selection Zoom"><svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
<path d="M0 0h24v24H0V0z" fill="none"></path>
<path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"></path>
</svg></div>
                                                                        <div class="apexcharts-pan-icon" title="Panning"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
<defs>
<path d="M0 0h24v24H0z" id="a"></path>
</defs>
<clipPath id="b">
<use overflow="visible" xlink:href="#a"></use>
</clipPath>
<path clip-path="url(#b)" d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z"></path>
</svg></div>
                                                                        <div class="apexcharts-reset-zoom-icon" title="Reset Zoom"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
<path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
<path d="M0 0h24v24H0z" fill="none"></path>
</svg></div>
                                                                        <!-- <div class="apexcharts-menu-icon" title="Menu"><svg xmlns="" width="24" height="24" viewBox="0 0 24 24">
                                                <path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg></div>
                                            <div class="apexcharts-menu">
                                                <div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div>
                                                <div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div>
                                            </div> -->
                                                                        <div class="dropdown custom-dropdown custom-dropdown-margin">
                                                                            <div data-toggle="dropdown"><i class="icon-menu"></i>
                                                                            </div>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <a class="dropdown-item" href="#"> Download SVG</a>
                                                                                <a class="dropdown-item" href="#"> Download PNG</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="resize-triggers">
                                                            <div class="expand-trigger">
                                                                <div style="width: 1000px; height: 365px;"></div>
                                                            </div>
                                                            <div class="contract-trigger"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="row mt-5">
                                                <div class="col-7 col-xl-7 mb-3">Today Download</div>
                                                <div class="col-5 col-xl-5 mb-3">
                                                    <span class="text-big">0</span>
                                                </div>
                                                <div class="col-7 col-xl-7 mb-3">Last 7 Days Download</div>
                                                <div class="col-5 col-xl-5 mb-3">
                                                    <span class="text-big">0</span>
                                                </div>
                                                <div class="col-7 col-xl-7 mb-3">Previous Month Download</div>
                                                <div class="col-5 col-xl-5 mb-3">
                                                    <span class="text-big">0</span>
                                                </div>
                                                <div class="col-7 col-xl-7 mb-3">Total Download</div>
                                                <div class="col-5 col-xl-5 mb-3">
                                                    <span class="text-big">0</span>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>
                                <div class="mb-2 mt-3">
                                    <div class="text-small font-weight-bold"></div>
                                </div>
                            </div>
                            <div class="row" style="padding: 10px;">


                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="row row1">
                                        <div class="col-sm-12 col-md-3 col-lg-3">
                                            <address>
        <strong>Account:</strong><br>
        demo                           </address>

                                        </div>

                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <address>
        <strong>Category:</strong><br>
        Auto &amp; Vehicles                           </address>
                                        </div>

                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <address>
        <strong>Created Date:</strong><br>
        27-06-2022                           </address>
                                        </div>




                                        <div class="col-sm-12 col-md-5 col-lg-5 align-left" style="text-align: right;">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModalJks"> <i class="fas fa-download"></i> JKS</button>

                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModalSourceCode"> <i class="fas fa-download"></i> Source Code</button>

                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModalDesign"> <i class="fas fa-download"></i> App Design</button>
                                        </div>

                                    </div>


                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="row row1">

                                        <div class="col-sm-12 col-md-3 col-lg-3">
                                            <address>
        <strong>More App Group:</strong><br>
        -                               </address>
                                        </div>

                                        <div class="col-sm-12 col-md-2 col-lg-2">
                                            <address>
            <strong>Advertise Group:</strong><br>
            -                               </address>
                                        </div>
                                    </div>


                                </div>




                            </div>
                            <div class="row border" style="margin-top: 30px;">
                                <div class="col-12 col-sm-12 col-md-8 col-lg-8" id="moplacement">
                                    <div>
                                        <div class="card-header">
                                            <h4>App Placement</h4>

                                            <div class="card-header-action">
                                                <a href="{{url('createapplicationsetup')}}" class="btn btn-info btn_blink" style="color: #fff">Monetize Settings</a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                                                <li class="media">
                                                    <img alt="image" class="mr-3 rounded-circle" width="50" src="{{URL::asset('assets/images/google-admob.svg')}}">
                                                    <div class="media-body">
                                                        <div class="media-title"> Admob</divsr>
                                                    </div>
                                                    <div class="media-progressbar">



                                                        <div class="profile-widget-item-value text-info mr-2 font-weight-bold text-center" style="justify-content: center;  align-items: center; ">
                                                            <a href="#" data-toggle="modal" role="dialog" data-target="#exampleadmop54" onclick="updatePlacementStatus(18,26);">
                                                                <div class="badge badge-success badge-shadow active_color">Enable</div>
                                                            </a>

                                                        </div>

                                                    </div>
                                                    <div class="media-cta">
                                                        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#placementid1851" aria-expanded="false" aria-controls="collapseExample">
                    Placement ID
                    </button>
                                                    </div>
                                                </li>
                                                <div class="collapse" style="margin-bottom: 20px; border-bottom: 2px solid blue;" id="placementid1851">
                                                    <div class="progress-text">
                                                        AppID : PLACEMENT ID </div>

                                                    <div class="progress-text">
                                                        Banner : /6499/example/banner<br> </div>
                                                    <div class="progress-text">
                                                        Interstitial : /6499/example/interstitial<br> </div>
                                                    <div class="progress-text">
                                                        Native : /6499/example/native<br> </div>
                                                    <div class="progress-text">
                                                        RewardedVideo : /6499/example/rewarded<br> </div>


                                                    <div class="progress-text">
                                                        App Open : /6499/example/app-open </div>

                                                </div>
                                                <li class="media">
                                                    <img alt="image" class="mr-3 rounded-circle" width="50" height="50" src="{{URL::asset('assets/images/IMGLOGO15acd4c101ddbf06a82103d69e0c4e60.jpg')}}">
                                                    <div class="media-body">
                                                        <div class="media-title"> Facebook audience network</div>
                                                    </div>
                                                    <div class="media-progressbar">



                                                        <div class="profile-widget-item-value text-info mr-2 font-weight-bold text-center" style="justify-content: center;  align-items: center; ">
                                                            <a href="#" data-toggle="modal" data-target="#exampleadmop54" onclick="updatePlacementStatus(1852,0);">
                                                                <div class="badge badge-success badge-shadow active_color">Enable</div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="media-cta">
                                                        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#placementid1852" aria-expanded="false" aria-controls="collapseExample">
                    Placement ID
                    </button>
                                                    </div>
                                                </li>
                                                <div class="collapse" style="margin-bottom: 20px; border-bottom: 2px solid blue;" id="placementid1852">

                                                    <div class="progress-text">
                                                        Banner : IMG_16_9_APP_INSTALL#YOUR_PLACEMENT_ID<br> </div>
                                                    <div class="progress-text">
                                                        Interstitial : IMG_16_9_APP_INSTALL#YOUR_PLACEMENT_ID<br> </div>
                                                    <div class="progress-text">
                                                        Native : IMG_16_9_APP_INSTALL#YOUR_PLACEMENT_ID<br> </div>
                                                    <div class="progress-text">
                                                        NativeBanner : IMG_16_9_APP_INSTALL#YOUR_PLACEMENT_ID<br> </div>
                                                    <div class="progress-text">
                                                        RewardedVideo : IMG_16_9_APP_INSTALL#YOUR_PLACEMENT_ID<br> </div>



                                                </div>
                                                <li class="media">
                                                    <img alt="image" class="mr-3 rounded-circle" width="50" height="50" src="{{URL::asset('assets/images/IMGLOGOa78036aa8efc397480350a970608dad5.webp')}}">
                                                    <div class="media-body">
                                                        <div class="media-title"> Unity</div>
                                                    </div>
                                                    <div class="media-progressbar">



                                                        <div class="profile-widget-item-value text-info mr-2 font-weight-bold text-center" style="justify-content: center;  align-items: center; ">
                                                            <a href="#" data-toggle="modal" data-target="#exampleadmop54" onclick="updatePlacementStatus(1853,0);">
                                                                <div class="badge badge-success badge-shadow active_color">Enable</div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="media-cta">
                                                        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#placementid1853" aria-expanded="false" aria-controls="collapseExample">
                    Placement ID
                    </button>
                                                    </div>
                                                </li>
                                                <div class="collapse" style="margin-bottom: 20px; border-bottom: 2px solid blue;" id="placementid1853">
                                                    <div class="progress-text">
                                                        AppID : Unity App ID </div>




                                                </div>
                                                <li class="media">
                                                    <img alt="image" class="mr-3 rounded-circle" width="50" src="{{URL::asset('assets/images/logo.f09e2d5e.png')}}">
                                                    <div class="media-body">
                                                        <div class="media-title"> AppNext</div>
                                                    </div>
                                                    <div class="media-progressbar">



                                                        <div class="profile-widget-item-value text-info mr-2 font-weight-bold text-center" style="justify-content: center;  align-items: center; ">
                                                            <a href="#" data-toggle="modal" data-target="#exampleadmop54" onclick="updatePlacementStatus(1854,0);">
                                                                <div class="badge badge-success badge-shadow active_color">Enable</div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="media-cta">
                                                        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#placementid1854" aria-expanded="false" aria-controls="collapseExample">
                    Placement ID
                    </button>
                                                    </div>
                                                </li>
                                                <div class="collapse" style="margin-bottom: 20px; border-bottom: 2px solid blue;" id="placementid1854">
                                                    <div class="progress-text">
                                                        AppID : AppNext App ID </div>




                                                </div>
                                                <li class="media">
                                                    <img alt="image" class="mr-3 rounded-circle" width="50" src="{{URL::asset('assets/images/startapp.png')}}">
                                                    <div class="media-body">
                                                        <div class="media-title"> StartApp</div>
                                                    </div>
                                                    <div class="media-progressbar">



                                                        <div class="profile-widget-item-value text-info mr-2 font-weight-bold text-center" style="justify-content: center;  align-items: center; ">
                                                            <a href="#" data-toggle="modal" data-target="#exampleadmop54" onclick="updatePlacementStatus(1855,0);">
                                                                <div class="badge badge-success badge-shadow active_color">Enable</div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="media-cta">
                                                        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#placementid1855" aria-expanded="false" aria-controls="collapseExample">
                    Placement ID
                    </button>
                                                    </div>
                                                </li>
                                                <div class="collapse" style="margin-bottom: 20px; border-bottom: 2px solid blue;" id="placementid1855">
                                                    <div class="progress-text">
                                                        AppID : StartApp App ID </div>




                                                </div>
                                                <li class="media">
                                                    <figure class="avatar mb-2 avatar-xl text-height-4 bg-warning rounded-circle profile-widget-picture" style="height: 50px; width:50px; " data-initial="Q">
                                                    </figure>
                                                    <div class="media-body">
                                                        <div class="media-title"> Qureka</div>
                                                    </div>
                                                    <div class="media-progressbar">



                                                        <div class="profile-widget-item-value text-info mr-2 font-weight-bold text-center" style="justify-content: center;  align-items: center; ">
                                                            <a href="#" data-toggle="modal" data-target="#exampleadmop54" onclick="updatePlacementStatus(1856,0);">
                                                                <div class="badge badge-success badge-shadow active_color">Enable</div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="media-cta">
                                                        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#placementid1856" aria-expanded="false" aria-controls="collapseExample">
                    Placement ID
                    </button>
                                                    </div>
                                                </li>
                                                <div class="collapse" style="margin-bottom: 20px; border-bottom: 2px solid blue;" id="placementid1856">
                                                    <div class="progress-text">
                                                        AppID : PLACEMENT ID </div>

                                                    <div class="progress-text">
                                                        Banner : PLACEMENT ID<br> </div>
                                                    <div class="progress-text">
                                                        Interstitial : PLACEMENT ID<br> </div>
                                                    <div class="progress-text">
                                                        Native : PLACEMENT ID<br> </div>
                                                    <div class="progress-text">
                                                        NativeBanner : PLACEMENT ID<br> </div>
                                                    <div class="progress-text">
                                                        RewardedVideo : PLACEMENT ID<br> </div>


                                                    <div class="progress-text">
                                                        App Open : /6499/example/app-open </div>

                                                </div>
                                                <li class="media">
                                                    <img alt="image" class="mr-3 rounded-circle" width="50" src="{{URL::asset('assets/images/AdManagerLogo.png')}}">
                                                    <div class="media-body">
                                                        <div class="media-title"> AD Manager</div>
                                                    </div>
                                                    <div class="media-progressbar">



                                                        <div class="profile-widget-item-value text-info mr-2 font-weight-bold text-center" style="justify-content: center;  align-items: center; ">
                                                            <a href="#" data-toggle="modal" data-target="#exampleadmop54" onclick="updatePlacementStatus(1857,0);">
                                                                <div class="badge badge-success badge-shadow active_color">Enable</div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="media-cta">
                                                        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#placementid1857" aria-expanded="false" aria-controls="collapseExample">
                    Placement ID
                    </button>
                                                    </div>
                                                </li>
                                                <div class="collapse" style="margin-bottom: 20px; border-bottom: 2px solid blue;" id="placementid1857">
                                                    <div class="progress-text">
                                                        AppID : PLACEMENT ID </div>

                                                    <div class="progress-text">
                                                        Banner : PLACEMENT ID<br> </div>
                                                    <div class="progress-text">
                                                        Interstitial : PLACEMENT ID<br> </div>
                                                    <div class="progress-text">
                                                        Native : PLACEMENT ID<br> </div>
                                                    <div class="progress-text">
                                                        NativeBanner : PLACEMENT ID<br> </div>
                                                    <div class="progress-text">
                                                        RewardedVideo : PLACEMENT ID<br> </div>


                                                    <div class="progress-text">
                                                        App Open : /6499/example/app-open </div>

                                                </div>
                                                <li class="media">
                                                    <img alt="image" class="mr-3 rounded-circle" width="50" src="{{URL::asset('assets/images/o-dkhgcc_400x400.jpg')}}">
                                                    <div class="media-body">
                                                        <div class="media-title"> IronSource</div>
                                                    </div>
                                                    <div class="media-progressbar">



                                                        <div class="profile-widget-item-value text-info mr-2 font-weight-bold text-center" style="justify-content: center;  align-items: center; ">
                                                            <a href="#" data-toggle="modal" data-target="#exampleadmop54" onclick="updatePlacementStatus(1858,0);">
                                                                <div class="badge badge-success badge-shadow active_color">Enable</div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="media-cta">
                                                        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#placementid1858" aria-expanded="false" aria-controls="collapseExample">
                    Placement ID
                    </button>
                                                    </div>
                                                </li>
                                                <div class="collapse" style="margin-bottom: 20px; border-bottom: 2px solid blue;" id="placementid1858">
                                                    <div class="progress-text">
                                                        AppID : PLACEMENT ID </div>




                                                </div>
                                                <li class="media">
                                                    <img alt="image" class="mr-3 rounded-circle" width="50" src="{{URL::asset('assets/images/download.png')}}">
                                                    <div class="media-body">
                                                        <div class="media-title"> Mopub</div>
                                                    </div>
                                                    <div class="media-progressbar">



                                                        <div class="profile-widget-item-value text-info mr-2 font-weight-bold text-center" style="justify-content: center;  align-items: center; ">
                                                            <a href="#" data-toggle="modal" data-target="#exampleadmop54" onclick="updatePlacementStatus(1859,0);">
                                                                <div class="badge badge-success badge-shadow active_color">Enable</div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="media-cta">
                                                        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#placementid1859" aria-expanded="false" aria-controls="collapseExample">
                    Placement ID
                    </button>
                                                    </div>
                                                </li>
                                                <div class="collapse" style="margin-bottom: 20px; border-bottom: 2px solid blue;" id="placementid1859">
                                                    <div class="progress-text">
                                                        AppID : PLACEMENT ID </div>

                                                    <div class="progress-text">
                                                        Banner : PLACEMENT ID<br> </div>
                                                    <div class="progress-text">
                                                        Interstitial : PLACEMENT ID<br> </div>
                                                    <div class="progress-text">
                                                        Native : PLACEMENT ID<br> </div>



                                                </div>
                                                <li class="media">
                                                    <img alt="image" class="mr-3 rounded-circle" width="50" src="{{URL::asset('assets/images/r8irjdnpxaprdlx947p0.webp')}}">
                                                    <div class="media-body">
                                                        <div class="media-title"> Tapdaq</div>
                                                    </div>
                                                    <div class="media-progressbar">



                                                        <div class="profile-widget-item-value text-info mr-2 font-weight-bold text-center" style="justify-content: center;  align-items: center; ">
                                                            <a href="#" data-toggle="modal" data-target="#exampleadmop54" onclick="updatePlacementStatus(1860,0);">
                                                                <div class="badge badge-success badge-shadow active_color">Enable</div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="media-cta">
                                                        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#placementid1860" aria-expanded="false" aria-controls="collapseExample">
                    Placement ID
                    </button>
                                                    </div>
                                                </li>
                                                <div class="collapse" style="margin-bottom: 20px; border-bottom: 2px solid blue;" id="placementid1860">
                                                    <div class="progress-text">
                                                        AppID : PLACEMENT ID </div>

                                                    <div class="progress-text">
                                                        Banner : PLACEMENT ID<br> </div>



                                                </div>
                                                <li class="media">
                                                    <img alt="image" class="mr-3 rounded-circle" width="50" height="50" src="{{URL::asset('assets/images/customads.png')}}">
                                                    <div class="media-body">
                                                        <div class="media-title"> My Custom Ads</div>
                                                    </div>
                                                    <div class="media-progressbar">



                                                        <div class="profile-widget-item-value text-info mr-2 font-weight-bold text-center" style="justify-content: center;  align-items: center; ">
                                                            <a href="#" data-toggle="modal" data-target="#exampleadmop54" onclick="updatePlacementStatus(1861,0);">
                                                                <div class="badge badge-success badge-shadow active_color">Enable</div>
                                                            </a>
                                                        </div>

                                                    </div>
                                                    <div class="media-cta">
                                                        <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#placementid1861" aria-expanded="false" aria-controls="collapseExample">
                    Placement ID
                    </button>
                                                    </div>
                                                </li>
                                                <div class="collapse" style="margin-bottom: 20px; border-bottom: 2px solid blue;" id="placementid1861">




                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4 col-lg-4" id="otherset">
                                    <div class="">
                                        <div class="card-header" style="margin: auto;  justify-content: center;  align-items: center; ">
                                            <h4>Other Settings</h4>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">

                                                <li class="media">
                                                    <div class="media-body">
                                                        <div class="media-title"> Location Wise Report? </div>
                                                    </div>
                                                    <div class="media-cta">
                                                        <label class="switch">
                                <input type="checkbox" id="app_locationWiseReportStatus" name="app_locationWiseReportStatus">
                                <span class="slider round"></span>
                                </label>
                                                    </div>
                                                </li>

                                                <li class="media">
                                                    <div class="media-body">
                                                        <div class="media-title"> Need Internet compulsory? </div>
                                                    </div>
                                                    <div class="media-cta">
                                                        <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                                </label>
                                                    </div>
                                                </li>

                                                <li class="media">
                                                    <div class="media-body">
                                                        <div class="media-title"> Version Update Dialog? </div>
                                                    </div>
                                                    <div class="media-cta">
                                                        <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                </label>
                                                    </div>
                                                </li>

                                                <li class="media">
                                                    <div class="media-body">
                                                        <div class="media-title"> Show Dialog Before Ad Show? </div>
                                                    </div>
                                                    <div class="media-cta">
                                                        <label class="switch">
                                <input type="checkbox" checked>
                                <span class="slider round"></span>
                                </label>
                                                    </div>
                                                </li>

                                                <li class="media">
                                                    <div class="media-body">
                                                        <div class="media-title"> Show Ad in App? </div>
                                                    </div>
                                                    <div class="media-cta">
                                                        <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                </label>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-body">
                                                        <div class="media-title"> Show Test Ad in Debug App </div>
                                                        <div class="text-muted">Test Ad Only For FB &amp; Admob</div>
                                                    </div>
                                                    <div class="media-cta">
                                                        <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                </label>
                                                    </div>
                                                </li>
                                                <li class="media">
                                                    <div class="media-body">
                                                        <div class="media-title"> More App </div>
                                                        <!--<div class="text-muted">-->
                                                        <!--   <div class="pretty p-icon p-round">-->
                                                        <!--      <input type="radio" name="app_moreAppWise" value="0" checked />-->
                                                        <!--      <div class="state p-primary-o">-->
                                                        <!--         <i class="icon material-icons">done</i>-->
                                                        <!--         <label>Account Wise App</label>-->
                                                        <!--      </div>-->
                                                        <!--   </div>-->
                                                        <!--   <div class="pretty p-icon p-round">-->
                                                        <!--      <input type="radio" name="app_moreAppWise" value="1"  />-->
                                                        <!--      <div class="state p-primary-o">-->
                                                        <!--         <i class="icon material-icons">done</i>-->
                                                        <!--         <label>My Selected App</label>-->
                                                        <!--      </div>-->
                                                        <!--   </div>-->
                                                        <!--   <a target="_bank" href="https://hashtaginfotech.co.in/AppsManager/AppClr/more_app_list/1668">Select Apps</a>-->
                                                        <!--</div>-->
                                                    </div>
                                                    <div class="media-cta">
                                                        <label class="switch">
                                <input type="checkbox">
                                <span class="slider round"></span>
                                </label>
                                                    </div>
                                                </li>
                                            </ul>

                                            <!--<a target="_bank" href="https://hashtaginfotech.co.in/AppsManager/AppClr/more_app_list/1668">Select Apps For Ads</a>-->
                                            <!--<br>-->
                                            <!--<a target="_bank" href="https://hashtaginfotech.co.in/AppsManager/AppClr/assignAppForAds/1668">Assign App For Ads</a>-->


                                            <button style="float:right; margin-bottom:20px;" class="btn btn-outline-primary align-left" type="button" data-toggle="modal" data-target="#basicModalMoreField">
                More field
                    </button>


                                        </div>
                                    </div>

                                    <div id="filterddd"></div>
                                </div>
                            </div>

                            <div class="row border">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div>
                                        <div class="card-header">
                                            <h4 style="font-size:16px;">Last 30 Days</h4>
                                            <div class="card-header-action">
                                                <form class="form-inline" method="post" action="">
                                                    <div class="form-inline" style="margin: auto; justify-content: center;  align-items: center;">
                                                        <div class="input-group mb-2 mr-sm-2">
                                                            <!-- <input type="text" name="datefilter" class="form-control" value="" placeholder="Filter Date Range"> -->
                                                            <div class="example">
                                                                <div class="input-group">
                                                                    <span class="input-group-append"><span class="input-group-text"><i class="mdi mdi-calendar-check"></i></span></span>
                                                                    <input type="text" name="datefilter" class="form-control" placeholder="Filter Date Range" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <a href="{{url('viewsetup')}}"><input type="button" class="btn btn-primary mb-2 mr-sm-2" value="Filter" name="search_to_datewise"></a>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        <div class="card-body">

                                            <div class="table-responsive">
                                                <div id="table-1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-6">
                                                            <div class="dataTables_length" id="table-1_length"><label>Show <select name="table-1_length" aria-controls="table-1" class="form-control form-control-sm" tabindex="0" aria-hidden="false"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-6">
                                                            <div id="table-1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="table-1"></label></div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <table class="table table-striped no-footer dataTable" id="table-1" role="grid" aria-describedby="table-1_info" style="">
                                                                <thead>
                                                                    <tr role="row">
                                                                        <th class="text-center sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 324.75px;">Date</th>
                                                                        <th class="text-center sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Download: activate to sort column ascending" style="width: 496.641px;">Download</th>
                                                                        <th class="text-center sorting" tabindex="0" aria-controls="table-1" rowspan="1" colspan="1" aria-label="Active User: activate to sort column ascending" style="width: 535.609px;">Active User</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr class="">
                                                                        <td valign="top" colspan="3" class="dataTables_empty">No data available in table</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-5">
                                                            <div class="dataTables_info" id="table-1_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                                        </div>
                                                        <div class="col-sm-12 col-md-7">
                                                            <div class="dataTables_paginate paging_simple_numbers" id="table-1_paginate">
                                                                <ul class="pagination">
                                                                    <li class="paginate_button page-item previous disabled" id="table-1_previous"><a href="#" aria-controls="table-1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                                                    <li class="paginate_button page-item next disabled" id="table-1_next"><a href="#" aria-controls="table-1" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #/ container -->
    </div>
    <!--**********************************
            Content body end
        ***********************************-->


    <!-- model start -->
    <div class="modal fade" id="basicModalMoreField" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> App More Fields </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                </div>
                <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="post">
                    <div class="modal-body">




                        <div class="form-group">
                            <label>Qureka URL :</label>
                            <input type="text" class="form-control" name="qurekaurl" value="https://play130.atmequiz.com/">

                        </div>




                        <div class="form-group">
                            <label>Check Qureka :</label>
                            <div class="pretty p-icon p-round">
                                <input type="radio" name="checkqureka" value="1" checked="">
                                <div class="state p-primary-o">
                                    <i class="icon material-icons">done</i>
                                    <label>Enable</label>
                                </div>
                            </div>
                            <div class="pretty p-icon p-round">
                                <input type="radio" name="checkqureka" value="0">
                                <div class="state p-primary-o">
                                    <i class="icon material-icons">done</i>
                                    <label>Disable</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label>First Qureka :</label>
                            <div class="pretty p-icon p-round">
                                <input type="radio" name="firstqureka" value="1" checked="">
                                <div class="state p-primary-o">
                                    <i class="icon material-icons">done</i>
                                    <label>Enable</label>
                                </div>
                            </div>
                            <div class="pretty p-icon p-round">
                                <input type="radio" name="firstqureka" value="0">
                                <div class="state p-primary-o">
                                    <i class="icon material-icons">done</i>
                                    <label>Disable</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label>Back Press :</label>
                            <div class="pretty p-icon p-round">
                                <input type="radio" name="checkbackpress" value="1">
                                <div class="state p-primary-o">
                                    <i class="icon material-icons">done</i>
                                    <label>Enable</label>
                                </div>
                            </div>
                            <div class="pretty p-icon p-round">
                                <input type="radio" name="checkbackpress" value="0" checked="">
                                <div class="state p-primary-o">
                                    <i class="icon material-icons">done</i>
                                    <label>Disable</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label>Cricket URL :</label>
                            <input type="text" class="form-control" name="cricketurl" value="https://play130.atmequiz.com/">

                        </div>






                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <input type="Submit" name="field_Submit" class="btn btn-success" value="Save">
                        <button type="button" style="margin-left: 20px;" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="basicModalJks" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> App JKS </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                </div>
                <div class="modal-body">

                    <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="post">

                        <div class="form-group">

                            <div class="input-group my-3">
                                <input type="text" class="form-control" disabled="" value="" placeholder="JKS File" id="jks_name">
                                <div class="input-group-append">
                                    <div class="file btn btn-lg btn-primary" style="position: relative; overflow: hidden;">
                                        Browse...
                                        <input type="file" name="jks_file" onchange="getJksName(event)" style="position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jks Details </label>

                            <textarea class="form-control" name="app_jksDetails"></textarea>
                        </div>

                        <div class="text-center">
                            <input type="Submit" name="jks_Submit" class="btn btn-lg btn-success" value="Save">
                        </div>


                    </form>



                    <address>
                        <strong>JKS Details:</strong><br>
                                       </address>
                </div>
                <div class="modal-footer bg-whitesmoke br">
                    JKS File Unavailable <button type="button" style="margin-left: 20px;" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="basicModalSourceCode" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> App Source Code </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                </div>
                <div class="modal-body">


                    <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label>App Source Code</label>
                            <div class="input-group my-3">
                                <input type="text" class="form-control" disabled="" value="" placeholder="Source Code File" id="code_name">
                                <div class="input-group-append">
                                    <div class="file btn btn-lg btn-primary" style="position: relative; overflow: hidden;">
                                        Browse...
                                        <input type="file" name="code_file" onchange="getCodeName(event)" style="position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Source Code Details </label>
                            <textarea class="form-control" name="app_sourceCodeDetails"></textarea>
                        </div>

                        <div class="text-center">
                            <input type="Submit" name="code_Submit" class="btn btn-lg btn-success" value="Save">
                        </div>
                    </form>



                    <address>
                        <strong>Source Code Details:</strong><br>
                                       </address>

                </div>
                <div class="modal-footer bg-whitesmoke br">

                    Source Code Unavailable

                    <button type="button" style="margin-left: 20px;" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="basicModalDesign" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> App Design </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                     </button>
                </div>
                <div class="modal-body">




                    <form class="needs-validation" novalidate="" enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label>App Design File</label>
                            <div class="input-group my-3">
                                <input type="text" class="form-control" disabled="" value="" placeholder="Design File" id="design_name">
                                <div class="input-group-append">
                                    <div class="file btn btn-lg btn-primary" style="position: relative; overflow: hidden;">
                                        Browse...
                                        <input type="file" name="design_file" onchange="getDesignName(event)" style="position: absolute; font-size: 50px; opacity: 0; right: 0; top: 0">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Design Details</label>
                            <textarea class="form-control" name="app_designDetails"></textarea>
                        </div>

                        <div class="text-center">
                            <input type="Submit" name="design_Submit" class="btn btn-lg btn-success" value="Save">
                        </div>
                    </form>



                    <address>
                        <strong>Design Details:</strong><br>
                                       </address>

                </div>
                <div class="modal-footer bg-whitesmoke br">

                    Design File Unavailable


                    <button type="button" style="margin-left: 20px;" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div class="swal-overlay swal-overlay--show-modal" tabindex="-1">
        <div class="modal" role="dialog" aria-modal="true">
            <div class="swal-icon swal-icon--warning">
                <span class="swal-icon--warning__body">
                <span class="swal-icon--warning__dot"></span>
                </span>
            </div>
            <div class="swal-title" style="">Are you sure Disable this Platform Ad?</div>
            <div class="swal-footer">
                <div class="swal-button-container">

                    <button class="swal-button swal-button--cancel" tabindex="0">Cancel</button>

                    <div class="swal-button__loader">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>

                </div>
                <div class="swal-button-container">

                    <button class="swal-button swal-button--confirm swal-button--danger">OK</button>

                    <div class="swal-button__loader">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- model end -->
    </div>

    <!--**********************************
        Main wrapper end
    ***********************************-->

    @endsection
