@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header">{{ __('text.F1activos')}}</div>

                <div class="card-body">
                {{ __('text.F1text') }}
                <br/><hr> 
                    <table class="table table-striped table-bordered text-center my-table" id="tablaActivos">
                        <thead class="thead-light">
                            <tr>
                                <th class="col-md-2">{{ __('text.colActivosIdent')}}</th>
                                <th class="col-md-8">{{ __('text.colActivosDesc')}}</th>
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
            <li class="page-item">
              <a class="page-link" href="{{ url('home') }}">&laquo; {{ __('text.btnPrevious')}}</a>
            </li>
            <li class="page-item active">
              <span class="page-link">
                1
                <span class="sr-only">(current)</span>
              </span>
            </li>
            {{-- <li class="page-item"><a class="page-link" href="{{ url('activos') }}">1</a></li> --}}
            <li class="page-item"><a class="page-link" href="{{ url('amenazas') }}">2</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('salvavulnera') }}">3</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('calculos') }}">4</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('analisis') }}">5</a></li>
            <li class="page-item"><a class="page-link" href="{{ url('decisiones') }}">6</a></li>
            <li class="page-item">
              <a class="page-link" href="{{ url('amenazas') }}">{{ __('text.btnNext')}} &raquo;</a>
            </li>
          </ul>
        </nav>
        <a href="{{ url('home') }}" class="previous" style="background-color: #f1f1f1; color: black"></a>
        <a href="{{ url('amenazas') }}" class="next" style="background-color: #4CAF50; color: white;"></a>
    </footer>
    <!-- Footer -->

</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content col-md-12">
      <div class="modal-body">
            <p class="">{{ __('text.nuevoActivo') }}</p>
            <hr>
            <form action="{{ url('/activos/store') }}" method="POST">
                {{ csrf_field() }}
                <table class="table table-striped table-bordered" id="tablaActivos">
                        <thead class="thead-light">
                            <tr>
                                <th class="col-md-2">{{ __('text.colActivosIdent')}}</th>
                                <th class="col-md-6">{{ __('text.colActivosDesc')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="col-md-2"><input type="text" id="identificador" name="identificador" /></th>
                                <th class="col-md-8"><input type="text" id="descripcion" name="descripcion" style="width:100%;" /></th>
                            </tr> 
                        </tbody>  
                </table>
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

<script type="text/javascript">
    $(document).ready(function() {
            $.ajax({
                url: "{{url('/json/activos')}}",
                success : function(data) {
                    var tabla = data.data;//.list.item;
                    $('#tablaActivos').DataTable( {
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
                            {"data" : "identificador"},
                            {"data" : "descripcion"},
                            {
                                "className": 'details-control',
                                "orderable": false,
                                "data": null,
                                "render": function (data, type, row) {
                                    //return '<a class="btn btn-danger" onclick="alert('+ row.offset +')">Deletear</a>'
                                    return "<a href=\"{{url('/activos/delete')}}/"+ row.id +"\"><input type=\"button\" class=\"btn btn-danger\" value=\"{{ __('text.delAsset')}}\" onclick=\"return confirm('{{ __('text.QuestionSuredelete')}}')\"/></a>";
                                }
                            },              
                        ],
                        buttons: [
                            {
                                text: '{{ __('text.nuevoActivo')}}',
                                className: "btn btn-primary blue",
                                action: function ( e, dt, node, config ) {
                                    $('#myModal').modal('toggle');
                                }
                            },
                            {
                                extend: 'excelHtml5',
                                messageTop: '{{ __('text.excelActivoText')}}'
                            },
                            {
                                extend: 'pdfHtml5',
                                messageTop: '{{ __('text.excelActivoText')}}'
                            },
                            
                        ],
                    });
                }       
            });
        } );
</script>

@endsection
