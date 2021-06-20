@extends("layout.app", ["name_page"=>"Editar pergunta"])
@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h4 class="card-title">Editar Questão</h4>
                </div>
                <form action="{{route("questoes.update", $questao->id)}}" method="post">
                    @csrf
                    @method('put')
                    @include('form', ["questao"=>$questao])
                </form>
            </div>
        </div>
    </div>
@endsection
