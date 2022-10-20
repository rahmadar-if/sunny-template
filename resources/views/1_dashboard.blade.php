@extends('layouts.main')

@section('title', 'Dashboard')

{{-- <link rel="stylesheet" href="https://code.highcharts.com/css/highcharts.css" /> --}}

<style>
    .chart-outer {
    display: flex;
    }

    .highcharts-data-table {
    background: white;
    min-width: 30%;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    font-size: 15px;
    }

    .highcharts-data-table th {
    pointer-events: none; 
    }

    #highcharts-data-table-0,
    #highcharts-data-table-1 {
    margin: 0;
    }

    .highcharts-data-table table {
    border-collapse: collapse;
    border-spacing: 0;
    background: white;
    min-width: 100%;
    margin-top: 10px;
    font-family: sans-serif;
    font-size: 0.9em;
    }

    .highcharts-data-table td,
    .highcharts-data-table th,
    .highcharts-data-table caption {
    border: 0px solid silver;
    padding: 0.5em;
    }

    .highcharts-data-table thead tr,
    .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
    }

    .highcharts-data-table tr:hover {
    background: #eff;
    }

    .highcharts-data-table caption {
    border-bottom: none;
    font-size: 1.1em;
    font-weight: bold;
    }

</style>

@section('container')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div style=" height:75px" class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
            data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
            class="page-title d-flex align-items-center flex-wrap me-3 row">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center fs-3 my-1">Dashboard
                </h1>
                <!--end::Title-->
                <div class="row">
                    <div class="col">
                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold">
                            <!--begin:::Tab Item Tab Pane-->
                            <li class="nav-item">
                                <a onclick="showCRM()" class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                    href="#kt_view_dashboard_crm" style="font-size:14px;">Index</a>
                            </li>
                            <!--end:::Tab Item Tab Pane-->
                            <!--begin:::Tab Item Tab Pane-->
                            <li class="nav-item">
                                <a onclick="showCRM()" class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                    href="#kt_view_dashboard_crm" style="font-size:14px;">Humas-Kerjasama</a>
                            </li>
                            <!--end:::Tab Item Tab Pane-->
                            <!--begin:::Tab Item Tab Pane-->
                            <li class="nav-item">
                                <a onclick="showSummary()" class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true"
                                    data-bs-toggle="tab" href="#kt_view_summary_dashboard"
                                    style="font-size:14px;">Investigasi</a>
                            </li>
                            <!--end:::Tab Item Tab Pane-->
                            <!--begin:::Tab Item Tab Pane-->
                            <li class="nav-item">
                                <a onclick="showCCM()" class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true"
                                    data-bs-toggle="tab" href="#kt_view_dashboard_ccm"
                                    style="font-size:14px;">Kepaniteraan</a>
                            </li>
                            <!--end:::Tab Item Tab Pane-->
                            <!--begin:::Tab Item Tab Pane-->
                            <li class="nav-item">
                                <a onclick="showCCM()" class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true"
                                    data-bs-toggle="tab" href="#kt_view_dashboard_ccm"
                                    style="font-size:14px;">Layanan-Umum</a>
                            </li>
                            <!--end:::Tab Item Tab Pane-->
                            <!--begin:::Tab Item Tab Pane-->
                            <li class="nav-item">
                                <a onclick="showCCM()" class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true"
                                    data-bs-toggle="tab" href="#kt_view_dashboard_ccm"
                                    style="font-size:14px;">SDM</a>
                            </li>
                            <!--end:::Tab Item Tab Pane-->
                            <!--begin:::Tab Item Tab Pane-->
                            <li class="nav-item">
                                <a onclick="showCCM()" class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true"
                                    data-bs-toggle="tab" href="#kt_view_dashboard_ccm"
                                    style="font-size:14px;">Tata-Usaha</a>
                            </li>
                            <!--end:::Tab Item Tab Pane-->
                            <!--begin:::Tab Item Tab Pane-->
                            <li class="nav-item">
                                <a onclick="showCCM()" class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true"
                                    data-bs-toggle="tab" href="#kt_view_dashboard_ccm"
                                    style="font-size:14px;">Bagian-Umum</a>
                            </li>
                            <!--end:::Tab Item Tab Pane-->
                        </ul>
                    </div>
                </div>
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            {{-- <div class="d-flex align-items-center py-1">
                <!--begin::Wrapper-->
                <div class="me-4">
                    <!--begin::Menu-->
                    <a href="#"
                        class="btn btn-sm btn-flex btn-light btn-active-primary fw-bolder"
                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                        <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none">
                                <path
                                    d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                    fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->Filter
                    </a>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px"
                        data-kt-menu="true" id="kt_menu_6155ac804a1c2">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bolder">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid"
                                        data-kt-select2="true" data-placeholder="Select option"
                                        data-dropdown-parent="#kt_menu_6155ac804a1c2"
                                        data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label
                                        class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox"
                                            value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label
                                        class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox"
                                            value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-bold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div
                                    class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value=""
                                        name="notifications" checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset"
                                    class="btn btn-sm btn-light btn-active-light-primary me-2"
                                    data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary"
                                    data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Wrapper-->
                <!--begin::Button-->
                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>
                <!--end::Button-->
            </div> --}}
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->

    <!--begin::Card-->
    <div class="row mx-3">
        <!--begin::Card column-->
        <div class="col-4">
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Card widget 20-->
                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-90 mb-5 mb-xl-10" style="background-color: #009EF7;background-image:url('/metronic8/demo1/assets/media/patterns/vector-1.png')">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                            <!--end::Amount-->
                            <!--begin::Subtitle-->
                            <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end pt-0">
                        <!--begin::Progress-->
                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                            <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                <span>43 Pending</span>
                                <span>72%</span>
                            </div>
                            <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end::Progress-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 20-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end-begin::Card column-->
        <div class="col-4">
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Card widget 20-->
                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-90 mb-5 mb-xl-10" style="background-color: #50CD89;background-image:url('/assets/media/patterns/vector-1.png')">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">35</span>
                            <!--end::Amount-->
                            <!--begin::Subtitle-->
                            <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end pt-0">
                        <!--begin::Progress-->
                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                            <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                <span>60 Pending</span>
                                <span>35%</span>
                            </div>
                            <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                <div class="bg-white rounded h-8px" role="progressbar" style="width: 35%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end::Progress-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 20-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end-begin::Card column-->
        <div class="col-4">
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::Card widget 20-->
                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-90 mb-5 mb-xl-10" style="background-color: #F1416C;background-image:url('/metronic8/demo1/assets/media/patterns/vector-1.png')">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">80</span>
                            <!--end::Amount-->
                            <!--begin::Subtitle-->
                            <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end pt-0">
                        <!--begin::Progress-->
                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                            <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                <span>12 Pending</span>
                                <span>80%</span>
                            </div>
                            <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                <div class="bg-white rounded h-8px" role="progressbar" style="width: 80%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end::Progress-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 20-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card column-->
    </div>
    <!--end::Card-->

    <!--begin::Card-->
    <div class="row mx-3">
        <!--begin::Card column-->
        <div class="col-6">
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::COLUMN CHART-->
                <div id="column-chart"></div>
                <!-- data table is inserted here -->
                <!--end::COLUMN CHART-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end-begin::Card column-->
        <div class="col-6">
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::PIE CHART-->
                <figure class="highcharts-figure">
                    <div id="pie-chart"></div>
                    <!-- data table is inserted here -->
                </figure>
                <!--end::PIE CHART-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card column-->
    </div>
    <!--end::Card-->

    <!--begin::Card-->
    <div class="row mx-3">
         <!--begin::Card column-->
         <div class="col-12">
            <!--begin::Card body-->
            <div class="card-body pt-0">
                <!--begin::LINE CHART-->
                <figure class="highcharts-figure">
                    <div class="chart-outer" id="table-line">
                        <div id="chart-line" style="width: 70%; padding-right: 10px; overflow: unset;"></div>
                        <!-- data table is inserted here -->
                    </div>
                </figure>
                <!--end::LINE CHART-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card column-->
    </div>
    <!--end::Card-->

    <!--begin::Card-->
    <div class="row mx-6">
         <!--begin::Col-->
         <div class="col-12">
            <!--begin::Table Widget 4-->
            <div class="card card-flush h-xl-100">
                <!--begin::Card header-->
                <div class="card-header pt-7">
                    <!--begin::Title-->
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-gray-800">My Sales in Details</span>
                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Avg. 57 orders per day</span>
                    </h3>
                    <!--end::Title-->
                    <!--begin::Actions-->
                    <div class="card-toolbar">
                        <!--begin::Filters-->
                        <div class="d-flex flex-stack flex-wrap gap-4">
                            <!--begin::Destination-->
                            <div class="d-flex align-items-center fw-bold">
                                <!--begin::Label-->
                                <div class="text-gray-400 fs-7 me-2">Cateogry</div>
                                <!--end::Label-->
                                <!--begin::Select-->
                                <select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
                                    <option></option>
                                    <option value="Show All" selected="selected">Show All</option>
                                    <option value="a">Category A</option>
                                    <option value="b">Category A</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Destination-->
                            <!--begin::Status-->
                            <div class="d-flex align-items-center fw-bold">
                                <!--begin::Label-->
                                <div class="text-gray-400 fs-7 me-2">Status</div>
                                <!--end::Label-->
                                <!--begin::Select-->
                                <select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
                                    <option></option>
                                    <option value="Show All" selected="selected">Show All</option>
                                    <option value="Shipped">Shipped</option>
                                    <option value="Confirmed">Confirmed</option>
                                    <option value="Rejected">Rejected</option>
                                    <option value="Pending">Pending</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Status-->
                            <!--begin::Search-->
                            <div class="position-relative my-1">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                <span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
                            </div>
                            <!--end::Search-->
                        </div>
                        <!--begin::Filters-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-2">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                <th class="min-w-100px">Order ID</th>
                                <th class="text-end min-w-100px">Created</th>
                                <th class="text-end min-w-125px">Customer</th>
                                <th class="text-end min-w-100px">Total</th>
                                <th class="text-end min-w-100px">Profit</th>
                                <th class="text-end min-w-50px">Status</th>
                                <th class="text-end"></th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="fw-bold text-gray-600">
                            <tr data-kt-table-widget-4="subtable_template" class="d-none">
                                <td colspan="2">
                                    <div class="d-flex align-items-center gap-3">
                                        <a href="#" class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
                                            <img src="" data-kt-src-path="/metronic8/demo1/assets/media/stock/ecommerce/" alt="" data-kt-table-widget-4="template_image" />
                                        </a>
                                        <div class="d-flex flex-column text-muted">
                                            <a href="#" class="text-gray-800 text-hover-primary fw-bold" data-kt-table-widget-4="template_name">Product name</a>
                                            <div class="fs-7" data-kt-table-widget-4="template_description">Product description</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="text-gray-800 fs-7">Cost</div>
                                    <div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_cost">1</div>
                                </td>
                                <td class="text-end">
                                    <div class="text-gray-800 fs-7">Qty</div>
                                    <div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_qty">1</div>
                                </td>
                                <td class="text-end">
                                    <div class="text-gray-800 fs-7">Total</div>
                                    <div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_total">name</div>
                                </td>
                                <td class="text-end">
                                    <div class="text-gray-800 fs-7 me-3">On hand</div>
                                    <div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_stock">32</div>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGY-346</a>
                                </td>
                                <td class="text-end">7 min ago</td>
                                <td class="text-end">
                                    <a href="#" class="text-gray-600 text-hover-primary">Albert Flores</a>
                                </td>
                                <td class="text-end">630.00</td>
                                <td class="text-end">
                                    <span class="text-gray-800 fw-bolder">86.70</span>
                                </td>
                                <td class="text-end">
                                    <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                </td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                        <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                        <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#YHD-047</a>
                                </td>
                                <td class="text-end">52 min ago</td>
                                <td class="text-end">
                                    <a href="#" class="text-gray-600 text-hover-primary">Jenny Wilson</a>
                                </td>
                                <td class="text-end">25.00</td>
                                <td class="text-end">
                                    <span class="text-gray-800 fw-bolder">4.20</span>
                                </td>
                                <td class="text-end">
                                    <span class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
                                </td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                        <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                        <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SRR-678</a>
                                </td>
                                <td class="text-end">1 hour ago</td>
                                <td class="text-end">
                                    <a href="#" class="text-gray-600 text-hover-primary">Robert Fox</a>
                                </td>
                                <td class="text-end">1,630.00</td>
                                <td class="text-end">
                                    <span class="text-gray-800 fw-bolder">203.90</span>
                                </td>
                                <td class="text-end">
                                    <span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
                                </td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                        <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                        <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#PXF-534</a>
                                </td>
                                <td class="text-end">3 hour ago</td>
                                <td class="text-end">
                                    <a href="#" class="text-gray-600 text-hover-primary">Cody Fisher</a>
                                </td>
                                <td class="text-end">119.00</td>
                                <td class="text-end">
                                    <span class="text-gray-800 fw-bolder">12.00</span>
                                </td>
                                <td class="text-end">
                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                </td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                        <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                        <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGD-249</a>
                                </td>
                                <td class="text-end">2 day ago</td>
                                <td class="text-end">
                                    <a href="#" class="text-gray-600 text-hover-primary">Arlene McCoy</a>
                                </td>
                                <td class="text-end">660.00</td>
                                <td class="text-end">
                                    <span class="text-gray-800 fw-bolder">52.26</span>
                                </td>
                                <td class="text-end">
                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                </td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                        <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                        <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-035</a>
                                </td>
                                <td class="text-end">2 day ago</td>
                                <td class="text-end">
                                    <a href="#" class="text-gray-600 text-hover-primary">Eleanor Pena</a>
                                </td>
                                <td class="text-end">290.00</td>
                                <td class="text-end">
                                    <span class="text-gray-800 fw-bolder">29.00</span>
                                </td>
                                <td class="text-end">
                                    <span class="badge py-3 px-4 fs-7 badge-light-danger">Rejected</span>
                                </td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                        <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                        <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="/metronic8/demo1/../demo1/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-567</a>
                                </td>
                                <td class="text-end">7 min ago</td>
                                <td class="text-end">
                                    <a href="#" class="text-gray-600 text-hover-primary">Dan Wilson</a>
                                </td>
                                <td class="text-end">590.00</td>
                                <td class="text-end">
                                    <span class="text-gray-800 fw-bolder">50.00</span>
                                </td>
                                <td class="text-end">
                                    <span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
                                </td>
                                <td class="text-end">
                                    <button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
                                        <span class="svg-icon svg-icon-3 m-0 toggle-off">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
                                                <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
                                        <span class="svg-icon svg-icon-3 m-0 toggle-on">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Table Widget 4-->
        </div>
        <!--end::Col-->
    </div>
    <!--end::Card-->

</div>

@endsection

@section('js-script')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://code.highcharts.com/highcharts-3d.js"></script>

<script>
    Highcharts.setOptions({
        chart: {
            style: {
                fontFamily: 'Poppins'
            }
        }
    });
</script>

<script>
    Highcharts.chart('column-chart', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Sunny Column Chart',
            style: {
                fontWeight: 'bold',
                fontSize: '25px'
            }
        },
        subtitle: {
            // text: 'Source: '
        },
        xAxis: {
            categories: [
                '2019',
                '2020',
                '2021',
                '2022'
            ],
            crosshair: true,
            // visible: false,
        },
        yAxis: {
            title: {
                useHTML: true,
                text: ''
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>&nbsp;{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.1,
                borderWidth: 0,
                borderRadius: 5,
                showInLegend: true
            }
        },
        colors: ["#009EF7", "#50CD89", "#F1416C", "#FFC700", "#7239EA", "#43CED7"],
        credits: {
            enabled: false
        },
        exporting: {
            showTable: true,
            allowHTML: true
        },
        series: [{
            name: 'Input',
            data: [11.5, 13.9, 12.6, 14]

        }, {
            name: 'Output',
            data: [5.8, 8.3, 6.32, 9.3]

        }]
    });
</script>

<script>
    Highcharts.chart('pie-chart', {
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 5
            }
        },
        title: {
            text: 'Sunny Donut Chart',
            style: {
                fontWeight: 'bold',
                fontSize: '25px'
            }
        },
        subtitle: {
            // text: '3D donut in Highcharts'
        },
        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
            pointFormat: '<tr><td style="padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>&nbsp;{point.y:.1f}</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            pie: {
                innerSize: 150,
                depth: 5
            }
        },
        colors: ["#009EF7", "#50CD89", "#F1416C", "#FFC700", "#7239EA", "#43CED7"],
        credits: {
            enabled: false
        },
        exporting: {
            showTable: true,
            allowHTML: true
        },
        series: [{
            name: 'Medals',
            data: [
                ['2019', 8],
                ['2020', 16],
                ['2021', 12],
                ['2022', 8],
                ['Others', 4]
            ]
        }]
    });
</script>

<script>
    Highcharts.chart('chart-line', {
        title: {
            text: 'Sunny Line Chart',
            style: {
                fontWeight: 'bold',
                fontSize: '25px'
            }
        },

        subtitle: {
            // text: ''
        },

        yAxis: {
            title: {
                text: ''
            }
        },

        xAxis: {
            accessibility: {
                rangeDescription: 'Range: 2010 to 2020'
            },
            categories: [
                    "Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September",
                    "Oktober", "November", "Desember",
                ],
        },

        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },

        tooltip: {
            headerFormat: '<span style="font-size:15px">{point.key}</span><table>',
            pointFormat: '<tr><td style="padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>&nbsp;{point.y:.0f}</b></td></tr>',
            footerFormat: '</table>',
            // shared: true,
            useHTML: true
        },
        
        plotOptions: {
            series: {
                label: {
                    connectorAllowed: false
                },
                // pointStart: 1
            }
        },

        colors: ["#009EF7", "#50CD89", "#F1416C", "#FFC700", "#7239EA", "#43CED7"],
        credits: {
            enabled: false
        },
        exporting: {
            showTable: true,
            allowHTML: true
        },

        legend: {
            layout: 'horizontal',
            align: 'center',
            verticalAlign: 'bottom',
            format : '<b>{point.key}</b><br>',
            itemStyle: {
                fontSize:'20px',
                // font: '20pt Trebuchet MS, Verdana, sans-serif',
            },
        },

        series: [{
            name: '2020',
            data: [11908, 5548, 8105, 11248, 8989, 11816, 28274,
                27300, 39053, 42906, 65073, 60940]
        }, {
            name: '2021',
            data: [13934, 22234, 24657, 31827, 42143, 60087,
                64878, 65174, 68646, 79546, 88546, 90000]
        }, {
            name: '2022',
            data: [23934, 28656, 35165, 41827, 52143, 62383,
                71533, 75174, 95157, 91454, 94610, 100000]
        }],

        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }

        });
</script>

@endsection