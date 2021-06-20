@extends("layout.app", ["name_page"=>"Adicionar pergunta"])
@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h4 class="card-title">Adicionar Questão</h4>
                </div>
                <form action="{{route("questoes.store")}}" method="post">
                    @csrf
                    @include('form', ["questao"=>new \App\Models\Questao()])
                </form>
            </div>
        </div>
    </div>
@endsection
