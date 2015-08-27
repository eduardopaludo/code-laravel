@extends('template')

@section('conteudo')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            @foreach($dados as $post)
            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                        {{ $post }}
                    </h2>
                    <h3 class="post-subtitle">
                        {{ $post }}
                    </h3>
                </a>
                <p class="post-meta">Postado por <a href="#">{{ $post }}</a> Hoje</p>
            </div>
            <hr>
            @endforeach;


            <hr>
            <!-- Pager -->
            <ul class="pager">
                <li class="next">
                    <a href="#">Próximos posts &rarr;</a>
                </li>
            </ul>
        </div>
    </div>
@stop