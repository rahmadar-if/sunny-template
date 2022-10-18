@extends('layouts.main')

@section('title', 'Dashboard')

@section('container')

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend"
                data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}"
                class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">Dashboard
                    <!--begin::Separator-->
                    {{-- <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span> --}}
                    <!--end::Separator-->
                    <!--begin::Description-->
                    {{-- <small class="text-muted fs-7 fw-bold my-1 ms-1">#XRS-45670</small> --}}
                    <!--end::Description-->
                </h1>
                <!--end::Title-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-1">
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
                                {{-- <label class="form-label fw-bold">Notifications:</label> --}}
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
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Toolbar-->
    <!--begin::Post-->
    <div class="card mx-6" Id="List-vv" style="position: relative; overflow: hidden;">
        <!--begin::Card header-->
        <div class="card-header py-1">
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::FORECAST LINE CHART-->
            <figure class="highcharts-figure py-12">
                <div id="forecast-line" style="display:">
                </div>
                <!--begin::Table Proyek-->
                <div class="" id="datatable" style="display: none">
                    <div class="text-center">
                        <h2 id="title-table"></h2>
                        <h4 id="total"></h4>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-sm btn-light btn-active-primary fs-6 me-3"
                            onclick="hideTable('#datatable','#forecast-line')"><i class="bi bi-bar-chart-fill fs-6"></i> Show
                            Chart</button>
                        <a href="#" target="_blank" id="export-excel-btn" class="btn btn-sm btn-light btn-active-primary fs-6 me-3"><i class="bi bi-download"></i> Export Excel</a>
                        <button class="btn btn-sm btn-light btn-active-danger fs-6"
                            onclick="toggleFullscreen()" id="exit-fullscreen"><i
                                class="bi bi-fullscreen-exit fs-6"></i> Exit Fullscreen</button>
                        {{-- <button class="btn btn-sm btn-active-primary text-white" style="background-color: #008cb4;"><i class="bi bi-graph-up-arrow text-white"></i></button> --}}
                    </div>
                    <br>
                    <div class="" style="max-height: 500px; overflow-y:scroll">
                        <table class="table align-middle table-row-dashed fs-6 gy-2">
                            <!--begin::Table head-->
                            <thead class="bg-white" id="table-line-head" style="position: sticky; top: 0">
                                {{-- THead Here --}}
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold" id="table-line-body">
                                {{-- Data Here --}}
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table Proyek-->
                </div>
            </figure>
            <!--end::FORECAST LINE CHART-->
            <hr>

            <figure class="highcharts-figure py-12">
                <div class="py-12" id="monitoring-proyek">
                    <!--begin::MONITORING PROYEK-->
                    <!--end::MONITORING PROYEK-->
                </div>
                <div class="" id="datatable-monitoring-proyek" style="display: none;">
                    <div class="text-center">
                        <h2 id="title-table"></h2>
                        <h4 id="total"></h4>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-sm btn-light btn-active-primary fs-6 me-3"
                            onclick="hideTable('#datatable-monitoring-proyek','#monitoring-proyek')"><i class="bi bi-bar-chart-fill fs-6"></i> Show
                            Chart</button>
                        <a href="#" target="_blank" id="export-excel-btn" class="btn btn-sm btn-light btn-active-primary fs-6 me-3"><i class="bi bi-download"></i> Export Excel</a>
                        <button class="btn btn-sm btn-light btn-active-danger fs-6"
                            onclick="toggleFullscreen()" id="exit-fullscreen"><i
                                class="bi bi-fullscreen-exit fs-6"></i> Exit Fullscreen</button>
                        {{-- <button class="btn btn-sm btn-active-primary text-white" style="background-color: #008cb4;"><i class="bi bi-graph-up-arrow text-white"></i></button> --}}
                    </div>
                    <br>
                    <div class="" style="max-height: 500px; overflow-y:scroll">
                        <table class="table align-middle table-row-dashed fs-6 gy-2">
                            <!--begin::Table head-->
                            <thead id="table-line-head" class="bg-white" style="position: sticky; top: 0">
                                {{-- THead Here --}}
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold" id="table-line-body">
                                {{-- Data Here --}}
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table Proyek-->
                </div>
            </figure>
            <hr>
            
            <figure class="highcharts-figure py-12">
                <div class="py-12" id="terendah-terkontrak">
                    <!--begin::TERENDAH - TERKONTRAK-->
                    <!--end::TERENDAH - TERKONTRAK-->
                </div>
                <div class="" id="datatable-terendah-terkontrak" style="display: none;">
                    <div class="text-center">
                        <h2 id="title-table"></h2>
                        <h4 id="total"></h4>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-sm btn-light btn-active-primary fs-6 me-3"
                            onclick="hideTable('#datatable-terendah-terkontrak','#terendah-terkontrak')"><i class="bi bi-bar-chart-fill fs-6"></i> Show
                            Chart</button>
                        <a href="#" target="_blank" id="export-excel-btn" class="btn btn-sm btn-light btn-active-primary fs-6 me-3"><i class="bi bi-download"></i> Export Excel</a>
                        <button class="btn btn-sm btn-light btn-active-danger fs-6"
                            onclick="toggleFullscreen()" id="exit-fullscreen"><i
                                class="bi bi-fullscreen-exit fs-6"></i> Exit Fullscreen</button>
                        {{-- <button class="btn btn-sm btn-active-primary text-white" style="background-color: #008cb4;"><i class="bi bi-graph-up-arrow text-white"></i></button> --}}
                    </div>
                    <br>
                    <div class="" style="max-height: 500px; overflow-y:scroll">
                        <table class="table align-middle table-row-dashed fs-6 gy-2">
                            <!--begin::Table head-->
                            <thead id="table-line-head" class="bg-white" style="position: sticky; top: 0">
                                {{-- THead Here --}}
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold" id="table-line-body">
                                {{-- Data Here --}}
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table Proyek-->
                </div>
            </figure>
            <hr>

            <div class="row">
                <div class="col-6">
                    <figure class="col highcharts-figure">
                        <div class="py-12" id="index-jumlah">
                            <!--begin::INDEX JUMLAH-->
                            <!--end::INDEX JUMLAH-->
                        </div>
                        <div class="" id="datatable-index-jumlah" style="display: none;">
                            <div class="text-center">
                                <h2 id="title-table"></h2>
                                <h4 id="total"></h4>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-sm btn-light btn-active-primary fs-6 me-3"
                                    onclick="hideTable('#datatable-index-jumlah','#index-jumlah')"><i class="bi bi-bar-chart-fill fs-6"></i> Show
                                    Chart</button>
                                <a href="#" target="_blank" id="export-excel-btn" class="btn btn-sm btn-light btn-active-primary fs-6 me-3"><i class="bi bi-download"></i> Export Excel</a>
                                <button class="btn btn-sm btn-light btn-active-danger fs-6"
                                    onclick="toggleFullscreen()" id="exit-fullscreen"><i
                                        class="bi bi-fullscreen-exit fs-6"></i> Exit Fullscreen</button>
                                {{-- <button class="btn btn-sm btn-active-primary text-white" style="background-color: #008cb4;"><i class="bi bi-graph-up-arrow text-white"></i></button> --}}
                            </div>
                            <br>
                            <div class="py-12" style="max-height: 500px; overflow-y:scroll">
                                <table class="table align-middle table-row-dashed fs-6 gy-2">
                                    <!--begin::Table head-->
                                    <thead id="table-line-head" class="bg-white" style="position: sticky; top: 0">
                                        {{-- THead Here --}}
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold" id="table-line-body">
                                        {{-- Data Here --}}
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table Proyek-->
                        </div>
                    </figure>
                </div>
                
                {{-- <span class="vr" style="padding: 0.5px"></span> --}}
                
                <div class="col-6">
                    <figure class="col highcharts-figure">
                        <div class="py-12" id="index-nilai">
                            <!--begin::INDEX NILAI-->
                            <!--end::INDEX NILAI-->
                        </div>
                        <div class="" id="datatable-index-nilai" style="display: none;">
                            <div class="text-center">
                                <h2 id="title-table"></h2>
                                <h4 id="total"></h4>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn btn-sm btn-light btn-active-primary fs-6 me-3"
                                    onclick="hideTable('#datatable-index-nilai','#index-nilai')"><i class="bi bi-bar-chart-fill fs-6"></i> Show
                                    Chart</button>
                                <a href="#" target="_blank" id="export-excel-btn" class="btn btn-sm btn-light btn-active-primary fs-6 me-3"><i class="bi bi-download"></i> Export Excel</a>
                                <button class="btn btn-sm btn-light btn-active-danger fs-6"
                                    onclick="toggleFullscreen()" id="exit-fullscreen"><i
                                        class="bi bi-fullscreen-exit fs-6"></i> Exit Fullscreen</button>
                                {{-- <button class="btn btn-sm btn-active-primary text-white" style="background-color: #008cb4;"><i class="bi bi-graph-up-arrow text-white"></i></button> --}}
                            </div>
                            <br>
                            <div class="" style="max-height: 500px; overflow-y:scroll">
                                <table class="table align-middle table-row-dashed fs-6 gy-2">
                                    <!--begin::Table head-->
                                    <thead id="table-line-head" class="bg-white" style="position: sticky; top: 0">
                                        {{-- THead Here --}}
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody class="fw-bold" id="table-line-body">
                                        {{-- Data Here --}}
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table Proyek-->
                        </div>
                    </figure>
                </div>
                
            </div>
            <hr>
            
            <div class="row">
                <figure class="col highcharts-figure">
                    <div class="" id="sumber-dana-rkap">
                        <!--begin::INDEX NILAI-->
                        <!--end::INDEX NILAI-->
                    </div>
                    <div class="" id="datatable-sumber-dana-rkap" style="display: none;">
                        <div class="text-center">
                            <h2 id="title-table"></h2>
                            <h4 id="total"></h4>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-sm btn-light btn-active-primary fs-6 me-3"
                                onclick="hideTable('#datatable-sumber-dana-rkap','#sumber-dana-rkap')"><i class="bi bi-bar-chart-fill fs-6"></i> Show
                                Chart</button>
                            <a href="#" target="_blank" id="export-excel-btn" class="btn btn-sm btn-light btn-active-primary fs-6 me-3"><i class="bi bi-download"></i> Export Excel</a>
                            <button class="btn btn-sm btn-light btn-active-danger fs-6"
                                onclick="toggleFullscreen()" id="exit-fullscreen"><i
                                    class="bi bi-fullscreen-exit fs-6"></i> Exit Fullscreen</button>
                            {{-- <button class="btn btn-sm btn-active-primary text-white" style="background-color: #008cb4;"><i class="bi bi-graph-up-arrow text-white"></i></button> --}}
                        </div>
                        <br>
                        <div class="" style="max-height: 500px; overflow-y:scroll">
                            <table class="table align-middle table-row-dashed fs-6 gy-2">
                                <!--begin::Table head-->
                                <thead id="table-line-head" class="bg-white" style="position: sticky; top: 0">
                                    {{-- THead Here --}}
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-bold" id="table-line-body">
                                    {{-- Data Here --}}
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <!--end::Table Proyek-->
                    </div>
                </figure>
                {{-- <span class="vr" style="padding: 0.5px"></span> --}}
                <figure class="col highcharts-figure">
                    <div class="" id="sumber-dana-realisasi">
                        <!--begin::INDEX NILAI-->
                        <!--end::INDEX NILAI-->
                    </div>
                    <div class="" id="datatable-sumber-dana-realisasi" style="display: none;">
                        <div class="text-center">
                            <h2 id="title-table"></h2>
                            <h4 id="total"></h4>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-sm btn-light btn-active-primary fs-6 me-3"
                                onclick="hideTable('#datatable-sumber-dana-realisasi','#sumber-dana-realisasi')"><i class="bi bi-bar-chart-fill fs-6"></i> Show
                                Chart</button>
                            <a href="#" target="_blank" id="export-excel-btn" class="btn btn-sm btn-light btn-active-primary fs-6 me-3"><i class="bi bi-download"></i> Export Excel</a>
                            <button class="btn btn-sm btn-light btn-active-danger fs-6"
                                onclick="toggleFullscreen()" id="exit-fullscreen"><i
                                    class="bi bi-fullscreen-exit fs-6"></i> Exit Fullscreen</button>
                            {{-- <button class="btn btn-sm btn-active-primary text-white" style="background-color: #008cb4;"><i class="bi bi-graph-up-arrow text-white"></i></button> --}}
                        </div>
                        <br>
                        <div class="" style="max-height: 500px; overflow-y:scroll">
                            <table class="table align-middle table-row-dashed fs-6 gy-2">
                                <!--begin::Table head-->
                                <thead id="table-line-head" class="bg-white" style="position: sticky; top: 0">
                                    {{-- THead Here --}}
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody class="fw-bold" id="table-line-body">
                                    {{-- Data Here --}}
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <!--end::Table Proyek-->
                    </div>
                </figure>
            </div>
            <hr>

            <figure class="highcharts-figure py-12">
                <div class="pt-12 pb-6" id="nilai-realisasi">
                    <!--begin::NILAI REALISASI-->
                    <!--end::NILAI REALISASI-->
                </div>
                <div class="" id="datatable-nilai-realisasi" style="display: none;max-height: 500px; overflow-y:scroll">
                    <div class="text-center">
                        <h2 id="title-table"></h2>
                        <h4 id="total"></h4>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button class="btn btn-sm btn-light btn-active-primary fs-6 me-3"
                            onclick="hideTable('#datatable-nilai-realisasi','#nilai-realisasi')"><i class="bi bi-graph-up-arrow fs-6"></i> Show
                            Chart</button>
                        <a href="#" target="_blank" id="export-excel-btn" class="btn btn-sm btn-light btn-active-primary fs-6 me-3"><i class="bi bi-download"></i> Export Excel</a>
                        <button class="btn btn-sm btn-light btn-active-danger fs-6"
                            onclick="toggleFullscreen()" id="exit-fullscreen"><i
                            class="bi bi-fullscreen-exit fs-6"></i> Exit Fullscreen</button>
                        {{-- <button class="btn btn-sm btn-active-primary text-white" style="background-color: #008cb4;"><i class="bi bi-graph-up-arrow text-white"></i></button> --}}
                    </div>
                    <br>
                    <div class="" style="max-height: 500px; overflow-y:scroll">
                        <table class="table align-middle table-row-dashed fs-6 gy-2">
                            <!--begin::Table head-->
                            <thead id="table-line-head" style="position: sticky; top: 0">
                                {{-- THead Here --}}
                            </thead>
                            <!--end::Table head-->
                            <!--begin::Table body-->
                            <tbody class="fw-bold" id="table-line-body">
                                {{-- Data Here --}}
                            </tbody>
                            <!--end::Table body-->
                        </table>
                    </div>
                    <!--end::Table Proyek-->
                </div>
            </figure>
            <hr>
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Post-->
</div>


@endsection