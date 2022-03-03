@extends('layouts.default')

@section('content')
    <div class="jumbotron"></div>
    <section id="bgcolor-main">
        <div class="container-series containerauto">
            <div id="square-series">CURRENT SERIES</div>
            <div class="container-box">
                {{-- <div class="serie" v-for="article, i in Articles" :key="i">
                    <img :src="article.thumb" :alt="article.series">
                    <h3> {{ article.series }} </h3>
                </div> --}}
                    @foreach ($comics as $article)
                    <div class="serie">
                        <div class="cont-serie">
                            <img src="{{ $article["thumb"] }}" alt="">
                        </div>
                            <h3> {{ $article["series"] }} </h3>
                    </div>
                    @endforeach
            </div>
            <div id="loadmore-buton">
                <a href="#">LOAD MORE</a>
            </div>
        </div>
    </section>

{{--     <section class="digital-comics">
        <div class="stylesection containerauto">
            <div v-for="merch, i in mainMerch" :key="i" class="box-merch">
                <img :src="merch.img" alt="">
                <h3>{{merch.text}}</h3>
            </div>
            <div>
                @foreach ($comics as $item)
                    <img src="{{ $item["thumb"] }}" alt="">
                    <h3>{{ $item["title"] }}</h3>
                @endforeach
            </div>
        </div>
    </section> --}}
@endsection