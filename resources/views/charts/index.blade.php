@extends('layouts.main')
@section('main')
<div id="dashboard-layout-tab-contain" style="font-family: NunitoSans-Bold;">
    <div>
        <div class="mb-3 card">
            <div class="card-body ">
                    <div class="" id="mysnapshots">
                        <div class="row d-flex justify-content-center align-items-center">
                            <div class="col-md-2 display_flex">
                                <div class="main-card mb-3 card" id="chart1-card" style="flex: 1;">
                                    <div class="d-flex justify-content-center align-items-center fill-available">
                                        <div class="spinner-border text-purple" role="status">
                                            <span class="sr-only"></span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 display_flex" >
                                <div class="main-card mb-3 card" id="chart2-card" style="flex: 1;">
                                    <div class="d-flex justify-content-center align-items-center fill-available">
                                        <div class="spinner-border text-purple" role="status">
                                            <span class="sr-only"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Match mail card start -->
                            <div class="col-md-2 display_flex">
                                <div class="main-card mb-3 card" id="chart3-card" style="flex: 1;">
                                    <div class="d-flex justify-content-center align-items-center fill-available">
                                        <div class="spinner-border text-purple" role="status">
                                            <span class="sr-only"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Match Mail card end -->
                            <div class="col-md-2 display_flex">
                                <div class="main-card mb-3 card flex_1" id="chart4-card">
                                    <div class="d-flex justify-content-center align-items-center fill-available">
                                        <div class="spinner-border text-purple" role="status">
                                            <span class="sr-only"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-2 display_flex">
                                <div class="main-card mb-3 card flex_1" id="chart5-card">
                                    <div class="d-flex justify-content-center align-items-center fill-available">
                                        <div class="spinner-border text-purple" role="status">
                                            <span class="sr-only"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card Boxes ends -->
        </div>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        let cards = [
            "chart1",
            "chart2",
            "chart3",
            "chart4",
            "chart5",
        ]
        /* Normal loops don't create a new scope */
        cards.forEach(function(card,index) {
            $.ajax({
                type: 'GET',
                url: `/dashboard/charts?chart=${index+1}`,
                data: "",
                async: true,
                success: function(data) {
                    $(`#${card}-card`).html(data)
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    $(`#${card}-card`).html("Something went wrong..")
                }
            });
        })
    })
    </script>
@endsection