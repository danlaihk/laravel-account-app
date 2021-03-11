@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">Simple Table</h4>
            <p class="card-category"> Here is a subtitle for this table</p>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                    <th>
                        {{trans('general.record_id')}}
                    </th>
                    <th>
                        {{trans('general.expense_type')}}
                    </th>
                    <th>
                        {{trans_choice('general.descriptions',1)}}
                    </th>

                    <th>
                        {{trans_choice('general.actions',2)}}

                    </th>
                </thead>
                <tbody>
                    @foreach ($records as $record)
                    <tr>
                        <td>{{$record->format_id}}</td>
                        <td>{{$record->expense_type_id}}</td>
                        <td>{{$record->description}}</td>

                        <td></td>
                    </tr>
                    @endforeach


                    {{-- <tr>
                        <td>
                        1
                        </td>
                        <td>
                        Dakota Rice
                        </td>
                        <td>
                        Niger
                        </td>
                        <td>
                        Oud-Turnhout
                        </td>
                        <td class="text-primary">
                        $36,738
                        </td>
                    </tr>
                    <tr>
                        <td>
                        2
                        </td>
                        <td>
                        Minerva Hooper
                        </td>
                        <td>
                        Curaçao
                        </td>
                        <td>
                        Sinaai-Waas
                        </td>
                        <td class="text-primary">
                        $23,789
                        </td>
                    </tr>
                    <tr>
                        <td>
                        3
                        </td>
                        <td>
                        Sage Rodriguez
                        </td>
                        <td>
                        Netherlands
                        </td>
                        <td>
                        Baileux
                        </td>
                        <td class="text-primary">
                        $56,142
                        </td>
                    </tr>
                    <tr>
                        <td>
                        4
                        </td>
                        <td>
                        Philip Chaney
                        </td>
                        <td>
                        Korea, South
                        </td>
                        <td>
                        Overland Park
                        </td>
                        <td class="text-primary">
                        $38,735
                        </td>
                    </tr>
                    <tr>
                        <td>
                        5
                        </td>
                        <td>
                        Doris Greene
                        </td>
                        <td>
                        Malawi
                        </td>
                        <td>
                        Feldkirchen in Kärnten
                        </td>
                        <td class="text-primary">
                        $63,542
                        </td>
                    </tr>
                    <tr>
                        <td>
                        6
                        </td>
                        <td>
                        Mason Porter
                        </td>
                        <td>
                        Chile
                        </td>
                        <td>
                        Gloucester
                        </td>
                        <td class="text-primary">
                        $78,615
                        </td>
                    </tr> --}}
                </tbody>
            </table>
            </div>
        </div>
        </div>
    </div>

</div>

@endsection
