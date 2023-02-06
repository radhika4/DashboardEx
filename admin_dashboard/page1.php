<?php
 header("Access-Control-Allow-Origin: http://localhost:8080/admin_dashboard/page1.php");
?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FAVICON -->
    <link rel="icon" href="assets/img/favicon.png">
    <!--   Title Page -->
    <title>Assignment</title>
	<link href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- bootstrap.min.css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- animate.css -->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <!-- material fonts.css -->
    <link href="assets/css/material-design-iconic-font.min.css" rel="stylesheet">
    <!-- style.css -->
    <link href="assets/style.css" rel="stylesheet">
    <!-- responsive.css -->
    <link href="assets/css/responsive.css" rel="stylesheet">
    <!-- theme-color.css -->
    <link href="assets/css/theme-color.css" rel="stylesheet">
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
       
    <!--  custom theme area end -->
    <!--  Header area start -->
    <div class="header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2 no-padding-left-right">
                    <div class="logo">
                        <a href="index.html">Admin</a>
                    </div>
                </div>
                <div class="col-md-4 search-area">
                    <!--  <div class="header-search"> -->
                    <span class="full-sc-icon btn-fullscreen"></span>
                    
                    <span class="search-bar">
                        <span class="search-icon"></span>
                    <input type="search" placeholder="Search">
                    </span>
                </div>
                <div class="col-md-6 text-right">
                    <div class="header-right">
                        <ul class="nav d-inl-bl">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown header-left-flag cta">
                                <a href="#" class="dropdown-toggle cta1" data-toggle="dropdown"><span>4</span></a>
                                <ul class="dropdown-menu animated flipInX">
                                    <li class="flag1"></li>
                                    
                                </ul>
                            </li>
                        </ul>
                        
                        <ul class="nav d-inl-bl">
                            <!-- Messages: style can be found in dropdown.less-->
                            <li class="dropdown header-left-flag cta3">
                                <a href="#" data-toggle="dropdown">
                                    <img src="assets/img/basic-table-icon1.png" alt="">
                                    <span class="user-id">Adarshitha</span>
                                    <span class="arrow-down"></span>
                                </a>                              
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Header area end -->
    <!--  Nav menu area start -->
    <div class="navbar_dash_area">
        <div class="responsive-bars">
            <button class="dnl-btn-toggle">
                <span class="nav-bars"><i class="zmdi zmdi-menu"></i></span>
            </button>
        </div>
        <!-- Dashboard Navbar Left -->
        <div class="dash-navbar-left dnl-visible">
            <ul class="dnl-nav">
                <li class="active-cta">
                    <a href="index.html">
                    <span class="dnl-link-icon"></span>
                    <img src="assets/svg/nav-icon1.svg" alt="">
                    <span class="dnl-link-text">Dashboard</span>
                    </a>
                </li>
				<li class="active-cta">
                    <a href="index.html">
                    <span class="dnl-link-icon"></span>
                    <img src="assets/svg/user.svg" alt="">
                    <span class="dnl-link-text">User</span>
                    </a>
                </li>
				<li class="active-cta">
                    <a href="index.html">
                    <span class="dnl-link-icon"></span>
                    <img src="" alt="">
                    <span class="dnl-link-text">Logout</span>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>
    <!-- /.dash-navbar-left -->
    <!--  Homepage sec 1 start -->
    <div class="main-wraper-bg mar_lft_282">
        <div class="homepage-sec1">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Dashboard</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="homepage-sec1-single">
                            <span class="sec_icon"><i class="zmdi zmdi-money"></i></span>
                            <div class="homepage-sec1-fl-right">
                                <h4>Daily sales</h4>
                                <h3>$30, <span class="single-count">305</span></h3>
                            </div>
                            <p>Total items sold <span class="fl_right">GOOD <i class="zmdi zmdi-long-arrow-up"></i></span></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="homepage-sec1-single cta2">
                            <span class="sec_icon"><i class="zmdi zmdi-accounts"></i></span>
                            <div class="homepage-sec1-fl-right">
                                <h4>Visitors</h4>
                                <h3>75,<span class="single-count">843</span></h3>
                            </div>
                            <p>Visitors <span class="fl_right">NORMAL <i class="zmdi zmdi-long-arrow-down"></i></span></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="homepage-sec1-single cta3">
                            <span class="sec_icon"><i class="zmdi zmdi-email"></i></span>
                            <div class="homepage-sec1-fl-right">
                                <h4>Messages</h4>
                                <h3><span class="single-count">1224</span></h3>
                            </div>
                            <p>Last month <span class="fl_right">NORMAL <i class="zmdi zmdi-long-arrow-down"></i></span></p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="homepage-sec1-single cta4">
                            <span class="sec_icon"><i class="zmdi zmdi-favorite"></i></span>
                            <div class="homepage-sec1-fl-right">
                                <h4>Followers</h4>
                                <h3>+<span class="single-count">38</span>K</h3>
                            </div>
                            <p>Update now<span class="fl_right">UPDATE <i class="zmdi zmdi-refresh"></i></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  Homepage sec 1 end -->
        <!--  Homepage sec 2 start -->
        <div class="homepage-sec2">
            <div class="container-fluid">
			<div class="row">
                    <div class="col-lg-12">
						<label for="search-address" class="field-icon" id="my-current-location">
							<i class="fa fa-crosshairs" onclick="initAutocomplete();"></i>
						</label>
					</div>
			</div>
			<div class="basic-table cta">
                        <div class="row">
                            <div class="col-lg-12">							
								<div id="googleMap" style="height:280px;"></div>	
                            </div>
                        </div>
                    </div>
                
				<div class="row">
                    <div class="col-lg-7">
						<h3>Selected Records</h3>
						<table id="users1" class="display" width="100%" cellspacing="0">
							<thead>
								<tr>								
									<th>Name</th>
									<th>Position</th>
									<th>Office</th>
									<th>Extn.</th>
									<th>Start date</th>
									<th>Salary</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Garrett Winters</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>8422</td>
									<td>2011/07/25</td>
									<td>$170,750</td>
								</tr>
								<tr>
									<td>Airi Satou</td>
									<td>Accountant</td>
									<td>Tokyo</td>
									<td>5407</td>
									<td>2008/11/28</td>
									<td>$162,700</td>
								</tr>
							</tbody>							
						</table>
					</div>
					<div class="col-lg-5">
						<div id="main" style="width: 600px;height:400px;"></div>
					</div>
				</div>
				<div class="home_table_area form-shadow">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="home_table_title">
                                <h3>Records</h3>
                            </div>
                        </div>
                    </div>
					<div class="basic-table cta">
                        <div class="row">
                            <div class="col-lg-12">
								<table id="example" class="display" width="100%" cellspacing="0">
									<!--<thead>
										<tr>
											<th>ID</th>
											<th>Employee Name</th>
											<th>Salary</th>
										</tr>
									</thead>
									
									<tbody>
										<tr>
											<td>1-1</td>
											<td>1-2</td>
											<td>1-3</td>
											<td>1-4</td>
										</tr>
										<tr>
											<td>2-1</td>
											<td>2-2</td>
											<td>2-3</td>
											<td>2-4</td>
										</tr>
										<tr>
											<td>1-1</td>
											<td>1-2</td>
											<td>1-3</td>
											<td>1-4</td>
										</tr>
										<tr>
											<td>2-1</td>
											<td>2-2</td>
											<td>2-3</td>
											<td>2-4</td>
										</tr>
										<tr>
											<td>1-1</td>
											<td>1-2</td>
											<td>1-3</td>
											<td>1-4</td>
										</tr>
										<tr>
											<td>2-1</td>
											<td>2-2</td>
											<td>2-3</td>
											<td>2-4</td>
										</tr>
										<tr>
											<td>1-1</td>
											<td>1-2</td>
											<td>1-3</td>
											<td>1-4</td>
										</tr>
										<tr>
											<td>2-1</td>
											<td>2-2</td>
											<td>2-3</td>
											<td>2-4</td>
										</tr>
										<tr>
											<td>1-1</td>
											<td>1-2</td>
											<td>1-3</td>
											<td>1-4</td>
										</tr>
										<tr>
											<td>2-1</td>
											<td>2-2</td>
											<td>2-3</td>
											<td>2-4</td>
										</tr>
										<tr>
											<td>2-1</td>
											<td>2-2</td>
											<td>2-3</td>
											<td>2-4</td>
										</tr>
									</tbody>-->
        
								</table>
							</div>
						</div>
					</div>
				</div>
                
            </div>
        </div>
    </div>
    <!--  Homepage sec 2 end -->
    
    <!-- jquery.js -->
	<script src="assets/js/jquery.js"></script>
	
	<script src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
	

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

$(document).ready(function () {
	var dataSet = [
    ['Tiger Nixon', 'System Architect', 'Edinburgh', '5421', '2011/04/25', '$320,800',""],
    ['Garrett Winters', 'Accountant', 'Tokyo', '8422', '2011/07/25', '$170,750'],
    ['Ashton Cox', 'Junior Technical Author', 'San Francisco', '1562', '2009/01/12', '$86,000'],
    ['Cedric Kelly', 'Senior Javascript Developer', 'Edinburgh', '6224', '2012/03/29', '$433,060'],
    ['Airi Satou', 'Accountant', 'Tokyo', '5407', '2008/11/28', '$162,700'],
    ['Brielle Williamson', 'Integration Specialist', 'New York', '4804', '2012/12/02', '$372,000'],
    ['Herrod Chandler', 'Sales Assistant', 'San Francisco', '9608', '2012/08/06', '$137,500'],
    ['Rhona Davidson', 'Integration Specialist', 'Tokyo', '6200', '2010/10/14', '$327,900'],
    ['Colleen Hurst', 'Javascript Developer', 'San Francisco', '2360', '2009/09/15', '$205,500'],
    ['Sonya Frost', 'Software Engineer', 'Edinburgh', '1667', '2008/12/13', '$103,600'],
    ['Jena Gaines', 'Office Manager', 'London', '3814', '2008/12/19', '$90,560'],
    ['Quinn Flynn', 'Support Lead', 'Edinburgh', '9497', '2013/03/03', '$342,000'],
	];
    var table = $('#example').DataTable(
		{
       /*ajax: {
         url: '‘https://fakestoreapi.com/products',
       },
       columns: [
           { data: 'id' },
           { data: 'title' },
           { data: 'price' },
           { data: 'description' }
         ]*/
		data: dataSet,
        columns: [
            { title: 'Name' },
            { title: 'Position' },
            { title: 'Office' },
            { title: 'Extn.' },
            { title: 'Start date' },
            { title: 'Salary' },
			{ title: 'Delete' },
        ],
		columnDefs: [
            {
                targets: -1,
                data: null,
                defaultContent: '<button>Delete</button>',
            },
        ],
		
	}); 
	$('#example tbody').on( 'click', 'tr', function () {   
		var rowData=table.row( this ).data();
		//var rowCnt=table.row( this ).length;
		//let a = rowData.length;
		//console.log(rowData[0]);//console.log( table.row( this ).data() );
		let tb1Field1 = rowData[0];
		$('#users1 tr').each(function() {
			var tb2Field1 = $(this).find("td").eq(0).html(); 
			if(tb1Field1==tb2Field1)
				
				$(this).children('td').css('background-color','yellow');
			else
				$(this).children('td').css('background-color','');	
		});



	} );
	
	$('#example tbody').on('click', 'button', function () {
        
		table.row($(this).parents('tr')).remove().draw( false );
    });
	
});
</script>

<!--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>-->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap&libraries=places&v=weekly" defer ></script>
	<script src="assets/js/echarts.js"></script>
<script type="text/javascript">
      // Initialize the echarts instance based on the prepared dom
      var myChart = echarts.init(document.getElementById('main'));

      // Specify the configuration items and data for the chart
      var option = {
        title: {
          text: 'ECharts Getting Started Example'
        },
        tooltip: {},
        legend: {
          data: ['sales']
        },
        xAxis: {
          data: ['Shirts', 'Cardigans', 'Chiffons', 'Pants', 'Heels', 'Socks']
        },
        yAxis: {},
        series: [
          {
            name: 'sales',
            type: 'bar',
            data: [5, 20, 36, 10, 10, 20]
          }
        ]
      };

      // Display the chart using the configuration items and data just specified.
      myChart.setOption(option);
    </script>	
</body>


</html>