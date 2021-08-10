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
                            <input type="text"
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
                                        <input type="text"
                                            class="form-control form-control-sm rounded-0 text-primary bg-transparent border-primary"
                                            placeholder="Paste here address" name="token">
                                        <div class="input-group-append">
                                            <button class="btn btn-sm btn-outline-primary" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
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


                    <!-- table start -->
                    <div class="table-div overflow-auto">
                        <table class="table text-white text-left" id="paginate">
                            <!-- table head start -->
                            <thead class="font-weight-lighter">
                                <tr>
                                    <th>Token</th>
                                    <th>Age
                                        <span class="float-right">
                                            <i class="fas fa-long-arrow-alt-up text-secondary m-0"></i>
                                            <i class="fas fa-long-arrow-alt-down text-secondary m-0"></i>
                                        </span>
                                    </th>
                                    <th>Code</th>
                                    <th>Owner</th>
                                    <th>Seller</th>
                                    <th>Holders
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
                                    <td>
                                        <span>
                                            <a target="_blank" href="https://exchange.pancakeswap.finance/#/swap?outputCurrency={{$row->smart_chain}}"><button class="btn btn-warning">Buy on Pancakeswap</button></a>
                                            <a target="_blank" href="https://poocoin.app/tokens/{{$row->smart_chain}}" class="text-drbg"><button style="padding: 7px 36px 5px 42px;margin-top: 6px;" class="btn btn-warning">Watch Chart</button></a>
                                            {{--  <a href=""><i class="fas fa-share-alt text-primary font-size-xl"></i></a>  --}}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- pagination start -->
                        <nav aria-label="...">
                            <ul class="pagination">
                                <li class="page-item disabled">
                                    <span class="page-link bg-site-dark site-color-l">Previous</span>
                                </li>
                                <li class="page-item "><a class="page-link bg-site-dark site-color-l mx-2" href="#">1</a>
                                </li>
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link  ">2</span>
                                </li>
                                <li class="page-item"><a class="page-link bg-site-dark site-color-l mx-2" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link bg-site-dark site-color-l" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                        <!-- pagination end -->
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
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


    $('#paginate').DataTable({

        });

    </script>
</body>

</html>
