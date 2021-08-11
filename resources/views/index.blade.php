<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <title>Crypto Fighter System</title>
    <style>

          .pagination li:hover{
              cursor: pointer;
          }
          .pagination li{
              margin-left:.5rem;
            background: purple ;

            border: 2px solid white;
            -webkit-user-select: none !important;
          }
          li span{
            margin: 0px 7px 0px 7px;
          }
          .active{
            background: #007bff !important;
            border: 2px solid #007bff !important;
          }

          .rows_count {
            width: 20%;
            margin-top: -40px;
            float: right;
            color: white;
          }

    </style>
</head>

<body>
    <main>
        <div class="wraper">
            <div class="left-side-menue">
                <i class="fas fa-align-justify d-xl-none float-right mr-4 mt-2 font-size-xl pointer-mouse"
                    id="btn-justify"></i>
                <div class="">
                    <!-- filters start -->
                    <div class="bg-lin py-3 bg-light px-4">
                        <h4>Filters</h4>
                        <span class="d-inline-block">
                            <p class="text-white">Find Gems In BSC</p>
                        </span>
                        <span class="float-xl-right ml-3 ml-xl-0 d-inline-block ">
                            <a href="" class=""><i class="fab fa-twitter site-color-l"></i></a>
                            <a href=""> <i class="fab fa-telegram-plane site-color-l"></i></a>
                        </span>
                        <div class="filters  my-3 " id="filter-parent">
                            <form action="#">
                                <div class="filter-select ">
                                    <div class="d-flex justify-content-center flex-column ">
                                        <!-- view mode -->
                                        <div class="view p-1">
                                            <div class="row">
                                                <span class="col">
                                                    <label for="view-mod">View Mode:</label>
                                                </span>
                                                <span class="col">
                                                    <select name="MODE"
                                                        class="form-control  rounded-0 bg-transparent text-primary border-primary"
                                                        id="view-mod">
                                                        <option value="BASIC" class="text-black">BASIC</option>
                                                        <option value="ADVANCED" class="text-black">EXPERT</option>
                                                    </select></span>
                                            </div>
                                        </div>
                                        <!-- Network -->
                                        <div class="Network p-1">
                                            <div class="row">
                                                <span class="col">
                                                    <label for="Network">Network:</label>
                                                </span>
                                                <span class="col">
                                                    <select name="MODE"
                                                        class="form-control rounded-0 bg-transparent text-primary border-primary "
                                                        id="Network">
                                                        <option value="BSC" class="text-black">BSC</option>
                                                        <option value="MATIC" class="text-black">MATIC</option>
                                                        <option value="TODAS" class="text-black">TODAS</option>
                                                    </select></span>
                                            </div>
                                        </div>
                                        <!-- time -->
                                        <div class="time p-1">
                                            <div class="row">
                                                <span class="col">
                                                    <label for="Check-Time">Check Time:</label>
                                                </span>
                                                <span class="col">
                                                    <select name="MODE"
                                                        class="form-control rounded-0 bg-transparent text-primary border-primary"
                                                        id="Check-Time">
                                                        <option value="1" class="text-black">1 HOURS</option>
                                                        <option value="2" class="text-black">2 HOURS</option>
                                                        <option value="3" class="text-black">3 HOURS</option>
                                                        <option value="4" class="text-black">4 HOURS</option>
                                                        <option value="5" class="text-black">5 HOURS</option>
                                                        <option value="6" class="text-black">6 HOURS</option>
                                                        <option value="7" class="text-black">7 HOURS</option>
                                                        <option value="8" class="text-black">8 HOURS</option>
                                                        <option value="9" class="text-black">9 HOURS</option>
                                                        <option value="10" class="text-black">10 HOURS</option>
                                                        <option value="11" class="text-black">11 HOURS</option>
                                                        <option value="12" class="text-black">12 HOURS</option>
                                                    </select></span>
                                            </div>
                                        </div>
                                        <!-- Liquidity -->
                                        <div class="Liquidity p-1">
                                            <div class="row">
                                                <span class="col">
                                                    <label for="Liquidity">Liquidity:</label>
                                                </span>
                                                <span class="col">
                                                    <select name="MODE"
                                                        class="form-control rounded-0 bg-transparent text-primary border-primary"
                                                        id="Liquidity">
                                                        <option value="safe" class="text-black">SAFE</option>
                                                        <option value="p-safe" class="text-black">Probably Safe</option>
                                                        <option value="waitting-p" class="text-black">Waitting Liquidity
                                                        </option>
                                                        <option value="not-check" class="text-black">Not Checked
                                                        </option>
                                                        <option value="All" class="text-black">All</option>
                                                    </select></span>
                                            </div>
                                        </div>
                                        <!-- max holder -->
                                        <div class="max-hold p-1">
                                            <div class="row">
                                                <span class="col">
                                                    <label for="Max-Holder">Max Holder:</label>
                                                </span>
                                                <span class="col">
                                                    <select name="MODE"
                                                        class="form-control rounded-0 bg-transparent text-primary border-primary "
                                                        id="Max-Holder">
                                                        <!-- <option value="1" class="text-black">10 %</option> -->
                                                        <script>
                                                            for (let x = 0; x <= 100; x++) {
                                                                document.write('<option value="' + x + '" class="text-black">' + x + ' %</option>');
                                                            }
                                                        </script>
                                                    </select></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="select">
                                        <div class="select-child-div">
                                            <input type="checkbox" name="Renounced" id=""> <span class=""><i
                                                    class="fas fa-user-alt mr-1 text-white mr-1 ml-2"></i>
                                                Renounced</span>
                                        </div>
                                        <div class="select-child-div">
                                            <input type="checkbox" name="Renounced" id=""> <span class=""><i
                                                    class="fas fa-money-bill-alt text-white mr-1 ml-2"></i>
                                                Sellers</span>
                                        </div>
                                        <div class="select-child-div">
                                            <input type="checkbox" name="Renounced" id=""> <span class=""><i
                                                    class="fas fa-file-contract text-white mr-1 ml-2"></i> Code</span>
                                        </div>
                                        <div class="select-child-div">
                                            <input type="checkbox" name="Renounced" id=""> <span class=""><i
                                                    class="fab fa-telegram-plane text-white mr-1 ml-2"></i>
                                                Telegram</span>
                                        </div>
                                        <div class="select-child-div">
                                            <input type="checkbox" name="Renounced" id=""> <span class=""><i
                                                    class="fab fa-twitter text-white mr-1 ml-2"></i> Twitter</span>
                                        </div>
                                        <div class="select-child-div">
                                            <input type="checkbox" name="Renounced" id=""> <span class=""><i
                                                    class="fas fa-desktop text-white mr-1 ml-2"></i> Web</span>
                                        </div>
                                    </div>
                                    <div class="btn-filter mt-5">
                                        <input type="submit" class="btn  btn-primary" value="Filters">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>


                    <!-- <div class="heading-site p-3">
                        <a href="index.html" class="d-block">
                            <i class="fas fa-fist-raised  site-color-l"></i>
                            <h4 class="site-logo-name d-inline-block site-color pl-3 font-weight-bold">Crypto Fighter
                            </h4>
                        </a>
                        <span class="d-inline-block">
                            <p class="site-color-d font-weight-bold">Find Gems In BSC</p>
                        </span>
                        <span class="float-xl-right ml-3 ml-xl-0 d-inline-block ">
                            <a href="" class=""><i class="fab fa-twitter site-color-l"></i></a>
                            <a href=""> <i class="fab fa-telegram-plane site-color-l"></i></a>
                        </span>
                    </div> -->
                    <!-- <div class="donation-box">
                        <h5 class="font-weight-bold ">Donations (BSC)</h5>
                        <button class="btn btn-primary  ">0xa282F2F8BEB7D45678....
                            <i class="fas fa-copy font-size-xs "></i></button>
                    </div> -->


                    <!-- <div class="search-box">
                        <h5 class="font-weight-bold py-2">Search tokens</h5>
                        <div class="input-group ">
                            <input  type="text"
                                class="form-control form-control-sm rounded-0 text-primary bg-transparent border-primary"
                                placeholder="Paste here address" name="token">
                            <div class="input-group-append">
                                <button class="btn btn-sm btn-outline-primary" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div> -->

                    <!-- footer start -->
                    <!-- <footer class="mt-4 d-none d-xl-block">
                        <div class="promote-coin py-3">
                            <a href="" class="btn  btn-sm btn-outline-success d-inline-block rounded-0">Promote Your
                                Coin</a>
                            <a href="" class="btn btn-sm btn-primary d-inline-block">Help</a>
                        </div>
                        <span class="d-inline-block">
                            <p class="m-0">© Crypto Fighter Systems</p>
                        </span>
                        <span class="float-right d-inline-block">
                            <a href="" class=""><i class="fab fa-twitter site-color-l"></i></a>
                            <a href=""> <i class="fab fa-telegram-plane site-color-l"></i></a>
                        </span>
                        <small class="d-inline-block site-color-d ">Theme Design by Fastech.com</small>
                    </footer> -->
                </div>
            </div>
            <!-- right side main dive start -->
            <div class="right-side-main float-right pb-5">
                <div class="">
                    <!-- header logo start -->
                    <div class="bg-lin">
                        <div class="row px-md-5">
                            <div class="py-3 col-md-6 ">
                            <div class="heading-site col-8 ">
                                <a href="index.html" class="d-block">
                                    <i class="fas fa-fist-raised  site-color-l"></i>
                                    <h4 class="site-logo-name d-inline-block site-color pl-3 font-weight-bold">Crypto
                                        Fighter
                                    </h4>
                                </a>
                            </div>
                            </div>
                            <!-- search box start -->
                            <!-- <div class="bg-lin my-2 "> -->
                            <div class="col-md-6 py-3 px-4 ">
                                <div class="search-box row">
                                    <div class="input-group px-3 px-md-0 ">
                                        <h5 class="mr-2">Search tokens</h5>
                                        <input type="text" id="search_input_all" onkeyup="FilterkeyWord_all_table()"
                                            class="form-control form-control-sm rounded-0 text-primary bg-transparent border-primary"
                                            placeholder="Paste here address" name="token">
                                        {{--  <div class="input-group-append">
                                            <button class="btn btn-sm btn-outline-primary" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>  --}}

                                    </div>
                                </div>
                            </div>
                            <!-- </div> -->
                            <!-- search box end -->

                        </div>
                    </div>
                    <!-- header logo end -->

                    <!-- add banner  -->
                    <div class="add-box-banner p-5 bg-light mx-auto my-2"></div>
                    <!-- filter place empty now  -->

                    <select class="form-control" style="width: 7%;margin-bottom: 1%;" id="maxRows">
                        <option value="10">10</option>
                        <option value="15">15</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="70">70</option>
                        <option value="100">100</option>
                        <option value="5000">ALL</option>
                       </select>

                    <!-- table start -->
                    <div class="table-responsive ">
                        <table class="table text-white text-left table-striped table-class" id= "table-id">
                            <!-- table head start -->
                            <thead class="font-weight-lighter">
                                <tr>
                                    <th>Token</th>
                                    <th style="min-width: 90px;">Age
                                        <span class="float-right">
                                            <i class="fas fa-long-arrow-alt-up text-secondary m-0"></i>
                                            <i class="fas fa-long-arrow-alt-down text-secondary m-0"></i>
                                        </span>
                                    </th>
                                    <th>Code</th>
                                    <th>Owner</th>
                                    <th>Seller</th>
                                    <th style="min-width: 100px">Holders
                                        <span class="float-right">
                                            <i class="fas fa-long-arrow-alt-up text-secondary m-0"></i>
                                            <i class="fas fa-long-arrow-alt-down text-secondary m-0"></i>
                                        </span>
                                    </th>
                                    <th>Liquidity</th>
                                    <th>Channels</th>
                                    <th>Links</th>
                                </tr>
                            </thead>
                            <!-- table body start -->
                            <tbody  id="myTable">

                                @foreach($coins as $row)
                                <?php
                               $name= explode("(",$row->name);

                                ?>
                                <tr class="text-center">
                                    <td><a target="_blank" href="https://poocoin.app/tokens/{{$row->smart_chain}}">{{$name[0]}}</a></td>
                                    <td>{{\Carbon\Carbon::createFromTimeStamp(strtotime($row->created_at))->diffForHumans()}}</td>
                                    <td><i class="fas fa-check-circle text-success font-size-xl"></i></td>
                                    <td>
                                        <i class="fas fa-times-circle text-danger font-size-xl"></i>
                                    </td>
                                    <td>
                                        <img src="img/3020989.png" class="img-fluid " style="height: 35px;"
                                            alt="Waitting">
                                    </td>
                                    <td>
                                        <i class="fas fa-exclamation-triangle font-size-xl text-warning mr-3"></i>
                                        0
                                    </td>
                                    <td>
                                        <!-- <img src="img/3020989.png" class="img-fluid " style="height: 35px;"
                                            alt="Waitting"> -->
                                            {{$row->price}}
                                    </td>
                                    <td>
                                        <a href=""><i class="fas fa-paper-plane font-size-xl text-success"></i></a>
                                    </td>
                                    <td style="min-width: 210px;">
                                        <span class="d-flex flex-row">
                                            <div class="">

                                                <div class="bg-warning my-1 d-block px-2 py-1 rounded">
                                                    <a target="_blank" href="https://exchange.pancakeswap.finance/#/swap?outputCurrency='{{$row->smart_chain}}'" class="text-drbg" >
                                                        Buy on Pancakeswap
                                                        </a>
                                                </div>
                                                <div class="bg-warning my-1 d-block px-2 py-1 rounded">
                                                    <a target="_blank" href="https://poocoin.app/tokens/'{{$row->smart_chain}}'" class="text-drbg">
                                                        Watch Chart
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="pt-4 pl-3">
                                                <a href=""><i
                                                        class="fas fa-share-alt text-primary font-size-xl"></i></a>
                                            </div>
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!--		Start Pagination -->
                        <div class='pagination-container'>
                            <nav>
                              <ul class="pagination">
                              </ul>
                            </nav>
                        </div>
                        <!-- add banner -->
                        <div class="add-box-banner p-5 bg-light mx-auto my-2"></div>
                    </div>
                    <!-- <div class="bg-dark p-3 text-center">No data available in table</div> -->
                </div>
                <div class="">
                    <footer class="mt-4  text-center bg-site-dark py-3">
                        <div class="promote-coin py-3">
                            <a href="" class="btn  btn-sm btn-outline-success d-inline-block rounded-0">Promote Your
                                Coin</a>
                            <a href="" class="btn btn-sm btn-primary d-inline-block">Help</a>
                        </div>
                        <span class="d-inline-block mx-auto">
                            <p class="m-0">© Crypto Fighter Systems</p>
                        </span>
                        <span class="d-inline-block">
                            <a href="" class=""><i class="fab fa-twitter site-color-l"></i></a>
                            <a href=""> <i class="fab fa-telegram-plane site-color-l"></i></a>
                        </span> <br>
                        <small class="d-inline-block site-color-d ">Theme Design by Fastech.com</small>
                    </footer>
                </div>
            </div>
        </div>
    </main>
    <!-- j-query cdn-link -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function () {
            $("#filter-btn").click(function () {
                $("#filter-parent").toggle();
                $("#rotate-180").toggleClass('rotate-180');
            });
            $("#btn-justify").click(function () {
                // $("body").css('display','none');
                $(".left-side-menue").toggleClass('h-100');
            });
        });

        setInterval(function(){
            $.ajax({
                type:'GET',
                url:'/test',
                data:{_token: "{{ csrf_token() }}"
                },
                success: function( res ) {
                    if(res.msg == true){
                        $('#myTable tr:first').before(res.data);


                    }
                }
            });

        },30000);


    </script>
 <script>
    getPagination('#table-id');
	$('#maxRows').trigger('change');
	function getPagination (table){

		  $('#maxRows').on('change',function(){
		  	$('.pagination').html('');						// reset pagination div
		  	var trnum = 0 ;									// reset tr counter
		  	var maxRows = parseInt($(this).val());			// get Max Rows from select option

		  	var totalRows = $(table+' tbody tr').length;		// numbers of rows
			 $(table+' tr:gt(0)').each(function(){			// each TR in  table and not the header
			 	trnum++;									// Start Counter
			 	if (trnum > maxRows ){						// if tr number gt maxRows

			 		$(this).hide();							// fade it out
			 	}if (trnum <= maxRows ){$(this).show();}// else fade in Important in case if it ..
			 });											//  was fade out to fade it in
			 if (totalRows > maxRows){						// if tr total rows gt max rows option
			 	var pagenum = Math.ceil(totalRows/maxRows);	// ceil total(rows/maxrows) to get ..
			 												//	numbers of pages
			 	for (var i = 1; i <= pagenum ;){			// for each page append pagination li
			 	$('.pagination').append('<li data-page="'+i+'">\
								      <span>'+ i++ +'<span class="sr-only">(current)</span></span>\
								    </li>').show();
			 	}											// end for i


			} 												// end if row count > max rows
			$('.pagination li:first-child').addClass('active'); // add active class to the first li


        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT
       showig_rows_count(maxRows, 1, totalRows);
        //SHOWING ROWS NUMBER OUT OF TOTAL DEFAULT

        $('.pagination li').on('click',function(e){		// on click each page
        e.preventDefault();
				var pageNum = $(this).attr('data-page');	// get it's number
				var trIndex = 0 ;							// reset tr counter
				$('.pagination li').removeClass('active');	// remove active class from all li
				$(this).addClass('active');					// add active class to the clicked


        //SHOWING ROWS NUMBER OUT OF TOTAL
       showig_rows_count(maxRows, pageNum, totalRows);
        //SHOWING ROWS NUMBER OUT OF TOTAL



				 $(table+' tr:gt(0)').each(function(){		// each tr in table not the header
				 	trIndex++;								// tr index counter
				 	// if tr index gt maxRows*pageNum or lt maxRows*pageNum-maxRows fade if out
				 	if (trIndex > (maxRows*pageNum) || trIndex <= ((maxRows*pageNum)-maxRows)){
				 		$(this).hide();
				 	}else {$(this).show();} 				//else fade in
				 }); 										// end of for each tr in table
					});										// end of on click pagination list
		});
											// end of on select change

								// END OF PAGINATION

	}




// SI SETTING
$(function(){
	// Just to append id number for each row
default_index();

});

//ROWS SHOWING FUNCTION
function showig_rows_count(maxRows, pageNum, totalRows) {
   //Default rows showing
        var end_index = maxRows*pageNum;
        var start_index = ((maxRows*pageNum)- maxRows) + parseFloat(1);
        var string = 'Showing '+ start_index + ' to ' + end_index +' of ' + totalRows + ' entries';
        $('.rows_count').html(string);
}



// All Table search script
function FilterkeyWord_all_table() {

// Count td if you want to search on all table instead of specific column

  var count = $('.table').children('tbody').children('tr:first-child').children('td').length;

        // Declare variables
  var input, filter, table, tr, td, i;
  input = document.getElementById("search_input_all");
  var input_value =     document.getElementById("search_input_all").value;
        filter = input.value.toLowerCase();
  if(input_value !=''){
        table = document.getElementById("table-id");
        tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who don't match the search query
        for (i = 1; i < tr.length; i++) {

          var flag = 0;

          for(j = 0; j < count; j++){
            td = tr[i].getElementsByTagName("td")[j];
            if (td) {

                var td_text = td.innerHTML;
                if (td.innerHTML.toLowerCase().indexOf(filter) > -1) {
                //var td_text = td.innerHTML;
                //td.innerHTML = 'shaban';
                  flag = 1;
                } else {
                  //DO NOTHING
                }
              }
            }
          if(flag==1){
                     tr[i].style.display = "";
          }else {
             tr[i].style.display = "none";
          }
        }
    }else {
      //RESET TABLE
      $('#maxRows').trigger('change');
    }
}

    </script>
</body>

</html>
