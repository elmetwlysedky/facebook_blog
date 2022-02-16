@extends('Dashboard.layouts.app')

@section('title')
    Message
@endsection

@section('content')

    <div class="card">
    <!-- Mail details -->
    <div class="card-body border-top">
        <div class="media flex-column flex-md-row">
            <a href="#" class="d-none d-md-block mr-md-3 mb-3 mb-md-0">
											<span class="btn bg-teal-400 btn-icon btn-lg rounded-round">
												<span class="letter-icon"></span>
											</span>
            </a>

            <div class="media-body">
                <h4 class="font-weight-semibold mb-1">
                   {{$contact->name}}
                </h4>

                    <ul class="list-inline list-inline-dotted text-muted mb-3">
                        <li class="list-inline-item">{{$contact->created_at->diffForhumans()}}</li>
                    </ul>

            </div>

        </div>
    </div>
    <!-- /mail details -->

    </div>

    <div class="card">
        <div class="card-body">
            <div class="mb-4">
                <h6 class="font-weight-semibold mb-1">
                    <a href="#" class="text-default">user informations</a>
                </h6>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <ul class="list list-unstyled">

                        <li>
                            <i class="icon-checkmark3 text-success mr-2"></i>
                            {{$contact->name}}

                        </li>
                        <li>
                            <i class="icon-checkmark3 text-success mr-2"></i>
                            {{$contact->email}}

                        </li>
                        <li>
                            <i class="icon-checkmark3 text-success mr-2"></i>
                            {{$contact->phone}}
                        </li>
                        <li>
                            <i class="icon-checkmark3 text-success mr-2"></i>
                            {{$contact->work_type}}
                        </li>
                    </ul>
                </div>


                <!-- The Best Prices for You -->
                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
                    <tr>
                        <td width="100%" height="1" bgcolor="#dddddd" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td align="center" width="100%" valign="top" bgcolor="#fafafa" style="background-color: #fafafa;">
                            <table width="640" border="0" cellpadding="0" cellspacing="0" align="center">
                                <tr>
                                    <td width="100%" height="50"></td>
                                </tr>
                                <tr>
                                    <td align="center">

                                        <!-- Header -->
                                        <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                            <tr>
                                                <td align="center">
                                                    <table width="600" border="0" cellpadding="0" cellspacing="0" align="center">
                                                        <tr>
                                                            <td align="center" valign="middle" style="font-size: 24px; color: #444444; line-height: 32px; font-weight: 500;">
                                                                The Best Prices for You
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td width="100%" height="30"></td>
                                                        </tr>


                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!-- /header -->


                                        <!-- Prices -->
                                        <table width="300" border="0" cellpadding="0" cellspacing="0" align="center">
                                            <tr>
                                                <td width="100%" valign="top" align="center">







                                                    <!-- OEM license -->
                                                    <table width="290" border="0" cellpadding="0" cellspacing="0" align="right" bgcolor="#ffffff" style="border: 1px solid #dddddd; background-color: #ffffff;">
                                                        <tr>
                                                            <td width="294" valign="top">
                                                                <table width="290" border="0" cellpadding="0" cellspacing="0" align="center">
                                                                    <tr>
                                                                        <td height="15">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td align="center" style="color: #444444; font-size: 17px; line-height: 26px; padding: 0px 5px; font-weight: 500;">
                                                                            {{$contact->service->name_en}}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="15">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="100" height="1" bgcolor="#e9e9e9" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="20">
                                                                        </td>
                                                                    </tr>
                                                                    @foreach ($contact->items as $key => $value)
                                                                    <tr>
                                                                        <td align="center" style="color: #808080; font-size: 14px; line-height: 22px; padding: 2px 5px;">

                                                                                {{ $value }}
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td height="25">
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach

                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!-- /OEM license -->

                                                </td>
                                            </tr>
                                        </table>
                                        <!-- /prices -->

                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                </table>
                <!-- /the Best Prices for You -->








            </div>
            <div class="mb-3 text-center">
                <a href="#" class="d-inline-block">
                    <img src="/storage/{{$contact->file}}" class="img-fluid" alt="" style="height: 300px;">
                </a>
            </div>



        </div>
    </div>
    <!-- /post -->


@endsection






