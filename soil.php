<?php session_start();

if (strlen($_SESSION['id'] == 0)) {
  header('location:logout.php');
} else {

  //formula
  // weightOFwater = (Weight of Container<br> + Wet Soil(g) ) - (Weight of Container<br> + Dry Soil(g) )
  //Weight of Dry Soil(g) = (Weight of Container<br> + Dry Soil(g) ) - ( Weight of <br> Container(g))
  //Moisture Content(%) = ((  Weight of Water(g)) / (    Weight of Dry Soil(g)) ) * 100 

  include_once("head.php");
?>


  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Select 2</h4>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group" id="selectidget">
                  <label>Bore Hole</label>
                    <select class="js-example-basic-single w-100" id="selectidget">
                      <?php
                      $query_bh = mysqli_query($con, "select * from borehole");
                      while ($result = mysqli_fetch_array($query_bh))
                        echo "<option value=" . $result['aid'] . ">" . $result['bhName'] . "</option>"
                      ?>
                   </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group ">
                  <label>Field test data</label>
                    <select class="js-example-basic-single w-100" name="field_test">
                      <option> - </option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
         </div>
      </div>
    <?php
      switch ($_GET['soil_test']): 
        case 1: ?>
          <!------------ Sieve Analysis Start  ------------>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description">
                Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Weight of <br> Container(g)
                      </th>
                      <th>
                        Weight of Container<br> + Wet Soil(g)
                      </th>
                      <th>
                        Weight of Container<br> + Dry Soil(g)
                      </th>
                      <th>
                        Weight of<br> Water(g)
                      </th>
                      <th>
                        Weight of Dry Soil(g)
                      </th>
                      <th>
                        Moisture Content(%)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        10
                      </td>
                      <td>
                        30
                      </td>
                      <td>
                        40
                      </td>
                      <td>
                        60
                      </td>
                      <td>
                        90
                      </td>
                      <td>
                        20
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
          <!------------ Sieve Analysis End  ------------>
        <?php break;    
        case 2: ?>
          <!------------ Atterberg Limits STart  ------------>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description">
                Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Weight of <br> Container(g)
                      </th>
                      <th>
                        Weight of Container<br> + Wet Soil(g)
                      </th>
                      <th>
                        Weight of Container<br> + Dry Soil(g)
                      </th>
                      <th>
                        Weight of<br> Water(g)
                      </th>
                      <th>
                        Weight of Dry Soil(g)
                      </th>
                      <th>
                        Moisture Content(%)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        10
                      </td>
                      <td>
                        30
                      </td>
                      <td>
                        40
                      </td>
                      <td>
                        60
                      </td>
                      <td>
                        90
                      </td>
                      <td>
                        20
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
          <!------------ Atterberg Limits End  ------------>
        <?php break;    
        case 3: ?>
          <!------------ Proctor Test STart  ------------>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description">
                Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Weight of <br> Container(g)
                      </th>
                      <th>
                        Weight of Container<br> + Wet Soil(g)
                      </th>
                      <th>
                        Weight of Container<br> + Dry Soil(g)
                      </th>
                      <th>
                        Weight of<br> Water(g)
                      </th>
                      <th>
                        Weight of Dry Soil(g)
                      </th>
                      <th>
                        Moisture Content(%)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>  <input type='text'  name='ftd_soil' class="typeahead" />  </td>
                      <td>  <input type='text'  name='ftd_soil' class="typeahead" />  </td>
                      <td>  <input type='text'  name='ftd_soil' class="typeahead" />  </td>
                      <td>  <input type='text'  name='ftd_soil' class="typeahead" /> </td>
                      <td>  <input type='text'  name='ftd_soil' class="typeahead" /> </td>
                      <td>   <input type='text'  name='ftd_soil' class="typeahead" />  </td>
                      <td>   <input type='text'  name='ftd_soil' class="typeahead" /> </td>
                      <td> <button class="btn"  name="file_test_sub" > <i class="mdi mdi-comment-check"   ></i> </button> </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
          <!------------ Proctor Test  End  ------------>
        <?php break;    
        case 4: ?>
          <!------------ Water Content Start  ------------>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description">
                Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Weight of <br> Container(g)
                      </th>
                      <th>
                        Weight of Container<br> + Wet Soil(g)
                      </th>
                      <th>
                        Weight of Container<br> + Dry Soil(g)
                      </th>
                      <th>
                        Weight of<br> Water(g)
                      </th>
                      <th>
                        Weight of Dry Soil(g)
                      </th>
                      <th>
                        Moisture Content(%)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        10
                      </td>
                      <td>
                        30
                      </td>
                      <td>
                        40
                      </td>
                      <td>
                        60
                      </td>
                      <td>
                        90
                      </td>
                      <td>
                        20
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
          <!------------ Water Content  End  ------------>
        <?php break;    
        case 5: ?>
          <!------------ UCC STart  ------------>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description">
                Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Weight of <br> Container(g)
                      </th>
                      <th>
                        Weight of Container<br> + Wet Soil(g)
                      </th>
                      <th>
                        Weight of Container<br> + Dry Soil(g)
                      </th>
                      <th>
                        Weight of<br> Water(g)
                      </th>
                      <th>
                        Weight of Dry Soil(g)
                      </th>
                      <th>
                        Moisture Content(%)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        10
                      </td>
                      <td>
                        30
                      </td>
                      <td>
                        40
                      </td>
                      <td>
                        60
                      </td>
                      <td>
                        90
                      </td>
                      <td>
                        20
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
          <!------------ UCC  End  ------------>
        <?php break;    
        case 6: ?>
          <!------------ DS Start  ------------>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description">
                Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Weight of <br> Container(g)
                      </th>
                      <th>
                        Weight of Container<br> + Wet Soil(g)
                      </th>
                      <th>
                        Weight of Container<br> + Dry Soil(g)
                      </th>
                      <th>
                        Weight of<br> Water(g)
                      </th>
                      <th>
                        Weight of Dry Soil(g)
                      </th>
                      <th>
                        Moisture Content(%)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        10
                      </td>
                      <td>
                        30
                      </td>
                      <td>
                        40
                      </td>
                      <td>
                        60
                      </td>
                      <td>
                        90
                      </td>
                      <td>
                        20
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
          <!------------ DS  End  ------------>
        <?php break;    
        case 7: ?>
          <!------------ Proctor Test STart  ------------>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description">
                Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Weight of <br> Container(g)
                      </th>
                      <th>
                        Weight of Container<br> + Wet Soil(g)
                      </th>
                      <th>
                        Weight of Container<br> + Dry Soil(g)
                      </th>
                      <th>
                        Weight of<br> Water(g)
                      </th>
                      <th>
                        Weight of Dry Soil(g)
                      </th>
                      <th>
                        Moisture Content(%)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        10
                      </td>
                      <td>
                        30
                      </td>
                      <td>
                        40
                      </td>
                      <td>
                        60
                      </td>
                      <td>
                        90
                      </td>
                      <td>
                        20
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
          <!------------ Proctor Test  End  ------------>
        <?php break;    
        case 8: ?>
          <!------------ Triaxial Start  ------------>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description">
                Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Weight of <br> Container(g)
                      </th>
                      <th>
                        Weight of Container<br> + Wet Soil(g)
                      </th>
                      <th>
                        Weight of Container<br> + Dry Soil(g)
                      </th>
                      <th>
                        Weight of<br> Water(g)
                      </th>
                      <th>
                        Weight of Dry Soil(g)
                      </th>
                      <th>
                        Moisture Content(%)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        10
                      </td>
                      <td>
                        30
                      </td>
                      <td>
                        40
                      </td>
                      <td>
                        60
                      </td>
                      <td>
                        90
                      </td>
                      <td>
                        20
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
          <!------------ Triaxial End  ------------>
        <?php break;    
        case 9: ?>
          <!------------ Consolidation Start  ------------>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description">
                Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Weight of <br> Container(g)
                      </th>
                      <th>
                        Weight of Container<br> + Wet Soil(g)
                      </th>
                      <th>
                        Weight of Container<br> + Dry Soil(g)
                      </th>
                      <th>
                        Weight of<br> Water(g)
                      </th>
                      <th>
                        Weight of Dry Soil(g)
                      </th>
                      <th>
                        Moisture Content(%)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        10
                      </td>
                      <td>
                        30
                      </td>
                      <td>
                        40
                      </td>
                      <td>
                        60
                      </td>
                      <td>
                        90
                      </td>
                      <td>
                        20
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
          <!------------ Consolidation  End  ------------>
        <?php break;    
        case 10: ?>
          <!------------ Ph Value Start  ------------>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description">
                Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Weight of <br> Container(g)
                      </th>
                      <th>
                        Weight of Container<br> + Wet Soil(g)
                      </th>
                      <th>
                        Weight of Container<br> + Dry Soil(g)
                      </th>
                      <th>
                        Weight of<br> Water(g)
                      </th>
                      <th>
                        Weight of Dry Soil(g)
                      </th>
                      <th>
                        Moisture Content(%)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        10
                      </td>
                      <td>
                        30
                      </td>
                      <td>
                        40
                      </td>
                      <td>
                        60
                      </td>
                      <td>
                        90
                      </td>
                      <td>
                        20
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
          <!------------ Ph Value  End  ------------>
        <?php break;    
        case 11: ?>
          <!------------ VST STart  ------------>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description">
                Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Weight of <br> Container(g)
                      </th>
                      <th>
                        Weight of Container<br> + Wet Soil(g)
                      </th>
                      <th>
                        Weight of Container<br> + Dry Soil(g)
                      </th>
                      <th>
                        Weight of<br> Water(g)
                      </th>
                      <th>
                        Weight of Dry Soil(g)
                      </th>
                      <th>
                        Moisture Content(%)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        10
                      </td>
                      <td>
                        30
                      </td>
                      <td>
                        40
                      </td>
                      <td>
                        60
                      </td>
                      <td>
                        90
                      </td>
                      <td>
                        20
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
          <!------------ VST  End  ------------>
        <?php break;    
        case 12: ?>
          <!------------ FSI STart  ------------>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description">
                Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Weight of <br> Container(g)
                      </th>
                      <th>
                        Weight of Container<br> + Wet Soil(g)
                      </th>
                      <th>
                        Weight of Container<br> + Dry Soil(g)
                      </th>
                      <th>
                        Weight of<br> Water(g)
                      </th>
                      <th>
                        Weight of Dry Soil(g)
                      </th>
                      <th>
                        Moisture Content(%)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        10
                      </td>
                      <td>
                        30
                      </td>
                      <td>
                        40
                      </td>
                      <td>
                        60
                      </td>
                      <td>
                        90
                      </td>
                      <td>
                        20
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
          <!------------ FSI  End  ------------>
        <?php break;    
        case 13: ?>
          <!------------ Swelling Pressure STart  ------------>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description">
                Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Weight of <br> Container(g)
                      </th>
                      <th>
                        Weight of Container<br> + Wet Soil(g)
                      </th>
                      <th>
                        Weight of Container<br> + Dry Soil(g)
                      </th>
                      <th>
                        Weight of<br> Water(g)
                      </th>
                      <th>
                        Weight of Dry Soil(g)
                      </th>
                      <th>
                        Moisture Content(%)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        10
                      </td>
                      <td>
                        30
                      </td>
                      <td>
                        40
                      </td>
                      <td>
                        60
                      </td>
                      <td>
                        90
                      </td>
                      <td>
                        20
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
          <!------------ Swelling Pressure  End  ------------>
        <?php break;    
        case 14: ?>
          <!------------ Relative Density  Start  ------------>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description">
                Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Weight of <br> Container(g)
                      </th>
                      <th>
                        Weight of Container<br> + Wet Soil(g)
                      </th>
                      <th>
                        Weight of Container<br> + Dry Soil(g)
                      </th>
                      <th>
                        Weight of<br> Water(g)
                      </th>
                      <th>
                        Weight of Dry Soil(g)
                      </th>
                      <th>
                        Moisture Content(%)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        10
                      </td>
                      <td>
                        30
                      </td>
                      <td>
                        40
                      </td>
                      <td>
                        60
                      </td>
                      <td>
                        90
                      </td>
                      <td>
                        20
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
          <!------------ Relative Density End  ------------>
        <?php break;    
        case 15: ?>
          <!------------ Water Content STart  ------------>
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Bordered table</h4>
              <p class="card-description">
                Add class <code>.table-bordered</code>
              </p>
              <div class="table-responsive pt-3">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>
                        #
                      </th>
                      <th>
                        Weight of <br> Container(g)
                      </th>
                      <th>
                        Weight of Container<br> + Wet Soil(g)
                      </th>
                      <th>
                        Weight of Container<br> + Dry Soil(g)
                      </th>
                      <th>
                        Weight of<br> Water(g)
                      </th>
                      <th>
                        Weight of Dry Soil(g)
                      </th>
                      <th>
                        Moisture Content(%)
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        1
                      </td>
                      <td>
                        10
                      </td>
                      <td>
                        30
                      </td>
                      <td>
                        40
                      </td>
                      <td>
                        60
                      </td>
                      <td>
                        90
                      </td>
                      <td>
                        20
                      </td>

                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
          <!------------ Water Content  End  ------------>
        <?php break;    

      endswitch;
    ?>
  
  </div>





<?php
  include_once("footer.php");
}
?>