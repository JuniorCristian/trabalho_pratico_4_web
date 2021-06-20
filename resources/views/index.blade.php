@extends("layout.app", ["name_page"=>"Listagem de perguntas"])
@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h4 class="card-title">Ver Questões</h4>
                    <a class="btn bg-primary text-white fw-bold p-2 add-novo" href="{{route("questoes.create")}}"><i class="fa fa-plus-circle"></i>Nova questão</a>
                </div>
                <div class="p-2">
                    @if(Session::has('error_message'))
                        <div class="alert alert-danger" role="alert">
                            {!! Session::get('error_message') !!}
                        </div>
                    @endif
                    @if(Session::has('success_message'))
                        <div class="alert alert-success" role="alert">
                            {!! Session::get('success_message') !!}
                        </div>
                    @endif
                    @if(Session::has('warning_message'))
                        <div class="alert alert-warning" role="alert">
                            {!! Session::get('warning_message') !!}
                        </div>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="display table table-striped table-hover">
                            <thead>
                            <tr>
                                <td>Pergunta</td>
                                <td>Resposta Correta</td>
                                <td>Respostas Incorretas</td>
                                <td style="width: 68px;">Ações</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($questoes as $questao)
                                <tr>
                                    <td>{{$questao->pergunta}}</td>
                                    <td>{{$questao->resposta_correta}}</td>
                                    <td>{{$questao->resposta_incorreta_1}}, {{$questao->resposta_incorreta_2}}
                                        , {{$questao->resposta_incorreta_3}}</td>
                                    <td>
                                        <div class="botoes-datatable d-flex">
                                            <a class="edit editar-datatable"
                                               href="{{route('questoes.edit', ['questao' => $questao->id])}}">
                                                <i class="fa fa-edit" style="color: #fff"></i></a>
                                            <form method="post" action="{{route('questoes.destroy', ['questao' => $questao->id])}}">
                                                @csrf
                                                @method('delete')
                                                <button class="deleta excluir-datatable" type="submit">
                                                    <i class="fa fa-trash" style="color: #fff"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @push('js')
        <script>
            var dataTables = $('#datatable').DataTable({
                responsive: true,
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese-Brasil.json'
                },
            });
            $(document).ready(function (){
                $('.alert').alert();
            });
        </script>
    @endpush
    @push('css')
        <style>
            .add-novo {
                right: 16px;
                position: absolute;
            }
            .botoes-datatable {
                margin-left: -15px;
            }

            .botoes-datatable a {
                margin-right: 5%;
                padding: 4px 7px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 14px;
            }

            .botoes-datatable button {
                border: none;
                margin-right: 5%;
                padding: 4px 7px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 14px;
            }

            .editar-datatable {
                background-color: #f1c40f;
            }

            .excluir-datatable {
                padding: 5px 9px !important;
                background-color: #e74c3c;
            }
        </style>
    @endpush
@endsection
