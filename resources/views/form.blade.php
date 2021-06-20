<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="pergunta" class="form-label">Pergunta</label>
                            <input type="text" class="form-control" id="pergunta" value="{{$questao->pergunta}}" name="pergunta">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="resposta_correta" class="form-label">Resposta Correta</label>
                            <input type="text" class="form-control" id="resposta_correta" value="{{$questao->resposta_correta}}" name="resposta_correta">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="resposta_incorreta_1" class="form-label">Resposta Incorreta 1</label>
                            <input type="text" class="form-control" id="resposta_incorreta_1" value="{{$questao->resposta_incorreta_1}}" name="resposta_incorreta_1">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="resposta_incorreta_2" class="form-label">Resposta Incorreta 2</label>
                            <input type="text" class="form-control" id="resposta_incorreta_2" value="{{$questao->resposta_incorreta_2}}" name="resposta_incorreta_2">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="resposta_incorreta_3" class="form-label">Resposta Incorreta 3</label>
                            <input type="text" class="form-control" id="resposta_incorreta_3" value="{{$questao->resposta_incorreta_3}}" name="resposta_incorreta_3">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="imagem" class="form-label">Imagem</label>
                            <input type="text" class="form-control" id="imagem" value="{{$questao->imagem}}" name="imagem">
                        </div>
                    </div>
                </div>
                <div class="card-action mt-3">
                    <button type="submit" class="btn btn-success">Salvar</button>
                    <a href="{{route('questoes.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>
    </div>
</div>
