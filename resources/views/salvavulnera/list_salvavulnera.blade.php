@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('text.F3Salvavulnera')}}</div>

                <div class="card-body">
                {{ __('text.F3text') }}
                <br/><hr> 
                    <table class="table table-striped table-bordered text-center my-table" id="tablaSalvavulneras">
                        <thead class="thead-light">
                            <tr>
                                <th class="col-md-2">{{ __('text.colSalvavulneraTipo')}}</th>
                                <th class="col-md-8">{{ __('text.colSalvavulneraDesc')}}</th>
                                <th class="col-md-8">{{ __('text.colSalvavulneraAmen')}}</th>
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
            <li class="page-item"><a class="page-link" href="{{ url('activos') }}">1</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('amenazas') }}">2</a></li>
            {{--<li class="page-item"><a class="page-link" href="{{ url('Salvavulnera') }}">2</a></li>--}}
            <li class="page-item active">
              <span class="page-link">
                3
                <span class="sr-only">(current)</span>
              </span>
            </li>
            <li class="page-item"><a class="page-link" href="{{ url('calculo') }}">4</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('analisis') }}">5</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('decisiones') }}">6</a></li>
            <li class="page-item">
              <a class="page-link" href="{{ url('calculo') }}">{{ __('text.btnNext')}} &raquo;</a>
            </li>
          </ul>
        </nav>
        <a href="/home" class="previous" style="background-color: #f1f1f1; color: black"></a>
        <a href="/calculos" class="next" style="background-color: #4CAF50; color: white;"></a>
    </footer>
    <!-- Footer -->

</div>


<!-- Modal Nueva Salvavulnera-->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="container-fluid">
        <!-- Modal content-->
        <div class="modal-content col-md-12">
          <div class="modal-body">
                <p class="">{{ __('text.nuevaSalvavulnera') }}</p>
                <hr>
                <form action="{{ url('/salvavulnera/store') }}" method="POST">
                    {{ csrf_field() }}

                      <div class="form-group row">
                        <label for="inputIdent" class="col-sm-2 col-form-label">{{ __('text.colSalvavulneraTipo')}}</label>
                        <div class="col-sm-10">
                          	<select class="custom-select mr-sm-2" id="tipoSalvavulnera" name="tipoSalvavulnera">
						        <option selected value="{{ __('text.txtSalva')}}">{{ __('text.txtSalva')}}</option>
						        <option value="{{ __('text.txtVulnera')}}">{{ __('text.txtVulnera')}}</option>
				       		</select>
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="inputDesc" class="col-sm-2 col-form-label">{{ __('text.colSalvavulneraDesc')}}</label>
                        <div class="col-sm-10">
                          <input class="form-control" type="text" name="salvavulneraDesc" id="salvavulneraDesc" placeholder="{{ __('text.newSalvavulneraDesc')}}" />
                        </div>
                      </div>

                      <div class="form-group row">
                        <label for="amenazaSelect" class="col-sm-2 col-form-label">{{ __('text.colAmenazaActivo')}} / {{ __('text.colSalvavulneraAmen')}}</label>
                        <div class="col-sm-10 select-outline">
                            <select class="js-example-basic-single custom-select mr-sm-2" id="amenazaSelect" name="amenazaSelect" style="width: 100%">
                                @foreach ($amenazas as $amenaza)
                                    <option value="{{$amenaza['id']}}">{{$amenaza['activoIdentificador']}} / {{$amenaza['id_amenaza']}} - {{$amenaza['descripcion']}}</option>
                                @endforeach
                            </select>
                        </div>
                      </div>
                      <br/>

                    <hr>
                    <div class="form-group row justify-content-md-center">
                        <div class="col col-lg-2">
                            <button class="btn btn-success form-control" type="submit">
                                {{ __('text.addAsset')}}
                            </button>
                        </div>
                        <div class="col-md-auto">
                        </div>
                        <div class="col col-lg-2">
                            <button type="button" class="btn btn-secondary form-control" data-dismiss="modal">
                                {{ __('text.btnClose')}}
                            </button>
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
            url: "{{url('/json/salvavulnera')}}",
            success : function(data) {
                var tabla = data.data;//.list.item;
                $('#tablaSalvavulneras').DataTable( {
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
                        {"data" : "tipo"},
                        {"data" : "descripcion"},
                        {"data" : "id_amenaza"},
                        {
                            "className": 'details-control',
                            "orderable": false,
                            "data": null,
                            "render": function (data, type, row) {
                                //return '<a class="btn btn-danger" onclick="alert('+ row.offset +')">Deletear</a>'
                                return "<a href=\"{{url('/salvavulnera/delete')}}/"+ row.id +"\"><input type=\"button\" class=\"btn btn-danger\" value=\"{{ __('text.delAsset')}}\" onclick=\"return confirm('{{ __('text.QuestionSuredelete')}}')\"/></a>";
                            }
                        },              
                    ],
                    buttons: [

                        {
                            text: '{{ __('text.nuevaSalvavulnera')}}',
                            className: "btn btn-primary blue",
                            action: function ( e, dt, node, config ) {
                                $('#myModal').modal('toggle');
                            }
                        },
                        {
                            extend: 'excelHtml5',
                            messageTop: '{{ __('text.excelSalvavulneraText')}}'
                        },
                        {
                            extend: 'pdfHtml5',
                            messageTop: '{{ __('text.excelSalvavulneraText')}}'
                        },
                        
                    ],
                });
            }       
        });

    } );

</script>

@endsection
