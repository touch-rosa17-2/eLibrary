<?php
    include './configStyle.php';
    include './sideMenu.php';
?>


<!-- receipt -->
<div class="container-receipt bg-gray-100">
    <h1 class="text-black-500 text-4xl py-3 ml-14 md:ml-6 lg:ml-6 ">Online Payment Receipts</h1>
    <div class="mainReceipt px-6 border-spacing-1 border  mt-10">
        <!-- will using ajax -->
        <form action="" method="post" class=" border-gray-400 border">
            <div class="flex justify-center align-middle text-center ">
                <h1 class="w-[15%] py-2 bg-gray-300 text-center align-middle">
                    Advance Filter
                </h1>
                <div class="flex-auto w-[20%]  bg-gray-500">
                    <input type="search" name="receiptFilter" placeholder="Search" class=" h-full bg-white px-3 text-gray-700 w-full py-2" id="">
                </div>
                <div class="filterCategory w-34 flex-none">
                    <select name="receiptSelect" class="border-gray-400 border bg-gray-200  w-full h-full py-2"  id="">
                        <option value="" hidden>Select</option>
                        <option value="All Transaction">All Transaction</option>
                        <option value="Refund">Refund</option>
                    </select>
                </div>
                <div class="filterYear w-34 flex-none">
                    <select name="receiptYear" id="" class=" border-gray-400 border bg-gray-200 py-2 w-full h-full">
                        <option value="" hidden>Select</option>
                        <option value="2021-2022">2019-2020</option>
                        <option value="2020-2021">2020-2021</option>
                        <option value="2019-2020">2019-2020</option>
                    </select>
                </div>
            </div>
        </form>
    </div>
    <div class="tblData bg-slate-200 mt-10 border border-gray-600 w-[100%] overflow-hidden">
        <table class="tblReceipt border border-collapse">
            <thead class=""><!---flex justify-start border border-slate-200 text-center font-extrabold --->
                <th class="w-16 border border-slate-500">#</li>
                <th class="w-64 border border-slate-500">Invoice No</li>
                <th class="w-24 border border-slate-500">Uid</li>
                <th class="w-64 border border-slate-500">Name</li>
                <th class="w-64 border border-slate-500">Book Name</li>
                <th class="w-32 border border-slate-500">Year</li>
                <th class="w-32 border border-slate-500">P.Amount</li>
                <th class="w-24 border border-slate-500">Currency</li>
                <th class="w-64 border border-slate-500">P.Email</li>
                <th class="w-72 border border-slate-500">P.Date</li>
            </thead>
            <tbody class=" border border-slate-300 ">
                <?php
                    for($i=0; $i<10; $i++){
                        
                ?>
                <tr>
                    <td><?php echo $i;?></td>
                    <td>000001</td>
                    <td>203912</td>
                    <td>Touch Rosa</td>
                    <td>Full Stack Dev</td>
                    <td>2018</td>
                    <td>2</td>
                    <td>200 $</td>
                    <td>rosa@admin.com</td>
                    <td>27-02-2023</td>
                </tr>
                <?php

                    }
                ?>
            </tbody>
        </table>
    </div>
</div>