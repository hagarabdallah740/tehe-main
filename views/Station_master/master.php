<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>Station Master </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="row">
  <!-- BEGIN SEARCH RESULT -->
  <a>ok</a>
  <div class="col-md-12">
    <div class="grid search">
      <div class="grid-body">
        <div class="row">
          <!-- BEGIN FILTERS -->
          <div class="col-md-3">
            
            <hr>
            
            <!-- BEGIN FILTER BY CATEGORY -->
            <!-- <h4>By category:</h4>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> Application</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> Design</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> Desktop</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> Management</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" class="icheck"> Mobile</label>
            </div> -->
            <!-- END FILTER BY CATEGORY -->
            
            <div class="padding"></div>
            
            <!-- BEGIN FILTER BY DATE -->
            <h4>By date:</h4>
            From
            <div class="input-group date form_date" data-date="2014-06-14T05:25:07Z" data-date-format="dd-mm-yyyy" data-link-field="dtp_input1">
              <input type="text" class="form-control">
              <span class="input-group-addon bg-blue"><i class="fa fa-th"></i></span>
            </div>
            <input type="hidden" id="dtp_input1" value="">
            
            To
            <div class="input-group date form_date" data-date="2014-06-14T05:25:07Z" data-date-format="dd-mm-yyyy" data-link-field="dtp_input2">
              <input type="text" class="form-control">
              <span class="input-group-addon bg-blue"><i class="fa fa-th"></i></span>
            </div>
           
            <input type="hidden" id="dtp_input2" value="">
            
            <!-- END FILTER BY DATE -->
            
            <div class="padding"></div>
            
            <!-- BEGIN FILTER BY PRICE -->
           
            
            <!-- END FILTER BY PRICE -->
          </div>
          <!-- END FILTERS -->
          <!-- BEGIN RESULT -->
          <div class="col-md-9">
            <h2><i class="fa fa-file-o"></i> Train Timetable</h2>
            <hr>
            <!-- BEGIN SEARCH INPUT -->
            <div class="input-group">
              <input type="text" class="form-control" value="Search ">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
              </span>
            </div>
            <!-- END SEARCH INPUT -->
            <p>Showing all results matching "train time table"</p>
            
            <div class="padding"></div>
            
            <div class="row">
              <!-- BEGIN ORDER RESULT -->
              <div class="col-sm-6">
                <div class="btn-group">
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                    Order by <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu">
                    <li><a href="#">id</a></li>
                    <li><a href="#">Arrival time</a></li>
                  </ul>
                </div>
              </div>
              <!-- END ORDER RESULT -->
              
              <div class="col-md-6 text-right">
                <div class="btn-group">
                  <button type="button" class="btn btn-default active"><i class="fa fa-list"></i></button>
                  <button type="button" class="btn btn-default"><i class="fa fa-th"></i></button>
                </div>
              </div>
            </div>
            
            <!-- BEGIN TABLE RESULT -->
            <div class="table-responsive">
              <table class="table table-hover">
                <tbody><tr>
                  <td class="number text-center">1</td>
                  <td class="image"><img src="../Station_master/WhatsApp Image 2022-05-13 at 9.06.51 PM.jpeg" alt=""></td>
                 <td class="train"><strong><a href="../Station_master/t1.php"> train 1</a></strong><br>This is the train description.</td>
                  <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></span></td>
                  <td class="id text-right">828</td>
                </tr>
                <tr>
                  <td class="number text-center">2</td>
                  <td class="image"><img src="../Station_master/WhatsApp Image 2022-05-13 at 9.06.51 PM.jpeg" alt=""></td>
                 <td class="train"><strong><a href="../Station_master/t2.php"> train 2</a></strong><br>This is the train description.</td>
                  <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span></td>
                  <td class="id text-right">764</td>
                </tr>
                <tr>
                  <td class="number text-center">3</td>
                  <td class="image"><img src="../Station_master/WhatsApp Image 2022-05-13 at 9.06.51 PM.jpeg" alt=""></td>
                  <td class="train"><strong><a href="../Station_master/t3.php"> train 3 </a></strong><br>This is the train description.</td>
                  <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i><i class="fa fa-star-o"></i></span></td>
                  <td class="id text-right">964</td>
                </tr>
                <tr>
                  <td class="number text-center">4</td>
                  <td class="image"><img src="../Station_master/WhatsApp Image 2022-05-13 at 9.06.51 PM.jpeg" alt=""></td>
                  <td class="train"><strong><a href="../Station_master/t4.php"> train 4 </a></strong><br>This is the train description.</td>
                  <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i></span></td>
                  <td class="id text-right">864</td>
                </tr>
                <tr>
                  <!-- <td class="number text-center">5</td>
                  <td class="image"><img src="https://via.placeholder.com/400x300" alt=""></td>
                  <td class="train"><strong>train 5</strong><br>This is the train description.</td>
                  <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span></td>
                  <td class="price text-right">$540</td>
                </tr>
                <tr>
                  <td class="number text-center">6</td>
                  <td class="image"><img src="https://via.placeholder.com/400x300/6495ED" alt=""></td>
                  <td class="train"><strong>train 6</strong><br>This is the train description.</td>
                  <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></span></td>
                  <td class="price text-right">$870</td>
                </tr>
                <tr>
                  <td class="number text-center">7</td>
                  <td class="image"><img src="https://via.placeholder.com/400x300/DC143C" alt=""></td>
                  <td class="train"><strong>train 7</strong><br>This is the train description.</td>
                  <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i><i class="fa fa-star-o"></i></span></td>
                  <td class="price text-right">$620</td>
                </tr>
                <tr>
                  <td class="number text-center">8</td>
                  <td class="image"><img src="https://via.placeholder.com/400x300/9932CC" alt=""></td>
                  <td class="train"><strong>train 8</strong><br>This is the train description.</td>
                  <td class="rate text-right"><span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></span></td>
                  <td class="price text-right">$1,550</td>
                </tr> -->
              </tbody></table>
            </div>
            <!-- END TABLE RESULT -->
            
            <!-- BEGIN PAGINATION -->
            <ul class="pagination">
              <li class="disabled"><a href="#">??</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">??</a></li>
            </ul>
            <!-- END PAGINATION -->
          </div>
          <!-- END RESULT -->
        </div>
      </div>
    </div>
  </div>
  <!-- END SEARCH RESULT -->
</div>
</div>

<style type="text/css">
body{margin-top:20px;
background:#eee;
}

.btn {
    margin-bottom: 5px;
}

.grid {
    position: relative;
    width: 100%;
    background: #fff;
    color: #666666;
    border-radius: 2px;
    margin-bottom: 25px;
    box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.1);
}

.grid .grid-body {
    padding: 15px 20px 15px 20px;
    font-size: 0.9em;
    line-height: 1.9em;
}

.search table tr td.rate {
    color: #f39c12;
    line-height: 50px;
}

.search table tr:hover {
    cursor: pointer;
}

.search table tr td.image {
	width: 50px;
}

.search table tr td img {
	width: 50px;
	height: 50px;
}

.search table tr td.rate {
	color: #f39c12;
	line-height: 50px;
}

.search table tr td.price {
	font-size: 1.5em;
	line-height: 50px;
}

.search #price1,
.search #price2 {
	display: inline;
	font-weight: 600;
}
</style>

<script type="text/javascript">

</script>
</body>
</html>