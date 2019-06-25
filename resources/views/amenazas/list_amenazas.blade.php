@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('text.F2amenazas')}}</div>

                <div class="card-body">
                {{ __('text.F2text') }}
                <br/><hr> 
                    <table class="table table-striped table-bordered text-center my-table" id="tablaAmenazas">
                        <thead class="thead-light">
                            <tr>
                                <th class="col-md-2">{{ __('text.colAmenazaIdent')}}</th>
                                <th class="col-md-8">{{ __('text.colAmenazaDesc')}}</th>
                                <th class="col-md-8">{{ __('text.colAmenazaActivo')}}</th>
                                <th class="col-md-2">{{ __('text.lblAction')}}</th>
                            </tr>
                        </thead>    

                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <br/>

    <footer class="page-footer font-small cyan darken-3">
        <nav aria-label="...">
          <ul class="pagination pagination-sm justify-content-center">
            <li class="page-item"><a class="page-link" href="{{ url('home') }}">{{ __('text.home')}}</a></li>
            <li class="page-item">
              <a class="page-link" href="{{ url('activos') }}">&laquo; {{ __('text.btnPrevious')}}</a>
            </li>
            {{--<li class="page-item"><a class="page-link" href="{{ url('activos') }}">1</a></li>--}}
            <li class="page-item active">
              <span class="page-link">
                2
                <span class="sr-only">(current)</span>
              </span>
            </li>
            {{--<li class="page-item"><a class="page-link" href="{{ url('amenazas') }}">2</a></li>--}}
            <li class="page-item"><a class="page-link" href="{{ url('salvavulnera') }}">3</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('calculo') }}">4</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('analisis') }}">5</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('decisiones') }}">6</a></li>
            <li class="page-item">
              <a class="page-link" href="{{ url('salvavulnera') }}">{{ __('text.btnNext')}} &raquo;</a>
            </li>
          </ul>
        </nav>
        <a href="/home" class="previous" style="background-color: #f1f1f1; color: black"></a>
        <a href="/amenazas" class="next" style="background-color: #4CAF50; color: white;"></a>
    </footer>
    <!-- Footer -->

</div>


<!-- Modal Nueva Amenaza-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="container-fluid">
        <!-- Modal content-->
        <div class="modal-content col-md-12">
          <div class="modal-body">
                <p class="">{{ __('text.nuevaAmenaza') }}</p>
                <hr>
                <form action="{{ url('/amenazas/store') }}" method="POST">
                    {{ csrf_field() }}

                      <div class="form-group row">
                        <label for="inputIdent" class="col-sm-2 col-form-label">{{ __('text.colAmenazaIdent')}}</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" name="inputIdent" id="inputIdent" placeholder="{{ __('text.newAmenazaId')}}">
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputDesc" class="col-sm-2 col-form-label">{{ __('text.colAmenazaDesc')}}</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" name="inputDesc" id="inputDesc" placeholder="{{ __('text.newAmenazaDesc')}}" />
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputActiv" class="col-sm-2 col-form-label">{{ __('text.colAmenazaActivo')}}</label>
                        <div class="col-sm-10 select-outline">
                            <select class="js-example-basic-single custom-select-lg" id="activoselect" name="activoselect" style="width: 100%">
                                @foreach ($activos as $activo)
                                    <option value="{{$activo->id}}">{{$activo->identificador}} - {{$activo->descripcion}}</option>
                                @endforeach
                            </select>

                        </div>
                      </div>
                      <br/>

                        <div class="form-group row justify-content-md-center">
                            <div class="col col-lg-2">
                              <input class="btn btn-success form-control" type="submit" value="{{ __('text.addAsset')}}"/>
                            </div>
                            <div class="col-md-auto">
                            </div>
                            <div class="col col-lg-2">
                                <button type="button" class="btn btn-secondary form-control" data-dismiss="modal">
                                    {{ __('text.btnClose')}}
                                </button>
                            </div>
                        </div>

                      <div class="form-group row">
                        <div class="col-sm-2">
                        </div>
                      </div>
                </form>
          </div>
        </div>
    </div>
  </div>
</div>


<script type="text/javascript">

    {{-- Datatable Principal --}}
    $(document).ready(function() {
            $('.js-example-basic-single').select2();

            $.ajax({
                url: "{{url('/json/amenazas')}}",
                success : function(data) {
                    var tabla = data.data;//.list.item;
                    $('#tablaAmenazas').DataTable( {
                        language: {
                            @if ( Config::get('app.locale') == 'en')
                                "url": "{{ asset('en/datatableLang.json')}}"
                            @elseif ( Config::get('app.locale') == 'es' )
                                "url": "{{ asset('es/datatableLang.json')}}"
                            @endif
                        },
                        lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                        dom: 'Bfrtip',
                        data : tabla,
                        columns: [
                            {"data" : "id_amenaza"},
                            {"data" : "descripcion"},
                            {"data" : "identificador"},
                            {
                                "className": 'details-control',
                                "orderable": false,
                                "data": null,
                                "render": function (data, type, row) {
                                    //return '<a class="btn btn-danger" onclick="alert('+ row.offset +')">Deletear</a>'
                                    return "<a href=\"{{url('/amenazas/delete')}}/"+ row.id +"\"><input type=\"button\" class=\"btn btn-danger\" value=\"{{ __('text.delAsset')}}\" onclick=\"return confirm('{{ __('text.QuestionSuredelete')}}')\"/></a>";
                                }
                            },              
                        ],
                        buttons: [

                            {
                                text: '{{ __('text.nuevaAmenaza')}}',
                                className: "btn btn-primary blue",
                                action: function ( e, dt, node, config ) {
                                    $('#myModal').modal('toggle');
                                }
                            },
                            {
                                extend: 'excelHtml5',
                                messageTop: '{{ __('text.excelAmenazaText')}}'
                            },
                            {
                                extend: 'pdfHtml5',
                                messageTop: '{{ __('text.excelAmenazaText')}}'
                            },
                            
                        ],
                    });
                }       
            });
        } );

</script>

@endsection
