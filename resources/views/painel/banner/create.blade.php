@extends('layout.admin')

@section('content')
    <div class="container py-5">
        <div class="btn-return">
            <a href="{{ route('painel.banner.index') }}" type="button" class="btn btn-primary">voltar</a>
        </div>

        <div class="form mt-5">
            <form enctype="multipart/form-data" method="post" action="{{ route('painel.banner.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="img_desktop" class="form-label text-capitalize">banner desktop</label>
                    <input class="form-control" type="file" id="img_desktop" aria-describedby="img_desktop_info" name="img_desktop">
                    <div id="img_desktop_info" class="form-text">Tamanho da imagem: 1920x1080</div>
                </div>
                <div class="mb-3">
                    <label for="img_mobile" class="form-label text-capitalize">banner mobile</label>
                    <input class="form-control" type="file" id="img_mobile" aria-describedby="img_mobile_info" name="img_mobile">
                    <div id="img_mobile_info" class="form-text">Tamanho da imagem: 889x500</div>
                </div>
                <div class="mb-3">
                    <label for="titulo" class="form-label text-capitalize">título</label>
                    <input type="text" class="form-control" id="titulo" aria-describedby="titulo_info" name="titulo">
                    <div id="titulo_info" class="form-text">Máximo de caracteres: 45</div>
                </div>
                <div class="mb-3">
                    <label for="subtitulo" class="form-label text-capitalize">subtítulo</label>
                    <input type="text" class="form-control" id="subtitulo" aria-describedby="subtitulo_info" name="subtitulo">
                    <div id="subtitulo_info" class="form-text">Máximo de caracteres: 50</div>
                </div>
                <div class="mb-5 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="visivel" value="1">
                    <label class="form-check-label" for="exampleCheck1">Banner ativo por padrão</label>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
@endsection
