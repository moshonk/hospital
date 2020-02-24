  
<!DOCTYPE html>

<!-- Test: Typical fullscreen usage; autoload an image and overlay. -->

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- CSS debug start -->
    <link rel="stylesheet" type="text/css" href="../src/css/base.css" />
    <link rel="stylesheet" type="text/css" href="../src/css/ui/toolbar.css" />
    <link rel="stylesheet" type="text/css" href="../src/css/ui/menu.css" />
    <link rel="stylesheet" type="text/css" href="../src/css/ui/dialog.css" />
    <link rel="stylesheet" type="text/css" href="../src/css/utilities/nojs.css" />
    <link rel="stylesheet" type="text/css" href="../src/css/utilities/unsupported.css" />
    <link rel="stylesheet" type="text/css" href="../src/css/viewer/viewer.css" />
    <!-- CSS debug end -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- CSS debug end -->

    <!-- JS debug start -->
    <script type="text/javascript" src="../src/js/data/sample-image.js"></script>
    <script type="text/javascript" src="../src/js/data/talairach-atlas-image.js"></script>
    <script type="text/javascript" src="../src/js/data/talairach-atlas.js"></script>

    <script type="text/javascript" src="../lib/base64-binary.js"></script>
    <script type="text/javascript" src="../lib/bowser.js"></script>
    <script type="text/javascript" src="../lib/daikon.js"></script>
    <script type="text/javascript" src="../lib/nifti-reader.js"></script>
    <script type="text/javascript" src="../lib/jquery.js"></script>
    <script type="text/javascript" src="../lib/numerics.js"></script>
    <script type="text/javascript" src="../lib/pako-inflate.js"></script>
    <script type="text/javascript" src="../lib/gl-matrix.js"></script>
    <script type="text/javascript" src="../lib/gifti-reader.js"></script>
    <script type="text/javascript" src="../lib/GLU.js"></script>

    <script type="text/javascript" src="../src/js/constants.js"></script>

    <script type="text/javascript" src="../src/js/utilities/array-utils.js"></script>
    <script type="text/javascript" src="../src/js/utilities/math-utils.js"></script>
    <script type="text/javascript" src="../src/js/utilities/object-utils.js"></script>
    <script type="text/javascript" src="../src/js/utilities/platform-utils.js"></script>
    <script type="text/javascript" src="../src/js/utilities/string-utils.js"></script>
    <script type="text/javascript" src="../src/js/utilities/url-utils.js"></script>

    <script type="text/javascript" src="../src/js/core/coordinate.js"></script>
    <script type="text/javascript" src="../src/js/core/point.js"></script>

    <script type="text/javascript" src="../src/js/volume/header.js"></script>
    <script type="text/javascript" src="../src/js/volume/imagedata.js"></script>
    <script type="text/javascript" src="../src/js/volume/imagedescription.js"></script>
    <script type="text/javascript" src="../src/js/volume/imagedimensions.js"></script>
    <script type="text/javascript" src="../src/js/volume/imagerange.js"></script>
    <script type="text/javascript" src="../src/js/volume/imagetype.js"></script>
    <script type="text/javascript" src="../src/js/volume/nifti/header-nifti.js"></script>
    <script type="text/javascript" src="../src/js/volume/dicom/header-dicom.js"></script>
    <script type="text/javascript" src="../src/js/volume/orientation.js"></script>
    <script type="text/javascript" src="../src/js/volume/transform.js"></script>
    <script type="text/javascript" src="../src/js/volume/volume.js"></script>
    <script type="text/javascript" src="../src/js/volume/voxeldimensions.js"></script>
    <script type="text/javascript" src="../src/js/volume/voxelvalue.js"></script>

    <script type="text/javascript" src="../src/js/surface/surface.js"></script>
    <script type="text/javascript" src="../src/js/surface/surface-gifti.js"></script>
    <script type="text/javascript" src="../src/js/surface/surface-mango.js"></script>
    <script type="text/javascript" src="../src/js/surface/surface-vtk.js"></script>

    <script type="text/javascript" src="../src/js/ui/dialog.js"></script>
    <script type="text/javascript" src="../src/js/ui/menu.js"></script>
    <script type="text/javascript" src="../src/js/ui/menuitem.js"></script>
    <script type="text/javascript" src="../src/js/ui/menuitemcheckbox.js"></script>
    <script type="text/javascript" src="../src/js/ui/menuitemradiobutton.js"></script>
    <script type="text/javascript" src="../src/js/ui/menuitemfilechooser.js"></script>
    <script type="text/javascript" src="../src/js/ui/menuitemrange.js"></script>
    <script type="text/javascript" src="../src/js/ui/menuitemslider.js"></script>
    <script type="text/javascript" src="../src/js/ui/menuitemspacer.js"></script>
    <script type="text/javascript" src="../src/js/ui/toolbar.js"></script>

    <script type="text/javascript" src="../src/js/viewer/atlas.js"></script>
    <script type="text/javascript" src="../src/js/viewer/colortable.js"></script>
    <script type="text/javascript" src="../src/js/viewer/display.js"></script>
    <script type="text/javascript" src="../src/js/viewer/preferences.js"></script>
    <script type="text/javascript" src="../src/js/viewer/screenslice.js"></script>
    <script type="text/javascript" src="../src/js/viewer/screensurface.js"></script>
    <script type="text/javascript" src="../src/js/viewer/screenvol.js"></script>
    <script type="text/javascript" src="../src/js/viewer/viewer.js"></script>

    <script type="text/javascript" src="../src/js/main.js"></script>
    <!-- JS debug end -->

    <script type="text/javascript">
        /* DO NOT EDIT (start) -- papayaLoadableImages is generated by papaya-builder and is here for debugging purposes only */
        var papayaLoadableImages = [
            {nicename: "Sample Image", name: "sample_image", url: "data/sample_image.nii.gz"},
            {nicename: "Atlas", name:"Talairach_labels_1mm", url: "data/Talairach_labels_1mm.nii.gz", hide:true}
        ];
        /* DO NOT EDIT (end) */

        var params = [];
params["images"] = [[<?php
     $filepth= $_GET['id'];
    $files = glob('data/20190509085254274./*', GLOB_BRACE);
foreach($files as $file) {
   $data='"'.$file.'"'.',';
   echo $data; 
}
echo $data = rtrim($data, ',');
?> ]];

params["FSE PD AXIAL OBL"] = {min: 200.0, max: 900.0};
        params["atlas"] = "MNI (Nearest Grey Matter)";
//        params['showControlBar'] = true;
//        params['kioskMode'] = true;
//        params['showImageButtons'] = true;
    </script>

    <title>read image</title>
</head>

<body>
    <div class="container"><a href="../../lab.php?search=<?php echo $_GET['pn']; ?>&response=0"><button class="btn btn-primary">back</button></a>
    <?php if (!isset($_REQUEST['reload'])) {
    ?>

<a rel="facebox"  href="report.php?search=<?php echo $_GET['pn']; ?>&response=0">
     
        <button class="btn btn-primary" id="back">write report</button></a>
    <?php } ?></div>
<div class="papaya" data-params="params"></div>
</body>
</html>
