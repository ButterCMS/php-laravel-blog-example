@extends('master')

@section('pageTitle', $faqHeadline)

@section('content')
  <h2>{{$faqHeadline}}</h2>

  @foreach ($faqItems as $item)
    <h4>{{$item['question']}}</h4>
    <p>{!! $item['answer'] !!}</p>
  @endforeach
@stop