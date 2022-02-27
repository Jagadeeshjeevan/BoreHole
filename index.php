
<?php session_start(); 
include_once('includes/config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
    

/// Create/Insert Bore Hole 
if(isset($_POST['create'])){
  $bhName=$_POST['bhName'];
  $coName=$_POST['coName'];
  $sDate=$_POST['sDate'];
  $eDate=$_POST['eDate'];
  $loBY=$_POST['loBY'];
  $DoGWT=$_POST['DoGWT'];
  $depth=$_POST['depth'];
  $Nvalue=$_POST['Nvalue'];
  $soilDesc=$_POST['soilDesc'];
  $colour=$_POST['colour'];
  $oFiTe=$_POST['oFiTe'];
  $session=$_SESSION['id'];
  $sql="INSERT INTO `borehole`( `uid`, `bhName`, `cordName`, `start_Date`, `end_Date`, `logged_By`, `DoGWT`,`Dept`,  `soil_Descrption`, `N_values`, `colour`, `other_F_test`) VALUES ('123','$bhName','$coName','$sDate','$eDate','$loBY',$DoGWT,$depth,'$soilDesc',$Nvalue,'$colour','$oFiTe')";  
  
  $msg=mysqli_query($con,$sql);
  echo $sql;
  print_r($msg);
  if($msg)
   {
    echo "<script>alert('Profile updated successfully');</script>";
       echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
    }
}


include_once("head.php") ;



if (isset($_GET['id'])) {
  $bhid = $_GET['id'];
  $ret= mysqli_query($con,"SELECT * FROM borehole where aid=$bhid limit 1 ");
  $num=mysqli_fetch_array($ret);


  $ret1= mysqli_query($con,"SELECT d_from ,d_to,soil_rock,type_of_soil,sample_desc,sample_type,spt_n_1,spt_n_2,spt_n_3,cr FROM field_test_data where bh_id='$bhid' ");
  //$ftd=mysqli_fetch_array($ret);

}

/// Submit Filed test value 
if(isset($_POST['file_test_sub'])){

  $ftd_from = $_POST['ftd_from'];
  $ftd_to = $_POST['ftd_to'];
  $ftd_soil = $_POST['ftd_soil']; 
  $ftd_tyOBore = $_POST['ftd_tyOBore'];
  $ftd_sampDesc = $_POST['ftd_sampDesc'];
  $ftd_samptype = $_POST['ftd_samptype'];
  $ftd_151 = $_POST['ftd_151'];
  $ftd_152 = $_POST['ftd_152'];
  $ftd_153 = $_POST['ftd_153'];
  $ftd_cr = $_POST['ftd_cr'];
  $bh_id = $_GET['id'];
  echo $_GET['id']."-soil-".$ftd_soil."-from-". $ftd_from ;
  echo "hello";


  $insert_field="INSERT INTO `field_test_data`( `bh_id`, `d_from`, `d_to`, `soil_rock`, `type_of_soil`, `sample_desc`, `sample_type`, `spt_n_1`, `spt_n_2`, `spt_n_3`, `cr`) VALUES ($bh_id,$ftd_from,$ftd_to,'$ftd_soil','$ftd_tyOBore','$ftd_sampDesc','$ftd_samptype',$ftd_151,$ftd_152,$ftd_153,$ftd_cr  )";
  echo $insert_field;
  $msg2=mysqli_query($con,$insert_field);
  if($msg2)
  {
   echo "<script>alert('Inserted Field successfully');</script>";
      echo "<script type='text/javascript'> document.location = 'index.php'; </script>";
   }
}




?>
  
<div class="content-wrapper">
<div class="row">
  <div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Bore Hole</h4>
        <form class="form-sample" method="post">
          <p class="card-description">
            Bore Hole ID
          </p>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Bore Hole Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="bhName" value="<?php if (isset($_GET['id'])) { echo $num[2]; } ?>" />
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Coordinates Name</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="coName"  value="<?php if (isset($_GET['id'])) { echo $num[3]; } ?>"  />
                </div>
              </div>
            </div> 
          </div>
          <div class="row">
              <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Start Date</label>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="dd/mm/yyyy"  name="sDate" value="<?php if (isset($_GET['id'])) { echo $num[4]; } ?>" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">End date</label>
                <div class="col-sm-9">
                  <input class="form-control" placeholder="dd/mm/yyyy"  name="eDate" value="<?php if (isset($_GET['id'])) { echo $num[5]; } ?>"/>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Logged By</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="loBY" value="<?php if (isset($_GET['id'])) { echo $num[6]; } ?>" />
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group row">
                <label class="col-sm-3 col-form-label">Depth of GWT</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="DoGWT" value="<?php if (isset($_GET['id'])) { echo $num[7]; } ?>" />
                </div>
              </div>
            </div>
          </div>
          <?php if (isset($_GET['id'])) {  ?>
            <button class="btn btn-primary mb-2">ok</button>
            <?php  } else{?>
          <button type="submit" class="btn btn-primary mb-2" name="create">Create</button>
          <button class="btn btn-light">Reset</button>
          <?php     }?>
        </form>
      </div>
      
    </div>
  </div>
  <?php if (isset($_GET['id'])) {  ?>
    <div class="col-lg-12 grid-margin stretch-card">
    <form class="form-sample" method="post">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Field Test data</h4>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th colspan="2"  style= "text-align: center;" > Depth(m)  </th>
                          <th rowspan="2" > Soil/Rock </th>
                          <th rowspan="2" > Type of <br> Boring   </th>
                          <th rowspan="2" >Sample <br> Description</th>
                          <th rowspan="2" >Sample  <br>  Type   </th>
                          <th  colspan="3"  style= "text-align: center;" > SPT N Value </th>
                          <th rowspan="2" > CR% </th>
                          <th rowspan="2" > Action </th>
                        </tr>
                        <th> from</th>
                        <th> to</th>
                        <th> 15cm </th>
                        <th> 15cm </th>
                        <th> 15cm </th>
                        
                        <tr>
                        </tr>
                      </thead>
                      <tbody>

                      <?php if (isset($_GET['id'])) { 

                        while ($ftd = mysqli_fetch_array($ret1)) {
                        echo "<tr>";
                        echo "<td>".$ftd['d_from']."</td>";  
                        echo "<td>".$ftd['d_to']."</td>";  
                        echo "<td>".$ftd['soil_rock']."</td>";  
                        echo "<td>".$ftd['type_of_soil']."</td>"; 
                        echo "<td>".$ftd['sample_desc']."</td>";  
                        echo "<td>".$ftd['sample_type']."</td>";
                        echo "<td>".$ftd['spt_n_1']."</td>";
                        echo "<td>".$ftd['spt_n_2']."</td>";
                        echo "<td>".$ftd['spt_n_3']."</td>";
                        echo "<td>".$ftd['cr']."</td>";  ?>
                      
                          <td> <button class="btn"> <i class="mdi mdi-delete"></i> </button> </td>
                        </tr>
                        <?php } } ?>
                       
                        <tr>
                          <td contenteditable='true' > <input type='text'  name='ftd_from' class="typeahead tt-input" />   </td>
                          <td > <div><input type='text'  name='ftd_to' class='typeahead' style="padding: 1px;"/> </div> </td> 
                          <td ><input type='text'  name='ftd_soil' class="typeahead" /> </td>
                          <td ><input type='text'  name='ftd_tyOBore' class="typeahead" /> </td>
                          <td ><input type='text'  name='ftd_sampDesc' class="typeahead" /> </td>
                          <td ><input type='text'  name='ftd_samptype' class="typeahead" /> </td>
                          <td ><input type='text'  name='ftd_151' class="typeahead" /> </td>
                          <td ><input type='text'  name='ftd_152' class="typeahead" /></td>
                          <td ><input type='text'  name='ftd_153' class="typeahead" /> </td>
                          <td ><input type='text'  name='ftd_cr' class="typeahead" /> </td>
                          <td> <button class="btn"  name="file_test_sub" > <i class="mdi mdi-comment-check"   ></i> </button> </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

  <?php     }?>
  </form>
</div>

<?php
include_once("footer.php");
  }
?>


